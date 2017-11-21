<?php $this->load->view('templates/header');?>
<form action="<?php echo $action; ?>" method="POST"><div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Tambah Customer</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">

							<div class="form-group">
								<tr>
									<td><label>Nama</label>
										<input type="text" placeholder="Masukkan Nama" value="<?php echo $nama; ?>" class="form-control" name="nama"></td>
									</tr>
								</div>
								<div class="form-group">
									<tr>
										<td><label>Password</label>
										<input type="text" placeholder="Masukkan Password" value="<?php echo $password; ?>" class="form-control" name="password"></td>
									</tr>
								</div>

								<div class="form-group">
								<tr>
									<td><label>Alamat</label>
									<input type="text" placeholder="Masukkan Alamat" value="<?php echo $alamat; ?>" class="form-control" name="alamat"></td>
								</tr>
								</div>
								<tr>
								<td><input type="hidden" name="id_customer" value="<?php echo $id_customer; ?>">
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

								<a href="<?php echo site_url('customer') ?>" class="btn btn-default">Cancel</a></td>
								</tr>
								</table>
							</form>
							<?php $this->load->view('templates/footer');?>