<x-main>
    <div class="spacer"></div>
<h1>
    {{$announceToCheck ? 'Da Revisionare' : 'Nulla da Revisionare'}}
</h1>


@forelse ($announceToCheck as $announceToCheck)
<div class="container text-center border border-warning bg-white">
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
    <div class="col-12">Ci sono ancora {{App\Models\Announcement::daRevisionare()}} annunci da revisionare</div>
</div>
</div>
@empty
<h1>NON CI SONO ANNUNCI DA REVISIONARE</h1>
@endforelse
</x-main>
