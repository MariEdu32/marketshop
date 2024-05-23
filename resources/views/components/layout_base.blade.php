<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>{{$titulo ?? 'MarketShop'}}</title>
</head>
<body data-theme="light" class="min-h-screen bg-gradient-to-r from-blue-400 to-green-400 to-yellow-300">
    {{$slot}}
</body>
</html>