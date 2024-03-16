<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Fichiers CSS et js de vite  --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Polices d'écriture du site --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mandali&display=swap" rel="stylesheet">

    {{-- le titre du site est dynamque --}}
    <title>@yield( "title") | DASHBOARD</title>
</head>
<body>
    @yield("content")
</body>
</html>
