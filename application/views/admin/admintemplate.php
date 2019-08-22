<?php $this->load->view('admin/components/head'); ?>
<body>
  <?php $this->load->view('admin/components/navig'); ?>
  <div class="container-fluid">
    <div class="row">
      <?php $this->load->view($page); ?>
    </div>
  </div>
  <?php $this->load->view('admin/components/js'); ?>
</body>
</html>
