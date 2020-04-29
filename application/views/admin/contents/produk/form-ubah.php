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
          <div class="col-sm-6 col-sm-offset-3">
            <?php $this->load->view('admin/components/alert'); ?>
            <div class="box box-success with-border">
              <div class="box-header">
                <h3 class="box-title">Form Produk</h3>
              </div>

              <?php echo form_open('admin/proses/ubah/produk'); ?>
              <div class="box-body">
                <input name="id_produk" type="hidden" value="<?php echo $produk->id_produk;?>">
                <div class="form-group">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_produk" value="<?php echo $produk->nama_produk;?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tag Line</label>
                  <input type="text" name="tag_line" value="<?php echo $produk->tag_line;?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Fitur</label>
                  <input type="text" name="fitur_produk" value="<?php echo $produk->fitur_produk;?>" class="form-control">
                </div>
              </div>

              <div class="box-footer">
                <button class="btn btn-sm btn-success pull-right" type="submit"><i class="fa fa-send"></i> SIMPAN</button>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
        <!-- /.row -->
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