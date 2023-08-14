<!-- Filter -->
<div class="col-lg-3 col-sm-12 theiaStickySidebar">
    <div class="filter-div">
        <div class="filter-head">
            <h5>Filter by</h5>
            <a href="javascript:;" class="reset-link">Reset Filters</a>
        </div>
        <div class="filter-content">
            <h2>Keyword</h2>
            <input type="text" class="form-control" placeholder="What are you looking for?">
        </div>
        <div class="filter-content">
            <h2>Categories <span><i class="feather-chevron-down"></i></span></h2>
            <div class="filter-checkbox" id="fill-more">
                <ul>
                @foreach ($categories as $category)
                    <li>
                        <label class="checkboxs">
                            <input type="checkbox">
                            <span><i></i></span>
                            <b class="check-content">{{$category->category_name}}</b>
                        </label>
                    </li>
              @endforeach

                </ul>
            </div>
            <a href="javascript:void(0);" id="more" class="more-view">View More <i class="feather-arrow-down-circle ms-1"></i></a>
        </div>
        <div class="filter-content">
            <h2>Category</h2>
            <select class="form-control select">
            @foreach ($categories as $category)
                <option>{{$category->category_name}}</option>
            @endforeach
            </select>
        </div>
        <!-- <div class="filter-content">
            <h2>Location</h2>
            <div class="group-img">
                <input type="text" class="form-control" placeholder="Select Location">
                <i class="feather-map-pin"></i>
            </div>
        </div> -->
        <div class="filter-content">
            <h2 class="mb-4">Price Range</h2>
            <div class="filter-range">
                <input type="text" id="range_03">
            </div>
            <div class="filter-range-amount">
                <h5>Price: <span>AED 100 - AED 2000</span></h5>
            </div>
        </div>
        <div class="filter-content">
            <h2>By Rating <span><i class="feather-chevron-down"></i></span></h2>
            <ul class="rating-set">
                <li>
                    <label class="checkboxs d-inline-flex">
                        <input type="checkbox">
                        <span><i></i></span>												
                    </label>
                    <a class="rating" href="javascript:;">	
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star"></i>
                        <span class="d-inline-block average-rating float-end">(35)</span>
                    </a>
                </li>
                <li>
                    <label class="checkboxs d-inline-flex">
                        <input type="checkbox">
                        <span><i></i></span>												
                    </label>
                    <a class="rating" href="javascript:;">	
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star"></i>		
                        <span class="d-inline-block average-rating float-end">(40)</span>
                    </a>
                </li>
                <li>
                    <label class="checkboxs d-inline-flex">
                        <input type="checkbox">
                        <span><i></i></span>												
                    </label>
                    <a class="rating" href="javascript:;">	
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star"></i>		
                        <i class="fa-regular fa-star"></i>		
                        <span class="d-inline-block average-rating float-end">(40)</span>
                    </a>
                </li>
                <li>
                    <label class="checkboxs d-inline-flex">
                        <input type="checkbox">
                        <span><i></i></span>												
                    </label>
                    <a class="rating" href="javascript:;">		
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star"></i>		
                        <i class="fa-regular fa-star"></i>		
                        <i class="fa-regular fa-star"></i>		
                        <span class="d-inline-block average-rating float-end">(20)</span>
                    </a>
                </li>
                <li>
                    <label class="checkboxs d-inline-flex">
                        <input type="checkbox">
                        <span><i></i></span>												
                    </label>
                    <a class="rating" href="javascript:;">	
                        <i class="fa-regular fa-star filled"></i>
                        <i class="fa-regular fa-star"></i>		
                        <i class="fa-regular fa-star"></i>		
                        <i class="fa-regular fa-star"></i>		
                        <i class="fa-regular fa-star"></i>		
                        <span class="d-inline-block average-rating float-end">(5)</span>
                    </a>
                </li>
            </ul>
        </div>
        <button class="btn btn-primary">Search</button>
    </div>
</div>
<!-- /Filter -->