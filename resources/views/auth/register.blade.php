<x-main>

    <div class="container">
     
            <div class="container">
                <section class="vh-100">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-sm-6 text-black">
                  
                          <div class="px-5 ms-xl-4">
                            <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                            <span class="h1 fw-bold mb-0">Logo</span>
                          </div>
                  
                          <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
                  
                            <form action="/register" method="POST" style="width: 23rem;">
                                @csrf
                              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign In</h3>
                  
                              
                              <div class="form-outline mb-4">
                                
                                <input type="text" name="email" id="email" class="form-control form-control-lg" />
                                <label class="form-label" for="email">Email address</label>
                                @error('email')<span class="small text-danger">{{$message}}</span>@enderror
                                </div>
                    

                             <div class="form-outline mb-4">
                                <input type="text" name="name" id="name" class="form-control form-control-lg">
                                <label for="name" class="form-label">Name</label>
                                @error('name')<span class="small text-danger">{{$message}}</span>@enderror

                            </div>
                  
                              <div class="form-outline mb-4">
                                <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                <label class="form-label" for="password">Password</label>
                                @error('password')<span class="small text-danger">{{$message}}</span>@enderror
                              </div>

                              <div class="form-outline mb-4">
                                <label for="password_confirmation">Conferma password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg">
                            </div>


                            
                        
                  
                              <div class="pt-1 mb-4">
                                <button class="btn btn-info btn-lg btn-block" type="submit">Sign In</button>
                              </div>
                  
                              
                  
                            </form>
                            
                  
                          </div>
                  
                        </div>
                        <div class="col-sm-6 px-0 d-none d-sm-block">
                          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                            alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                        </div>
                      </div>
                    </div>
                  </section>
            </div>
        
    </div>
</x-main>

