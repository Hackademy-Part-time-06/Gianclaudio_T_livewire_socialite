<x-main headerTitle='Lista Libri'>
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
            <h3>Elenco Libri inseriti</h3>
            <a href="{{ route('books.create') }}" class="btn btn-primary " type="button">Crea Nuovo Libro</a>
        </div>
        <table class="table border mt-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Autore</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{ $book['id'] }}</th>
                        <td>{{ $book['name'] }}</td>
                        <td>{{ $book['author'] }}</td>
                        <td>
                            <a href="{{ route('books.show', ['book' => $book['id']]) }}">
                                Visualizza
                            </a>
                        </td>
                    </tr>
               
                    
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container my-5">
        <div class="row justify-content-around">

            @foreach($books as $book)
                <div class="col-12 col-md-3 my-3">
                    <div class="card">
                        <img src="{{ Storage::url($book->image) }}" class="card-img-top" alt="{{ $book->name }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $book->name }}</h5>
                          <p class="card-text">{{ $book->author }}</p>
                          <a href="{{ route('books.index', compact('book')) }}" class="btn btn-dark">Leggi di piu'</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


</x-main>