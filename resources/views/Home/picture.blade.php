<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


        <form action="{{route('image')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <input type="file" name="image" id="id">
            <input type="submit" name="submit" value="upload">
        </form>



</body>
</html>
