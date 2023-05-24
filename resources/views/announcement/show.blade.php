<x-main>
    <div class="spacer container-fluid"></div>

    

<div class="container pt-5 ">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="row ">
              <div class="col-12 py-3 ">
                
                <div id="carouselExample" class="carousel slide">
                    @if ($announcement->images)
                   <div class="carousel-inner">
                      
                        @foreach ($announcement->images as $image)
                           <div class="carousel-item  @if($loop->first) active @endif">
                               <img src="{{Storage::url($image->path)}}" class="img-fluid rounded" alt="img">
                           </div>
                       @endforeach
                   </div>
                   @else
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                         <img src="https://picsum.photos/800/1000" class="img-fluid rounded" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="https://picsum.photos/800/1000" class="img-fluid rounded" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="https://picsum.photos/800/1000" class="img-fluid rounded" alt="...">
                       </div>
                     </div>
                   
                   @endif
                   
                   <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                   </button>
                   <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                   </button>
                 </div>
              </div>
              @foreach ($announcement->images as $image )
                     <div class="col-12 col-md-6 col-lg-6 py-2">
                    
                    <img src="{{Storage::url($image->path)}}" class="img-fluid" alt="">
                </div>           
              @endforeach
              <div class="col-3">
                  <img src="" class="img-fluid" alt="">
              </div>
                
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-12 bgc">
                    <div class="row">
                        <div class="col-9">
                          {{-- Titolo --}}
                            <h2>{{$announcement->title}}</h2>
                            <span>Scrivi una recensione</span>
                            <br>
                            <h6 class="pt-2"><i class="fa-solid fa-truck"></i>  Tempi di spedizione: 3-5 giorni </h6>
                            
                            <h6 class=><i class="fa-solid fa-truck"></i>  Pronta consegna presso: Atrio Cues, Edificio E</h6>
                            
                        </div>
                        <div class="col-3">
                            <h1>{{$announcement->price}}</h1>
                            <span>Iva inclusa</span>
                        </div>
                        <div class="col-12">
                            <div class="handle_options__u6xgU"><hr><p>disponibile in<!-- -->:</p></div>
                        </div>
                        <div class="col-12 p-2">
                            <button type="button" class="btn btn-primary">Blue</button>
                            <button type="button" class="btn btn-secondary">Grigio</button>
                            <button type="button" class="btn btn-warning">Giallo</button>
                            <button type="button" class="btn btn-info">Celeste</button>
                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                   <label for="quantita">Inserisci quanti pezzi vorresti</label>
                                <input type="number" name="quantita" placeholder="1" class="form-control form-control-lg"> 
                                </div>
                                <div class="col-12 py-3">
                                    <button type="button" class="btn btn-secondary rounded-pill"><h5>   Aggiungi al carrello  </h5></button>
                                </div>
                            </div>
                                
                        </div>

                        <div class="col-12 bgw pt-5">
                            <ul>
                                <h2>Caratteristiche Tecniche:</h2>
                                {{$announcement->body}}
                                	
                               
                            </ul>
                            
                        </div>
                        <div class="col-12 bgw pt-5">
                            <div class="row">
                                <div class="col-3">
                                    <img src="https://picsum.photos/400/301" class="img-fluid" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="https://picsum.photos/400/302" class="img-fluid" alt="">
                                </div>
                                <div class="col-3">
                                    <img src="https://picsum.photos/400/303" class="img-fluid" alt="">
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-12 bgw pt-5">
                            <ul>
                                <h2>Caratteristiche EXTRA:</h2>
                                <li>
                                    Perfetta per bevande sia calde sia fredde
                                </li>
                                
                                <li>
                                    Non rilascia alcun odore o sapore
                                </li>
                                <li>
                                    Resistenza termica +160° ~ -20°
                                </li>
                                <li>
                                    Lavabile anche in lavastoviglie 
                                </li>
                                <li>
                                    100% Design Italiano
                                </li>
                                	
                              
                            
                            </ul>
                            
                        </div>
                        <div class="pt-5">
                          <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class=" my-2 border-top pt-2 border-dark card-link shadow btn btn-warning">Categoria: {{$announcement->category->name}}</a><br>
                          <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                      </div>
                        <div class="col-12 py-3 bgw">
                            <button type="button" class="btn btn-warning rounded-pill"><h5> {{$announcement->title}} Makes The Differences </h5></button>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        
    </div>
</div>


  
   
  
</x-main>
