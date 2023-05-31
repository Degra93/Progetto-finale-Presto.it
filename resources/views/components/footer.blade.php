<footer class=" section footer-classic bg-imagefw-bold context-dark  " style="background-image: linear-gradient(to right , #000000e3, #000000c9)">
    <div class="container ">
      <div class="row row-30 ">
        <div class="col-md-4 col-xl-5 mt-2">
          <div class="pr-xl-4 text-center">
            <p>{{__('ui.chi-siamo')}}</p>
            <!-- Rights-->
            <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
            @if (Auth::check() && Auth::user()->is_revisor)
            
            <h2>Ciao {{ Auth::user()->name }}</h2>
            @elseif (Auth::check())
            <h5>{{__('ui.vuoi')}}</h5>
            <button type="button" class="btn btn-primary btn-hover btn btn-danger" data-bs-toggle="modal" data-bs-target="#footerModal">
              {{__('ui.diventa')}}
            </button>

            @else

            <h2>Registrati o Effettua il Login</h2>
            <button type="button" class="btn-hover btn btn-warning py-2 px-4 m-2"><a class="nav-link" href="{{ route('register') }}">{{__('ui.registrati')}}</a></button>
            <button type="button" class="btn-hover btn btn-warning py-2 px-4 m-2"><a class="nav-link" href="{{ route('login') }}">{{__('ui.log-button')}}</a></button>
          
            @endif

          </div>

          
        </div>
        <div class="col-md-4 mt-2 text-center">
          <h5>{{__('ui.contatti')}}</h5>
          <dl class="contact-list">
            <dt>{{__('ui.indirizzo')}}</dt>
            <dd>Aulab, Bari, Italia</dd>
          </dl>
          <dl class="contact-list">
            <dt>{{__('ui.mail')}}:</dt>
            <dd><a href="mailto:#">shopy-pro.it@gmail.com</a></dd>
          </dl>
          <dl class="contact-list">
            <dt>{{__('ui.telefono')}}</dt>
            <dd><a href="tel:#">3312349806</a> <span>or</span> <a href="tel:#">08711009876</a>
            </dd>
          </dl>
        </div>
        <div class="col-md-4 col-xl-3 mt-2 text-center">
          <h5>Links</h5>
         <ul> {{-- class="nav-list"> --}}
            <li class="mt-2"><a href="{{ route('homepage') }}">Home</a></li>
            <li class="mt-2"><a href="{{ route('announcement.index') }}">{{__('ui.annunci')}}</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-------------------------- Modal----------------------------------------------->
        <div class="modal fade" id="footerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered  modal-lg">
                <div class="modal-content modal-color my-form">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex flex-column  align-items-center align-self-center text-black ">

                        <i class="fa-solid fa-door-open fa-5x mb-4"></i>
                        
                        @if(Auth::check())
                            <p class="h1">Ciao {{ Auth::user()->name }}</p>
                            <p class="h3">la tua email è:{{ Auth::user()->email }}</p>
                            <p class="h3">Vuoi diventare un revisore?</p>
                            <div class="modal-footer  d-flex justify-content-center m-5">
                              <button type="button" class="btn-hover btn btn-danger py-2 px-4 m-2" data-bs-dismiss="modal"><a href="{{route('ask.revisor')}}">Si</a></button>
                              <button type="button" class="btn-hover btn btn-warning py-2 px-4 m-2" data-bs-dismiss="modal">No</button>
                          </div>
                        {{-- @else
                            <p class="h1">Ciao Ospite</p>
                            <p class="h3 text-center">Prima di effettuare la richiesta, è necessario accedere o registrarsi.</p>
                            <div class="modal-footer  d-flex justify-content-center m-5">
                              <button type="button" class="btn-hover btn btn-danger py-2 px-4 m-2" data-bs-dismiss="modal"><a href="{{route('ask.revisor')}}">Si</a></button>
                              <button type="button" class="btn-hover btn btn-warning py-2 px-4 m-2" data-bs-dismiss="modal">No</button>
                          </div> --}}
                        @endif

                    </div>
                    
                </div>
            </div>
        </div>
    <!-------------------------- Modal----------------------------------------------->
  </footer>
