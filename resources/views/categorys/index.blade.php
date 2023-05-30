<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
</head>

<body>
    
    <x-navbar />

    <div class="container mt-5">

        @if (session('success'))
            <div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
                    <use xlink:href="#check-circle-fill" />
                </svg>
                <div>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="align-middle gap-2 d-flex justify-content-between">
            <h3>Elenco Categoria</h3>
            <a href="{{ route('categorys.create') }}" class="btn btn-primary " type="button">Crea Nuova Categoria</a>
        </div>
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categorys as $category)
                    <tr>
                        
                        <td>{{ $category['name'] }}</td>
                       
                        <td>
                            <a href="{{ route('categorys.show', ['category' => $category]) }}">
                                Visualizza
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr colspan="4"> </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>
