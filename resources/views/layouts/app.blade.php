<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Formation</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="text-amber-500 font-bold underline">
        Hello friends!
      </h1>
@include('partials.navbar') 

<div class="container mx-auto">
    @yield('content')
</div>


</body>
</html>