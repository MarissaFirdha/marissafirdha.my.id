<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body class="antialiased">
    <div class="flex  h-screen items-center justify-center bg-pink-200 space-x-4">
        <div class="flex flex-col items-center space-y-4 bg-pink-500 px-6 shadow-lg">
            <h1 class="text-4xl font-bold text-gray-100">Marissa</h1>
            <p class="text-lg text-gray-100">Istri jungkook (ngaku ngaku)</p>
        </div>
        <div
            class="relative aspect-[9/10] w-44 flex-none overflow-hidden rounded-xl bg-zinc-100 sm:w-72 sm:rounded-2xl rotate-2">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('marisa.jpg') }}" alt="">
        </div>
    </div>
</body>

</html>
