<x-main>
<x-navbar/>

<div class="container">
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fa-solid fa-bullhorn fa-2xl pt-5 mt-3" style="color: #0a57db;"></i>
                <span class="h1 fw-bold mb-0 text-center d-flex">CREA UN NUOVO ANNUNCIO</span>
              </div>
      
              <livewire:create-announcement />
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
            </div>
          </div>
        </div>
      </section>
</div>
</x-main>
