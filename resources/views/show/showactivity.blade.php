<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <title>Document</title>
</head>
<body>
    {{$activity->title}}
    {{$activity->date}}
    @foreach (json_decode($pictures->name, true) as $image)
        <img src="{{ url('../uploads/' . $image) }}" alt="">
    @endforeach
</body>
</html>