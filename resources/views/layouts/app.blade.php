<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- upperlink -->
@include('layouts.partials.upperlink')
<body>
<!-- preloader -->
@include('layouts.preloader')
<div id="pcoded" class="pcoded">
<div class="pcoded-overlay-box"></div>
<div class="pcoded-container navbar-wrapper">
<!-- navbar -->
@include('layouts.navbar')
<!-- sidebar -->
@include('layouts.sidebarchat')
<!-- sidebar inner chat -->
@include('layouts.sidebarinnerchat')

<!-- content -->
<div class="pcoded-main-container">
<div class="pcoded-wrapper">
@include('layouts.mainsidebar')


<div class="pcoded-content">
<div class="pcoded-inner-content">


<div class="main-body">
<div class="page-wrapper">


<div class="page-body">
<div class="row">
    

@yield('content')

<!-- social download  end -->


</div>
</div>
</div>

<div id="styleSelector">

</div>
</div>
</div>
</div>
{{-- end content --}}
{{-- end main wrapper --}}
</div>
</div>
{{-- end div --}}
</div>
</div>

@include('layouts.partials/lowerlink')

</body>
</html>

