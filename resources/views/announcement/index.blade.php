<x-main>
    <div class="spacer"></div>

<div class="container mt-3">
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

</div>
</x-main>
