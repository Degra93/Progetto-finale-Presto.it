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

                            <h6 class="pt-2"><i class="fa-solid fa-truck"></i> Tempi di spedizione: 3-5 giorni </h6>

                            <h6 class=><i class="fa-solid fa-truck"></i> Pronta consegna presso: Atrio Cues, Edificio E
                            </h6>

                        </div>
                        <div class="col-3">
                            <h1>{{ $announcement->price }}</h1>
                            <span>Iva inclusa</span>
                        </div>
                        <div class="col-12">
                            <div class="handle_options__u6xgU">
                                <hr>
                                <p>disponibile in
                                    <!-- -->:
                                </p>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <button type="button" class="btn btn-primary rounded-pill">
                                <h5>Blue</h5>
                            </button>
                            <button type="button" class="btn btn-secondary rounded-pill">
                                <h5>Grigio</h5>
                            </button>
                            <button type="button" class="btn btn-warning rounded-pill">
                                <h5>Giallo</h5>
                            </button>
                            <button type="button" class="btn btn-info rounded-pill">
                                <h5>Blue</h5>
                            </button>

                        </div>

                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <label for="quantita">Inserisci quanti pezzi vorresti</label>
                                    <input type="number" name="quantita" placeholder="1"
                                        class="form-control form-control-lg">
                                </div>
                                <div class="col-12 py-3">
                                    <button type="button" class="btn btn-secondary rounded-pill">
                                        <h5> Aggiungi al carrello </h5>
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="col-12 bgw pt-5">
                            <ul>
                                <h2>Caratteristiche Tecniche:</h2>
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
                                <h2>Caratteristiche EXTRA:</h2>
                                <li>
                                    <span> {{ $announcement->extra}} </span>
                                </li>

                            </ul>

                        </div>
                        <div class="pt-5">
                            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}"
                                class=" btn btn-warning rounded-pill my-2 " type="button">
                                <h5>Categoria: {{ $announcement->category->name }}</h5>
                            </a><br>
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}
                                Autore: {{ $announcement->user->name }}</p>
                        </div>
                        <div class="col-12 pb-2 bgw">
                            <button type="button" class="btn btn-warning rounded-pill">
                                <h5> {{ $announcement->title }} Makes The Differences </h5>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>





</x-main>
