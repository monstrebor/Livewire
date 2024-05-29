
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/final_logo-removebg-preview-removebg-preview.png">
    <title>Mahal na Señor Multipurpose Cooperative</title>
    <link rel="stylesheet" href="input.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style type="text/tailwindcss">
    </style>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
        @include("Partials.navbar")

        <!-- picture-membership -->
        <div class="flex bg-yellow-300 mb-10">
            <div class="relative w-11/12  h-80 sm:h-96 mx-auto">
                <img src="img/coop1.jpg" alt="Description of the image" class="w-full h-full object-cover">
                <div class="absolute inset-0 flex items-center justify-center">
                    <span class="text-white bg-lime-500 bg-opacity-70 p-2 rounded">Mahal na Señor Multipurpose Cooperative <p class="indent-2">Membership Application. Sign-up today</p></span>
                </div>
            </div>
        </div>
        <!-- end of picture membership -->

        <!-- membership-button -->
        <div class="flex justify-center m-5 mb-10 gap-3">
            <button class="cbutton">Regular</button>
            <button class="cbutton">Associate</button>
        </div>
        <!-- end of membership button -->

        <!-- membership form -->
        <div>
            <div style="display: flex; justify-content: right; flex-wrap: nowrap;">
                <div style="margin-top: 2%; margin-right: 3%;">
                </div>
            </div>
            <div style="text-align: center; border: 2px solid black; margin-left: 20%; margin-right: 20%;">
                <div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
                <form method="get" action="{{route('store')}}">
                @csrf
                @method('get')
                <div style="text-align: center">
                    <h1>Registration for Associate Member</h1>
                    <div style="margin: 10px">
                        <label for="username">name</label>
                        <input type="text" name="name" placeholder="username">
                    </div>
                    <div style="margin: 10px">
                        <label for="password">password</label>
                        <input type="password" name="password" placeholder="password">
                    </div>
                    <div style="margin: 10px">
                        <label for="email">email</label>
                        <input type="email" name="email" placeholder="email">
                    </div>
                    <div>
                        <input type="submit" value="Submit" style="margin:10px">
                    </div>
                </div>
            </div>
        </div>
        <!-- end of membership form -->

        @include("Partials.footer")

    <script src="script.js">
    </script>

</body>

</html>
