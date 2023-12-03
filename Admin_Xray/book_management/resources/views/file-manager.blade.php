<!DOCTYPE html>
<html lang="en">
<head>
    <title>File manager</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

</head>
<body>
    <h2>Thêm bài viết</h2>
    <div id="fm" style="height: 600px; width: 100%"></div>
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
</body>
</html>
