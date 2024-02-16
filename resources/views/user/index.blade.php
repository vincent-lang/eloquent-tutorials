<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This has the relationship of HasOne</h1>
    @foreach($data as $info)
    <p>Name: {{$info->name}}</p>
    <p>Email: {{$info->email}}</p>
    <p>Points: {{$info->experience->points}}</p>
    @endforeach
</body>

</html>