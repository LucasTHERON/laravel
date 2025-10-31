<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja network</title>

    @vite('resources/css/app.css')
</head>
<body class=" text-center px-8 py-12">
    
<header>
    <nav>
        <h1>Ninja network</h1>
        <a href="/">Homepage</a>
        <a href="/ninjas">All ninjas</a>
        <a href="/ninjas/create">Add ninjas</a>
    </nav>
</header>

<main class="container">
    {{ $slot }}
</main>

</body>
</html>