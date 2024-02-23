<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Application</title>
    @vite('resources/css/app.css')
    <style>
        .centered {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="centered">
        <div id="app"></div>
        
        @vite('resources/js/app.js')
    </div>
</body>
</html>
