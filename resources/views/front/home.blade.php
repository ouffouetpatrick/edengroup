@extends ('front.layout.layout_default')
@section('title')
Accueil
@endsection
@section('content')

@include('front.home.slider')
<div class="container">
	<div class="col-lg-8">
		<!-- .page-content start -->
		<div style="background-color: rgb(255, 255, 255)" class="page-content">
		  @include('front.home.service')
		</div>
		<div class="page-content">
			@include('front.home.notre-valeur')
		</div>
	</div>
	<div class="col-lg-4" style="margin-top:6em;">
		<div class="col-md-12 col-lg-12" style="padding:0px;">
			<div class="how2 how2-cl4 flex-s-c" style="padding:0px;">
				<input class="form-control" placeholder="Recherche..." style="border-radius:0;">
			</div>
		</div>
		<div class="col-md-12" style="border:1px solid #eee;padding-bottom:20px;margin-top:2em;">
			<!--Publicité-->
			@include('front.baniere-droite.publicite')
			<!--Youtube-->
			@include('front.baniere-droite.youtube')
			<!--Actualité-->
			@include('front.baniere-droite.actualite')
			<!--Entreprenariat-->
			@include('front.baniere-droite.entreprenariat')
			<!--Localisation-->
			@include('front.baniere-droite.localisation')
			<!--Facebook-->
			@include('front.baniere-droite.facebook')
			<!--NewsLetter-->
		</div>
	</div>
</div>
@endsection