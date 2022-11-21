@extends ('front.layout.layout_default')
@section('title')
Deatil
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
  	<div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1><span>Detail</span></h1>
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
                <li><span>Detail</span></li>
            </ul>
        </div>
    </section>
    <section>
    <div class="container" style="border: 2px solid silver;height:400px; width: 800px; border-color: orange">
        <div class="col-md-12">
            <p> </p>
            <center><h1 style="font-family: Alegreya">Demande N°1</h1></center><br>
        </div>
        <div class="col-md-12">
            <h1 style="font-family: Alegreya">Service Demandé</h1>
            <p>Peinture</p>
        </div>
        <div class="col-md-12">
            <h1 style="font-family: Alegreya">Description<br></h1> 
            <p>Lorsque vous demandé ce service, nous mettons à votre disposition un personnel qualifié pour peintre votre maison sous toutes ses formes à fin de faire ressortir sa clarté</p>
        </div>
        <div class="col-md-12">
            <h1 style="font-family: Alegreya">Date de demande</h1>
            <p> 12 mars 2020</p>
        </div>
         <div class="col-md-12">
            <h1 style="font-family: Alegreya">Statut</h1>
            <p>En cours...</p>
        </div>
    </div>
    </section><br>
</div>
@endsection