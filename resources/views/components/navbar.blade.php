
@guest
    <nav class="navbar navbar-expand-lg fixed-top navbar-scroll fw-bold ">
        <div class="container-fluid ">
            <a class="navbar-brand ms-2" href="{{ route('homepage') }}">
                <img class="bg-warning" src="{{ URL::asset('img/icons8-cash-app-150.png') }}" alt="" height="40">
                <a class="nav-link fw-bold fs-4" href="#">ShopyPro</a>
            </a>
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-3 ms-lg-auto ms-md-3 ms-xs-3 mb-2 mb-lg-0">
                    <li>
                        {{-- search --}}
                        <form action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                            <div class="searchBox">

                                <input class="searchInput form-control "type="text" name="searched" placeholder="{{__('ui.ricerca')}}"
                                aria-label="Search">
                                <button class="searchButton" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>


                        </form>
                        {{-- seach end --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">{{__('ui.home')}}</a>
                    </li>

                    <li><a class="nav-link" href="{{ route('announcement.index') }}">{{__('ui.annunci')}}</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="catDrop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.categoria')}}</a>
                        <ul class="dropdown-menu    " aria-labelledby="catDrop">
                            @foreach ($categories as $category)
                                <li>
                                    <a href="{{ route('categoryShow', compact('category')) }}"
                                        class="dropdown-item">{{__('ui.'.$category->name)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{__('ui.log-button')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{__('ui.registrati')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Lingue
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-center">

                            <li>
                                <a class="dropdown-item"><x-locale lang="it" nation="it"/></a>
                            </li>
                            <li>
                                <a class="dropdown-item"><x-locale lang="en" nation="en"/></a>
                            </li>

                            <li>
                                <a class="dropdown-item"><x-locale lang="uk" nation="uk"/></a>
                            </li>

                        </ul>
                    </li>
                </ul>


            </div>
        </div>
    </nav>
@else
    <nav class="navbar mx-0 px-0  navbar-expand-xl fixed-top navbar-scroll fw-bold ">
        <div class="container-fluid">
            <a class="navbar-brand  ms-2" href="{{ route('homepage') }}">
                <img class="bg-warning" src="{{ URL::asset('img/icons8-cash-app-150.png') }}" alt="" height="40">
                <a class="nav-link fw-bold fs-4" href="{{ route('homepage') }}">ShopyPro</a>
            </a>

            <button class="navbar-toggler position me-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    @if (App\Models\Announcement::daRevisionare())
                    {{-- NOTIFICA --}}
                    <span class="position-absolute top-0 start-95 ms-2 badge rounded-pill bg-danger">{{App\Models\Announcement::daRevisionare()}}</span>

                    @endif
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-3 ms-lg-auto ms-md-3 ms-xs-3 mb-2 mb-lg-0 ">
                    <li>
                        <form class="" action="{{ route('announcement.search') }}" method="GET" class="d-flex">
                            <div class="searchBox">

                                <input class="searchInput form-control "type="text" name="searched" placeholder="{{__('ui.ricerca')}}"
                                aria-label="Search">
                                <button class="searchButton" type="submit">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </div>

                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homepage') }}">{{__('ui.home')}}</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('announcement.create') }}">{{__('ui.crea')}}</a></li>
                    <li><a class="nav-link" href="{{ route('announcement.index') }}">{{__('ui.annunci')}}</a></li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="catDrop" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">{{__('ui.categorie')}}</a>
                        <ul class="dropdown-menu" aria-labelledby="catDrop">
                            @foreach ($categories as $category)
                                <li >
                                    <a class="dropdown-item" href="{{ route('categoryShow', compact('category')) }}">{{__('ui.'.$category->name)}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    @if (Auth::user()->is_revisor)
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle fw-bold" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                            <img src="{{ URL::asset('img/iconaUtente.png') }}" class="rounded-circle position-relative" height="22"
                                alt="icona-utente">
                                @if (App\Models\Announcement::daRevisionare())
                                <span class="position-absolute top-0 start-80 badge rounded-pill bg-danger ">{{App\Models\Announcement::daRevisionare()}}</span>

                                @endif
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            {{-- @if (Auth::user()->is_revisor) --}}
                            <li>
                                <a href="{{ route('revisore.index') }}" class="dropdown-item fw-bold">{{__('ui.zona')}} @if (App\Models\Announcement::daRevisionare())<span class="badge rounded-pill bg-danger ms-2">{{App\Models\Announcement::daRevisionare()}}</span></a>@endif
                            </li>
                            {{-- @endif --}}
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <a class="dropdown-item fw-bold>" href="/logout"
                                    onclick="event.preventDefault();getElementById('form-logout').submit();">{{__('ui.logout')}}</a>
                            </li>


                            <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Lingue
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end text-center">

                            <li>
                                <a class="dropdown-item"><x-locale lang="it" nation="it"/></a>
                            </li>
                            <li>
                                <a class="dropdown-item"><x-locale lang="en" nation="en"/></a>
                            </li>

                            <li>
                                <a class="dropdown-item"><x-locale lang="uk" nation="uk"/></a>
                            </li>

                        </ul>
                      </li>

                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-semi  bold" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                        <img src="{{ URL::asset('img/iconaUtente.png') }}" class="rounded-circle" height="22"
                            alt="icona-utente">

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item >" href="/logout"
                                onclick="event.preventDefault();getElementById('form-logout').submit();">Logout</a>
                        </li>


                        <form id="form-logout" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Lingue
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end text-center">

                        <li>
                            <a class="dropdown-item"><x-locale lang="it" nation="it"/></a>
                        </li>
                        <li>
                            <a class="dropdown-item"><x-locale lang="en" nation="en"/></a>
                        </li>

                        <li>
                            <a class="dropdown-item"><x-locale lang="uk" nation="uk"/></a>
                        </li>

                    </ul>
                </li>
            </ul>
            </ul>
            @endguest
            @endif
        </div>
    </div>
</nav>
