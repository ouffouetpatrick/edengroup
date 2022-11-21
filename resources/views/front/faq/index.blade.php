@extends ('front.layout.layout_default')
@section('title')
Foire au question
@endsection

@section('content')
<div class="page-content custom-img-background dark page-title page-title-1 mb-70">
  	<div class="container">
        <!-- .row start -->
        <div class="row">
            <!-- .col-md-6 start -->
            <div class="col-md-6">
                <div class="custom-heading style-1 triggerAnimation animated fadeInUp" data-animate="fadeInUp" style="opacity: 1;">
                    <h1>Foire <span>Aux questions</span></h1>
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
                <li><span>FAQ</span></li>
            </ul>
        </div>

    </section>
    <section >
      <div class="container">

         <div class="row">
            <div class="col-md-8">
               <h3 class="border-title border-left mar-t0">Questionnaires</h3>

               <div class="panel-group panel-classic" id="accordionA">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                           <a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseOne">
                           Questions1?</a> 
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                           <p>A first-aider is someone who has undertaken training and has a qualification that HSE approves. This means that they must hold a valid certificate of competence in either:</p>
                        <span>
                              <p>post:<span>Michael Okou</span></p>
                              <p>date:<span>vendredi 20 mai 2020</span></p>
                        </span>
                        <span id="tooltipster_halte2">
                            <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-send" style="color:#4f4;"></span> Repondre</button>
                        </span>
                        </div>
                      </div>
                  </div><!--/ Panel 1 end-->

                  <div class="panel panel-default">
                      <div class="panel-heading">
                           <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseTwo">Questions2?</a>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com matat.</p>
                        <span>
                              <p>post:<span>Michael Okou</span></p>
                              <p>date:<span>vendredi 20 mai 2020</span></p>
                        </span>
                        <span id="tooltipster_halte2">
                           <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-send" style="color:#4f4;"></span> Repondre</button>
                        </span>
                        </div>
                      </div>
                  </div><!--/ Panel 2 end-->

                  <div class="panel panel-default">
                     <div class="panel-heading">
                         <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseThree">Questions3?</a> 
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <span>
                              <p>post:<span>Michael Okou</span></p>
                              <p>date:<span>vendredi 20 mai 2020</span></p>
                        </span>
                        <span id="tooltipster_halte2">
                            <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-send" style="color:#4f4;"></span> Repondre</button>
                        </span>
                        </div>
                     </div>
                  </div><!--/ Panel 3 end-->

               </div><!-- Accordion end -->

               <div class="gap-40"></div>

               <h3 class="border-title border-left">Recent posts</h3>

               <div class="panel-group panel-classic" id="accordionB">
                  <div class="panel panel-default">
                      <div class="panel-heading"> 
                           <a data-toggle="collapse" data-parent="#accordionA, #accordionB" href="#collapseA">
                           Mauris rhoncus pretium porttitor cras scelerisque commodo odio ?</a> 
                      </div>
                      <div id="collapseA" class="panel-collapse collapse in">
                           <div class="panel-body">
                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <span>
                              <p>post:<span>Michael Okou</span></p>
                              <p>date:<span>vendredi 20 mai 2020</span></p>
                        </span>
                        <span id="tooltipster_halte2">
                             <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-send" style="color:#4f4;"></span> Repondre</button>
                        </span>
                        </div>
                      </div>
                  </div><!--/ Panel 1 end-->

                  <div class="panel panel-default">
                      <div class="panel-heading">
                           <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseB">Lutpat consequat estibulum ante ipsum primis in faucibu ?    </a>
                      </div>
                      <div id="collapseB" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com matat.</p>
                       <span>
                              <p>post:<span>Michael Okou</span></p>
                              <p>date:<span>vendredi 20 mai 2020</span></p>
                        </span>
                        <span id="tooltipster_halte2">
                            <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-send" style="color:#4f4;"></span> Repondre</button>
                        </span>
                        </div>
                      </div>
                  </div><!--/ Panel 2 end-->

                  <div class="panel panel-default">
                     <div class="panel-heading">
                         <a data-toggle="collapse" class="collapsed" data-parent="#accordionA, #accordionB" href="#collapseC">Donec volutpat diam nec quam sagittis uenot egestas libero ? </a> 
                     </div>
                     <div id="collapseC" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                        <span>
                              <p>post:<span>Michael Okou</span></p>
                              <p>date:<span>vendredi 20 mai 2020</span></p>
                        </span>
                        <span id="tooltipster_halte2">
                          <button class="theme-btn btn-style-three" type="submit"><span class="fa fa-send" style="color:#4f4;"></span> Repondre</button>
                        </span>
                        </div>
                     </div>
                  </div><!--/ Panel 3 end-->

               </div><!-- Accordion end -->

            </div><!-- Col end -->
            <div class="sec-title">
                <h2><span>FOIE AUX QUESTIONS</span></h2>
                <p>Nemo enim ipsam voluptatem quia voluptasut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, quiconsectetur, adipisci velit, sed quaerat voluptatem.</p>
            </div>
         </div><!-- Content row end -->

      </div><!-- Container end -->
   </section>
</div>
@endsection

