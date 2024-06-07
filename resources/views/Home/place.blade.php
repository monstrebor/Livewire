<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/js/test.js"></script>
    <title>Document</title>
</head>
<body>

    <form action="">
        <h1>Select Region:</h1>

        <select name="region" id="region-dropdown">
            @foreach($addresses as $address)
                <option value="{{ $address['name'] }}" data-code="RegionCode">{{ $address['name'] }}</option>
            @endforeach
        </select>

        <h1>Select Province:</h1>
        <select name="province" id="province-dropdown">

        </select>


        <h1>Select Muncipalities:</h1>
        <select name="Municipality" id="municipality-dropdown">

        </select>

        
        <h1>Select Baranggay:</h1>
        <select name="Baranggay" id="Barangay-dropdown">

        </select>


    </form>

   
</body>
</html>
