<header id="header">
    <nav class="navbar navbar-fixed-top" role="navigation">
        <!-- .navbar-header start -->
        <div class="navbar-header">
            <div class="logo">
                <a href="{{ route('home') }}">
                    <img src="{{ asset(config('pictures.path').'/styles/img/EdenGroup4.png') }}" class="img-responsive" style="width: 70px; height: 70px;" alt="">
                </a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- .navbar-header start -->
        <!-- MAIN NAVIGATION -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li @if(Route::currentRouteName()=='home') class="active" @endif>
                    <a href="{{ route('home') }}">Accueil</a>
                </li>  
                <li class="dropdown">
                    <a @if(Route::currentRouteName()=='front-immobilier.index' || Route::currentRouteName()=='front-ecommerce.index'  || Route::currentRouteName()=='front-restauration.index') class="color dropdown-toggle" @endif href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Nos Domaines</a>
                    <ul class="dropdown-menu submenu">
                        <li @if(Route::currentRouteName()=='front-immobilier.index') class="active" @endif>
                            <a href="{{ Route('front-immobilier.index') }}">Immobilier</a>
                        </li>
                        <li @if(Route::currentRouteName()=='front-ecommerce.index') class="active" @endif>
                            <a href="{{ Route('front-ecommerce.index') }}">E-commerce</a>
                        </li>
                        <li  @if(Route::currentRouteName()=='front-restauration.index') class="active" @endif>
                            <a href="{{ Route('front-restauration.index') }}">Restauration</a>
                        </li>
                    </ul><!-- .dropdown-menu end -->
                </li><!-- .dropdown end -->           
                <li class="dropdown">
                    <a href="{{ Route('apropos.index') }}" @if(Route::currentRouteName()=='apropos.index' || Route::currentRouteName()=='quisommesnous.index' || Route::currentRouteName()=='notreequipe.index' || Route::currentRouteName()=='faq.index') class="color dropdown-toggle" @endif role="button" aria-haspopup="true" aria-expanded="true" >A propos</a>
                    <ul class="dropdown-menu submenu">
                        <li @if(Route::currentRouteName()=='quisommesnous.index') class="active" @endif>
                            <a href="{{ Route('quisommesnous.index') }}">Qui sommes nous</a>
                        </li>
                        <li @if(Route::currentRouteName()=='notreequipe.index') class="active" @endif>
                            <a href="{{ Route('notreequipe.index') }}">Notre équipe</a>
                        </li>
                        <li @if(Route::currentRouteName()=='faq.index') class="active" @endif>
                            <a href="{{ Route('faq.index') }}">FAQ</a>
                        </li>
                    </ul>
                </li>
                <!-- .dropdown end -->
                <li @if(Route::currentRouteName()=='front-messages.create') class="active" @endif)>
                    <a href="{{ Route('front-messages.create') }}" >Nous Contacter</a>
                </li>    
            </ul><!-- .nav.navbar-nav end -->
            <!-- #search start -->
            <div id="search">
                <form role="search" action="#" method="get">
                    <button class="btn btn-primary search" value="..." type="submit">
                        <i class="fa fa-search" style="color: #fff;"></i>
                    </button>
                    <input id="m_search" autocomplete="off" name="s" type="search" style="color:#000" placeholder="Recherche...">
                </form>
            </div>
            <div class="cart-box">
                <div class="dropdown1">
                    <button  class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="flaticon-shopping-cart-of-checkered-design"></span>
                        <span class="total-cart">2</span>
                    </button>
                    <div class="dropdown-menu pull-right cart-panel" aria-labelledby="dropdownMenu3">

                        <div class="cart-product">
                            <div class="inner">
                                <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                <div class="image"><img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt=""></div>
                                <h3><a href="shop-single.html">Flying Ninja</a></h3>
                                <div class="quantity-text">Quantité 1</div>
                                <div class="price">FCFA 5000</div>
                            </div>
                        </div>
                        <div class="cart-product">
                            <div class="inner">
                                <div class="cross-icon"><span class="icon fa fa-remove"></span></div>
                                <div class="image"><img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}"  alt=""></div>
                                <h3><a href="shop-single.html">Patient Ninja</a></h3>
                                <div class="quantity-text">Quantité 1</div>
                                <div class="price">FCFA 5000</div>
                            </div>
                        </div>
                        <div class="cart-total">Total: <span>FCFA 10000</span></div>
                        <ul class="btns-boxed">
                            <li><a href="{{Route('panier.index')}}">Mon panier</a></li>
                            <!-- <li><a href="checkout.html">CheckOut</a></li> -->
                        </ul>

                    </div>
                </div>
            </div>
            <div class="cart-box" role="button" aria-haspopup="true" aria-expanded="true">
                @if(Auth::guest())
                    <li @if(Route::currentRouteName()=='front-messages.create') class="active" @endif>
                        <a href="{{ Route('front-users.index') }}">COMPTE</a>
                    </li>
                @else
                    <li class="dropdown">
                        <a href="#" >{{ Auth::user()->nom }}</a>
                        <ul class="dropdown-menu pull-right cart-panel submenu ul">
                            <li><a href="{{Route('profil.index')}}">Mon profil</a></li>
                            <li><a href="{{Route('dashboard.index')}}">Tableau de bord</a></li>
                            <li><a href="{{Route('demandes.index')}}">Mes demandes</a></li>
                            <li><a href="{{Route('commandes.index')}}">Mes commandes</a></li>
                            <li><a href="{{Route('notifications.index')}}">Notifications</a></li>
                            <li><a href="{{Route('front-users.logout')}}">Deconnexion</a></li>
                        </ul>
                    </li> 
                @endif
            </div>  
            <!-- <div id="lang" data-toggle="dropdown">
                <span style="color: #fff;cursor: pointer;margin-top: 10px;float: left;">
                    <span style="float:left">
                        <img class="img-responsive" src="{{ asset(config('pictures.path').'/styles/img/fr.jpeg') }}" style="width: 20px;">
                    </span>
                    &nbsp;&nbsp;
                    <span style="float:left;margin-top:-5px;margin-left: 10px;color: #fff">
                        Français <i class="fa fa-angle-down"></i>
                    </span>
                </span>
            </div>
            <ul class="dropdown-menu" style="margin-left: 85.5em;min-width: 150px !important;">
                <li>
                    <a href="/fr">
                        <span style="float:left"><img class="img-responsive" src="{{ asset(config('pictures.path').'/styles/img/fr.jpeg') }}" style="width: 20px;"></span>
                        &nbsp;&nbsp;<span style="float:left;margin-top:-5px;margin-left: 10px;color: #fff">Français</span>
                    </a>
                </li>
                <li>
                    <a href="/en">
                        <span style="float:left"><img class="img-responsive" src="./styles/img/en.png" style="width: 20px;"></span>
                        &nbsp;&nbsp;<span style="float:left;margin-top:-5px;margin-left: 10px;color: #fff">Anglais</span>
                    </a>
                </li>
            </ul> -->
            <!-- #search end -->
        </div><!-- MAIN NAVIGATION END -->
    </nav><!-- .navbar.navbar-default end -->            
</header>