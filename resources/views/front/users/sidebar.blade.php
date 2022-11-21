<div class="col-md-4 single-side-left">
    <div class="single-sidebar-widget">
        <div class="special-links">
            <ul>
                <li @if(Route::currentRouteName()=='front-users.index') class="active" @endif>
                    <a href="{{ Route('front-users.index') }}">Connexion</a>
                </li>
                <li @if(Route::currentRouteName()=='front-users.create') class="active" @endif>
                    <a href="{{ Route('front-users.create') }}">Inscription</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="single-sidebar-widget">
        <div class="single-service-contact">
            <h3> Avez-vous bésion d'une assistance?</h3>
            <p>Vous pouvez nous laisser un message en cliquant.</p>
            <a href="{{ Route('front-messages.create') }}">Par ici<i class="fa fa-angle-double-right"></i></a>
        </div>
    </div>
</div>