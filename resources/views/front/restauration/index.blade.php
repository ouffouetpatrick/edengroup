@extends ('front.layout.layout_default')
@section('title')
Restauration
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-2 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1><span>Restauration</span></h1>
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
                <li><a href="#!/">A propos</a></li>
                <li><a href="#!/service">Services</a></li>
                <li><span>Restauration</span></li>
            </ul>
        </div>
    </section>
</div>
<div class="page-content">
    <div class="container">
        <section class="single-service-page">
            <div class="container clearfix">
                <div class="row">
                    <div class="col-md-4 single-side-left">
                        <div class="single-sidebar-widget">
                            <div class="special-links">
                                <ul>
                                    <li><a href="{{ Route('front-immobilier.index') }}">Immobilier</a></li>
                                    <li><a href="{{ Route('front-ecommerce.index') }}">E-commerce</a></li>
                                    <li class="active"><a href="{{ Route('front-restauration.index') }}">Restauration</a></li>
                                    <li><a href="chemical.html">Technologie</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-sidebar-widget">
                            <div class="single-service-contact">
                                <h3>	Avez-vous bésion d'une assistance?</h3>
                                <p>Vous pouvez nous laisser un message en cliquant.</p><a href="#!/Nous-contacter">Par ici<i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 pull-right tab-content">
                        <!-- meterial engineering-->
                        <div id="meterial" class="tab-pane fade in active">
                            <div id="myCarousel" class="image-box clearfix carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active animated fadeInUp">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Restauration/images4.jpg') }}" alt="Chania">
                                        <div class="carousel-caption">
                                        <h3>Los Angeles</h3>
                                        <p>LA is always so much fun!</p>
                                        </div>
                                    </div>                               
                                    <div class="item">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Restauration/images3.jpg') }}" alt="Chicago">
                                        <div class="carousel-caption">
                                        <h3>Chicago</h3>
                                        <p>Thank you, Chicago!</p>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="{{ asset(config('pictures.path').'/styles/img/Restauration/_20181013_112221.jpg') }}" alt="New York">
                                        <div class="carousel-caption">
                                        <h3>New York</h3>
                                        <p>We love the Big Apple!</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Left and right controls -->
                                <a class="left carousel-control" data-target="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" data-target="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <div class="sec-title">
                                <h2><span>Restauration</span></h2>
                                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- La liste des produits par catégorie -->
                <div class="row">
                    <h3 class="wthree_text_info">Plats <span>du jour</span></h3>
                    
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="styles/img/IMAGES/12.jpg" alt="" class="pro-image-front">
                                                <img src="styles/img/IMAGES/12.jpg" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{ route('front-restauration.show',1) }}" class="link-product-add-cart">Voir détail</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">Nouveau</span>  
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Foufou sauce claire</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">FCFA 5000</span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="styles/img/IMAGES/11.jpg" alt="" class="pro-image-front">
                                                <img src="styles/img/IMAGES/11.jpg" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{ route('front-restauration.show',1) }}" class="link-product-add-cart">Voir détail</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">Nouveau</span>  
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">chep rouge</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">FCFA 5000</span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="styles/img/IMAGES/13.jpg" alt="" class="pro-image-front">
                                                <img src="styles/img/IMAGES/13.jpg" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{ route('front-restauration.show',1) }}" class="link-product-add-cart">Voir détail</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">Nouveau</span>  
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Foutou sauce graine</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">FCFA 5000</span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 product-men">
                                        <div class="men-pro-item simpleCart_shelfItem">
                                            <div class="men-thumb-item">
                                                <img src="styles/img/IMAGES/14.jpg" alt="" class="pro-image-front">
                                                <img src="styles/img/IMAGES/14.jpg" alt="" class="pro-image-back">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="{{ route('front-restauration.show',1) }}" class="link-product-add-cart">Voir détail</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">Nouveau</span>  
                                            </div>
                                            <div class="item-info-product ">
                                                <h4><a href="single.html">Attiéké poulet</a></h4>
                                                <div class="info-product-price">
                                                    <span class="item_price">FCFA 5000</span>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                                    <form action="#" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="business" value=" ">
                                                            <input type="hidden" name="item_name" value="Formal Blue Shirt">
                                                            <input type="hidden" name="amount" value="30.99">
                                                            <input type="hidden" name="discount_amount" value="1.00">
                                                            <input type="hidden" name="currency_code" value="USD">
                                                            <input type="hidden" name="return" value=" ">
                                                            <input type="hidden" name="cancel_return" value=" ">
                                                            <input type="submit" name="submit" value="Ajouter au panier" class="button">
                                                        </fieldset>
                                                    </form>
                                                </div>                                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <h3>Menu 1</h3>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <h3>Menu 2</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <h3>Menu 3</h3>
                                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection