<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="utf-8"/>
    <meta name="author" content="Themezhub"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','وب سایت آموزشی')</title>

    <!-- Custom CSS -->

    @include('admin.layouts.style')

    @yield('css')
</head>

<body dir="rtl">

<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
@include('admin.layouts.header')

@yield('content')

<!-- ============================ Our Instructor End ================================== -->




    @include('admin.layouts.footer')


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
@include('admin.layouts.script')
@yield('js')
</body>

</html>
