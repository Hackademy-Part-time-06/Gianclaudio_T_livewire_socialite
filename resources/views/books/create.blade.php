<x-main headerTitle="Crea un libro">
    <h2 class="d-flex justify-content-center">CREA</h2>
    <div class="d-flex justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('books.store') }}" method="POST" enctype="multipart/form-data" class="col-md-4 ">
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
                <select class="form-control" id="author_id" name="author_id">
                    <option>
                        Selezione autore
                    </option>
                    @foreach ($authors as $author)
                    <option value="{{$author->id}}">{{$author->name}} {{$author->surname}}</option>
                    @endforeach
                </select>
                <label for="author_id">Nome Autore</label>
                @error('author_id')
                <span class="text-danger">
                    {{$message}}
                </span>
                @enderror
            </div>
            <div class="form-floating mb-3">
                @foreach ($categories as $category)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="categories[]"
                        value="{{$category->id}}" id="categories-{{$category->id}}">
                    <label class="form-check-label" for="categories-{{$category->id}}">
                        {{$category->name}}
                    </label>
                </div>
                @endforeach

                @error('category_id')
                <span class="text-danger">
                    {{$message}}
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
                <input class="form-control" id="image" name="image" type="file">
            </div>

            <div class="d-grid gap-3">
                <button class="btn btn-primary btn-lg p-2" type="submit">Salva</button>
            </div>
        </form>
    </div>
</x-main>
