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
        <div class="row">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Menu</th>
                <th>Tindakan</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1;
              foreach ($menu as $menus) : ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $menus->menu; ?></td>
                  <td>
                    <a href="<?php echo base_url('admin/menu/hapus/') . $menu->id_menu; ?>" onclick="return confirm('Yakin untuk menghapus data ini ?')" class="btn btn-sm btn-danger">
                      <i class="fas fa-fw fa-trash"></i>
                    </a>
                    <a href="<?php echo base_url('admin/menu/ubah/') . $menu->id_menu; ?>" class="btn btn-sm btn-warning">
                      <i class="fas fa-fw fa-edit"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot></tfoot>
          </table>
        </div>
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