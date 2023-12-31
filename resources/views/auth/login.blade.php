<x-main headerTitle="Accedi">

    {{-- form --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form class="p-5 shadow" action="{{ route('login') }}" method="POST">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email utente</label>
                        <input type="email" name="email" class="form-control" id="email" required placeholder="Inserisci la tua Email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required required placeholder="Inserisci la tua Email">
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Accedi</button>
                    <a href="{{ route('register') }}" class="btn btn-outline-dark">Non sei registrato?</a>
                </form>
                <a href="{{ route('socialite.login') }}" class="btn btn-dark">Accedi con GitHub</a>
            </div>
        </div>
    </div>

</x-main>