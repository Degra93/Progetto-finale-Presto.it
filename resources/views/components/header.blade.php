{{-- <header> --}}
{{-- <img class="" src="{{URL::asset('/img/2.jpg')}}" alt=""> --}}

<section class="hero">
    <div class="spacer"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 text-center " data-aos="fade-up-right" data-aos-duration="3000">
                <div>
                    <div class="text-label">
                        <h2 class="display-7">{{ __('ui.cambia') }}</h2>
                    </div><br>
                    <div class="text-hero-bold">
                        <h1 class="display-1">{{ __('ui.futuro') }}</h1>
                    </div><br>
                    <div class="text-hero-regular">
                        <h6>{{ __('ui.metodi') }}</h6>
                    </div><br>
                    <div class="cta mb-sm-2">
                        <a href="{{ route('announcement.create') }}"
                            class="btn btn-warning shadow-none ">{{ __('ui.crea') }}</a>

                    </div>
                </div>
            </div>
            <div class="col-md-6 pt-3">
                <img class="img-fluid" data-aos="zoom-in-right" data-aos-duration="3000"
                    src="https://growup-demo.netlify.app/assets/img/illustration/Hero%20Image.svg" alt="header-image">
            </div>
        </div>
    </div>
</section>
{{-- categories slider --}}
<div class="container">
    <div class="row mt-3">
        <h3 class="display-5 pt-3 text-center mt-3">{{ __('ui.allAnnoucements') }}</h3>

        <div class="splide pt-5" id="first-slider">
            <div class="splide__track py-5"
            style="background-image: url('https://themewagon.github.io/caraft/images/img-1.png'); background-position: center center; background-repeat: no-repeat;">

                <div class="splide__list">
                    @foreach ($categories as $category)
                        <div class="col-sm-4 splide__slide m-2">
                            <a href="{{route('categoryShow', $category)}}" class="lc-block card card-cover h-100 overflow-hidden text-black rounded-5 shadow-lg card-copy tilt-custom" data-tilt data-tilt-glare data-tilt-max-glare="0.8" data-tilt-scale="1.1"
                                lc-helper="background">
                                <div class="lc-block pt-5 mt-5 mb-5  neon-text text-center overlay">
                                    <div class="inner">
                                        <h3 class="mb-5">{{ __('ui.' . $category->name) }}</h3>

                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>


            </div>
        </div>

    </div>
</div>
