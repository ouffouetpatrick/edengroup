@extends ('front.layout.layout_default')
@section('title')
Demande de service Immobilier
@endsection
@section('style')
<style>
.chosen-single > span, .no-results > span{
    color: #000000;
}
li span{
    color: #000;
}
</style>
@endsection
@section('content')
<div class="page-content" style="margin-top:150px">
    <div class="container col-lg-offset-3" style="width: 650px;border: 3px solid #dede;padding: 15px;">
        {!! Form::open(['route' =>'front-immobilier.store']) !!}
        <h2>Formulaire de demande d'un service</h2>
        <p>Pour demander un service renseignez ce formulaire.</p>
            @if(session()->has('Ok'))
            <div class="container col-lg-offset-1" style="width: 600px;padding: 15px;margin: 0;">
                @include('front.pages.alerte')
            </div>
            @endif
            <div class="form-group">
                <label for="nom">Nom:</label>
                @if(!Auth::guest())
                {!! Form::text('nom',$users->nom,['class'=>'form-control','id'=>'nom','readonly'=>'true']) !!}
                @else
                {!! Form::text('nom',null,['class'=>'form-control','id'=>'nom','readonly'=>'true']) !!}
                @endif
            </div>
            <div class="form-group">
                <label for="prenoms">Prénoms:</label>
                @if(!Auth::guest())
                {!! Form::text('prenoms',$users->prenoms,['class' => 'form-control', 'id' => 'prenoms','readonly'=>'true']) !!}
                @else
                {!! Form::text('prenoms',null,['class' => 'form-control', 'id' => 'prenoms','readonly'=>'true']) !!}
                @endif
            </div>
            <div class="form-group">                
                <label for="email">Email:</label>
                @if(!Auth::guest())
                {!! Form::email('email',$users->email,['class' => 'form-control', 'id' => 'email','readonly'=>'true']) !!}
                @else
                    {!! Form::email('email',null,['class' => 'form-control', 'id' => 'email','readonly'=>'true']) !!}
                @endif
            </div>
            <div class="form-group">
                <label for="tel">Contact:</label>
                @if(!Auth::guest())
                {!! Form::tel('tel',$users->phone_number1,['class' => 'form-control', 'id' => 'tel','readonly'=>'true']) !!}
                @else
                    {!! Form::tel('tel',null,['class' => 'form-control', 'id' => 'tel','readonly'=>'true']) !!}
                @endif
            </div>
            <div class="form-group">
                <label for="service">Selectionner le service demandé:</label>
                <div>
                    {!! Form::select('select[]', array(" " =>" ",'Maçonnerie'=> 'Maçonnerie','Ferronnerie/Vitrerie'=> 'Ferronnerie/Vitrerie','Carrelage'=> 'Carrelage','Electricité/Plomberie'=> 'Electricité/Plomberie','Coffrage'=> 'Coffrage','Menuserie (bois, aluminium...)'=> 'Menuserie (bois, aluminium...)','Peinture'=> 'Peinture','Froid/Climatisation'=> 'Froid/Climatisation'),null,['class'=>'chosen-select','data-placeholder' =>'Selectionnez vos services...', 'multiple' =>'multiple','tabindex'=>'-1']) !!}
                    {!! $errors->first('select','<span class="help-block">:message</span>') !!}
                </div>
            </div>
            <div class="form-group {!! $errors->has('content')?'has-error':'' !!}">
                <label for="demande">Description du service:</label>
                {!! Form::textarea('content',null,['class' => 'form-control', 'id' => 'contact-message']) !!}
                {!! $errors->first('content','<span class="help-block">:message</span>') !!}
            </div>
            <div class="form-group">
                @if(!Auth::guest())
                {!! Form::submit('Valider la demande',['class'=>'btn form-control','id'=>'submit','style'=>'font-size: 18px;background-color:#ffcc00;border: none;font-weight: bold;line-height: 38px;text-align: center;color: #000000;']) !!}
                @else
                    <a href="{{ Route('front-users.index') }}" class="btn form-control" style="font-size: 18px;background-color:#ffcc00;border: none;font-weight: bold;line-height: 38px;text-align: center;color: #000000;">Cliquez ici pour vous connecter</a>
                @endif
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection
@section('script')
    {!! Html::script('styles/docsupport/jquery-3.2.1.min.js') !!}
    {!! Html::script('styles/docsupport/chosen.jquery.js') !!}
    {!! Html::script('styles/docsupport/prism.js') !!}
    {!! Html::script('styles/docsupport/init.js') !!}
@endsection