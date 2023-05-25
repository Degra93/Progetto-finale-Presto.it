<x-main>
    <div class="spacer"></div>
        <section class="my-5">
                <div class="container my-5">
                        <div class="row bg-light border border-3 border-dark border-opacity-25 rounded">
                            <div class="col-12 col-md-6 text-black">
                                <form action="/login" method="POST"  class="m-5" >
                                        @csrf
                                    <h3 class="fw-normal mb-5 text-center text-body">{{__('ui.entra')}}</h3>
                                    <div class="form-outline mb-2">
                                        <label class="form-label m-2" for="email">{{__('ui.mail')}}</label>
                                        @error('email')
                                            <span class="small text-danger">{{$message}}</span>
                                        @enderror
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{ old('email') }}"/>
                                    </div>

                                    <div class="form-outline mb-2">
                                        <label class="form-label m-2" for="password">{{__('ui.pass')}}</label>
                                        @error('email')
                                            <span class="small text-danger">{{$message}}</span>
                                        @enderror
                                        <input type="password"name="password" id="password" class="form-control form-control-lg" value="{{ old('password') }}"/>
                                    </div>

                                    <div class="pt-1 mb-5 text-center">
                                        <button class="btn-hover btn btn-warning btn-sm py-2 px-5 " type="submit">{{__('ui.log-button')}}</button>
                                    </div>

                                    <p class="small pb-lg-2"><a class="text-muted" href="#!">{{__('ui.forget')}}</a></p>
                                    <p>{{__('ui.no-account')}}<a href="{{route('register')}}" class="link-info p-2">{{__('ui.registrati')}}</a></p>

                                </form>
                            </div>
                            <div class="col-md-6 p-0 d-none d-sm-block">
                                <img src="https://picsum.photos/900/700"
                                    alt="Login image" class="w-100 h-100" >
                            </div>
                        </div>
                    </div>
        </section>
</x-main>
