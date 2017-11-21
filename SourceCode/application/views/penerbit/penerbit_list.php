<?php 
$this->load->view('templates/header');
?>

<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div align="right" style="margin-bottom: 20px;"><?php echo anchor(site_url("penerbit/tambah"),'<i class="fa fa-plus"></i> Tambah Data','class="btn btn-primary"');?></div>
				<div class="card">
					<div class="header">
						<h4 class="title">Data Penerbit Buku</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">

							<thead>
								<tr>
									<th>No</th>
									<th>Judul</th>
									<th>Nama Penerbit</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($penerbit as $key => $value) {?>
								<tr>
									<td><?php echo $key+1; ?></td>	
									<td><?php echo $value->nama_penerbit; ?></td>
									<td><?php echo $value->alamat_penerbit; ?></td>
									<td><?php echo $value->tahun_penerbit; ?></td>	
									<td>
										<?php echo anchor(site_url('penerbit/delete/'.$value->id_penerbit),
											'<i class="fa pe-7s-trash"></i>',
											'class="btn btn-danger"'); ?>

										</td>
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