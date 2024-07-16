<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="flex container justify-between mt-5">
            <h1 class="text-4xl font-medium">Filmlist</h1>
            <button class="btn btn-primary px-20 ">Log in</button>
        </nav>
        <div class="container flex pt-6 ease-in-out">
            <label class="input input-lg input-bordered flex items-center w-[500px]">
            <input type="text" class="flex-1 border-none outline-none p-2 text-base" placeholder="Search" />
            </label>
        </div>
    </body>
</html>
