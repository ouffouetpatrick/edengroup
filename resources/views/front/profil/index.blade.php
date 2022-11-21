@extends ('front.layout.layout_default')
@section('style')
@include('front.dashboard.style')
@endsection
@section('title')
Tableau de bord
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Mon<span> Profil</span></h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="./">Accueil</a></li>
                <li><span>Mon profil</span></li>
            </ul>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
                        @include('front.aside.aside')              
                        <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12 pull-right">
                            <div class="tg-dashboard">
                                <div class="tg-radarsupport tg-sectionborder">
                                    <div class="row" style="margin-bottom: 30px;padding:0 15px;">
                                        <div class="tg-border-heading">
                                            <h3>Information Personnelle</h3>
                                        </div>
                                        <form>
                                            <figure class="tg-dp">
                                                <a href="#"></a>
                                                <a href="/membre/mon-profil">
                                                    <img src="http://localhost/lavaliz1/lavaliz/public/pictures/EiGTayitWL.jpg" class="img-responsive" style="height: 165px; width: 165px">
                                                </a>
                                                <input name='input_10' id='input_1_10' type='file' class='medium' aria-describedby='extensions_message' tabindex='10' /></br></br>
                                            </figure>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="nom">Nom</label>
                                                        <input type="text" class="form-control" id="nom" name="nom" placeholder="{{ Auth::user()->nom }}" required>
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="prenom">Prénoms</label>
                                                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="{{ Auth::user()->prenoms }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="cont">Contact</label>
                                                        <input type="tel" class="form-control" id="cont" name="contact" placeholder="{{ Auth::user()->phone_number1 }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="login-email">Adresse Email</label>
                                                        <input type="email" class="form-control" id="login-email" name="email" placeholder="{{ Auth::user()->email }}" required>
                                                    </div>
                                                </div>
                                            </div><br/><br/>
                                            <button type="submit" class="theme-btn btn-style-three">Modifier</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="tg-amenities">                                          
                                    <div class="tg-border-heading">
                                        <h3>Mot de passe</h3>
                                    </div>
                                    <div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="login-password">Mot de passe actuel</label>
                                                        <input type="password" maxlength="8" class="form-control" id="login-password" name="password" placeholder="password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="login-password">Nouveau password</label>
                                                        <input type="password" maxlength="8" class="form-control" id="login-password" name="password" placeholder="password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="pas">Confirmer password</label>
                                                        <input type="password" class="form-control" id="pas" name="confirmer" placeholder="Confirmer password" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tooltip_templates">
                                        <span id="tooltipster_halte2">
                                            <button type="submit" class="theme-btn btn-style-three">Réinitialiser mot de pass</button>
                                        </span>
                                    </div>
                                </div>   
                            </div>  
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="tg-amenities">                                          
                                    <div class="tg-border-heading">
                                        <h3>Adresse de Livraison</h3>
                                    </div>
                                    <div>
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-placeholder">
                                                        <label for="prenom">Adresse Livraison</label>
                                                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="adresse livraison" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tooltip_templates">
                                        <span id="tooltipster_halte2">
                                            <p>Vous pouvez modifier votre adresse de livraison.</p><br/>
                                            <button type="submit" class="theme-btn btn-style-three">Modifier</button>
                                        </span>
                                    </div>
                                </div>   
                            </div>                     
                        </div>
                    </div>
                </div>       
            </div>
        </main> 
    </section>
</div>
@endsection