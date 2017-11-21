<?php 
$this->load->view('templates/header');
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<?php if($this->session->userdata('status') == 'Manager') { ?>
				<div align="right" style="margin-bottom: 20px;"><?php echo anchor(site_url("pegawai/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?></div><?php } ?>
				<div class="card">
					<div class="header">
						<h4 class="title">Data Pegawai</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">

							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Password</th>
									<th>Alamat</th>
									<th>Jabatan</th>
									 
									 <?php if($this->session->userdata('status') == 'Manager') { ?>

									<th>Aksi</th>
									 
									 <?php } ?>
									
								</tr>
							</thead>
							<tbody>
								<?php foreach ($pegawai as $key => $value) {?>
								<tr>
									<td><?php echo $key+1; ?></td>	
									<td><?php echo $value->username; ?></td>
									<td><?php echo $value->password; ?></td>
									<td><?php echo $value->alamat; ?></td>
									<td><?php echo $value->jabatan; ?></td>	
									 
									 <?php if($this->session->userdata('status') == 'Manager') { ?>
									<td>
										<?php echo anchor(site_url('pegawai/edit/'.$value->id_pegawai),
											'<i class="fa pe-7s-tools"></i>',
											'class="btn btn-warning"'); ?>

										<?php echo anchor(site_url('pegawai/delete/'.$value->id_pegawai),
											'<i class="fa pe-7s-trash"></i>',
											'class="btn btn-danger"'); ?>

										</td> <?php } ?>
										 
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>

						<?php 
						$this->load->view('templates/footer');
						?>
						<script type="text/javascript">
							$(document).ready(function() {
								$('#example').DataTable();

							} );
						</script>