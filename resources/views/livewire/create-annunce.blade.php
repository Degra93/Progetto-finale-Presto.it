<div class="container py-4">
      
      <form wire:submit.prevent="store" enctype="multipart/form-data">
  
          @csrf
          
        <div class="mb-3">
          <label class="form-label">Titolo</label>
          <input class="form-control @error('title') is-invalid @enderror" type="text" wire:model.lazy="title" value="{{old('title')}}" />
          @error('title')
              <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
  
        <div class="mb-3">
          <label for="category">Categoria</label>
          <select wire:model.lazy='category_id'  class="form-control">
            <option value="">Scegli</option>
          
          @foreach($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>
      </div>
      
        <div class="mb-3 col-12">
          <label for="body">Testo</label>
          <textarea class="form-control @error('body') is-invalid @enderror"  wire:model.lazy="body" rows="5"  >{{old('body')}}</textarea>
          @error('body')
              <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
  
        <div class="mb-3">
          <label class="form-label">Prezzo</label>
          <input class="form-control @error('price') is-invalid @enderror" type="number" wire:model.lazy="price" value="{{old('price')}}" />
          @error('price')
              <span class="small text-danger">{{$message}}</span>
          @enderror
        </div>
        
  
        
      
        <div class="d-grid">
          <button class="btn btn-primary btn-lg" type="submit" >Invia</button>
          <button class="btn btn-light btn-lg" type="reset" >Reset</button>
          
          
        </div>
    
      </form>
      @if(session()->has('success'))
      <div class="col-12 mt-5 alert alert-success">
          {{session('success')}}
      </div>
      @endif
    </div>

