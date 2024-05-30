<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Form Submitted</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>

@include('Partials.navbar')

<body class="bg-gray-400">
  <div class="flex justify-center items-center h-screen">
    <div class="bg-green-300 p-10 rounded-lg shadow-lg">
      <h1 class="text-center text-4xl font-bold" data-uid="1d2">Form Submitted</h1>
      <p class="text-center text-gray-500 mt-4" style="font-family: Arial;">Thank you for submitting your form. You will receive a copy of your response via email.</p>
      <div class="flex justify-center mt-8">
        <button class="btn btn-black">Go Back</button>
      </div>
    </div>
  </div>
    </body>
    @include('Partials.footer')

</html>
