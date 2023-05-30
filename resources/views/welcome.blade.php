<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="antialiased">
    <x-navbar />

    <div class="container">
        <div class="row ">
            <div class="col-mb-6 d-flex justify-content-center mt-5">
                <button class="">
                    <a href="{{ route('books.create') }}">Crea un libro</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-mb-6 d-flex justify-content-center mt-5">
                <button class="">
                    <a href="{{ route('books.index') }}">Elenco libri inseriti</a>
                </button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row ">
            <div class="col-mb-6 d-flex justify-content-center mt-5">
                <button class="">
                    <a href="{{ route('categorys.create') }}">Crea una categoria</a>
                </button>
            </div>
        </div>
    </div>


</body>

</html>
