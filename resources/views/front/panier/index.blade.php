@extends ('front.layout.layout_default')
@section('title')
Mon panier
@endsection
@section('style')
@include('front.panier.style')
@endsection
@section('script')
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
  	<div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Mon <span>Panier</span></h1>
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
                <li><span>Mon Panier</span></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="col-md-10" style="margin-left:145px">
                <div class="table-responsive" >
                    <table class="timetable_sub">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Produit</th>
                                <th>Quantité</th>
                                <th>Nom Produit</th>
                                <th>Prix Unitaire</th>
                                <th>Coût Total</th>
                                <th>Supprimer</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="rem1">
                                <td class="invert">1</td>
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/a.jpg') }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Back Cover</td>
                                <td class="invert">$259</td>
                                <td class="invert">$259</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close1"> </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="rem2">
                                <td class="invert">2</td>
                                <td class="invert-image">
                                    <a href="single2.html">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/a3.jpg') }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Cordless Trimmer</td>
                                <td class="invert">$1,999</td>
                                <td class="invert">$1,999</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close2"> </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="rem3">
                                <td class="invert">3</td>
                                <td class="invert-image">
                                    <a href="single.html">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/articles/a4.jpg') }}" alt=" " class="img-responsive">
                                    </a>
                                </td>
                                <td class="invert">
                                    <div class="quantity">
                                        <div class="quantity-select">
                                            <div class="entry value-minus">&nbsp;</div>
                                            <div class="entry value">
                                                <span>1</span>
                                            </div>
                                            <div class="entry value-plus active">&nbsp;</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="invert">Nikon Camera</td>
                                <td class="invert">$37,490</td>
                                <td class="invert">$37,490</td>
                                <td class="invert">
                                    <div class="rem">
                                        <div class="close3"> </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table><br>
                    <div class="col-md-offset-10">
                        <p style="font-size: 25px; font-weight: bold; color: #0f263a">Total : 5000F</p>
                    </div>
                </div>
                <div class="col-md-offset-9">
                    <div class="checkout-right-basket">
                        <a href="payment.html">Passer la commande
                            <span class="fa fa-shopping-cart"></span>
                        </a>
                    </div>
                </div>
        </div> 
    </section>
</div>
@endsection
