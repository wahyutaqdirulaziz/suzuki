<?php if ($this->session->flashdata('success')) { ?>
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Ok ! </strong> <?php echo $this->session->flashdata('success');?>
	</div>
<?php } else if ($this->session->flashdata('danger')) { ?>
	<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Ops ! </strong> <?php echo $this->session->flashdata('danger');?>
	</div>
<?php } ?>