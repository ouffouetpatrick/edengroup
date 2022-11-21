@extends ('front.layout.layout_default')
@section('title')
Apropos
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>A <span>Propos</span></h1>
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
                <li><span>A propos</span></li>
            </ul>
        </div>
    </section>
</div>
<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="row clearfix">
                    
                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                        <div class="image">
                            <img src="{{ asset(config('pictures.path').'/styles/img/pics/EGE.png') }}" alt="">
                        </div>
                    </div>
                </div>
                
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title-inner">
                                <div class="title">BIENVENUE A</div>
                                <h2>EDEN GROUP'S ENTREPRISE</h2>
                            </div>
                        </div>
                        <div class="text">
                            <strong>Eden Group’s Entreprise (EGE)</strong> est un groupe d’entreprise spécialisé dans l’immobilier, la restauration, le cinéma, la décoration, E-commerce et la Technologie. <br>
                            Nos filiales sont les suivantes : <br>
                            •	<strong>Eden Group’s Entreprise Bat (EGE-Bat)</strong> <br>
                            •	<strong>Eden Group’s Entreprise Restauration (EGE-Restauration)</strong> <br>
                            •	<strong>Eden Group’s Entreprise Cinéma (EGE-Cinéma)</strong> <br>
                            •	<strong>Eden Group’s Entreprise Décoration (EGE-Décoration)</strong> <br>
                            •	<strong>Eden Group’s Entreprise E-commerce (EGE-Commerce)</strong> <br><br>
                            <strong>EGE-Bat</strong> a pour mission de servir une clientèle nombreuse dans la promotion immobilière, la réalisation de travaux de construction et de réhabilitation. <br>
                            Les activités de construction sont menées à bien par une équipe très qualifiés regroupés par corps de métiers pour réaliser le travail sur les chantiers, disposant de tout équipement nécessaire pour la construction. <br><br>
                            Le principal objectif d’<strong>EGE-Bat</strong> consiste à construire des ouvrages de qualités au prix le plus économique possible pour offrir à nos clients, le meilleur rapport qualité/prix de la sous-région. <br><br>
                            Afin de mener votre projet à son terme, conforment à nos souhaits, nous associons à nos action des partenaires dotés de grandes qualité et à un degré de professionnalisme très élevé. <br><br>
                            Notre but est de recueillir avant tout, la satisfaction de notre clientèle par la mise en œuvre de nos meilleures compétence et de mettre à sa disposition toute notre énergie afin d’honorer nos engagement en qualité, coûts et délais.
                        </div> 
                    </div>
                </div>
            </div>
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content quote style-2 custom-img-background dark bkg-img1 mb-70">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <!-- .col-md-12 start -->
            <div class="col-md-12 centered mb-0">
                <div class="custom-heading style-2">
                    <h2>Our mission</h2>
                </div><!-- .custom-heading end -->
                <div class="text triggerAnimation animated fadeInDown" data-animate="fadeInDown" style="opacity: 1;">
                    <p>As a contractor we promise to take care of your project from start to finish,
                        deliver it on time, specified budget and quality.</p>
                </div>
                <p class="author-name triggerAnimation animated fadeInDown" data-animate="fadeInDown" style="opacity: 1;">Theo Abraham, CEO</p>
            </div><!-- .col-md-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <!-- .container start -->
    <div class="container">
        <!-- .row start -->
        <div class="row mb-0">
            <div class="col-md-12 mb-0">
                <div class="custom-heading style-2">
                    <h2>L'équipe Eden Group's Entreprise</h2>
                </div>
            </div>
        </div><!-- .row end -->
        <div class="row clearfix">
				
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-1.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Ronchi Wagase</a></h3>
                        <div class="designation">Constration officer</div>
                    </div>
                </div>
            </div>
            
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-2.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Monica Wagase</a></h3>
                        <div class="designation">Camical officer</div>
                    </div>
                </div>
            </div>
            
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-3.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Jordan Weyker</a></h3>
                        <div class="designation">Cheif Technical officer</div>
                    </div>
                </div>
            </div>
            
            <!--Team Block-->
            <div class="team-block style-two col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="border-one"></div>
                    <div class="border-two"></div>
                    <div class="image">
                        <a href="team.html"><img src="{{ asset(config('pictures.path').'/styles/img/pics/team-4.jpg') }}" alt=""></a>
                        <ul class="social-icons">
                            <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            <li><a href="#"><span class="fa fa-pinterest-p"></span></a></li>
                        </ul>
                    </div>
                    <div class="lower-box">
                        <h3><a href="team.html">Gregory Ohayata</a></h3>
                        <div class="designation">Marketing Manager</div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .container end -->
</div>
@endsection