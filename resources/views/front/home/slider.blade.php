<div class="tp-banner-container fullwidthbanner">
    <div id="rev-slider" class="tp-banner">
         <ul>
             <!-- SLIDE ONE -->
             <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                 <!-- MAIN IMAGE -->
                 <img src="{{ asset(config('pictures.path').'/styles/img/slider/slide-01.jpg') }}" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                 <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                      data-x="110"
                      data-y="310"
                      data-speed="500"
                      data-start="1000"
                      data-easing="Back.easeOut"
                      data-endspeed="500"
                      style="z-index: 3; font-size:35px; max-width: auto; max-height: auto; white-space: nowrap;"
                      >
                      <div class="content text-left pull-right">
                        <h1 data-animation="animated fadeInUp" class="bnrfnt40">EDEN GROUP'S BAT<br></h1>
                        <p data-animation="animated fadeInDown" class="pln_he">
                            Est une branche d'Eden Group's Entreprise <br>
                            qui s'occupe du volet immobilier. <br>
                            Elle donne la possibilité à ces clients de voir des plans de maison, <br>
                            les clients peuvent aussi proposer des plans.
                        </p>
                        <a data-animation="animated fadeInUp" href="about_us.html" style="display: inline-block;" class="view-all hvr-bounce-to-right slide_learn_btn btn btn0">
                            Lire suite
                        </a>
                      </div>
                     <!-- EDEN GROUP'S ENTREPRISE <span>Construction</span> Company -->
                 </div>

                 <div class="tp-caption tp-small-heading sfb"
                      data-x="360"
                      data-y="370"
                      data-speed="500"
                      data-start="1100"
                      data-easing="Back.easeOut"
                      data-endspeed="500"
                      style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                      >
                     <!-- Company taglines goes here -->
                     <!-- <br>
                     <br> 
                     <div style="margin-left: -10em;"><button class="btn btn-primary" style="padding:15px 33px; color:#ffff">En savoir plus</button></div> -->
                 </div>
             </li><!-- SLIDE ONE END -->
             
             <!-- SLIDE TWO -->
             <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                 <!-- MAIN IMAGE -->
                 <img src="{{ asset(config('pictures.path').'/styles/img/slider/slide-02.jpg') }}" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                 <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                      data-x="110"
                      data-y="310"
                      data-speed="500"
                      data-start="1000"
                      data-easing="Back.easeOut"
                      data-endspeed="500"
                      style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                      >
                      <div class="content text-left pull-right">
                            <h1 data-animation="animated fadeInUp" class="bnrfnt40">EDEN GROUP'S RESTAURATION<br></h1>
                            <p data-animation="animated fadeInDown" class="pln_he">
                                Est une branche d'Eden Group's Entreprise <br>
                                qui s'occupe du volet Restauration. <br>
                                Elle met des plats du jour à la disposition de ces clients.
                            </p>
                            <a data-animation="animated fadeInUp" href="about_us.html" style="display: inline-block;" class="view-all hvr-bounce-to-right slide_learn_btn btn btn0">
                                Lire suite
                            </a>
                        </div>
                 </div>

                 <div class="tp-caption tp-small-heading sfb"
                      data-x="360"
                      data-y="370"
                      data-speed="500"
                      data-start="1100"
                      data-easing="Back.easeOut"
                      data-endspeed="500"
                      style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                      >
                 </div>
             </li><!-- SLIDE TWO END -->

             <!-- SLIDE THREE -->
             <li data-transition="fade" data-slotamount="5" data-masterspeed="700" data-title="winter">
                 <!-- MAIN IMAGE -->
                 <img src="{{ asset(config('pictures.path').'/styles/img/slider/slide-03.jpg') }}" alt="slidebg3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                 <div class="tp-caption tp-big-heading tp-big-heading-bold tp-white sfb"
                      data-x="110"
                      data-y="310"
                      data-speed="500"
                      data-start="1000"
                      data-easing="Back.easeOut"
                      data-endspeed="500"
                      style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                      >
                      <div class="content text-left pull-right">
                            <h1 data-animation="animated fadeInUp" class="bnrfnt40">EDEN GROUP'S E-COMMERCE<br></h1>
                            <p data-animation="animated fadeInDown" class="pln_he">
                                Est une branche d'Eden Group's Entreprise <br>
                                qui s'occupe du volet commerce. <br>
                                Elle met des articles à la disposition de ces clients.
                            </p>
                            <a data-animation="animated fadeInUp" href="about_us.html" style="display: inline-block;" class="view-all hvr-bounce-to-right slide_learn_btn btn btn0">
                                Lire suite
                            </a>
                        </div>
                 </div>

                 <div class="tp-caption tp-small-heading sfb"
                      data-x="360"
                      data-y="370"
                      data-speed="500"
                      data-start="1100"
                      data-easing="Back.easeOut"
                      data-endspeed="500"
                      style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;"
                      >
                 </div>
             </li><!-- SLIDE THREE END -->
         </ul>
    </div>
    <!-- .tp-banner end -->
 </div>
 <!-- end banniere -->
 <!-- .tp-banner-container end -->
