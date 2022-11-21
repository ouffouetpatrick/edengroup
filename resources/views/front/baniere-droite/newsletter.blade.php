<div class="col-md-10 col-lg-12" style="margin-top:3em;padding:0;">
	<div class="how2 how2-cl4 flex-s-c">
		<div class="custom-heading style-1">
	        <h1>NewsLetter</h1>
	    </div>
		<div class="form-column col-lg-12 col-md-12 col-sm-12" style="padding:0;">
            <div class="inner-column">                        
                <!--Subscribe Form-->
                <div class="">
                    {!! Form::open(['route'=>'front-newsletters.store']) !!}
                        <div class="form-group {!! $errors->has('email_newletter')?'has-error':'' !!}">
                            {!! Form::email('email_newletter',null,['class'=>'form-control','placeholder'=>'Votre email']) !!}
                            {!! $errors->first('email_newletter','<span class="help-block">:message</span>') !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">S'inscrire</button>
                        </div>
                    {!! Form::close() !!}    
                </div>
            </div>
		</div>
	</div>
</div>