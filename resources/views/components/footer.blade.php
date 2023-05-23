<footer class=" section footer-classic bg-image mt-2 fw-bold context-dark  " style="background-image: linear-gradient(to right , #000000e3, #000000c9)">
    <div class="container ">
      <div class="row row-30 ">
        <div class="col-md-4 col-xl-5 mt-2">
          <div class="pr-xl-4 text-center">
            <p>{{__('ui.chi-siamo')}}</p>
            <!-- Rights-->
            <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>

            <h5>{{__('ui.vuoi')}}</h5> <a class="btn btn-danger" onclick="return confirm('Sei sicuro di voler diventare revisore?')" href="{{route('ask.revisor')}}">{{__('ui.diventa')}}</a>
          </div>
        </div>
        <div class="col-md-4 mt-2 text-center">
          <h5>{{__('ui.contatti')}}</h5>
          <dl class="contact-list">
            <dt>{{__('ui.indirizzo')}}</dt>
            <dd>Aulab, Bari, Italia</dd>
          </dl>
          <dl class="contact-list">
            <dt>E-mail:</dt>
            <dd><a href="mailto:#">presto.it@gmail.com</a></dd>
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
            <li class="mt-2"><a href="#">{{__('ui.footer-chi')}}</a></li>
            <li class="mt-2"><a href="#">{{__('ui.contatti')}}</a></li>

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
  </footer>
