   <div class="container-fluid form-daftar">      
          <div class="container formulir">
            <div class="row form-horizontal regist">
              <div class="col-sm-2"></div>
              <div class="col-sm-8 tengah">
                  <h2 class="text-center">
                    REGISTER YOUR EVENT HERE
                  </h2>
                  <h4 class="text-center">
                    Please fill out this form and we will get back to you soon
                  </h4>
                    <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success">
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>         
                            
                    <?php echo form_open(); ?>  
                    <div class="form-group"> 
                        <label class="col-sm-2 label">First Name</label>
                      <div class="col-sm-8">
                        <?php echo form_input('namadepan', '', 'class="form-control"'); ?>
                      </div>
                    </div>

                    <div class="form-group"> 
                        <label class="col-sm-2 label">Last Name</label>
                      <div class="col-sm-8">
                        <?php echo form_input('namabelakang', '', 'class="form-control"'); ?>
                      </div>
                    </div>

                    <div class="form-group"> 
                        <label class="col-sm-2 label">Email</label>
                      <div class="col-sm-8">
                        <?php echo form_input('email', '', 'class="form-control"'); ?>
                      </div>
                    </div>   

                    <div class="form-group"> 
                        <label class="col-sm-2 label">Phone Number</label>
                      <div class="col-sm-8">
                        <?php echo form_input('telpon', '', 'class="form-control"'); ?>
                         </div>
                    </div>   

                    <div class="form-group"> 
                        <label class="col-sm-2 label">Name of Event</label>
                      <div class="col-sm-8">
                        <?php echo form_input('event', '' , 'class="form-control"'); ?>
                      </div>
                    </div>   

                    <div class="form-group"> 
                        <label class="col-sm-2 label">Theme of Event</label>
                      <div class="col-sm-8">
                        <?php echo form_input('tema', '' , 'class="form-control"'); ?>
                      </div>
                    </div>

                    <div class="form-group"> 
                      <label class="col-sm-2 label">Location</label>
                      <div class="col-sm-8">
                      <?php echo form_input('lokasi', '', 'class="form-control"'); ?>
                      </div>
                    </div>                   

                    <div class="form-group"> 
                        <label class="col-sm-2 label">Detail Event</label>
                        <div class="col-sm-8">
                        <?php echo form_textarea('detail', '', 'class="form-control"'); ?>
                        </div>
                    </div>    

                    <div class="col-sm-offset-3 col-sm-8">                    
                      <input type="submit" name="daftar" value="daftar" >  
                    </div> 
                    <?php form_close(); ?>  
                  </div>
              <div class="col-sm-2"></div>  
            </div>                 
        </div>
      </div>
    </div>