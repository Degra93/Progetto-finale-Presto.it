import 'bootstrap';
import 'animate.css';
AOS.init();


//   navbar
const navE1 = document.querySelector('.navbar');

window.addEventListener('scroll', function(){
    if (window.scrollY >= 53) {
        navE1.classList.add('navbar-scrolled')
    }else{
        navE1.classList.remove('navbar-scrolled')
    }
})
// slider
import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

const splide = new Splide( '#first-slider', {
  type   : 'loop',
  drag   : 'free',
  focus  : 'center',
  perPage: 4,
  autoScroll: {
    speed: 1,
  },
  breakpoints: {
    1200: { perPage: 2, gap: '1rem' },
    640 : { gap: 0 },
    390 : {perPage: 1, gap: 0},
  },

} );
splide.mount( { AutoScroll } );
//             new Splide("#second-slider").mount();
var splide2 = new Splide( '#second-slider' );
var bar    = splide2.root.querySelector( '.my-carousel-progress-bar' );


// Updates the bar width whenever the carousel moves:
splide2.on( 'mounted move', function () {
  var end  = splide2.Components.Controller.getEnd() + 1;
  var rate = Math.min( ( splide2.index + 1 ) / end, 1 );
  bar.style.width = String( 100 * rate ) + '%';
} );


splide2.mount();

            // var splide = new Splide('#second-slider', {
            //     type: 'loop',
            //     perPage: 3,
            //     rewind: true,
            // });

            // splide.mount();

            // var announcementssplide = new Splide('.announcementssplide',{
            //     type: 'loop',
            //     perPage: 3,
            //     rewind: true,
            // });
            // announcementssplide.mount();
            // document.querySelectorAll('.announcementssplide').forEach(carousel => new Splide( carousel, {
            //     type: 'loop',
            //     perPage: 3,
            //     rewind: true,
            //     } ).mount());





