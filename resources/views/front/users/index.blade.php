@extends ('front.layout.layout_default')
@section('style')
<style type="text/css">
.newsletter-section {
    padding: 30px 0px 3px !important;
}
.custom-img-background{
    padding-top: 70px;
}
</style>
@endsection
@section('title')
    Compte
@endsection
@section('content')
<div class="container">
    <div class="page-content" style="margin-top:150px">
        @include('front.users.sidebar')
        <div class="col-md-7 pull-right tab-content">
            <div class="container col-lg-offset-1" style="width: 650px;border: 3px solid #dede;padding: 15px;">
                {!! Form::open(['url' =>'front-users/login']) !!}
                    <div class="form-group {!! $errors->has('email')?'has-error':'' !!}">
                        <label for="email">Email:</label>
                        {!! Form::email('email',null,['class'=>'form-control','id'=>'email']) !!}
                        {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('password')?'has-error':'' !!}">
                        <label for="pass">Password:</label>
                        {!! Form::password('password',['class'=>'form-control','id'=>'password']) !!}
                        {!! $errors->first('password','<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Connexion',['class'=>'btn form-control','id'=>'submit','style'=>'font-size: 18px;background-color:#ffcc00;border: none;font-weight: bold;line-height: 38px;text-align: center;color: #000000;']) !!}
                        <span style="margin-top:10px;float:left"><a href="#">&nbsp;&nbsp;Mot de passe oublié </a></span>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection