@extends ('front.layout.layout_default')
@section('title')
Nous Contacter
@endsection
@section('style')
<style type="text/css">
.contact-form{
	background: none;
}
.quote.style-3{
	background-color: #0f263a;
}
.contact-form .form-group{
	width: 100%;
}
</style>
@endsection
@section('content')
<!-- .page-content start -->
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated" data-animate='fadeInUp'>
                    <h1><span>Contactez</span> Nous</h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="./">Accueil</a></li>
                <li><a href="#!/Apropos">Apropos</a></li>
                <li><span>Nous contacter</span></li>
            </ul>
        </div>
    </section>
</div>
<div class="page-content">
    <div class="container">
    	<div class="row">
            <div class="col-sm-12">
                @include('front.pages.alerte')
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="contact-form">
                {!! Form::open(['route'=>'front-messages.store','class' => 'wpcf7']) !!}                                
                    <div class="form-group {!! $errors->has('name')?'has-error':'' !!}">
                        <label for="contact-name">
                            <span class="required">*</span> Nom et Prénoms:
                        </label>
                        {!! Form::text('name',null,['aria-required'=>'true','id'=>'contact-name','class'=>'wpcf7-text form-control'])!!}
                        {!! $errors->first('name','<span class="help-block">Champs obligatoire</span>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('email')?'has-error':'' !!}">
                        <label for="contact-email">
                            <span class="required">*</span> Adresse Email
                        </label>
                        {!! Form::email('email',null,['aria-required'=>'true','id'=>'contact-email','class'=>'wpcf7-text form-control'])!!}
                        {!! $errors->first('email','<span class="help-block">Champs obligatoire</span>') !!}
                    </div>
                    <div class="form-group wpcf7-message {!! $errors->has('content')?'has-error':'' !!}">
                        <label for="contact-message">
                            Votre message:
                        </label>
                        {!! Form::textarea('content',null,['aria-required'=>'true','rows'=>'4','id'=>'contact-message','class'=>'wpcf7-textarea form-control'])!!}
                        {!! $errors->first('content','<span class="help-block">Champs obligatoire</span>') !!}
                    </div>
                    {!! Form::submit('Envoyer',null,['id'=>'contact-message','class'=>'wpcf7-submit btn btn-primary float-right comment-reply'])!!}
                {!! Form::close() !!}
                </div><!-- .comment-form end -->              
            </div><!-- .col-md-8 end -->
            <aside class="col-md-4 col-xs-12 aside">
                <ul class="aside-widgets">

                    <!-- .widget.widget-text start -->
                    <li class="widget widget-text">
                        <div class="quote style-3">
                            <div class="feature-body">
                                <span class="icon-container triggerAnimation animated" data-animate='zoomIn'>
                                    <img src="{{ asset(config('pictures.path').'/styles/img/svg/screwdriver.svg') }}" class="img-responsive" alt="cordless screw driver icon"/>
                                </span>
                                <div class="custom-heading style-1">
                                    <a href="{{ Route('front-messages.create') }}">
                                        <h4>Eden Group's Entreprise</h4>
                                    </a>
                                </div><!-- .custom-heading end -->
                                <p>
                                    Construction, restauration, technologie etc...
                                </p>
                            </div><!-- .feature-body end -->
                        </div>
                    </li><!-- .widget-text end -->
                    <li class="widget widget-text">
                        <div class="title">
                            <h2>Nos informations</h2>
                        </div>
                        <ul>
                            <li class="strong-item">
                                <span class="icon-container">
                                    <img src="{{ asset(config('pictures.path').'/styles/img/svg/map.svg') }}" class="img-responsive" alt="map icon"/>
                                </span>
                                Addresse: Abidjan, Cocody riviéra Abatta
                            </li>
                            <li class="strong-item">
                                <span class="icon-container">
                                    <img src="{{ asset(config('pictures.path').'/styles/img/svg/clock.svg') }}" class="img-responsive" alt="clock icon"/>
                                </span>
                                Ouverture - Fermeture: 08:00 - 17:00
                            </li>
                            <li class="strong-item">
                                <span class="icon-container">
                                    <img src="{{ asset(config('pictures.path').'/styles/img/svg/email.svg') }}" class="img-responsive" alt="email icon"/>
                                </span>
                                Email: info@email.com
                            </li>
                        </ul>

                    </li><!-- .widget.widget-text end -->

                </ul><!-- .aside-widgets end -->
            </aside><!-- .aside end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div><!-- .page-content end -->  

<!-- .page-content start -->
<!-- .page-content.custom-background end -->
@endsection