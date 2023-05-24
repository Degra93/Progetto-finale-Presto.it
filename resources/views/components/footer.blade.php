<footer class=" section footer-classic context-dark bg-image" style="background: #040303;">
    <div class="container ">
      <div class="row row-30 ">
        <div class="col-md-4 col-xl-5 mt-2">
          <div class="pr-xl-4 text-center">
            <p>Siamo un agenzia che risolverà ogni tuo problema con un semplice click!!</p>
            <!-- Rights-->
            <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>

            <h5>Vuoi lavorare con noi?</h5>
            <button type="button" class="btn btn-primary btn-hover btn btn-danger" data-bs-toggle="modal" data-bs-target="#rifiuta">
                Diventa Revisore2
            </button>

          </div>
        </div>
        <div class="col-md-4 mt-2 text-center">
          <h5>Contatti</h5>
          <dl class="contact-list">
            <dt>Indirizzo:</dt>
            <dd>Aulab, Bari, Italia</dd>
          </dl>
          <dl class="contact-list">
            <dt>email:</dt>
            <dd><a href="mailto:#">presto.it@gmail.com</a></dd>
          </dl>
          <dl class="contact-list">
            <dt>telefono:</dt>
            <dd><a href="tel:#">3312349806</a> <span>or</span> <a href="tel:#">08711009876</a>
            </dd>
          </dl>
        </div>
        <div class="col-md-4 col-xl-3 mt-2 text-center">
          <h5>Links</h5>
         <ul> {{-- class="nav-list"> --}}
            <li class="mt-2"><a href="{{ route('homepage') }}">Home</a></li>
            <li class="mt-2"><a href="{{ route('announcement.index') }}">Annunci</a></li>
            <li class="mt-2"><a href="#">Chi siamo</a></li>
            <li class="mt-2"><a href="#">Contatti</a></li>

          </ul>
        </div>
      </div>
    </div>
    {{-- <div class="row no-gutters social-container">
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
      <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
    </div> --}}



    <!-------------------------- Modal----------------------------------------------->
        <div class="modal fade" id="rifiuta" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p class="h2 text-center text-black">Sei sicuro?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn-hover btn btn-danger" data-bs-dismiss="modal"><a href="{{route('ask.revisor')}}">Si</a></button>
                        <button type="button" class="btn-hover btn btn-warning" data-bs-dismiss="modal">No</button>
                    </div>
                </div>
            </div>
        </div>
    <!-------------------------- Modal----------------------------------------------->
  </footer>
