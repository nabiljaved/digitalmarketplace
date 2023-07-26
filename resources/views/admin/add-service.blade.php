<?php $page = 'add-service'; ?>
@extends('layout.mainlayout_admin') 
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-12 m-auto">

                    @component('admin.components.addservicetabset')
                    @endcomponent

                    <form method="POST" action="{{ url('admin/add-service') }}" id="form" enctype="multipart/form-data">
                    @csrf

                    <fieldset id="first-field">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sub-title">
                                    <h6>Service Information</h6>
                                </div>
                                <div class="form-group">
                                    <label>Service Title</label>
                                    <input type="text" class="form-control" placeholder="Enter Services Name" name="service_title">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price"  name="service_price">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Previous Price</label>
                                    <input type="text" class="form-control" placeholder="Enter Price"  name="service_previous_price">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Service Slug</label>
                                    <input type="text" class="form-control" placeholder="Enter Slug"  name="service_slug">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Is Featured?</label>
                                    <ul class="custom-radiosbtn">
                                        <li>
                                            <label class="radiossets">Yes
                                            <input type="radio" checked="checked" name="service_isFeatured" value="1">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">No
                                            <input type="radio" name="service_isFeatured" value="0">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Is Popular?</label>
                                    <ul class="custom-radiosbtn">
                                        <li>
                                            <label class="radiossets">Yes
                                            <input type="radio" checked="checked" name="service_isPopular" value="1">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="radiossets">No
                                            <input type="radio" name="service_isPopular" value="0">
                                                <span class="checkmark-radio"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service_category">Service Category</label>
                                    <select class="form-control" id="service_category" name="service_category">
                                        <option value="">Select Service Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{  $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="service_status">Service Status</label>
                                    <div class="custom-dropdown">
                                        <select class="form-control" id="service_status" name="service_status">
                                            <option value="pending">pending</option>
                                            <option value="active">active</option>
                                            <option value="not active">not active</option>
                                        </select>
                                    </div>
                                </div>
                            </div>       
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Sub Category</label>
                                    <input type="text" class="form-control" placeholder="Enter Sub Category">
                                </div>
                            </div> -->
                            
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label>Duration <span>Include Tax</span></label>
                                    <div class="form-duration">
                                        <input type="text" class="form-control" placeholder="Enter Duration">
                                        <span class="mins">Mins</span>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-12">
                            <div class="form-group">
                                <label>Services Details</label>
                                <!-- <div id="editor" contenteditable="true"></div> -->
                                <!-- <input type="hidden" id="service_details_input" name="service_details"> -->
                                <textarea class="form-control" id="service_details_input" name="service_details" rows="4"></textarea>
                            </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-sm-6">
                                <div class="sub-title">
                                    <h6>Additional Service</h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="status-toggle float-sm-end mb-3">
                                    <input type="checkbox" id="status_1" class="check" checked="">
                                    <label for="status_1" class="checktoggle">checkbox</label>
                                </div>
                            </div>
                        </div>
                        <div class="addservice-info">
                            <div class="row service-cont">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Item</label>
                                        <input type="text" class="form-control" placeholder="Enter Service Item" name="additional_service_title[]">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Price</label>
                                        <input type="text" class="form-control" placeholder="Enter Services Price" name="additional_service_price[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);" class="link-sets add-extra"><i class="fa fa-plus-circle me-2"
                                aria-hidden="true"></i>Add Additional Service</a> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="field-btns">
                                    <button class="btn btn-primary next_btn" type="button">Next <i
                                            class="fe fe-arrow-right-circle"></i></button>
                                </div>
                            </div>
                        </div>
                    </fieldset>           
                    <fieldset>
                    <div class="sub-title">
                        <h6>Gallery</h6>
                    </div>
                    <div class="form-uploads mb-4">
                        <div class="form-uploads-path">
                            <img src="{{ URL::asset('/admin_assets/img/icons/upload.svg') }}" alt="img">
                            <div class="file-browse">
                                <h6>Drag & drop images or </h6>
                                <div class="file-browse-path">  
                                    <!-- <input type="file" id="imageUpload" name="images[]"   multiple> -->
                                    <input type="file" name="images[]" class="form-control" accept="image/*" id="imageUpload" multiple>
                                    <a href="javascript:void(0);">Browse</a>
                                </div>
                            </div>
                            <h5>Supported formats: JPEG, PNG</h5>
                        </div>
                    </div>
                    <div class="file-preview">
                        <ul id="imagePreview"></ul>
                    </div>
                    <div class="form-group">
                        <label>Embed Video URL</label>
                        <input type="text" class="form-control" placeholder="Ex: https//youtube.com" name="service_url">
                    </div>
                    <!-- <div class="field-btns">
                        <button class="btn btn-primary next_btn" type="button" onclick="submitForm()">Next <i class="fe fe-arrow-right-circle"></i></button>
                    </div> -->
                    <div class="field-btns">
                         <button type="submit" class="btn btn-primary next_btn">Done</button>
                    </div>
            </fieldset>
                   
                    <!-- <fieldset>
                        <div class="sub-title">
                            <h6>Availability</h6>
                        </div>
                        <div class="availability-sec">
                            <div class="row">

                                <div class="col-sm-6">
                                    <h6>All Days</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_2" class="check" checked>
                                        <label for="status_2" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Monday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_3" class="check" checked>
                                        <label for="status_3" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Tuesday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_21" class="check" checked>
                                        <label for="status_21" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Wednesday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_4" class="check" checked>
                                        <label for="status_4" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Thursday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_5" class="check" checked>
                                        <label for="status_5" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Friday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_6" class="check" checked>
                                        <label for="status_6" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Saturday</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_7" class="check" checked>
                                        <label for="status_7" class="checktoggle">checkbox</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="day-info">
                                        <div class="row day-cont">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>From</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>To</label>
                                                    <div class='form-icon'>
                                                        <input type='text' class="form-control timepicker"
                                                            placeholder="Select Time">
                                                        <span class="cus-icon"><i class="feather-clock"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <a href="javascript:void(0);" class="link-sets add-day"><i
                                                class="fa fa-plus-circle me-2" aria-hidden="true"></i>Add Hours</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <h6>Sunday</h6>
                                    <h6 class="mb-sm-0">Today Closed</h6>
                                </div>
                                <div class="col-sm-6">
                                    <div class="status-toggle d-flex justify-content-sm-end align-items-center">
                                        <input type="checkbox" id="status_8" class="check">
                                        <label for="status_8" class="checktoggle">checkbox</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="field-btns">
                         <button type="submit" class="btn btn-primary next_btn">Done</button>
                        </div>
                    </fieldset> -->

                    

                    </form>
                </div>
            </div>
        </div>
    </div>

    <form method="POST" action="{{ url('admin/add-service') }}" id="form" enctype="multipart/form-data">
  <input type="file" id="imageUpload" name="images[]" multiple>
</form>

<div class="file-preview">
  <ul id="imagePreview"></ul>
</div>

<script>
  var selectedImages = []; // Array to store selected image details
  var form = document.getElementById('form');
  var preview = document.getElementById('imagePreview'); // Get the preview container
  var fileInput = document.createElement('input');
  fileInput.type = 'hidden';
  fileInput.name = 'selected_images[]';
  fileInput.multiple = true;
  var dataTransfer = new DataTransfer();


  function handleFileSelect(event) {
    var files = event.target.files; // Get the selected files
   
    // Iterate over the selected files
    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var reader = new FileReader();

      reader.onload = (function(file) {
        return function(e) {
          var listItem = document.createElement('li');
          var checkbox = document.createElement('label');
          checkbox.classList.add('custom_check');
          checkbox.innerHTML = '<input type="checkbox" name="rememberme" class="rememberme" checked>' +
            '<span class="checkmark"></span>';
          var image = document.createElement('img');
          image.src = e.target.result;

          listItem.appendChild(checkbox);
          listItem.appendChild(image);
          preview.appendChild(listItem);

          selectedImages.push(file);

          selectedImages.forEach(function(file) {
          dataTransfer.items.add(file);
        });

        var updatedFileList = dataTransfer.files;


        // fileInput.files = dataTransfer.files;

        Object.defineProperty(fileInput, 'files', {
        value: updatedFileList,
        writable: false
        });

          checkbox.addEventListener('change', function(event) {
            if (!event.target.checked) {
              // Remove the image from selectedImages array
              selectedImages = selectedImages.filter(function(image) {
                return image.name !== file.name;
              });
              console.log(selectedImages);
              fileInput.value = JSON.stringify(selectedImages);
            } else {
              // Add the image back to selectedImages array
              selectedImages.push(file);
              console.log(selectedImages);
              fileInput.value = JSON.stringify(selectedImages);
            }
          });
        };
      })(file);

      reader.readAsDataURL(file);
    }

    // Append the file input to the form
    form.appendChild(fileInput);
  }

  // Listen for the file input change event
  document.getElementById('imageUpload').addEventListener('change', handleFileSelect, false);
</script>
 
  

    


@endsection
