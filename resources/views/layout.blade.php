<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Workopia | Find and list jobs' }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

</head>

<body class="bg-gray-100">
    <x-header />
    <main class="container mx-auto p-4 mt-4 bg-blue-400 ">
        {{ $slot }}
    </main>
</body>

</html>
