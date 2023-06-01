<x-main>

    {{-- form --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="" method="">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo dell'articolo</label>
                        <input type="text" name="title" class="form-control" id="title" required>
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle" required>
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Immagine di copertina</label>
                        <input type="file" name="cover" class="form-control" id="cover" required>
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea name="body" id="body" cols="30" rows="7" class="form-control" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Inserisci articolo</button>
                    <a href="{{ route('index') }}" class="btn btn-outline-dark">Torna indietro</a>
                </form>
            </div>
        </div>
    </div>
    

</x-main>