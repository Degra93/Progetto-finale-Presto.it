<div class="container py-4">
    <x-success/>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <input class="form-control @error('title') is-invalid @enderror" type="text" wire:model.lazy="title" value="{{old('title')}}" />
            <label class="form-label">Titolo</label>
            @error('title')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <select wire:model.lazy='category'  class="form-control">
                <option value="">Scegli</option>
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            <label for="category">Categoria</label>
        </div>
        <div class="mb-3">
            <textarea class="form-control p-0 @error('body') is-invalid @enderror"  wire:model.lazy="body" rows="2"  >{{old('body')}}</textarea>
            <label for="body">Testo</label>
            @error('body')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <input class="form-control @error('price') is-invalid @enderror" type="number" wire:model.lazy="price" value="{{old('price')}}" />
            <label class="form-label">Prezzo</label>
            @error('price')
                <span class="small text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="pt-1  text-center">
            <div class="d-flex justify-content-center">
                <button class="btn-hover btn btn-warning btn-sm py-2 px-3 d-block mb-3" type="submit">Crea annuncio</button>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn-hover btn btn-danger btn-sm py-2 px-3 d-block " type="reset">Azzera</button>
            </div>
        </div>
    </form>
</div>
