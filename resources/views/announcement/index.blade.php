<x-main>
    <div class="spacer"></div>

{{-- <div class="container mt-3">
    <div class="col-12">
        <h2>Annunci</h2>
    </div>
    <div class="row">
        @foreach ($announcements as $announcement)
        <div class="col-12 col-md-4 my-4">
            <div class="card shadow" style="width :18rem ;">
            <img src="https://picsum.photos/200/300" alt="Random img" class="cart-img-top p-3 rounded">
            <div class="card-body">
                <h5 class="card-title">{{$announcement->title}}</h5>
                <p class="card-text">{{$announcement->body}}</p>
                <p class="card-text">{{$announcement->price}}</p>
                <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-secondary shadow">Dettagli</a>
                <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-warning">Categoria: {{$announcement->category->name}}</a>
                <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
            </div>
            </div>
        </div>

        @endforeach
        {{$announcements->links()}}
    </div>

</div> --}}
{{-- <div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title text-center text-primary text-uppercase">Nostri Annunci</h6>
            <h1 class="mb-5">Esplora i nostri  <span class="text-primary text-uppercase">Annunci</span></h1>
        </div>
        <div class="row g-4">
            @forelse ($announcements as $announcement)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s"  style=" visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="https://picsum.photos/450/300" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prezzo: {{$announcement->price}}</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{$announcement->title}}</h5>
                        </div>
                        
                        <p class="text-body mb-3 overflow-y-hidden">{{$announcement->body}}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>
                            
                        </div>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                    </div>
                </div>
            </div>
            @empty
            <h2>Non ci sono annunci nella Ricerca</h2>
            @endforelse
            {{$announcements->links()}}
        </div>
    </div>
</div> --}}


    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title text-center text-primary text-uppercase pt-3">Nostri Annunci</h6>
            <h1 class="mb-5">Esplora i nostri  <span class="text-primary text-uppercase ">Annunci</span></h1>
        </div>
        <div class="row g-4 ">
            @forelse ($announcements as $announcement)
            {{-- <img class="postcard__img pt-4" src="{{!$announcement->images()->get()->isEmpty() ? Storage::url($announcement->images()->first()->path) : 'https://picsum.photos/600'}}" alt="Image Title" /> --}}
            
            <div class="col-lg-12 col-12 " data-aos="fade-right" data-aos-duration="3000">

                <article class="postcard light yellow text-center">
                    <a class="postcard__img_link position-relative" href="#">
                        <img class="postcard__img " src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300)  : 'https://picsum.photos/600'}}" alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <div class="d-flex justify-content-between">
                            
                            <a href="" class=" btn-warning rounded py-2 px-4 fw-bold">Prezzo: {{$announcement->price}} €</a>
                        </div>
                        <h5 class="mb-0">{{$announcement->title}}</h5>
                        <div class="postcard__subtitle small">
                            <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                        </div>
                        <div class="postcard__bar"></div>
                        <p class="text-body mb-3 overflow-y-hidden">{{$announcement->body}}</p>
                        <div class="d-flex justify-content-between">
                            <a class=" btn-primary rounded pt-2 px-4 fw-bold text-center" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                            <a class=" btn-dark rounded py-2 px-4 fw-bold" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>
                            
                        </div>
                    </div>
            
                </article>
          </div>
            @empty
            <h2>Non ci sono annunci nella Ricerca</h2>
            @endforelse
        </div>
    </div>
</div>


{{-- <div class="container-xxl py-5 ">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <h2>Esplora i nostri</h2>
            <p>Annunci</p>
          </div>
        </div>
      </div>
      
        
          
            <div class="row">
                @forelse ($announcements as $announcement)
              <div class="col-lg-12 col-12 shadow rounded my-5">
                  <div class="row">
                    <div class="col-12 col-lg-4 col-sm-6">
                      <div class="position-relative">
                        <img src="https://picsum.photos/500/350" class="img-fluid rounded" alt="">
                    
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prezzo: {{$announcement->price}}</small>
                        
                      </div>
                    </div>
                    <div class="col-12 col-lg-8 col-sm-6 ">
                      
                        <h4>{{$announcement->title}}</h4>
                        <span></span>
                        <div class="main-button">
                          <a href="about.html">Explore More</a>
                        </div>
                        <p class="overflow-y-hidden">{{$announcement->body}}</p>
                        
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>
                            
                        </div>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                        
                      
                    </div>
                  </div>
              </div>
              
              @empty
            <h2>Non ci sono annunci nella Ricerca</h2>
            @endforelse
             
            </div>
          
       

      
</div> --}}
  
</x-main>
