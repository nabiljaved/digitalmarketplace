<!-- jQuery -->
<script src="{{ URL::asset('/admin_assets/js/jquery-3.6.0.min.js') }}"></script>

<!-- Select 2 JS-->
<script src="{{ URL::asset('/admin_assets/js/select2.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ URL::asset('/admin_assets/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('/admin_assets/plugins/apexchart/chart-data.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('/admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Bootstrap Tagsinput JS -->
<script src="{{ URL::asset('/admin_assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ URL::asset('/admin_assets/js/feather.min.js') }}"></script>

@if (Route::is(['security']))
    <!-- Mobile Input -->
    <script src="{{ URL::asset('/admin_assets/plugins/intltelinput/js/intlTelInput.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/plugins/intltelinput/js/utils.js') }}"></script>
@endif

<!-- Datatable JS -->
<script src="{{ URL::asset('/admin_assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('/admin_assets/js/dataTables.bootstrap4.min.js') }}"></script>

<!-- Ck Editor JS -->
<script src="{{ URL::asset('admin_assets/js/ckeditor.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ URL::asset('/admin_assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

<!-- Map JS -->
<script src="{{ URL::asset('/admin_assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
@if (Route::is(['index_admin']))
    <script src="{{ URL::asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-ru-mill.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-uk_countries-mill.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/plugins/jvectormap/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ URL::asset('/admin_assets/js/jvectormap.js') }}"></script>
@endif

<!-- Sweetalert 2 -->
<script src="{{ URL::asset('/admin_assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
<script src="{{ URL::asset('/admin_assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

<!-- Datetimepicker JS -->
<script src="{{URL::asset('/admin_assets/js/moment.min.js')}}"></script>
<script src="{{URL::asset('/admin_assets/js/bootstrap-datetimepicker.min.js')}}"></script>


@if (Route::is(['view-service']))
    <!-- Owl Carousel JS -->
    <script src="{{ URL::asset('/admin_assets/js/owl.carousel.min.js') }}"></script>
@endif

@if (Route::is(['view-service']))
<!-- Fancybox JS -->
<script src="{{ URL::asset('assets/plugins/fancybox/jquery.fancybox.min.js') }}"></script>
@endif
<!-- Validation-->
<script src="{{ URL::asset('/admin_assets/js/validation.js') }}"></script>


<!-- Custom JS -->
<script src="{{ URL::asset('/admin_assets/js/admin.js') }}"></script>
