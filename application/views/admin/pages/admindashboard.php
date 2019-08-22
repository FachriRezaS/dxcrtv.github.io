      <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar pt-1">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/register/data')?>">Data List</a>
          </li>
        </ul>
      </nav>

      <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Dashboard</h1>
        <div class="container-fluid">
          <div class="container">      
            <div class="row">        
              <div class="col-md-2">                
              </div>
              <div class="col-md-8">
                <h1>Hi, <?php echo $this->session->userdata('user_name')?>| Welcome To Daxcreative</h1> 
                <!-- | <a href="<?php echo site_url('user/logout') ?>">Logout</a></h1> -->
              </div>
                <div class="col-md-2">                  
                </div>
            </div>            
          </div>
        </div>
      </main>