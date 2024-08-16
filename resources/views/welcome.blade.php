<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Jake1.net</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-col min-h-screen">
        <header class="bg-indigo-700 text-white w-full">
        <div class="container mx-auto flex h-16 items-center">    
        <div class="w-1/4">
            Jake1.net
        </div>
            <div class="w-2/4 text-center flex">
                <input class="p-2 text-black bg-indigo-200 w-full" />
                <button class="px-4 py-2 bg-emerald-700 text-white font-medium">Search</button>
            </div>
            <div class="w-1/4 text-end">
                <a href="" class="bg-indigo-900 px-4 py-3 text-white rounded mr-1">About</a>
            </div>
</div>
        </header>

        <main class="flex-1 container mx-auto p-4">
            <h1 class="text-5xl my-16 text-center">Delivering awesome web experiences.</h1>

            <h2 class="my-4 text-3xl">Welcome to Jake Jenkins' Web Development Portfolio</h2>
            <p>
            Jake Jenkins is a Lead Front end Developer with a range of skills and expertise to help businesses transform their online presence to help become market leaders. Jake has proven experience of delivering excellent user experience and meeting complex business challenges to deliver cutting edge services.</p>
</main>

<footer class="h-24 bg-zinc-100">
</div>
</footer>
    </body>
</html>
