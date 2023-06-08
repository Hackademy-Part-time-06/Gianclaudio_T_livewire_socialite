<x-main headerTitle="Dettagli">
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">

                <div class="col-md-6">

                    <p>Nome Autore: {{$author->name}} </p>
                    <p>Cognome Autore: {{$author->surname}} </p>
                    <p>Età Autore: {{$author->birthday->format('d-m-Y')}} </p>

                    @forelse ($author->books as $book)
                        <p>
                            {{$book->name}}
                        </p>
                    @empty
                        Nessun libro aggiunto
                    

                    @endforelse

                </div>
            </div>
        </div>
    </section>
</x-main>