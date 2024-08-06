<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Ysabeau+SC&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white font-be ">
<x-nav></x-nav>

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{ $slot }}
    </div>
</main>
<footer class="text-center py-20">
    <p>Copyright &copy; 2024 $tudio</p>
    <a href="/contact" class="text-blue-500 hover:text-blue-700 pr-2">Contact Us</a>
    <a href="/social-media" class="text-blue-500 hover:text-blue-700">Social Media</a>
</footer>
</body>
</html>
