<x-main>
<div style="height:30px"></div>

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

<!-- Button trigger modal -->



@if(count($announceToCheck))

    <div class="col-3 mx-auto text-center margin-count text-black">
        <h3 class="h3 heading-font">{{App\Models\Announcement::daRevisionare()}}</h3>
        <p class="heading-font">ANNUNCI DA REVISIONARE</p>
    </div>
{{--
        <div class="container">
            <div class="row">
                <div id="carouselExampleCaptions" class="col-12 col-lg-8 my-3 mx-auto carousel slide rounded">
                        <div class="carousel-inner">
                            @foreach ($announceToCheck as $announceToCheck)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="https://picsum.photos/800/400" class="d-block  w-100" alt="...">
                                    <div class="carousel-caption ">
                                        <div class="col-md-8 p-3 mx-auto text-bg-light rounded">
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
--}}

    <div class="container mb-5 main-font" style="height:10px">
        <div class="row"></div>
            <div class="col-md-8 mx-auto">
                @foreach ($announceToCheck as $key => $announceToCheck)
                    <div class="accordion accordion-flush" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header ">
                                <button class="accordion-button rounded p-3 heading-font " type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="p-2">Pubblicato il: {{$announceToCheck->created_at->format('d/m/Y')}} Autore: {{$announceToCheck->user->name}}</span>
                                    <i class="fa-solid fa-message p-3"></i>
                                </button>
                            </h2>
                            <div id="collapse{{$key}}" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body bg-light">
                                    <div class="row">
                                            <div class="col-md-5">
                                                <img src="https://picsum.photos/800/1000" class="img-fluid  mx-auto rounded " alt="...">
                                            </div>
                                            <div class="col-md-7  mx-auto align-self-center ">
                                                <h3 class=""><span class=" heading-font">Titolo:</span> {{$announceToCheck->title}}</h3>
                                                <p class="custom-paragraph" style="overflow-wrap: break-word;"><span class=" heading-font">Descrizione:</span> {{$announceToCheck->body}}</p>
                                                <p class=""><span class=" heading-font">PREZZO:</span> {{$announceToCheck->price}}</p>
                                                <p class=""><span class=" heading-font">Pubblicato il:</span>{{$announceToCheck->created_at->format('d/m/Y')}} Autore: {{$announceToCheck->user->name}}</p>
                                                <div class="d-flex justify-content-start mt-5">
                                                    <div class=" mx-2">
                                                        <form id="myForm" action="{{route('revisore.OkAnnuncio',['announcement'=>$announceToCheck])}}" method="POST">
                                                            @csrf @method('PATCH')
                                                            <button class="btn-hover btn btn-warning">Accetta</button>
                                                        </form>
                                                    </div>
                                                    <div class="mx-2">
                                                        <form  action="{{route('revisore.NoAnnuncio',['announcement'=>$announceToCheck])}}" method="POST">
                                                            @csrf @method('PATCH')
                                                            <button class="btn-hover btn btn-danger">Rifiuta</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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

  {{-- <!-------------------------- Modal ----------------------------------------------->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <p class="h2 text-center">Sei sicuro?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-hover btn btn-warning" data-bs-dismiss="modal">No</button>
          <button type="button" class="btn-hover btn btn-danger"  onclick="openModalAndSubmitForm()" data-bs-dismiss="modal">Si</button>
        </div>
      </div>
    </div>
  </div>


<script>

    function ok(){
        $('#staticBackdrop').modal('show'); // Відкриття модального вікна
    }

  function openModalAndSubmitForm() {

    $('#staticBackdrop').on('hidden.bs.modal', function () {
      document.getElementById('myForm').submit(); // Відправка форми на сервер
    });
  }
</script> --}}


</x-main>


