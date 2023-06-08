<x-main headerTitle='Lista modifica'>
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
                        <form action="{{route('authors.update', ['author' => $author->id])}}" method="POST"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" name="name" required type="text"
                                    value="{{$author->name}}" placeholder="Inserisci titolo libro">
                                <label for="name">Nome Autore</label>
                                @error('name')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="surname" name="surname" type="text"
                                    value="{{$author->surname}}" placeholder="Inserisci cognome autore">
                                <label for="surname">Cognome Autore</label>
                                @error('surname')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input class="form-control" id="birthday" name="birthday" type="date"
                                    value="{{$author->birthday->format('Y-m-d')}}"
                                    placeholder="Inserisci cognome autore">
                                <label for="birthday">Età Autore</label>
                                @error('birthday')
                                <span class="text-danger">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>


                            <div class="d-grid gap-3">
                                <button class="btn btn-primary btn-lg p-2" type="submit">Aggiorna</button>
                                <form action="{{route('authors.update', compact('author'))}}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-lg">Cancella</button>
                                </form>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>