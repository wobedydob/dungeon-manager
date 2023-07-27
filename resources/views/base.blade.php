<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dungeon Manager</title>

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>

@include('organisms/navigation')

@yield('content')

</body>

</html>
