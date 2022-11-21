@extends ('front.layout.layout_default')
@section('title')
Mes commandes
@endsection
@section('style')
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
                    <h1>Mes <span>Commandes</span></h1>
                </div><!-- .custom-heading.style-1 end -->
            </div><!-- .col-md-6 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</div>
<div class="page-content">
    <section class="breadcumb-wrapper">
        <div class="container clearfix">
            <ul class="breadcumb">
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><span>Mes commandes</span></li>
            </ul>
        </div>
    </section>
    <section class="ls section_padding_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    @include('front.pages.alerte')
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
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
                                    <a href="{{ route('front-commandes.show',1) }}" title="Détail de la commande" class="btn btn-xs btn-info" style="padding: 5px">
                                        <span class="glyphicon glyphicon-eye-open" style="margin-left: 8px;"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection