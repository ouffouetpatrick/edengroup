@extends ('front.layout.layout_default')
@section('title')
Tableau de bord
@endsection
@section('style')
@include('front.dashboard.style')
<style type="text/css">
.table {
    border-top: 1px solid #d6d6d6;
    border-bottom: 1px solid #d6d6d6;
}
table th {
    color: #343434;
    font-weight: normal;
}
th {
    text-transform: initial !important;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {
    padding: 13px 8px;
    border-color: #d6d6d6;
}
table td, table th {
    padding: 13px 8px;
    line-height: 1.42857143;
    vertical-align: top;
    border: 1px solid #d6d6d6;
}
table tbody tr td{
    text-align: left;
}
</style>
@endsection
@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
    <div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Tableau<span> de bord</span></h1>
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
                <li><span>Tableau de bord</span></li>
            </ul>
        </div>
    </section>
    <section class="breadcumb-wrapper">
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-twocolumns" class="tg-twocolumns tg-haslayout">
                        <!-- Aside !--> 
                        @include('front.aside.aside')             
                        <div class="col-lg-8 col-md-9 col-sm-8 col-xs-12 pull-right">
                            <div class="tg-dashboard">
                                <div class="tg-border-heading">
                                    <h3>Bonsoir Hozigre Stéphane, bienvenue dans votre espace personnel</h3>
                                </div>
                                <div class="tg-radarsupport tg-sectionborder">
                                    <div class="row" style="margin-bottom: 30px;padding:0 15px;">
                                        <div class="tg-border-heading">
                                            <h3>Mon tableau de bord</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mes-annonces">
                                                        <i class="fa fa-bullhorn"></i> 
                                                        J'ai <span class="red">0</span> commandes en cours
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mes-annonces">
                                                        <i class="fa fa-bullhorn"></i> 
                                                        J'ai <span class="red">0</span> livraison en effectuée
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mes-annonces">
                                                        <i class="fa fa-bell"></i> 
                                                        J'ai <span class="red">0</span> notification
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/tirelire">
                                                        <i class="fa fa-money"></i> 
                                                        J'ai <span class="red">0</span> proposition de trajet
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/messages">
                                                        <i class="fa fa-envelope"></i> J'ai 
                                                        <span class="red">0</span> message en attente
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <i class="fa fa-plane"></i> J'ai 
                                                    <span class="red">0</span> transaction en cours                                     
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/mon-profil#avis">
                                                        <i class="fa fa-comments"></i> J'ai 
                                                        <span class="red">0</span> avis reçus et 
                                                        <span class="red">0</span> avis postés
                                                    </a>                                        
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="db-container">
                                                    <a href="/membre/avis#avis-a-poster">
                                                        <i class="fa fa-comments"></i> J'ai 
                                                        <span class="red">0</span> avis à poster
                                                    </a>                                        
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>              
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="tg-amenities">                                          
                                    <div class="tg-border-heading">
                                        <h3>Mes demandes</h3>
                                    </div>
                                    <div class="col-sm-12" style="padding:0px;">
                                        <table id="offers_user" class="table">
                                            <thead>
                                                <th> N° </th>
                                                <th> Libellé de la demande </th>
                                                <th> Description </th>
                                                <th> Date de création </th>
                                                <th> Statut </th>
                                                <th></th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td> 
                                                        Demande de : <br> 
                                                        Ferronnerie/Vitrerie <br>
                                                        Carrelage
                                                    </td>
                                                    <td>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
                                                    </td>
                                                    <td>
                                                        2020-03-12 <br> 13:25:49
                                                    </td>
                                                    <td>
                                                        En cours...
                                                    </td>
                                                    <td>
                                                        {!! Form::open() !!}
                                                            {!! Form::hidden('statut',0) !!}
                                                            {!! Form::hidden('id',1) !!}
                                                            <button type="submit" title="Désactiver" class="btn btn-xs btn-danger" style="padding: 5px">
                                                                <span class="glyphicon glyphicon-remove"></span>
                                                            </button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                    <td>
                                                        {!! Form::open() !!}
                                                            {!! Form::hidden('statut',0) !!}
                                                            {!! Form::hidden('id',1) !!}
                                                            <a href="{{Route('front-demandes.show', 1)}}" title="Détail de la commande" class="btn btn-xs btn-info" style="padding: 5px">
                                                                <span class="glyphicon glyphicon-eye-open"></span>
                                                            </a>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                            </div>
                            <div class="row" style="margin-bottom: 30px;">
                                <div class="tg-amenities">                                          
                                    <div class="tg-border-heading">
                                        <h3>Mes commandes</h3>
                                    </div>
                                    <div class="col-sm-12" style="padding:0px;">
                                        <table id="offers_user" class="table">
                                            <thead>
                                                <th> N° </th>
                                                <th> Désignation </th>
                                                <th> Image </th>
                                                <th> Quantité commandé </th>
                                                <th> Prix </th>
                                                <th> Date de commande </th>
                                                <th> Statut </th>
                                                <!--th></th-->
                                                <th></th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        1
                                                    </td>
                                                    <td> 
                                                        Mousse
                                                    </td>
                                                    <td>
                                                        <img src="" alt="">
                                                    </td>
                                                    <td>
                                                        10
                                                    </td>
                                                    <td>
                                                        20 000
                                                    </td>
                                                    <td>
                                                        2020-03-12 à 13:25:49
                                                    </td>
                                                    <td>
                                                        En cours...
                                                    </td>
                                                    <td>
                                                        {!! Form::open() !!}
                                                            {!! Form::hidden('statut',0) !!}
                                                            {!! Form::hidden('id',1) !!}
                                                            <button type="submit" title="Annuler la commande" class="btn btn-xs btn-danger" style="padding: 5px">
                                                                <span class="glyphicon glyphicon-remove"></span>
                                                            </button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                    <td>
                                                        {!! Form::open() !!}
                                                            {!! Form::hidden('statut',0) !!}
                                                            {!! Form::hidden('id',1) !!}
                                                            <a href="{{Route('front-commandes.show', 1)}}" title="Détail de la commande" class="btn btn-xs btn-info" style="padding: 5px">
                                                                <span class="glyphicon glyphicon-eye-open"></span>
                                                            </button>
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>   
                            </div>            
                        </div>            
                    </div>
                </div>       
            </div>
        </main> 
    </section>
</div>
@endsection