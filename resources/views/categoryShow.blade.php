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
            @forelse ($announcements as $announcement)
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
                            <div class="postcard__bar"></div>
                            <p class="text-body mb-3 overflow-y-hidden">{{ $announcement->body }}</p>
                            <div class="d-flex justify-content-between">
                                <a class=" btn-primary rounded pt-2 px-4 fw-bold text-center"
                                    href="{{ route('announcement.show', compact('announcement')) }}">{{ __('ui.dettagli') }}</a>
                                <a class=" btn-dark rounded py-2 px-4 fw-bold"
                                    href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{ __('ui.categoria') }}:
                                    {{__("ui.".$announcement->category->name)}}</a>

                            </div>
                        </div>

                    </article>
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
