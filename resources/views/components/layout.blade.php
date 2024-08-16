<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pixel Positions</title>
        <link href="css/style.css" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-[#060606] text-white">
        <div class="px-10 py-4 ">
            <nav class="flex flex-row gap-2 justify-between items-center border-b border-white/20 py-4">
                <div>
                    <a href="/">
                        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="">
                    </a>
                </div>
                <div class="space-x-6 font-bold">
                    <x-nav-link href="/">Jobs</x-nav-link>
                    <x-nav-link href="/">Career</x-nav-link>
                    <x-nav-link href="/">Salaries</x-nav-link>
                    <x-nav-link href="/">Companies</x-nav-link>
                </div>
                <div>
                    <x-nav-link href="/">Post a Job</x-nav-link>
                </div>
            </nav>

            <main class="max-w-[986px]">
                {{$slot}}
            </main>
        </div>
    </body>
</html>
