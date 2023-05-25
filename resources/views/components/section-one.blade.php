<section class="pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-6 text-center">


                <h2 class="mb-4 fw-bold ">{{ __('ui.better') }}</h2>


                <p class="mb-10 text-gray-500">
                    {{ __('ui.vieni') }}
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-5 col-lg-4 d-flex flex-column pt-4" data-aos="fade-right" data-aos-duration="2000">


                <div class="card mb-7 rounded-5"
                    style="min-height: 400px; background-image: url(https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=928&q=80); background-position: center center;">




                    <div class="card-body my-auto">


                        <h4 class="mb-0 display-5 text-warning fw-bold">{{ __('ui.Informatica') }}</h4>


                        <a class=" text-white" href="http://127.0.0.1:8000/categoria/1">
                            {{ __('ui.esplora') }}
                        </a>

                    </div>

                </div>

            </div>
            <div class="col-12 col-md-7 col-lg-8 d-flex flex-column pt-4 " data-aos="fade-up-right"
                data-aos-duration="2000">




                <div class="card card-body mb-7 my-auto px-md-10 text-center text-md-start rounded-5"
                    style="min-height: 400px; background-image: url(https://blogautomobilenew.mediamatik.com/wp-content/uploads/2019/07/Peugeot-3008-1.jpg); background-position: center center;">




                    <h4 class="mb-0 display-5 text-warning fw-bold  ">{{ __('ui.Auto') }}</h4>


                    <a class=" px-0 text-reset" href="http://127.0.0.1:8000/categoria/4">
                        {{ __('ui.esplora') }}
                    </a>

                </div>



            </div>

            <div class="col-12 col-md-7 col-lg-8 d-flex flex-column pt-4" data-aos="flip-right"
                data-aos-duration="2000">


                <div class="card mb-7 mb-md-0 text-body rounded-5" style="min-height: 400px; ">


                    <div class="card-body my-auto px-md-10 text-center text-md-start"
                        style="background-image: url(https://m.media-amazon.com/images/I/71OLLyge2kL._AC_SX679_.jpg); background-position: center center; background-repeat: no-repeat;">


                        <h4 class="mb-0 display-5 text-warning fw-bold">{{ __('ui.Telefonia') }}</h4>


                        <a class=" px-0 text-reset" href="http://127.0.0.1:8000/categoria/2">
                            {{ __('ui.esplora') }}
                        </a>

                    </div>

                </div>

            </div>
            <div class="col-12 col-md-5 col-lg-4 d-flex flex-column  pt-4" data-aos="fade-up-right"
                data-aos-duration="2000">






                <div class="card card-body my-auto px-md-10 text-center text-white text-md-start rounded-5"
                    style="min-height: 400px; background-image: url(https://contents.mediadecathlon.com/p2158873/k$a6fe3d09bd90786e1c7ab0ea110c915b/ROCKRIDER%20VTT%20ST%20530%20MDB%20TUR%2027%205%20%20F.jpg?f=600x600); background-position: center center;">


                    <h4 class="mb-0 display-5 text-warning fw-bold">{{ __('ui.Sport') }}</h4>

                    <!-- Link -->
                    <a class=" px-0 text-white" href="http://127.0.0.1:8000/categoria/8">
                        {{ __('ui.esplora') }}
                    </a>

                </div>



            </div>
        </div>
    </div>
</section>






<div class="container pt-5 ">
    <div class="text-center wow fadeInUp " data-wow-delay="0.1s"
        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
        <h4 class="section-title text-center text-primary text-uppercase ">{{ __('ui.nostri') }}</h4>
        <h2 class="mb-5 fw-bold">{{ __('ui.esplora-i') }} <span class="text-primary text-uppercase"></span></h2>
    </div>
    <div class="row g-4">
        @forelse ($announcements as $announcement)
            <div class="col-lg-12 col-12 " data-aos="fade-down-right" data-aos-duration="2000">

                <article class="postcard light yellow text-center bg-annunci-home">
                    <a class="postcard__img_link position-relative" href="#">
                        <img class="postcard__img "
                            src="{{ !$announcement->images()->get()->isEmpty()? $announcement->images()->first()->getUrl(1000, 600): 'https://picsum.photos/600' }}"
                            alt="Image Title" />
                    </a>
                    <div class="postcard__text t-dark">
                        <div class="d-flex justify-content-between">

<<<<<<< HEAD
                      <a href="" class=" btn-warning rounded py-2 px-4 fw-bold">{{__('ui.prezzo')}}:{{$announcement->price}} €</a>
                  </div>
                  <h5 class="mb-0">{{$announcement->title}}</h5>
                  <div class="postcard__subtitle small">
                      <p class="card-footer">{{__('ui.pubblicato')}}: {{$announcement->created_at->format('d/m/Y')}} {{__('ui.autore')}}: {{$announcement->user->name}}</p>
                  </div>
                  <div class="postcard__bar"></div>
                  <p class="text-body mb-3 overflow-y-hidden">{{$announcement->body}}</p>
                  <div class="d-flex justify-content-between">
                      <a class=" btn-primary rounded pt-2 px-4 fw-bold text-center" href="{{route('announcement.show', compact('announcement'))}}">{{__('ui.dettagli')}}</a>
                      <a class=" btn-dark rounded py-2 px-4 fw-bold" href="{{route('categoryShow',['category'=>$announcement->category])}}">{{__('ui.categoria')}}: {{$announcement->category->name}}</a>
=======
                            <a href=""
                                class=" btn-warning rounded py-2 px-4 fw-bold">{{ __('ui.prezzo') }}:{{ $announcement->price }}
                                €</a>
                        </div>
                        <h5 class="mb-0">{{ $announcement->title }}</h5>
                        <div class="postcard__subtitle small">
                            <p class="card-footer">Pubblicato il: {{ $announcement->created_at->format('d/m/Y') }}
                                Autore: {{ $announcement->user->name }}</p>
                        </div>
                        <div class="postcard__bar"></div>
                        <p class="text-body mb-3 overflow-y-hidden">{{ $announcement->body }}</p>
                        <div class="d-flex justify-content-between">
                            <a class=" btn-primary rounded pt-2 px-4 fw-bold text-center"
                                href="{{ route('announcement.show', compact('announcement')) }}">{{ __('ui.dettagli') }}</a>
                            <a class=" btn-dark rounded py-2 px-4 fw-bold"
                                href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{ __('ui.categoria') }}:
                                {{ $announcement->category->name }}</a>
>>>>>>> e47290ab42eba01b38222f3352c782b499973bc5

                        </div>
                    </div>

                </article>
            </div>

        @empty
        <h2>{{__('ui.non')}}</h2>
        @endforelse
    </div>
</div>

{{-- newsletter --}}
<div class="container d-flex justify-content-center py-2" data-aos="zoom-in" data-aos-duration="3000">
    <form class="form pb-4 fw-bold text" action="" method="post">
        <span class="title text-center pt-2">{{ __('ui.newsletter') }} </span>
        <p class="description text-center pt-3 px-3">{{ __('ui.newsletter-p') }}</p>
        <div>
            <input placeholder="{{ __('ui.enter-email') }}" type="email" name="email" id="email-address">
            <button type="submit">{{ __('ui.iscriviti') }}</button>
        </div>
    </form>
</div>
{{-- fine newsletter --}}
