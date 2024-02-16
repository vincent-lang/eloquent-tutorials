<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>This has the relationship of HasMany</h1>
    @foreach($data as $info)
    <p>Name: {{$info->user->name}}</p>
    <p>Date: {{$info->date}}</p>
    <p>Time: {{$info->time}}</p>
    <p>Table: {{$info->table}}</p>
    <br>
    @endforeach
</body>

</html>