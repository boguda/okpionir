 <div class="jumbotron">  
     <div id="navbar" class="navbar-collapse collapse">
      <nav class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
           <ul class="nav navbar-nav" >
            <li ><a href="/">Pocetna</a></li>
            <li ><a href="/onama">O nama</a></li>
            <li ><a href="/karate">Karate</a></li> 
            <li ><a href="/"> <div class="fb-like" data-href="https://www.facebook.com/O%D0%A0%D0%9A-%D0%9F%D0%B8%D0%BE%D0%BD%D0%B8%D1%80-1562647044050137/" data-width="50" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></a>
            </li>

              <a class="navbar-brand" href="#"><?= $this->Html->image('loc2-small.jpg') ?></a>

          </ul><!--End of ul-->
          <ul class="nav navbar-nav navbar-right">
                <li><a href="">Niste ulogovani</a></li>
               </ul><!-- /. navbar-right-->
        </div>
      </nav>
      </div><!-- End of nav collapse-->
  </div><!-- End of jumbotron-->
 <div class="jumbotron"> 
      <div class="container" style="margin-top: 45px;"><!-- container iznad navbara-a -->
        <div class="row"><!-- row iznad navbara-a -->
            
            <div class="col-lg-3 col-md-1" style="border-right: 3px solid #0174DF; padding-left: 8%;">
                 <?= $this->Html->link($this->Html->image('logo.jpg', ['alt'=>'logo', 'class'=>'img-rounded img-responsive float']), "/",['escape' => false]); ?>
            </div>
            <div class="col-lg-9 col-md-11 ">
              <h1 style="font-family: 'PT Sans'; color: #0174DF">Karate klub RODA</h1>
            </div>
        </div><!--end  row iznad navbara-a -->
     </div><!--end container iznad navbara-a -->
    </div>