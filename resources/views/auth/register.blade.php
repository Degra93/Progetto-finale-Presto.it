<x-main>
    <div class="spacer"></div>
    <section class="my-5">
        <div class="container my-5">
            <div class="row bg-light border border-3 border-dark border-opacity-25 rounded">
                <div class="col-12 col-md-6 text-black">
                    <form action="/register" method="POST" class="m-5">
                        @csrf
                        <h3 class="fw-normal mb-5 text-center text-body">FORM DI REGISTRAZIONE</h3>
                        <div class="form-outline mb-3">
                            <input type="text" name="email" id="email" class="form-control" />
                            <label class="form-label" for="email">Email address</label>
                            @error('email')<span class="small text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-outline mb-3">
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="name" class="form-label">Nome</label>
                            @error('name')<span class="small text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control" />
                            <label class="form-label" for="password">Password</label>
                            @error('password')<span class="small text-danger">{{$message}}</span>@enderror
                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                            <label for="password_confirmation">Conferma password</label>
                        </div>
                        <div class="pt-1 mb-5 text-center">
                            <button class="btn-hover btn btn-warning btn-sm py-2 px-5 " type="submit">Registrati qui</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 p-0 d-none d-sm-block">
                    <img src="https://picsum.photos/900/700" alt="Login image" class="w-100 h-100" >
                </div>
            </div>
        </div>
    </section>
    <x-footer/>
</x-main>

