<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>





    @foreach ($id as $identification)
    <img src="{{ asset('storage/images/' . $identification->Identification_image) }}" width="100" height="100">
    @endforeach







</body>

</html>
