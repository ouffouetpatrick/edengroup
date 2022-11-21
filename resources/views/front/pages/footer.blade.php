<div class="page-content custom-img-background dark">
    <section class="newsletter-section">
        <div class="auto-container">
            <div class="inner-container">
                <div class="row clearfix">                
                    <!--Title Column-->
                    <div class="title-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="icon-box">
                                <span class="icon flaticon-mail"></span>
                            </div>
                            <h4>S'inscrire à notre Newsletter</h4>
                            <div class="title">Pour recevoir des nouveautés &amp; mise à jour</div>
                        </div>
                    </div>                
                    <!--Form Column-->
                    <div class="form-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">                        
                            <!--Subscribe Form-->
                            <div class="subscribe-form">
                                {!! Form::open(['route'=>'front-newsletters.store']) !!}
                                    <div class="form-group">
                                        {!! Form::email('email_newletter',null,['placeholder'=>'Adresse Email','autocomplete'=>"off"]) !!}
                                        {!! $errors->first('email_newletter','<span class="help-block">:message</span>') !!}
                                        <button type="submit" class="theme-btn btn-style-three">S'inscrire</button>
                                    </div>
                                {!! Form::close() !!}
                            </div>
                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
</div>
<div id="footer-wrapper">
    <footer class="sec-padding footer-bg footer-bg3">
        <div class="container clearfix">
            <div class="row">
                <div class="widget about-us-widget col-md-3 col-sm-6"><a href="#"><img src="./styles/img/EdenGroup4.png" alt=""></a>
                    <p>Notre objectif, c'est de satisfaire nos clients dans tout les domaines.
                       D'ou notre slogan <strong>Ensemble pour vous satisfaire</strong>
                    </p>
                    <a href="#!/Apropos">Lire suite <i class="fa fa-angle-double-right"></i></a>
                  <ul class="nav">
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                  </ul>
                </div>
                <div class="widget widget-links col-md-3 col-sm-6">
                  <h4 class="widget_title">Nos services</h4>
                  <div class="widget-contact-list row m0">
                    <ul>
                      <li><a href="{{Route('front-immobilier.index')}}">- Immobilier</a></li>
                      <li><a href="{{Route('front-ecommerce.index')}}">- E-commerce</a></li>
                      <li><a href="{{Route('front-restauration.index')}}">- Restauration</a></li>
                      <li><a href="#">- Technologie</a></li>
                    </ul>
                  </div>
                </div>
                <div class="widget widget-links col-md-3 col-sm-6">
                  <h4 class="widget_title">Liens de page</h4>
                  <div class="widget-contact-list row m0">
                    <ul>
                      <li><a href="{{Route('apropos.index')}}">- A propos</a></li>
                      <li><a href="{{ route('home') }}">- Accueil</a></li>
                      <li><a href="{{ Route('front-messages.create') }}">- Nous contacter</a></li>
                    </ul>
                  </div>
                </div>
                <div class="widget widget-contact col-md-3 col-sm-6">
                  <h4 class="widget_title">Nos coordonnées</h4>
                  <div class="widget-contact-list row m0">
                    <ul>
                      <li><i class="fa fa-map-marker"></i>
                        <div class="fleft location_address"><a href="#">Abidjan, Cocody riviera faya</a></div>
                      </li>
                      <li><i class="fa fa-phone"></i>
                        <div class="fleft contact_no"><a href="#">(+225) 49 161 830</a></div>
                      </li>
                      <li><i class="fa fa-envelope-o"></i>
                        <div class="fleft contact_mail"><a href="mailto:endengroupafrica@gmail.com">endengroupafrica@gmail.com</a></div>
                      </li>
                      <li><i class="icon icon-Timer"></i>
                        <div class="fleft service_time"><a href="#">Mon - Sat : 9am to 6pm</a></div>
                      </li>
                    </ul>
                  </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div id="copyright-container">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6 col-sm-6">
                <p><strong>© EDEN GROUP'S ENTREPRISE</strong> 2019. Tout droits reservés</p>
            </div><!-- .col-md-6 end -->

            <!-- .col-md-6 start -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>