<x-main>
    <x-navbar/>
    <h1>Annuncio {{$announcement->title}}</h1>

    <div class="container">
        <div class="col-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="https://picsum.photos/2200/300" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/2200/301" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/2200/302" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>

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