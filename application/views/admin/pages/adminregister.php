<nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar pt-1">
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="">Data List</a>
          </li>
        </ul>
      </nav>

      <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
        <h1>Data Event</h1>        
        <h3 class="text-center">Halo, <?php echo $this->session->userdata('user_name')?>. Ini daftar event anda</h3>
        <div class="table-responsive">        
          <table class="table table-hover table-bordered">
            <br>
            <a href="<?php echo site_url('admin/dashboard') ?>"><p class="text-right" style="color: #000000;">back to dashboard &raquo;</p></a>            
            <thead>
              <tr>                
                  <th class="text-center">Nama Depan</th>
                  <th class="text-center">Nama Belakang</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Nomor Telpon</th>
                  <th class="text-center">Nama Event</th> 
                  <th class="text-center">Tema</th>                 
                  <th class="text-center">Lokasi</th>
                  <th class="text-center">Detail Acara</th>                  
                  <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($daftar as $result ) {?>
              <tr>
                <td><?php echo $result->nama_depan ?></td>
                <td><?php echo $result->nama_belakang ?></td>
                <td><?php echo $result->email ?></td>
                <td><?php echo $result->nomor_telpon ?></td>
                <td><?php echo $result->nama_event ?></td>
                <td><?php echo $result->tema_event ?></td>
                <td><?php echo $result->lokasi ?></td>
                <td><?php echo $result->detail_event ?></td>
                <!-- <td></td> -->                
                <td>
                  <a onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('admin/register/delete/'.$result->id) ?>">Delete</a>
                  &nbsp;&nbsp;                  
                </td>
              </tr>
              <?php }  ?>                      
            </tbody>
          </table>  

        </div>
      </main>  