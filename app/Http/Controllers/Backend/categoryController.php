<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class categoryController extends Controller
{


    public function create(Request $request)
    {

       
    //     $requestData = $request->all();
    
    // // Display all request parameters
    // foreach ($requestData as $key => $value) {
    //     echo $key . ': ' . $value . '<br>';
    // }
    
 
    // $requestData = $request->all();
    // return response()->json($requestData);

    // die();

    $validator = Validator::make($request->all(), [
        'category_name' => 'required|string',
        'category_slug' => 'required|string|unique:categories',
        'category_image' => 'required|image|mimes:jpeg,png|max:2048',
        'category_isFeatured' => 'nullable|boolean',
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 400);
    }
        $isFeatured = (bool) $request->input('category_isFeatured', false);


        try {
        
            if ($request->hasFile('category_image')) {
                $image = $request->file('category_image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/uploads/categories');
                $image->move($destinationPath, $name);
            }

            $category = Category::create([
                'category_name' => $request->category_name,
                'category_slug' => $request->category_slug,
                'category_image' => $name,
                'category_isFeatured' => $isFeatured,
            ]);

            
        return redirect()->route('categories')
        ->with('success','category added successfully');

        } catch (QueryException $e) {
            Log::error('Error while adding category: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to add category. Please try again.']);
        }

    }


    public function delete(Request $request)
    {
        $categorySlug = $request->input('category_slug');

        $category = Category::where('category_slug', $categorySlug)->firstOrFail();

        // Delete the associated image file if it exists
        if (!empty($category->category_image)) {
            $imagePath = public_path('uploads/categories/' . $category->category_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the category
        $category->delete();

        return redirect()->route('categories')
        ->with('success','category added successfully');
        
    }

public function update(Request $request)
{
    $validator = Validator::make($request->all(), [
        'category_name' => 'required|string',
        'category_slug' => [
            'required',
            'string',
            Rule::unique('categories')->ignore($request->category_slug, 'category_slug'),
        ],
        'category_image' => 'nullable|image|mimes:jpeg,png|max:2048',
        'category_isFeatured' => 'nullable|boolean',
    ]);
    
    if ($validator->fails()) {
        $errors = $validator->errors();
        if ($errors->has('category_slug')) {
            return response()->json(['error' => 'The slug must be unique. Please choose a different slug.'], 400);
        }
        return response()->json(['errors' => $errors], 400);
    }
    
    try {
        $category = Category::where('category_slug', $request->category_slug)->firstOrFail();
    
        $category->category_name = $request->category_name;
        $category->category_slug = $request->category_slug;
        $category->category_isFeatured = (bool) $request->input('category_isFeatured', false);
    
        if ($request->hasFile('category_image')) {
            // Delete the existing image file if it exists
            if (!empty($category->category_image)) {
                $imagePath = public_path('uploads/categories/' . $category->category_image);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            // Upload and save the new image
            $image = $request->file('category_image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/categories');
            $image->move($destinationPath, $name);
            $category->category_image = $name;
        }
    
        $category->save();
    
        return redirect()->route('categories')->with('success', 'Category updated successfully');
    } catch (ModelNotFoundException $e) {
        return response()->json(['error' => 'Category not found.'], 404);
    } catch (QueryException $e) {
        Log::error('Error while updating category: ' . $e->getMessage());
        return response()->json(['error' => 'Failed to update category. Please try again.']);
    }
    
}




}
