<?php $this->load->view('templates/header');?>
<form action="<?php echo $action; ?>" method="POST"><div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Tambah Pembelian</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">

							<div class="form-group">
								<tr>
									<td><label>Nama Penerbit</label>
										<input type="text" placeholder="Masukkan Username" value="<?php echo $nama_penerbit; ?>" class="form-control" name="nama_penerbit"></td>
									</tr>
								</div>
								<div class="form-group">
									<tr>
										<td><label>Alamat Penerbit</label>
										<input type="text" placeholder="Masukkan Password" value="<?php echo $alamat_penerbit; ?>" class="form-control" name="alamat_penerbit"></td>
									</tr>
								</div>

								<div class="form-group">
								<tr>
									<td><label>Tahun Penerbit</label>
									<input type="text" placeholder="Masukkan Alamat" value="<?php echo $tahun_penerbit; ?>" class="form-control" name="tahun_penerbit"></td>
								</tr>
								</div>


								<tr>
								<td><input type="hidden" name="id_penerbit" value="<?php echo $id_penerbit; ?>">
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

								<a href="<?php echo site_url('penerbit') ?>" class="btn btn-default">Cancel</a></td>
								</tr>
								</table>
							</form>
							<?php $this->load->view('templates/footer');?>