<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/js/app.js'])
</head>
<body>
    <h2 style="color: red">{{$post->name}}</h2>
    <div style="margin-top: 20px">
        {!! $post->content !!}
    </div>
</body>
</html>
