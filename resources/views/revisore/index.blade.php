<x-main>
<!______________________CODICE VECHIO_______________________________________>
{{--
    <div class="spacer"></div>
<h1>
     {{count($announceToCheck) ? 'Da Revisionare' : 'Nulla da Revisionare'}}
</h1>

--}}

{{--
@if (count($announceToCheck))
    <div class="col text-center">
    <h3>{{App\Models\Announcement::daRevisionare()}}</h3>
    <p>ANNUNCI DA REVIZIONARE</p>
    </div>

@else
    <p>FINISH</p>

@endif
--}}
{{--
@forelse ($announceToCheck as $announceToCheck)
    <div class="container text-center border border-warning">
        <div class="row">
                <div  class="col-12 text-center">
                    <img src="https://picsum.photos/200/300" alt="Random img" class="cart-img-top p-3 rounded">
                    <h5>Titolo: {{$announceToCheck->title}}</h5>
                    <p > Descrizione: {{$announceToCheck->body}}</p>
                    <p >Prezzo: {{$announceToCheck->price}}</p>
                    <p class="card-footer">Pubblicato il: {{$announceToCheck->created_at->format('d/m/Y')}} Autore: {{$announceToCheck->user->name}}</p>

                </div>
                <div class="col-12 col-md-6 ">
                    <form onsubmit="return confirm('Sei sicuro di voler accettare questo annuncio?')" action="{{route('revisore.OkAnnuncio',['announcement'=>$announceToCheck])}}" method="POST">
                        @csrf @method('PATCH')
                        <button class="submit btn btn-primary ">Accetta</button>
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <form onsubmit="return confirm('Sei sicuro di voler cancellare questo annuncio?')" action="{{route('revisore.NoAnnuncio',['announcement'=>$announceToCheck])}}" method="POST">
                        @csrf @method('PATCH')
                        <button class="submit btn btn-danger ">Rifiuta</button>
                    </form>
                </div>
        </div>
    </div>
--}}
{{--
@forelse ($announceToCheck as $announceToCheck)


@empty
    <div class="container">
        <div class="row">
         <div class="col-6 mx-auto m-5 py-5  bg-light text-center rounded">
            <i class="fa-sharp fa-solid fa-face-laugh-wink text-warning fa-5x mb-3"></i>
            <h2 class="text-secondary mb-3">Hai finito di modificare gli annunci. <br/> Grazie!</h2>
            <a href="{{ route('homepage') }}" class="links-hover m-2 fs-5 link-warning text-decoration-none ">HONE</a>
            <a href="{{ route('announcement.create') }}" class="links-hover m-2 fs-5 link-warning text-decoration-none">CREA ANNUNCIO</a>
         </div>
        </div>
    </div>
@endforelse
--}}
<!______________________END CODICE VECHIO_______________________________________>

@if (count($announceToCheck))
    <div class="col-3 mx-auto text-center  mt-5 text-white">
        <h3 class="h1">{{App\Models\Announcement::daRevisionare()}}</h3>
        <p>ANNUNCI DA REVIZIONARE</p>
    </div>

    <div class="container mt-1">
        <div class="row">
            <div id="carouselExampleCaptions" class="col-12 col-md-8 my-3 mx-auto carousel slide rounded">
                    <div class="carousel-inner">
                        @foreach ($announceToCheck as $announceToCheck)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <img src="https://picsum.photos/800/400" class="d-block  w-100" alt="...">
                                <div class="carousel-caption ">
                                    <div class=" col-12 col-md-12 p-3 mx-auto text-bg-light rounded">
                                            <h5 class="m-1">Titolo: {{$announceToCheck->title}}</h5>
                                            <p class="m-1">Descrizione: {{$announceToCheck->body}}</p>
                                            <p class="m-1">Prezzo: {{$announceToCheck->price}}</p>
                                            <p class="m-1">Pubblicato il: {{$announceToCheck->created_at->format('d/m/Y')}} Autore: {{$announceToCheck->user->name}}</p>
                                            <div class="d-flex justify-content-center">
                                                <div class=" mx-2">
                                                    <form onsubmit="return confirm('Sei sicuro di voler accettare questo annuncio?')" action="{{route('revisore.OkAnnuncio',['announcement'=>$announceToCheck])}}" method="POST">
                                                        @csrf @method('PATCH')
                                                        <button class="btn-hover btn btn-success btn-sm py-2 px-4">Accetta</button>
                                                    </form>
                                                </div>
                                                <div class="mx-2">
                                                    <form onsubmit="return confirm('Sei sicuro di voler cancellare questo annuncio?')" action="{{route('revisore.NoAnnuncio',['announcement'=>$announceToCheck])}}" method="POST">
                                                        @csrf @method('PATCH')
                                                        <button class="btn-hover btn btn-danger btn-sm py-2 px-4">Rifiuta</button>
                                                    </form>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    @else
    <div class="container  my-5">
        <div class="row">
         <div class="col-6 mx-auto m-5 py-5  bg-light text-center rounded">
            <i class="fa-sharp fa-solid fa-face-laugh-wink text-warning fa-5x mb-3"></i>
            <h2 class="text-secondary mb-3">Hai finito di modificare gli annunci. <br/> Grazie!</h2>
            <a href="{{ route('homepage') }}" class="links-hover m-2 fs-5 link-warning text-decoration-none ">HOME</a>
            <a href="{{ route('announcement.create') }}" class="links-hover m-2 fs-5 link-warning text-decoration-none">CREA ANNUNCIO</a>
         </div>
        </div>
    </div>
 @endif


</x-main>
