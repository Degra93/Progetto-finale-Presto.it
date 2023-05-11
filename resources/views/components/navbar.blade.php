
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
                                @foreach ($categories as $category )
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
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-custom p-0 " data-bs-theme="dark">
    <div class="container-fluid">
        <a class="nav-link text-white dropdown-toggle" href="#" id="catDrop" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
        <ul class="dropdown-menu" aria-labelledby="catDrop">
            @foreach ($categories as $category )
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
</nav>

{{-- Nav di matteo --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top opacity-75 ">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <a class="nav-link" href="#">
            <i class="fas fa-shopping-cart"></i>
          </a>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-bell"></i>
          {{-- <span class="badge rounded-pill badge-notification bg-danger">1</span> --}}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="{{URL::asset('img/iconaUtente.png')}}" class="rounded-circle" height="22" alt="">
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>

        </ul>

      </div>
    </div>
  </nav>
