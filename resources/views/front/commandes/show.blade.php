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
        <div class="row">
            <div class="page-content" style="margin-top:150px">
    <div class="container col-lg-offset-3" style="width: 650px;border: 3px solid #dede;padding: 15px;">
          <center>
            <div class="col-md-12">
                <h1>N° Commande<h1>
                <span>CM001</span></br></br>
            </div>
            <div class="col-md-12">
                <h1>designation<h1>
                <span>Sac a main</span></br></br>
            </div>
            <div class="col-md-12">
                <h1>Quantité<h1>
                <span>5</span></br></br>
            </div>
            <div class="col-md-12">
                <h1>Date Commande<h1>
                <span>23/02/2020</span></br></br>
            </div>
            <div class="col-md-12">
                <h1>Statut<h1>
                <span>En cour....</span></br></br>
            </div>
        </div>
        </center>
        </div>
    </section>
</div>
@endsection