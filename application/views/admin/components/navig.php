<nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>    
    <a class="navbar-brand" href="<?php echo site_url('admin/dashboard') ?>">DAX Administrator</a>
    
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
       <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/register/data')?>">Data List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('user/logout') ?>">Logout</a>
          </li>
        </ul>
    </div>    
</nav>



