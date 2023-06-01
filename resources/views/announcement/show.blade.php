<x-main>
    <div class="spacer container-fluid"></div>



    <div class="container pt-5 ">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="row ">
                    <div class="col-12 py-3 ">


                        @if ($announcement->images)
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">

                                    @forelse ($announcement->images as $image)
                                        <div class="carousel-item  @if ($loop->first) active @endif">
                                            <img src="{{ $image->getUrl(1000, 600) }}" class="img-fluid rounded"
                                                alt="img">
                                        </div>
                                    @empty
                                        <div class="col-12">
                                            <img src="https://picsum.photos/1000/600" class="img-fluid" alt="">
                                        </div>
                                    @endforelse
                                </div>
                            @else
                        @endif

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                @foreach ($announcement->images as $image)
                    <div class="col-12 col-md-6 col-lg-6 py-2">

                        <img src="{{ $image->getUrl(1000, 600) }}" class="img-fluid" alt="">
                    </div>
                @endforeach

            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
            <div class="row">
                <div class="col-12 bgc">
                    <div class="row">
                        <div class="col-9">
                            {{-- Titolo --}}
                            <h2>{{ $announcement->title }}</h2>

                            <h6 class="pt-2"><i class="fa-solid fa-truck"></i> {{__('ui.tempi')}} </h6>

                            <h6 class=><i class="fa-solid fa-truck"></i>{{__('ui.pronta')}}</h6>

                        </div>
                        <div class="col-3">
                            <h1>{{ $announcement->price }}€</h1>
                            <span>{{__('ui.iva')}}</span>
                        </div>
                        <div class="col-12">
                            <div class="handle_options__u6xgU">
                                <hr>
                                <p>{{__('ui.disponibilita')}}
                                    <!-- -->:
                                </p>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <button type="button" class="btn btn-primary rounded-pill">
                                <h5>{{__('ui.blu')}}</h5>
                            </button>
                            <button type="button" class="btn btn-secondary rounded-pill">
                                <h5>{{__('ui.grigio')}}</h5>
                            </button>
                            <button type="button" class="btn btn-warning rounded-pill">
                                <h5>{{__('ui.giallo')}}</h5>
                            </button>
                            <button type="button" class="btn btn-info rounded-pill">
                                <h5>{{__('ui.azzurro')}}</h5>
                            </button>

                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for="quantita">{{__('ui.inserisci-quanti')}}</label>
                                    <input type="number" name="quantita" placeholder="1"
                                        class="form-control form-control-lg">
                                </div>
                                <div class="col-12 py-3">
                                    <button type="button" class="btn btn-secondary rounded-pill">
                                        <h5> {{__('ui.aggiungi-al-carrello')}} </h5>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 bgw pt-5">
                            <ul>
                                <h2>{{__('ui.carat-tecniche')}}:</h2>
                                <span>{{ $announcement->techiche }}</span>


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
                                <h2>{{__('ui.carat-extra')}}:</h2>
                                <li>
                                    <span> {{ $announcement->extra}} </span>
                                </li>

                            </ul>

                        </div>
                        <div class="pt-5">
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class=" btn btn-warning rounded-pill my-2 " type="button">
                                <h5>{{__('ui.categoria')}}: {{ __('ui.' . $announcement->category->name) }}</h5>
                            </a><br>
                            <p class="card-footer">{{__('ui.pubblicato')}}: {{ $announcement->created_at->format('d/m/Y') }}
                                {{__('ui.autore')}}: {{ $announcement->user->name }}</p>
                        </div>
                        {{-- <div class="col-12 pb-2 bgw">
                            <button type="button" class="btn btn-warning rounded-pill">
                                <span> {{ $announcement->title }} Makes The Differences </span>
                            </button>
                        </div> --}}
                        @if (Auth::check() && Auth::user()->is_revisor)
                        <div class="d-flex justify-content-end pb-3">
                            
                            <button class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#deletaModal">{{__('ui.cancella')}}</button>
                            
                        </div>
                        
                        @endif
{{-- Modale --}}
<div class="modal fade" id="deletaModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-lg">
        <div class="modal-content modal-color my-form">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body d-flex flex-column  align-items-center align-self-center text-black ">
                
                <i class="fa-solid fa-door-open fa-5x mb-4"></i>
                
                <div class="modal-footer text-center d-flex justify-content-center m-5">
                    <form action="{{ route('delete', $announcement) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <p class="h3">{{__('ui.sicuro')}}</p>
                        <button type="submit" class="btn-hover btn btn-danger py-2 px-4 m-2" data-bs-dismiss="modal">{{__('ui.si')}}</button>
                        <button type="button" class="btn-hover btn btn-warning py-2 px-4 m-2" data-bs-dismiss="modal">{{__('ui.no')}}</button>
                    </form> 
                </div>
                
            </div>
            
        </div>
    </div>
</div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>





</x-main>
