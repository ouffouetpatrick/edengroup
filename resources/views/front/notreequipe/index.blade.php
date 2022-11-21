@extends ('front.layout.layout_default')
@section('title')
Notre equipe
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Notre <span>Equipe</span></h1>
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
                <li><span>Notre equipe</span></li>
            </ul>
        </div>
    </section>
</div>
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
    </div>
@endsection