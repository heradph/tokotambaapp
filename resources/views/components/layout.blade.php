<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <link rel="icon" href="{{ asset('TokoTamba.svg') }}" type="image/svg+xml">
</head>

<body>
    <x-sidebar></x-sidebar>

    <div class="antialiased bg-white">
        <main class="p-8 md:ml-64 h-auto pt-20">
            <section>
                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-2">
                    {{ $slot }}
                </div>
                </secton>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
