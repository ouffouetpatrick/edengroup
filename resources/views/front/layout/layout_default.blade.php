<!DOCTYPE html>
<html lang="en"> 
<head>
        <meta charset="utf-8">
        <title>Eden - @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Stylesheets -->
        <!-- <base href="/"> -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <meta property="og:title" content="Eden Group's Entreprise" />
        <meta property="og:type" content="Eden Group's Entreprise" />
        <meta name="keywords" content="Suivez-Nous sur Eden Group's Entreprise">
        <meta name="description" content="Eden Group's Entreprise est un groupe d'entreprise spécialisé dans divers domaine à savoir le bâtiment, la restauration, le cinéma etc...">
        {!! Html::style('styles/css/chosen.css') !!}
        {!! Html::style('styles/lib/bootstrap/css/bootstrap.min.css') !!}<!-- bootstrap grid -->
        {!! Html::style('styles/lib/bootstrap/css/bootstrap-theme.min.css') !!}<!-- bootstrap theme -->
        {!! Html::style('styles/css/style.css') !!}<!-- template styles -->
        {!! Html::style('styles/css/styles.css') !!}<!-- template styles -->
        {!! Html::style('styles/css/cs.css') !!}
        {!! Html::style('styles/css/Away-Message.css') !!}
        {!! Html::style('styles/css/color-default.css') !!}<!-- default template color styles -->
        {!! Html::style('styles/css/retina.css') !!}<!-- retina ready styles -->
        {!! Html::style('styles/css/responsive.css') !!}<!-- responsive styles -->
        {!! Html::style('styles/css/main.css') !!}
        {!! Html::style('styles/css/flaticon.css') !!}
        {!! Html::style('styles/css/animate.css') !!}<!-- animation for content -->
        {!! Html::style('styles/lib/owl-carousel/owl.carousel.css') !!}<!-- .carousels -->
        {!! Html::style('styles/lib/owl-carousel/owl.theme.css') !!}<!-- .carousels -->
        
        
         <!-- Font icons -->
        {!! Html::style('styles/fonts/font-awesome-4.3.0/css/font-awesome.min.css') !!}<!-- Fontawesome icons css -->

        <!-- Revolution slider -->
        {!! Html::style('styles/lib/rs-plugin/css/settings.css') !!}<!-- .rs-settings end -->
        {!! Html::style('styles/lib/rs-plugin/css/builder.css') !!}<!-- settings for rev slider -->
        
        <!-- Magnific Popup - video lightbox -->
        {!! Html::style('styles/css/magnific-popup.css') !!}
        <link rel="icon" type="image/png" href="{{ asset(config('pictures.path').'/styles/img/EdenGroup4.png' ) }}"/>
        <!-- Google Web fonts -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,300italic,400,800,700,600' rel='stylesheet' type='text/css'>
        @yield('style')
        <style type="text/css">
            .color{
                color: #ffc000 !important;
            }
            .ul li a {
                color: #000000 !important;
            }
            .ul li a:hover {
                background: #dedede;
            }
        </style>
    </head>

    <body>
        <!-- .header start -->
        @include('front.pages.header')
        <!-- .header -->
        @yield('content')
        <div class="col-md-12" style="padding:0">
            @include('front.pages.footer')
        </div>
        <a href="#" class="scroll-up">
            <span class="icon-container">
                <img src="{{ asset(config('pictures.path').'/styles/img/svg/arrowup.svg') }}" class="img-responsive" alt="arrow icon"/>
            </span>
        </a>
        <button class="assistance _2So8ItJQ9P6IqaCUlCO-2f flex-center CHAT _3S6qOFxcrgO0yM2f9_l6JZ _364Vk0R65B1GXViJwyA9fM" aria-haspopup="dialog" aria-label="Open the Message Area" id="widgetButton" style="background-color: #0f263a; fill: rgb(255, 255, 255);">
            <div class="darkenButton" style="z-index: -1;"></div>
            <i class="_1ZSagdd_Wbj_ZKw0RkZfOn">
                <svg width="25" height="23" viewBox="0 0 25 23" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.516 9.953C24.516 4.453 19.04 0 12.258 0 5.476 0 0 4.452 0 9.953c0 3.318 1.986 6.24 5.05 8.053-.34 2.552-1.815 4.055-1.844 4.084-.14.14-.17.368-.113.567a.524.524 0 0 0 .482.312c2.95 0 5.335-1.93 6.612-3.206.652.086 1.362.142 2.07.142 6.783 0 12.26-4.452 12.26-9.953z" fill="#FFF" fill-rule="evenodd"></path>
                </svg>
            </i>
        </button>
        {!! Html::script('styles/lib/js/jquery-2.1.4.min.js') !!}<!-- jQuery library -->
        {!! Html::script('styles/lib/bootstrap/js/bootstrap.min.js') !!}<!-- .bootstrap script -->
        {!! Html::script('styles/lib/js/jquery.scripts.min.js') !!}<!-- modernizr, retina... -->  
        {!! Html::script('styles/lib/rs-plugin/js/jquery.themepunch.tools.min.js') !!}<!-- Revolution slider script -->
        {!! Html::script('styles/lib/rs-plugin/js/jquery.themepunch.revolution.min.js') !!}<!-- Revolution slider script -->
        {!! Html::script('styles/lib/js/jquery.magnific-popup.min.js') !!}<!-- used for video lightbox -->
        {!! Html::script('styles/lib/owl-carousel/owl.carousel.min.js') !!}<!-- Carousels script -->
		{!! Html::script('styles/lib/js/retina.js') !!}<!-- retina script -->
        {!! Html::script('styles/lib/js/include.js') !!}<!-- custom js functions -->
        {!! Html::script('styles/lib/angular.js') !!}<!-- .angular script -->
        {!! Html::script('styles/lib/angular-route.js') !!}<!-- .angular script -->
        {!! Html::script('styles/js/pages.modules.js') !!}<!-- .angular script -->
        {!! Html::script('styles/lib/popper.min.js') !!}
        @yield('script')
    </body>
</html>
