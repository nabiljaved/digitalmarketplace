<div class="content-page-header content-page-headersplit">
    <h5>{{ $titleset }}</h5>

    <div class="page-head-btn">
        @if (Route::is(['tax-rates']))
            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-tax"><i
                    class="fa fa-plus me-2"></i>Add Tax</a>
        @endif
        @if (Route::is(['language']))
            <a class="btn btn-primary me-2"><i class="fe fe-download-cloud me-2"></i>Web Export</a>
            <a class="btn btn-primaryline"><i class="fe fe-download-cloud me-2"></i>App Export</a>
        @endif
        @if (Route::is(['payment-settings']))
            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-acc"><i
                    class="fa fa-plus me-2"></i>Add Account</a>
        @endif
        @if (Route::is(['currencies']))
            <a class="btn btn-linegrey" href="{{ url('admin/currency-settings') }}"><i class="fe fe-settings"></i></a>
            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal"
                data-bs-target="#add-currency"><i class="fa fa-plus me-2"></i>Add Currency</a>
        @endif
        @if (Route::is(['ban-ip-address']))
            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-tax"><i
                    class="fa fa-plus me-2"></i>Ban IP Address</a>
        @endif
        @if (Route::is(['system-backup']))
            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-tax"><i
                    class="fa fa-plus me-2"></i>Generate System Backup</a>
        @endif
        @if (Route::is(['database-backup']))
            <a class="btn btn-primary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#add-tax"><i
                    class="fa fa-plus me-2"></i>Generate Database Backup</a>
        @endif
    </div>
    @if (Route::is(['gdpr-settings', 'provider-settings']))
        <div class="active-switch d-flex align-items-center">
            <h6 class="fs-14">Enable</h6>
            <label class="switch">
                <input type="checkbox" checked="">
                <span class="sliders round"></span>
            </label>
        </div>
    @endif
</div>
