<?php $this->load->view('admin/components/head.php'); ?>
<div id="wrapper">
  <!-- CALL SIDE-BAR FROM COMPONENTS DIR -->
  <?php $this->load->view('admin/components/side-bar.php'); ?>
  <!-- CONTENT WRAPPER -->
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <!-- CALL TOPBAR FROM COMPONENTS DIR -->
      <?php $this->load->view('admin/components/top-bar.php'); ?>
      <!-- BEGIN PAGE CONTENT -->
      <div class="container-fluid">
        <!-- CALL PAGE HEADING FROM COMPONENTS DIR -->
        <?php $this->load->view('admin/components/page-heading.php'); ?>
        <div class="row">CONTENT ROW 1</div>
        <div class="row">CONTENT ROW 2</div>
      </div>
      <!-- CALL PAGE FOOTER FROM COMPONENTS DIR -->
      <?php $this->load->view('admin/components/page-footer.php'); ?>
    </div>
  </div>
  <!-- END CONTENT WRAPPER -->
  <!-- CALL SCROLL TO TOP BUTTON FROM COMPONENTS DIR -->
  <?php $this->load->view('admin/components/scroll-to-top-btn.php'); ?>
</div>
<!-- CALL FOOT FROM COMPONENTS DIR -->
<?php $this->load->view('admin/components/foot.php'); ?>