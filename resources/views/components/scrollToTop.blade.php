<!-- scrollToTop start -->
@if(!Route::is(['index-3']))
<div class="progress-wrap active-progress">
@endif
@if(Route::is(['index-3']))
<div class="progress-wrap active-progress progress-wrap-three">
@endif
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
</div>
<!-- scrollToTop end -->