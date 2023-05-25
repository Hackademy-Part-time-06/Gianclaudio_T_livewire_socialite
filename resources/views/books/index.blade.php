<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="antialiased">
    <h2>INDEX</h2>
   
    <ul>
        @foreach ($books as $book)
            <li>
                {{ $book['author'] }} - {{ $book['name'] }}

            </li>
        @endforeach
    </ul>
    
</body>

</html>
