<x-main>
    <x-navbar/>
        <section class="my-5">
                <div class="container my-5">
                        <div class="row bg-light border border-3 border-dark border-opacity-25 rounded">
                            <div class="col-12 col-md-6 text-black">
                                <form action="/login" method="POST"  class="m-5" >
                                        @csrf
                                    <h3 class="fw-normal mb-5 text-center text-body">LOGIN FORM</h3>
                                    <div class="form-outline mb-2">
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{ old('email') }}"/>
                                        <label class="form-label m-2" for="email">Email address</label>
                                        @error('email')
                                            <span class="small text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-2">
                                        <input type="password"name="password" id="password" class="form-control form-control-lg" value="{{ old('password') }}"/>
                                        <label class="form-label m-2" for="password">Password</label>
                                        @error('email')
                                            <span class="small text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="pt-1 mb-5 text-center">
                                        <button class="btn-hover btn btn-warning btn-sm py-2 px-5 " type="submit">Login</button>
                                    </div>

                                    <p class="small pb-lg-2"><a class="text-muted" href="#!">Password dimenticata?</a></p>
                                    <p>Non hai un account? <a href="{{route('register')}}" class="link-info">Registrati qui</a></p>

                                </form>
                            </div>
                            <div class="col-md-6 p-0 d-none d-sm-block">
                                <img src="https://picsum.photos/900/700"
                                    alt="Login image" class="w-100 h-100" >
                            </div>
                        </div>
                    </div>
        </section>
    <x-footer/>
</x-main>
