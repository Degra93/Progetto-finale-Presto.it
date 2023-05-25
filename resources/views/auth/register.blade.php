<x-main>
    <div class="spacer"></div>
    <section class="my-5">
        <div class="container my-5">
            <div class="row bg-light border border-3 border-dark border-opacity-25 rounded">
                <div class="col-12 col-md-6 text-black">
                    <form action="/register" method="POST" class="m-5">
                        @csrf
                        <h3 class="fw-normal mb-5 text-center text-body">{{__('ui.form')}}</h3>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="email">{{__('ui.mail')}}</label>
                            @error('email')<span class="small text-danger">{{$message}}</span>@enderror
                            <input type="text" name="email" id="email" class="form-control" />
                        </div>
                        <div class="form-outline mb-3">
                            <label for="name" class="form-label">{{__('ui.nome')}}</label>
                            @error('name')<span class="small text-danger">{{$message}}</span>@enderror
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-outline mb-3">
                            <label class="form-label" for="password">{{__('ui.pass')}}</label>
                            @error('password')<span class="small text-danger">{{$message}}</span>@enderror
                            <input type="password" name="password" id="password" class="form-control" />
                        </div>
                        <div class="form-outline mb-3">
                            <label for="password_confirmation">{{__('ui.conferma-pass')}}</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>
                        <div class="pt-1 mb-5 text-center">
                            <button class="btn-hover btn btn-warning btn-sm py-2 px-5 " type="submit">{{__('ui.registrati')}}</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 p-0 d-none d-sm-block">
                    <img src="https://picsum.photos/900/700" alt="Login image" class="w-100 h-100" >
                </div>
            </div>
        </div>
    </section>
</x-main>

