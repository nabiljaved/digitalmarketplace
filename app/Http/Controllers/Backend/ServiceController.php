<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;



class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return response()->json($services);
    }

    public function save(Request $request)
    {
        $requestData = $request->all();
        return response()->json(['data'=>$requestData]);


        $selectedImages = stripslashes($request->input('selected_images'));
        $selectedImages = json_decode($selectedImages);


        // $additionalServiceTitles = $request->input('additional_service_title');

       return response()->json(['data'=>$requestData, 'images'=>$selectedImages]);
    }

    public function store(Request $request)
    {

        // $requestData = $request->all();
        // return response()->json(['data'=>$requestData]);

        $validator = Validator::make($request->all(), [
            'service_title' => 'required|string',
            'service_category' => 'required|string',
            'service_price' => 'required|numeric',
            'service_previous_price' => 'required|numeric',
            'service_details' => 'required|string',
            'service_url' => 'required|string',
            'selected_images' => 'required|array',
            'service_status' => 'required|in:pending,not active,active',
            'service_slug'  => 'required|string',
            'service_isFeatured'  => 'required|boolean',
            'service_isPopular'  => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

    
        $selectedImages = [];
        if ($request->file('images')){
            foreach($request->file('images') as $key => $file)
            {
                $fileName = time().rand(1,99).'.'.$file->extension();  
                $file->move(public_path('uploads/services'), $fileName);
                $selectedImages[] = $fileName;
            }
        }

        
        try {

                $isFeatured = (bool) $request->input('service_isFeatured');
                $isPopular = (bool) $request->input('service_isPopular');


            $service = Service::create([
                'service_title' => $request->service_title,
                'service_category' => floatval($request->input('service_category')),
                'service_price' => floatval($request->input('service_price')),
                'service_detail' =>$request->service_details,
                'service_url' => $request->input('service_url'),
                'selected_images' => json_encode($selectedImages), 
                'service_status' => $request->input('service_status'),
                'service_slug' => $request->service_slug,
                'service_isFeatured' => (bool) $request->input('service_isFeatured'),
                'service_isPopular' => (bool) $request->input('service_isPopular'),
                'service_previous_price'  => $request->input('service_previous_price')
          ]);

          return redirect()->route('services')->with('success','services added successfully');

        } catch (\Exception $e) {
            return response()->json(['error' => $e ]);
        }

    }

  

    public function destroy($slug)

    {    

        try {
            
        $service = Service::where('service_slug', $slug)->firstOrFail();
        $selectedImages = json_decode($service->selected_images);
        $strippedImages = array_map('strip_tags', $selectedImages);

        // return response()->json(['slug' => $strippedImages]);
        $folderPath = public_path('uploads/services/');

        $deletedImagesCount = 0;
        $imageNotExist= false;

        foreach ($strippedImages as $imageFilename) {
            $imagePath = $folderPath . $imageFilename;
            if (File::exists($imagePath)) {
                if (File::delete($imagePath)) {
                    $deletedImagesCount++;
                }
            }else{
                $imageNotExist= true;
            }
        }

        // Check if any images were deleted
        if ($deletedImagesCount > 0) {
       
            $service->delete();

            return redirect()->route('services') ->with('success','service deleted successfully');
            return true;
          
        } else {
            // Handle the case when no images were deleted (e.g., return false, display an error message, etc.)
            if($imageNotExist){
                $service->delete();

                return redirect()->route('services') ->with('success','service deleted successfully');
                return true;
              }
            return false;
        }


        } catch (\Exception $e) {
            return response()->json(['error' => $e]);
        }
    }


    public function edit($slug){

        $service = Service::where('service_slug', $slug)->firstOrFail();
        $selectedImages = json_decode($service->selected_images);
        $strippedImages = array_map('strip_tags', $selectedImages);
        $categories = Category::all();

        // return response()->json($strippedImages);
    
        // Pass the service data to the view
        return view('admin.edit-service', compact('service', 'strippedImages', 'categories'));
    }

    public function update(Request $request)

    {

        $validator = Validator::make($request->all(), [
            'service_title' => 'required|string',
            'service_category' => 'required|string',
            'service_price' => 'required|numeric',
            'service_previous_price' => 'required|numeric',
            'service_details' => 'required|string',
            'service_url' => 'required|string',
            'service_status' => 'required|in:pending,not active,active',
            'service_slug'  => 'required|string',
            'service_isFeatured'  => 'required|boolean',
            'service_isPopular'  => 'required|boolean', 
        ]);

          if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }



        $folderPath = public_path('uploads/services');
        $strippedImages = $request->input('stripped_images');
        // return response()->json($strippedImages);

    
        try {
            $selectedImages = [];
            if ($request->file('images')) {
                $deletedImagesCount = 0;
                foreach ($strippedImages as $imageFilename) {
                    $imagePath = $folderPath . DIRECTORY_SEPARATOR . $imageFilename;
                    if (File::exists($imagePath)) {
                        if (File::delete($imagePath)) {
                            $deletedImagesCount++;
                        }
                    }
                }
    
                // Check if any images were deleted
                if ($deletedImagesCount > 0) {
                    foreach ($request->file('images') as $key => $file) {
                        $fileName = time() . rand(1, 99) . '.' . $file->extension();
                        $file->move(public_path('uploads/services'), $fileName);
                        $selectedImages[] = $fileName;
                    }
                } else {
                    foreach ($request->file('images') as $key => $file) {
                        $fileName = time() . rand(1, 99) . '.' . $file->extension();
                        $file->move(public_path('uploads/services'), $fileName);
                        $selectedImages[] = $fileName;
                    }
                }
            } else {
                // No new images uploaded, use the existing images
                $selectedImages = $strippedImages;
            }
    
            // Fetch the existing service by service_slug
            $service = Service::where('service_slug', $request->service_slug)->firstOrFail();
    
            // Update the service attributes
            $service->update([
                'service_title' => $request->service_title,
                'service_category' => $request->input('service_category'),
                'service_price' => $request->input('service_price'),
                'service_detail' => $request->service_details,
                'service_url' => $request->input('service_url'),
                'selected_images' => json_encode($selectedImages),
                'service_status' => $request->input('service_status'),
                'service_isFeatured' => (bool) $request->input('service_isFeatured'),
                'service_isPopular' => (bool) $request->input('service_isPopular'),
                'service_previous_price'  => $request->input('service_previous_price')
            ]);
    
            return redirect()->route('services')->with('success', 'Service updated successfully');
        } catch (\Exception $e) {
            return response()->json(['error' => $e]);
        }
    }

    public function serviceDetail($slug){



     // Step 1: Retrieve the current service from the database using the slug
     $service = Service::where('service_slug', $slug)->first();

     //passing categories 
     $categories = Category::all();

     // Step 2: Retrieve all other services except the current one
     $otherServices = Service::where('service_slug', '!=', $slug)->get();
    //  return response()->json(['others' =>$otherServices]);

 
     // Step 3: Convert the JSON string to an array for the selected images
     $selectedImagesArray = json_decode($service->selected_images);
     $selectedImagesArrayAfterFirst = array_slice($selectedImagesArray, 1);
 
     // Step 4: Pass the service data and other services to the view
     return view('service-details', compact('service', 'selectedImagesArray', 'selectedImagesArrayAfterFirst', 'otherServices','categories'));

    }

    public function serviceByCategory($slug){
        $category = DB::table('categories')->where('category_slug', $slug)->first();

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }
    
        $services = DB::table('services')
            ->where('service_category', $category->id)
            ->get();
    
        return view('categories', ['services'=>$services]);
    }
    
}
