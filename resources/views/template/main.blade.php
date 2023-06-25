<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ $title ?? ''}}</title>
    <link rel="icon" type="image/x-icon" href="\img\book_favicon.jpg" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

</head>

<body class="d-flex flex-column h-100">
    
    <main class="flex-shrink-0">
        <x-navbar />

        <x-header headerTitle="{{ $headerTitle }}" />
        
        {{$slot}}

     @livewireScripts
     
    </main>
</body>

</html>
