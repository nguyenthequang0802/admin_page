<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
    @include("partial.head")
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/3x75cpz6idiupug405bkyqg360eoi2ls7jjr5fwkk8zpkxhv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body class="sidebar-main-menu" style="margin: 0">
<!-- loader Start -->
<div id="loading">
    <div id="loading-center">

    </div>
</div>
<!-- loader END -->
<!-- Wrapper Start -->
<div class="wrapper">
    <!-- Sidebar  -->
    @include("partial.sidebar")

    <!-- Page Content  -->
    <div id="content-page" class="content-page">
        <!-- TOP Nav Bar -->
        @include("partial.topNav")
        <!-- TOP Nav Bar END -->
        <div class="container-fluid">
            <div class="row">
                @yield("content")
            </div>
        </div>
        <!-- Footer -->
        @include("partial.footer")
        <!-- Footer END -->
    </div>
</div>
@include("partial.bodyJs")
</body>
</html>
