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
        <!-- TARUH KONTENT DISINI -->
        <!-- FORM TAMBAH/EDIT LOGO -->
        <div class="col-sm-3">
          <div class="box box-success with-border">
            <div class="box-header"></div>
            <div class="box-body">
              <?php echo form_open_multipart('admin/proses/tambah/logo');?>
              <div class="form-group">
                <label>Nama Logo</label>
                <input type="text" name="alt" value="" class="form-control">
              </div>
              <div class="form-group">
                <label>File Logo</label>
                <input type="file" name="logo" value="" class="form-control">
                <span class="help-block"><small>Harus Kurang dari 500 KB</small></span>
              </div>
            </div>
            <div class="box-footer">
              <button class="btn btn-sm btn-success pull-right" type="submit"><i class="fa fa-send"></i> SIMPAN</button>
            </div>
              <?php echo form_close();?>
          </div>
        </div>
        <!-- TABEL DATA LOGO -->
        <div class="col-sm-9">
        <?php $this->load->view('admin/components/alert'); ?>
          <div class="box box-success with-border">
            <div class="box-header">
            </div>
            <div class="box-body">
              <!-- TARUH KONTENT DISINI -->
              <div class="table-responsive">
                <table class="datatable table table-striped table-bordered">
                  <thead class="bg-light-blue">
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Logo</th>
                      <th class="text-center">Alt</th>
                      <th class="text-center">Tindakan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($logo as $l) : ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><img src="<?php echo base_url().'img/logo/'.$l->logo;?>" class="img-circle img-responsive" width="50px"></td>
                        <td><?php echo $l->alt;?></td>
                        <td class="text-center">
                          <a class="btn btn-sm btn-danger" href="<?php echo site_url('admin/proses/hapus/logo/' . $l->id_logo); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?');"><i class="fa fa-trash"></i> Hapus</a></li>
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot class="bg-light-blue">
                    <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Logo</th>
                      <th class="text-center">Alt</th>
                      <th class="text-center">Tindakan</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="box-footer"></div>
            </div>
          </div>
        </div>
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