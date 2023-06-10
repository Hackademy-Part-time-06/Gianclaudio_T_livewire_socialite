<nav class="navbar navbar-expand-lg bg-light p-0 ">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('index') }}"><img src="\img\book_favicon.jpg" alt=""
                height="40rem">Book.com</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end me-2" id="navbarSupportedContent">
            <div class="d-flex justify-content-end">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Libri
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('books.create') }}">Crea un libro</a></li>
                            <li><a class="dropdown-item" href="{{ route('books.index') }}">Elenco Libri</a></li>
                            <li><a class="dropdown-item" href="{{ route('books.index') }}">Modifica Libri</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Categorie
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('categorys.create') }}">Crea una categoria</a>
                            </li>
                            <li><a class="dropdown-item" href="{{ route('categorys.index') }}">Elenco Categorie</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Autori
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('authors.create') }}">Crea un autore</a></li>
                            <li><a class="dropdown-item" href="{{ route('authors.index') }}">Elenco autori</a></li>
                        </ul>
                    </li>

                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Benvenuto {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu">

                                <li><a class="dropdown-item" href="#">Profilo</a></li>


                                <li><a class="dropdown-item" href="#"
                                        onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                                </li>

                                <form id="form-logout" method="POST" action="{{ route('logout') }}" class="d-none">@csrf

                                </form>

                            </ul>

                        </li>

                    
                
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Accedi
                        </a>
                        <ul class="dropdown-menu ul">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>

                        </ul>
                    </li>

                @endauth

            </ul>
                
            </div> 
        
    </div>
</nav>
