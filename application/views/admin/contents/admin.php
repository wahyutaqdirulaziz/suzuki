<?php $this->load->view('admin/components/head')?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<!-- header -->
  <?php $this->load->view('admin/components/header')?>
  <!-- endheader -->
  <aside class="main-sidebar">
    <!-- sidebar -->
    <?php $this->load->view('admin/components/sidebar')?>
    <!-- endsidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $title?>
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

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
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

 
</div>
<!-- ./wrapper -->
<!-- scripts -->
<?php $this->load->view('admin/components/scripts')?>
<!-- endscripts -->
