@extends ('front.layout.layout_default')
@section('title')
Detail
@endsection
@section('style')
@include('front.ecommerce.style')
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
                <li><span>DETAIL</span></li>
            </ul>
        </div>
    </section>
    <section>
        <!--================Single Product Area =================-->
        <div class="product_image_area" style="margin-right: 150px; margin-left: 150px">
            <div class="container">
                <div class="row s_product_inner">
                    <div class="col-sm-6">
                        <section class="page-content" id="content">
                            <div class="images-container">
                                <div class="product-cover">
                                    <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="sac" style="width: 70%;">
                                </div>
                                <div class="sous-image">
                                    <ul class="product-images js-qv-product-images">
                                        <li class="thumb-container">
                                            <img class="" data-image-medium-src="" src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" title="" width="100">
                                        </li>
                                    </ul>   
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-sm-5 offset-lg-1">
                        <div class="s_product_text">
                            <h3>Sac à Main Pour Femme</h3>
                            <h2 style="color: #ffc000">5000F</h2>
                            <ul class="list">
                                <li>Catégorie : Sac</li>
                                <li>Stock : 5</li>
                            </ul>
                            <h3>Description</h3>
                            <p>Mill Oil is an innovative oil filled radiator with the most modern technology. If you are looking for
                            something that can make your interior look awesome, and at the same time give you the pleasant warm feeling
                            during the winter.</p>
                            <div class="product_count">
                            <label for="qty">Quantité:</label>
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                 class="increase items-count" type="button"><i class="ti-angle-left"></i></button>
                                <input type="number" style="border: 1px solid" name="qty" id="sst" size="2" maxlength="12" value="1" title="Quantite:" class="input-text qty">
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"class="reduced items-count" type="button"><i class="ti-angle-right"></i></button>
                                <a class="button warning-btn" href="#"><i class="fa fa-shopping-cart"></i>Ajouter au panier</a>              
                            </div>
                            <div>
                                <li>
                                    <i class="fa fa-facebook-official" style="font-size: 30px"></i>
                                    <i class="fa fa-twitter" style="font-size: 30px"></i>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Single Product Area =================-->
        <div class="col-md-10" style="padding-bottom:30px;margin-right: 150px;margin-left: 120px;">
            <div id="menu1" style="">
                <div class="col-md-3 product-men">
                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}"  alt="" class="pro-image-front">
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Voir détail</a>
                                </div>
                            </div>
                            <span class="product-new-top">Nouveau</span>  
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
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
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-front">
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Voir détail</a>
                                </div>
                            </div>
                            <span class="product-new-top">Nouveau</span>  
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
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
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-front">
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Voir détail</a>
                                </div>
                            </div>
                            <span class="product-new-top">Nouveau</span>  
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
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
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-front">
                            <img src="{{ asset(config('pictures.path').'/styles/img/articles/1.jpg') }}" alt="" class="pro-image-back">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Voir détail</a>
                                </div>
                            </div>
                            <span class="product-new-top">Nouveau</span>  
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">Formal Blue Shirt</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">FCFA 5000</span>
                            </div>
                            <div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out button2">
                                <form action="#" method="#">
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
        </div>
    </section>
</div>
@endsection