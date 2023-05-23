
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


      <div class="d-flex flex-row align-items-center mb-4">
        <div class="form-outline flex-fill mb-0">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control @error('temporary_images.*') is-invalid @enderror"
            placeholder="Img"/>
            @error('temporary_images.*')
            <div class=" text-danger">
              {{$message}}
            </div> 
            @enderror
          </div>
      </div>
      @if (!empty($images))
      <div class="row">
        <div class="col-12"><p>Photo preview:</p>
          <div class="row border border-4 border-info rounded shadow py-4">
            @foreach ($images as $key =>$image )
            <div class="col my-3">
              <div class="img_dim mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
              <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click='removeImage({{$key}})'>Cancella</button>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @endif



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
