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
        <?php $this->load->view('admin/components/alert'); ?>
        <div class="box box-success with-border">
          <div class="box-header">
            <h3 class="box-title pull-left">Data Produk</h3>
            <a href="<?php echo base_url('admin/form/tambah/produk'); ?>" class="btn btn-sm btn-success pull-right">Tambah Produk&nbsp;&nbsp;&nbsp;<i class="fa fa-plus"></i></a>
          </div>
          <div class="box-body">
            <!-- TARUH KONTENT DISINI -->
            <div class="table-responsive">
              <table class="datatable table table-striped table-bordered">
                <thead class="bg-light-blue">
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama Produk</th>
                    <th class="text-center">Tag Line</th>
                    <th class="text-center">Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $no = 1;
                  foreach ($produk as $prd) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo ucwords($prd->nama_produk); ?></td>
                      <td><?php echo ucwords($prd->tag_line); ?></td>
                      <td class="text-center">
                        <div class="dropdown">
                          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
                          <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('form/ubah/produk/' . $prd->id_produk); ?>" class="text-yellow"><i class="fa fa-edit"></i> Ubah</a></li>
                            <li><a href="<?php echo site_url('proses/hapus/produk/' . $prd->id_produk); ?>" onclick="return confirm('Anda yakin ingin menghapus data ini ?');" class="text-red"><i class="fa fa-trash"></i> Hapus</a></li>
                          </ul>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot class="bg-light-blue">
                  <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Tag Line</th>
                    <th>Tindakan</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="box-footer"></div>
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