import 'bootstrap';
import 'animate.css';

//   navbar
const navE1 = document.querySelector('.navbar');

window.addEventListener('scroll', function(){
    if (window.scrollY >= 40) {
        navE1.classList.add('navbar-scrolled')
    }else{
        navE1.classList.remove('navbar-scrolled')
    }
})

import { AutoScroll } from '@splidejs/splide-extension-auto-scroll';

const splide = new Splide( '#first-slider', {
  type   : 'loop',
  drag   : 'free',
  focus  : 'center',
  perPage: 5,
  autoScroll: {
    speed: 1,
  },
  breakpoints: {
    1200: { perPage: 2, gap: '1rem' },
    640 : { gap: 0 },
    390 : { perPage: 1},
  },

} );
splide.mount( { AutoScroll } );
//             new Splide("#second-slider").mount();


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




