<?php $this->load->view('admin/components/head') ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <!-- header -->
    <?php $this->load->view('admin/components/header') ?>
    <!-- endheader -->
    <aside class="main-sidebar">
      <!-- sidebar -->
      <?php $this->load->view('admin/components/sidebar') ?>
      <!-- endsidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php $this->load->view('admin/components/breadcrumb') ?>
      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->

        <!-- /.row (main row) -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php $this->load->view('admin/components/page-footer') ?>
  </div>
  <!-- ./wrapper -->
  <!-- scripts -->
  <?php $this->load->view('admin/components/foot') ?>
  <!-- endscripts -->