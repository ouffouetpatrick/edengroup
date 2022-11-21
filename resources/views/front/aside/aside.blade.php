<div class="col-lg-4 col-md-3 col-sm-4 col-xs-12 pull-left">
    <aside id="tg-sidebar" class="tg-sidebar">
        <div class="tg-widget tg-widget-user">
            <figure class="tg-dp">
                <a href="#"></a>
                <a href="/membre/mon-profil">
                    <img src="http://localhost/lavaliz1/lavaliz/public/pictures/EiGTayitWL.jpg" class="img-responsive" style="height: 165px; width: 165px">
                </a>            
            </figure>
            <div class="tg-border-heading">
                <h2><a href="#" >{{ Auth::user()->nom }}</a></h2>
            </div> 
            <a href="/membre/mon-profil#avis">
                <div class="rating product--rating">
                    <ul>
                        <li><span class="fa fa-star"></span></li>
                        <li><span class="fa fa-star"></span></li>
                        <li><span class="fa fa-star"></span></li>
                        <li><span class="fa fa-star"></span></li>
                        <li><span class="fa fa-star"></span></li>
                    </ul> 
                </div>
            </a>  
            <div class="ProfilCompletion">
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="42.86" aria-valuemin="0" aria-valuemax="100" style="width: 42.86%">
                        42.86%
                    </div>
                </div>
            </div>
            <p class="alert alert-warning">
                Un profil complété, c'est 80% de réponses supplémentaires. (Cliquer sur <i class="fa fa-arrow-circle-right"></i> ci-dessous).
            </p>  
        </div>
    </aside>
</div>