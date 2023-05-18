<x-main>
    <div class="spacer"></div>
{{--
<h1>
     {{count($announceToCheck) ? 'Da Revisionare' : 'Nulla da Revisionare'}}
</h1>
--}}


@if (count($announceToCheck))
    <div class="col text-center">
    <h3>{{App\Models\Announcement::daRevisionare()}}</h3>
    <p>ANNUNCI DA REVIZIONARE</p>
    </div>
{{--
@else
    <p>FINISH</p>
--}}
@endif

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
    @empty
    <div class="container">
        <div class="row">
         <div class="coll">
            <i class="fa-sharp fa-solid fa-face-laugh-wink text-warning fs-1"></i>
            <a href="">HONE</a>
            <a href="">CREARE NOVO ANNUNCIO</a>
         </div>
        </div>
    </div>
@endforelse
</x-main>
