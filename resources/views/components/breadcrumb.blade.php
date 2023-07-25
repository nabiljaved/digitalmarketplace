<!-- Breadcrumb -->
@if(!Route::is(['invoice']))
<div class="breadcrumb-bar">
    <div class="container">
        <div class="row">
            @if(!Route::is(['providers','provider-details']))
            <div class="col-md-12 col-12">
                <h2 class="breadcrumb-title">{{ $title }}</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">{{ $li_1 }}</a></li>
                        @if(Route::is(['blog-grid','blog-list','blog-details']))
                        <li class="breadcrumb-item" aria-current="page">{{ $li_3 }}</li>
                        @endif
                        <li class="breadcrumb-item active" aria-current="page">{{ $li_2 }}</li>
                    </ol>
                </nav>
            </div>
            @endif
            @if(Route::is(['providers','provider-details']))
            <div class="col-md-12">
                <h2 class="breadcrumb-title mb-0">{{ $title }}</h2>
            </div>
            @endif
        </div>
    </div>
</div>
@endif
@if(Route::is(['invoice']))
<div class="page-topbar">
    <div class="row align-items-center">
        <div class="col-md-12">
            <div class="back-link">
                <a href="{{url('/')}}"><i class="fa-solid fa-arrow-left-long me-1"></i> Back</a>
            </div>
            <div class="breadcrumb invoice-breadcrumb">
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="breadcrumb-item" aria-current="page">Orders</li>
                        <li class="breadcrumb-item" aria-current="page">ID 2378910</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
@endif
<!-- /Breadcrumb -->