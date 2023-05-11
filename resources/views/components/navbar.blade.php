<nav class="navbar navbar-expand-lg bg-body-tertiary bg-custom p-0 fixed-top" data-bs-theme="dark">
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
</nav>

