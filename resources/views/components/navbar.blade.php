{{-- Vecchia navbar per prendere spunto e Route --}}
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary bg-custom p-0 fixed-top" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">Quick</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>
                        <a class="nav-link text-white" href="#">Chi siamo</a>
                    <li class="nav-item dropdown">
                            <a class="nav-link text-white dropdown-toggle" href="#" id="catDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                            <ul class="dropdown-menu" aria-labelledby="catDrop">
                                @foreach ($categories as $category)
                                    <li>
                                        <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                    </li>

                    <li>
                        <a class="nav-link text-white" href="{{route('announcement.index')}}">Annunci</a>
                    </li>

                </ul>

                @guest
                <a class="nav-link text-white" href="{{route('login')}}">Login</a>

                @else


                <ul class="navbar-nav">
                  <li>
                    <a class="nav-link text-white" href="{{route('announcement.create')}}">Inserisci Annuncio</a>

                </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-primary ms-5" type="submit">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>

                @endguest
            </div>
        </div>
    </div>
</nav> --}}

{{-- Nav da aggiungere il Logo --}}
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Aliexpress 4.0 perche e' fallito 4 volte con noi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </div>
</nav> --}}

{{-- Nav categoria ecc ecc da sistemare con classi css --}}
{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary bg-custom p-0 " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="nav-link text-white dropdown-toggle" href="#" id="catDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
        <ul class="dropdown-menu" aria-labelledby="catDrop">
            @foreach ($categories as $category)
                <li>
                    <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->name}}</a>
                </li>
            @endforeach
        </ul>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse d-flex justify-content-between " id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <ul class="navbar-nav">
                    <li>
                        <a class="nav-link active text-white" aria-current="page" href="{{route('homepage')}}">Home</a>
                    </li>


                    <li>
                        <a class="nav-link text-white" href="{{route('announcement.index')}}">Annunci</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-white" href="#">Chi siamo</a>
                    </li>

                </ul>


            </div>


            <div class="navbar-nav  ">


                @guest
                <a class="nav-link text-white" href="{{route('login')}}">Login</a>

                @else


                <ul class="navbar-nav">
                  <li>
                    <a class="nav-link text-white" href="{{route('announcement.create')}}">Inserisci Annuncio</a>

                </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button class="btn btn-sm btn-primary ms-5" type="submit">Logout</button>
                                </form>
                            </li>

                        </ul>
                    </li>
                </ul>

                @endguest
            </div>
        </div>
    </div>
</nav> --}}

{{-- Nav di matteo --}}

{{-- prima nav --}}
{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark h-50">
    <div class="container-fluid justify-content-center">
        <a class="navbar-brand" href="{{route('homepage')}}">
            <img src="{{URL::asset('img/icons8-cash-app-144.png')}}" alt="" height="40"><span class="text-muted fw-bold nav-brand">ShopyPro</span>
            <a class="nav-link fw-bold fs-4 text-white" href="#"></a>
        </a>
    </div>
</nav> --}}
{{-- <div class="superNav border-bottom py-2 bg-dark text-white">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
          <select  class=" border-0 bg-dark text-white">
            <option value="en-us">EN-US</option>
          </select>

          <span class="me-3"><strong>info@somedomain.com</strong></span>
        </div> --}}
{{-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
          <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Shipping</a></span>
          <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
        </div> --}}
{{-- </div>
</div>
</div> --}}


{{-- seconda nav --}}
@guest
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img class="bg-warning" src="{{ URL::asset('img/icons8-cash-app-150.png') }}" alt="" height="40">
                <a class="nav-link fw-bold fs-4" href="#">ShopyPro</a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li>
                        <form action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                            <input type="search" name="searched" class="form-control me-2" placeholder="Ricerca qui"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cerca</button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                    </li>

                    <li><a class="nav-link" href="{{ route('announcement.index') }}">Annunci</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="catDrop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                        <ul class="dropdown-menu    " aria-labelledby="catDrop">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('categoryShow', compact('category')) }}"
                                        class="dropdown-item">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
@else
    <nav class="navbar navbar-expand-xl fixed-top navbar-scroll">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('homepage') }}">
                <img src="{{ URL::asset('img/icons8-cash-app-150.png') }}" alt="" height="40">
                <a class="nav-link fw-bold fs-4" href="{{ route('homepage') }}">ShopyPro</a>
            </a>
            {{-- <a class="nav-link p-3  bg-warning dropdown-toggle" href="#" id="catDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
        <ul class="dropdown-menu"  aria-labelledby="catDrop">
            @foreach ($categories as $category)
                <li>
                    <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item">{{$category->name}}</a>
                </li>
            @endforeach
        </ul> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('announcement.create') }}">Crea Annuncio</a></li>
                    <li><a class="nav-link" href="{{ route('announcement.index') }}">Annunci</a></li>
                    {{-- Bottone revisore se ha il revisore dentro: --}}

                    {{-- <a class="nav-link" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a> --}}
                    {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell"></i>
          {{-- <span class="badge rounded-pill badge-notification bg-danger">1</span> --}}
                    </a>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="catDrop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                        <ul class="dropdown-menu    " aria-labelledby="catDrop">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('categoryShow', compact('category')) }}"
                                        class="dropdown-item">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Offerte</a></li>
                        <li><a class="dropdown-item" href="#">Nuovi annunci</a></li>

                    </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-semibold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <img src="{{ URL::asset('img/iconaUtente.png') }}" class="rounded-circle" height="22"
                                alt="icona-utente">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            @if (Auth::user()->is_revisor)
                            <li>
                                <a href="{{ route('revisore.index') }}" class="dropdown-item">Zona Revisori</a>
                            </li>
                            @endif
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item" href="/logout"
                                    onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a>
                            </li>


                            <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <li>
                        <form action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                            <input type="search" name="searched" class="form-control me-2" placeholder="Ricerca qui"
                                aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Cerca</button>
                        </form>
                    </li>

                </ul>
            @endguest

        </div>
    </div>
</nav>
