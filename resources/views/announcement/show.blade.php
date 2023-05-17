<x-main>
    <div class="spacer"></div>
    <h1 class="text-center">DETTAGLI ANNUNCIO</h1>


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



    {{--  --}}
    <section class="py-5">
      <div class="container px-4 px-lg-5 my-5">
          <div class="row gx-4 gx-lg-5 align-items-center">
            <div class="col-12 col-md-6">
                <h1 class="card-title text-center ">Titolo: {{$announcement->title}}</h1>
                <img class="card-img-top mt-5 mb-md-0 border border-warning" src="https://picsum.photos/200/300"></div>
              <div class="col-12 col-md-6">
                <h3 class="text-center">DESCRIZIONE</h3>
                <p class="card-text pt-5 text-center">{{$announcement->body}}</p>
                  <div class="fs-5 mb-5 text-center">
                      <span class="pt-5 text-center">Prezzo: {{$announcement->price}} €</span>
                      <div class="card-body">
                        <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-warning">Categoria: {{$announcement->category->name}}</a><br>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                    </div>
                  </div>
                  
              </div>
          </div>
      </div>
  </section>
{{--  --}}
    {{-- <div class="container">
        <div class="row">
            <div class="card shadow" style="width :18rem ;">
                <img src="https://picsum.photos/200/300" alt="Random img" class="cart-img-top p-3 rounded">
                <div class="card-body">
                    
                    

                    <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-warning">Categoria: {{$announcement->category->name}}</a>
                    <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                </div>
                </div>
        </div>
    </div> --}}
</x-main>
