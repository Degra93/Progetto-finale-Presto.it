
<div class="container py-4">
    <x-success/>
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        @csrf
      <div class="mb-2">
        <label class="form-label">Titolo</label>
        @error('title')
            <span class="small text-danger">{{$message}}</span>
        @enderror
        <input class="form-control @error('title') is-invalid @enderror" type="text" wire:model.lazy="title" value="{{old('title')}}" />
      </div>

      <div class="mb-2">
        <label for="category" class="my-1 me-3">Categoria</label>
        <select wire:model.lazy='category'  class="form-control">
            <option value="">Scegli</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
      </div>

      <div class="mb-2">
        <label class="my-1 me-3" for="body">Testo</label>
        @error('body')
            <span class="small text-danger">{{$message}}</span>
        @enderror
        <textarea class="form-control @error('body') is-invalid @enderror"  wire:model.lazy="body" rows="2"  >{{old('body')}}</textarea>
      </div>

      <div class="mb-2">
        <label class="form-label">Prezzo</label>
        @error('price')
            <span class="small text-danger">{{$message}}</span>
        @enderror
        <input class="form-control @error('price') is-invalid @enderror" type="number" wire:model.lazy="price" value="{{old('price')}}" />
      </div>

      <div class="pt-1  text-center">
            <div class="d-flex justify-content-center">
                <button class="btn-hover btn btn-warning btn-sm py-2 px-2 d-block mb-3" type="submit">Crea annuncio</button>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn-hover btn btn-danger btn-sm py-2 px-3 d-block" type="reset">Azzera</button>
            </div>
      </div>
    </form>
</div>
