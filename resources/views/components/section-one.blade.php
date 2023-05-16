{{-- Section delle card categorie fare modifiche css --}}
<div class="container">
    <div class="row mt-3">
        <h2 class="display-6 lh-1 fw-bold">Le nostre categorie</h2>

        <div class="splide" id="first-slider">
            <div class="splide__track">

                <div class="splide__list">
                @foreach ($categories as $category)
                    <div class="col-sm-4 splide__slide m-2">
                        <div class="card bg-dark text-white">
                            <div class="card-body card-body-bg-img">
                                <h5 class="card-title">{{$category->name}}</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quas, dolorem debitis.</p>
                                <a href="{{route('categoryShow', compact('category'))}}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>

                @endforeach

                </div>


            </div>
        </div>

    </div>
</div>



<div class="container">
	<div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
		<div class="col">
			<div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background-image: url('https://images.unsplash.com/photo-1580133748682-099a97d17e6c?crop=entropy&amp;amp;cs=tinysrgb&amp;amp;fit=crop&amp;amp;fm=jpg&amp;amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTV8fGplbGx5JTIwZmlzaHxlbnwwfDB8fHwxNjIxNTA0MDU1&amp;amp;ixlib=rb-1.2.1&amp;amp;q=80&amp;amp;w=1080&amp;amp;h=768'); background-size:cover">
				<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					<div class="lc-block pt-5 mt-5 mb-4">
						<div editable="rich">
							<h2 class="display-6 lh-1 fw-bold">Offerte in corso</h2>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						</div>
					</div>
					<ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a class="btn btn-link btn-sm text-white " href="#" role="button">Read more</a></ul>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background:url(https://images.unsplash.com/photo-1580133748682-099a97d17e6c?crop=entropy&amp;amp;cs=tinysrgb&amp;amp;fit=crop&amp;amp;fm=jpg&amp;amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTV8fGplbGx5JTIwZmlzaHxlbnwwfDB8fHwxNjIxNTA0MDU1&amp;amp;ixlib=rb-1.2.1&amp;amp;q=80&amp;amp;w=1080&amp;amp;h=768)  center / cover no-repeat;">
				<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					<div class="lc-block pt-5 mt-5 mb-4">
						<div editable="rich">
							<h2 class="display-6 lh-1 fw-bold">Assistenza 24H</h2>
							<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo inventore recusandae ex nam eius unde voluptate magni</p>
						</div>
					</div>
					<ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a class="btn btn-link btn-sm text-white " href="#" role="button">Read more</a></ul>
				</div>
			</div>
		</div>

		<div class="col">
			<div class="lc-block card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" lc-helper="background" style="background-image: url('https://images.unsplash.com/photo-1580133748682-099a97d17e6c?crop=entropy&amp;amp;cs=tinysrgb&amp;amp;fit=crop&amp;amp;fm=jpg&amp;amp;ixid=MnwzNzg0fDB8MXxzZWFyY2h8MTV8fGplbGx5JTIwZmlzaHxlbnwwfDB8fHwxNjIxNTA0MDU1&amp;amp;ixlib=rb-1.2.1&amp;amp;q=80&amp;amp;w=1080&amp;amp;h=768'); background-size:cover">
				<div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
					<div class="lc-block pt-5 mt-5 mb-4">
						<div editable="rich">
							<h2 class="display-6 lh-1 fw-bold">Annunci rapidi</h2>
							<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Adipisci odit exercitationem neque voluptatibus, ipsam labore ratione eaque. </p>
						</div>
					</div>
					<ul class="lc-block d-flex list-unstyled mt-auto ms-auto"><a class="btn btn-link btn-sm text-white " href="#" role="button">Read more</a></ul>
				</div>
			</div>
		</div>
	</div>
</div>


{{-- <section class="container-fluid">
    <h1>Categorie</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-12 col-md-2 my-4">
            <div class="card shadow" style="width :12rem ;">
            <img src="https://picsum.photos/100" alt="Random img" class="cart-img-top p-3 rounded">
            <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item"><h3 class="fw-lighter">{{$category->name}}</h3></a>
            </div>
        </div>

        @endforeach
    </div>
</section> --}}





<<<<<<< HEAD

{{-- section degli annunci fare modifiche css --}}
<section class="container ">
    <div class="col-12">
        <h2>Annunci In prima vista!</h2>
    </div>
    <div class="row">
        @foreach ($announcements as $announcement)
        <div class="col-12 col-md-3 my-4">
            <div class="card shadow" style="width :18rem ;">
                <img src="https://picsum.photos/200/300" alt="Random img" class="cart-img-top p-3 rounded">
                <div class="card-body">
                    <h5 class="card-title">{{$announcement->title}}</h5>
                    <p class="card-text">{{$announcement->body}}</p>
                    <p class="card-text">{{$announcement->price}}</p>
                    <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-secondary shadow">Dettagli</a>
                    <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="my-2 border-top pt-2 border-dark card-link shadow btn btn-warning">Categoria: {{$announcement->category->name}}</a>
                    <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
=======
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
            <h6 class="section-title text-center text-primary text-uppercase">Nostri Annunci</h6>
            <h1 class="mb-5">Explora i nostri  <span class="text-primary text-uppercase">Annunci</span></h1>
        </div>
        <div class="row g-4">
            @foreach ($announcements as $announcement)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <div class="room-item shadow rounded overflow-hidden">
                    <div class="position-relative">
                        <img class="img-fluid" src="https://picsum.photos/450/300" alt="">
                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">Prezzo: {{$announcement->price}}</small>
                    </div>
                    <div class="p-4 mt-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h5 class="mb-0">{{$announcement->title}}</h5>
                        </div>
                        
                        <p class="text-body mb-3">{{$announcement->body}}</p>
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{route('announcement.show', compact('announcement'))}}">View Detail</a>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{route('categoryShow',['category'=>$announcement->category])}}">Categoria: {{$announcement->category->name}}</a>
                            
                        </div>
                        <p class="card-footer">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}} Autore: {{$announcement->user->name}}</p>
                    </div>
>>>>>>> 0e48119b56a77613aeeb8414eac9c51f8940e95d
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</div>
    {{-- <section class="splide" id="second-slider" aria-label="Splide Basic HTML Example">
        <div class="splide__track">

            <div class="splide__list">
                @foreach ($announcements as $announcement)
                <div class="col-sm-4 splide__slide m-2">
                    <div class="card bg-dark text-white">
                        <div class="card-body card-body-bg-img" >
                            <h5 class="card-title">titolo</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem quas, dolorem debitis.</p>
                            <a href="#" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>

        </div>
    </section> --}}

{{-- section delle due foto inferiori aggiungere scritta --}}

