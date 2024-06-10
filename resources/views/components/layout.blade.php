<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>ElevenB</title>
</head>
<body>
    <x-navbar></x-navbar>
    <main>
        {{ $slot }}
    </main>
    {{-- <x-footer></x-footer> --}}
</body>
</html>