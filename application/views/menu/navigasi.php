    <div class="container-fluid">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 logo">
            <img src="<?= base_url('image/iconwhitevector.png')?>" class="img-responsive main-logo" width="100" height="100">
          </div>
          <div class="col-sm-8 menu">
            <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand visible-xs-block" href="#">Menu &rarr;</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">          
                    <li><a href="<?= site_url('homecontroller/index')?>">HOME</a></li> 
                    <li><a href="<?= site_url('portofoliocontroller/index')?>">PORTOFOLIO</a></li>
                    <li><a href="<?= site_url('aboutcontroller/index')?>">ABOUT US</a></li>
                    <li><a href="<?= site_url('registercontroller/index')?>">REGISTER</a></li>
                  </ul>                                
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>
        </div>
      </div>
    </div>