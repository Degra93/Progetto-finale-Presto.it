<x-main>
    <x-messages/>
    <div class="spacer"></div>
    <h1 class="text-center">{{ __('ui.annunci-presenti') }}: {{__("ui.".$category->name)}}</h1>
    
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h6 class="section-title text-center text-primary text-uppercase">{{ __('ui.nostri') }}</h6>
        <h1 class="mb-5">{{ __('ui.esplora-i') }}</h1>
    </div>
    <div class="row g-4">
        {{-- @forelse ($announcements as $announcement)
            <div class="col-lg-12 col-12 " data-aos="fade-right" data-aos-duration="3000">
                
                <article class="postcard light yellow text-center">
                    <a class="postcard__img_link position-relative" href="#">
                        <img class="postcard__img "
                        src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(1000, 600): 'https://picsum.photos/600' }}"
                        alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <div class="d-flex justify-content-between">
                            
                            <a href="" class=" btn-warning rounded py-2 px-4 fw-bold">{{ __('ui.prezzo') }}:
                                {{ $announcement->price }} €</a>
                            </div>
                            <h5 class="mb-0">{{ $announcement->title }}</h5>
                            <div class="postcard__subtitle small">
                                <p class="card-footer">{{ __('ui.pubblicato') }}:
                                    {{ $announcement->created_at->format('d/m/Y') }} {{ __('ui.autore') }}:
                                    {{ $announcement->user->name }}</p>
                                </div>
                                <div class="grande pb-5">
                                    <p class="text-body mb-3 roll">{{$announcement->body}}</p>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <a class=" btn-primary rounded pt-2 px-4 fw-bold text-center"
                                    href="{{ route('announcement.show', compact('announcement')) }}">{{ __('ui.dettagli') }}</a>
                                    <a class=" btn-dark rounded py-2 px-4 fw-bold"
                                    href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{ __('ui.categoria') }}:
                                    {{__("ui.".$announcement->category->name)}}</a>
                                    
                                </div>
                            </div>
                            
                        </article>
                    </div>
                    @empty --}}
                    @forelse ($announcements as $announcement)
                    <div class="col-lg-12 col-12  "  data-aos="fade-down-right" data-aos-duration="2000" >
                        
                        <article class="postcard light yellow text-center bg-annunci-home" >
                            <a class="postcard__img_link position-relative" href="#">
                                <img class="postcard__img "
                                src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(1000, 600): 'https://picsum.photos/600' }}"
                                alt="Image Title" />
                            </a>
                            <div class="postcard__text t-dark">
                                <div class="d-flex justify-content-between">
                                    
                                    <a href="" class=" btn-warning rounded py-2 px-4 fw-bold">{{__('ui.prezzo')}}:{{$announcement->price}} €</a>
                                </div>
                                <h5 class="mb-0 py-2">{{$announcement->title}}</h5>
                                <div class="postcard__subtitle small">
                                    <p class="card-footer">{{__('ui.pubblicato')}}: {{$announcement->created_at->format('d/m/Y')}} {{__('ui.autore')}}: {{$announcement->user->name}}</p>
                                </div>
                                <div class="grande pb-5">
                                    <p class="text-body mb-3 roll">{{$announcement->body}}</p>
                                </div>
                                <div class="d-flex justify-content-between pt-3">
                                    <a class=" btn-primary rounded pt-2 px-4 fw-bold text-center " href="{{route('announcement.show', compact('announcement'))}}">{{__('ui.dettagli')}}</a>
                                    <a class=" btn-dark rounded py-2 px-4 fw-bold " href="{{route('categoryShow',['category'=>$announcement->category])}}">{{__('ui.categoria')}}: {{__("ui.".$announcement->category->name)}}</a>
                                    
                                </div>
                                @if (Auth::check() && Auth::user()->is_revisor)
                                <div class="d-flex justify-content-end pt-3">
                                    
                                    <button class="btn btn-sm btn-danger ms-2" data-bs-toggle="modal" data-bs-target="#deletaModal">Deleta</button>
                                    
                                </div>
                                
                                @endif
                            </div>
                            
                        </article>
                    </div>
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
                                    
                                    <div class="modal-footer  d-flex justify-content-center m-5">
                                        <form action="{{ route('delete', $announcement) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <p class="h3">Sicuro?</p>
                                            <button type="submit" class="btn-hover btn btn-danger py-2 px-4 m-2" data-bs-dismiss="modal">Si</button>
                                            <button type="button" class="btn-hover btn btn-warning py-2 px-4 m-2" data-bs-dismiss="modal">No</button>
                                        </form> 
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>{{ __('ui.al-momento') }}</p>
                    <p>{{ __('ui.che-ne-dici') }}<a href="{{ route('announcement.create') }}"
                        class="btn btn-warning mx-2">{{ __('ui.crea') }}</a></p>
                        @endforelse
                    </div>
                    <div class="spacer-category"></div>
                    
                </div>
                
            </x-main>
            