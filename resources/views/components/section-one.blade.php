{{-- Section delle card categorie fare modifiche css --}}
<section class="container-fluid">
    <h1>Categorie</h1>
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-12 col-md-2 my-4">
            <div class="card shadow" style="width :8rem ;">
            <img src="https://picsum.photos/100" alt="Random img" class="cart-img-top p-3 rounded">
            <a href="{{route('categoryShow', compact('category'))}}" class="dropdown-item"><h3>{{$category->name}}</h3></a>
            </div>
        </div>
            
        @endforeach
    </div>
</section>




{{-- section degli annunci fare modifiche css --}}
<section class="container">
    <div class="col-12">
        <h2>Annunci In prima vista!</h2>
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
    </div>

</section>

{{-- section delle due foto inferiori aggiungere scritta --}}
<section class="container-fluid">
    <div class="row">
        <div class="col-6"><img src="https://picsum.photos/1000/300" alt="">
        <h2>Scritta</h2></div>
        <div class="col-6"><img src="https://picsum.photos/1000/301" alt="">
        <h2>Scritta</h2></div>
    </div>
</section>