<x-main headerTitle="Home-Page">
    <div class="container">
        <div class="row ">
            <div class="col-mb-6 d-flex justify-content-center mt-3">
                <button class="">
                    <a href="{{ route('books.create') }}">Crea un libro</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row ">
            <div class="col-mb-6 d-flex justify-content-center mt-5">
                <button class="">
                    <a href="{{ route('books.index') }}">Elenco libri inseriti</a>
                </button>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div class="row  ">
            <div class="col-mb-6 d-flex justify-content-center mt-3 ">
                <button class="">
                    <a href="{{ route('categorys.create') }}">Crea una categoria</a>
                </button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row  ">
            <div class="col-mb-6 d-flex justify-content-center mt-5 ">
                <button class="">
                    <a href="{{ route('categorys.index') }}">Liste categorie</a>
                </button>
            </div>
        </div>
    </div>

    <hr>
    
    <div class="container">
        <div class="row">
            <div class="col-mb-6 d-flex justify-content-center mt-3 ">
                <button class="">
                    <a href="{{ route('authors.index') }}">Liste autori</a>
                </button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row  ">
            <div class="col-mb-6 d-flex justify-content-center mt-5 ">
                <button class="">
                    <a href="{{ route('authors.create') }}">Crea un autore</a>
                </button>
            </div>
        </div>
    </div>

        

    


</x-main>
