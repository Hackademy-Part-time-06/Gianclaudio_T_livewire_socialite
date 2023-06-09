<x-main headerTitle="Modifica un libro">
    <h2 class="d-flex justify-content-center">Modifica</h2>
    <section class="py-5">
        <div class="container px-5">
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('books.update', ['book' => $book->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" required type="text"
                                    value="{{ $book->name }}" placeholder="Inserisci titolo libro">
                                <label for="name">Nome Libro</label>
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <select class="form-control" name="author_id" id="">
                                    <option>
                                        Selezione autore
                                    </option>
                                    @foreach ($authors as $author)
                                        <option value="{{ $author->id }}"
                                            @if ($author->id == $book->author_id) selected @endif>
                                            {{ $author->name . ' ' . $author->surname }}
                                        </option>
                                    @endforeach
                                </select>

                                <label for="author">Nome Autore</label>
                                @error('author')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pages" name="pages" required type="number"
                                    value="{{ $book->pages }}" placeholder="Inserisci Numero pagine Libro">
                                <label for="pages">Numero pagine Libro</label>
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pages">Immagine Attuale</label>
                                <img class="card-img-top mb-5 mb-md-0"
                                    src="{{ empty($book->image) ? Storage::url('/images/default.png') : Storage::url($book->image) }}"
                                    alt="">
                            </div>
                            <div class="mb-3">
                                <label for="pages">Immagine del Libro</label>
                                <input class="form-control" id="image" name="image" type="file" value="">
                            </div>

                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Aggiorna</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>
