<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

<body class="antialiased">
    <h2 class="d-flex justify-content-center">CREA</h2>
    <div class="d-flex justify-content-center">
        <form action="{{ route('books.store') }}" method="POST" class="col-md-4 ">
            @method('POST')
            @csrf
            <div class="form-floating mb-3">
                <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}"
                    placeholder="Inserisci titolo libro">
                <label for="name">Nome Libro</label>
                @error('name')
                    <span class="text-danger">
                        Titolo obbligatorio!
                    </span>
                @enderror
            </div>

            <div class="form-floating mb-3">
                <input class="form-control" id="author" name="author" type="text" value="{{ old('author') }}"
                    placeholder="Inserisci nome autore">
                <label for="author">Nome Autore</label>
                @error('author')
                    <span class="text-danger">
                        Autore obbligatorio!
                    </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="pages" name="pages" type="text" value="{{ old('pages') }}"
                    placeholder="Inserisci Numero pagine Libro">
                <label for="pages">Numero pagine Libro</label>
                @error('name')
                    <span class="text-danger">
                        Inserisci un valore numerico obbligatorio!
                    </span>
                @enderror
            </div>

            <div class="d-grid gap-3">
                <button class="btn btn-primary btn-lg p-2" type="submit">Salva</button>
            </div>
        </form>
    </div>

</body>

</html>