@section('script')
<script>
    /* <![CDATA[ */
    jQuery(document).ready(function ($) {
        'use strict';

        jQuery('#rev-slider').revolution(
                {
                    dottedOverlay: "none",
                    delay: 9000,
                    startwidth: 1170,
                    startheight: 700,
                    hideThumbs: 200,
                    thumbWidth: 100,
                    thumbHeight: 50,
                    thumbAmount: 3,
                    navigationType: "none",
                    navigationArrows: "solo",
                    navigationStyle: "preview5",
                    touchenabled: "on",
                    onHoverStop: "off",
                    swipe_velocity: 0.7,
                    swipe_min_touches: 1,
                    swipe_max_touches: 1,
                    drag_block_vertical: false,
                    keyboardNavigation: "on",
                    navigationHAlign: "center",
                    navigationVAlign: "bottom",
                    navigationHOffset: 0,
                    navigationVOffset: 20,
                    soloArrowLeftHalign: "left",
                    soloArrowLeftValign: "center",
                    soloArrowLeftHOffset: 20,
                    soloArrowLeftVOffset: 0,
                    soloArrowRightHalign: "right",
                    soloArrowRightValign: "center",
                    soloArrowRightHOffset: 20,
                    soloArrowRightVOffset: 0,
                    shadow: 0,
                    fullWidth: "on",
                    fullScreen: "off",
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    forceFullWidth: "off",
                    fullScreenAlignForce: "off",
                    minFullScreenHeight: "400",
                    hideThumbsOnMobile: "off",
                    hideNavDelayOnMobile: 1500,
                    hideBulletsOnMobile: "off",
                    hideArrowsOnMobile: "off",
                    hideThumbsUnderResolution: 0,
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    startWithSlide: 0,
                    hideTimerBar: "on"
                });

        $('.video-post').magnificPopup({
            type: 'iframe',
            iframe: {
                markup: '<div class="mfp-iframe-scaler">' +
                        '<div class="mfp-close"></div>' +
                        '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                        '</div>'
            }
        });

        // GALLERY CAROUSEL
        $('#gallery-carousel').owlCarousel({
            items: 5, //5 items above 1000px browser width
            itemsCustom: [[0, 1], [600, 2], [1000, 4], [1300, 5]],
            autoPlay: true,
            pagination: false,
            navigation: true
        });

        // TESTIMONIAL CAROUSEL START 
        $('#testimonial-carousel').owlCarousel({
            items: 2, //2 items above 1000px browser width
            itemsCustom: [[0, 1], [600, 2], [1000, 2]],
            autoPlay: true,
            pagination: false,
            navigation: true
        });

    });
    /* ]]> */
</script>
@endsection