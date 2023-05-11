<x-main>
    <x-navbar/>
    <h1>Annuncio {{$announcement->title}}</h1>

    fare front qui

    <div class="container">
        <div class="row">
            <div class="card shadow" style="width :18rem ;">
                <img src="https://picsum.photos/200/300" alt="Random img" class="cart-img-top p-3 rounded">
                <div class="card-body">
                    <h5 class="card-title">Titolo: {{$announcement->title}}</h5>
                    <p class="card-text"> Descrizione: {{$announcement->body}}</p>
                    <p class="card-text">Prezzo: {{$announcement->price}}</p>
                    
                    <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-warning">Categoria: {{$announcement->category->name}}</a>
                    <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                </div>
                </div>
        </div>
    </div>
</x-main>