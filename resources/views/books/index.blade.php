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
            <h3>Elenco Libri inseriti da {{Auth::user()->name ?? 'Tutti'}}</h3>
            <a href="{{route('books.create')}}" class="btn btn-success " type="button">Crea Nuovo Libro</a>
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
                @forelse ($books as $book)

                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$book['name']}}</td>
                    <td>{{$book->author->name . ' ' . $book->author->surname}}</td>
                    <td>
                        <ul>
                            @forelse ($book->categories as $category)
                            <li>{{$category->name}} </li>
                            @empty
                            Nessuna categoria
                            @endforelse

                        </ul>
                    </td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="{{route('books.show', compact('book'))}}"
                                class="btn btn-primary me-md-2">Visualizza</a>
                            @auth
                            <a href="{{route('books.edit', compact('book'))}}"
                                class="btn btn-warning me-md-2">Modifica</a>
                            @endauth
                            @guest
                            Sono un ospite
                            @endguest
                        </div>


                    </td>
                </tr>

                @empty
                <tr colspan="4"> </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-main>
