<?php $this->load->view('templates/header');?>
<form action="<?php echo $action; ?>" method="POST"><div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Tambah Pegawai</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">

							<div class="form-group">
								<tr>
									<td><label>Username</label>
										<input type="text" placeholder="Masukkan Username" value="<?php echo $username; ?>" class="form-control" name="username"></td>
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

								<div class="form-group">
								<tr>
									<td><label>Alamat</label>
									<select name="jabatan" class="form-control">
										<option value="Manager">Manager</option>
										<option value="staff">Staff</option>
									</select>
								</tr>
								</div>

								<tr>
								<td><input type="hidden" name="id_pegawai" value="<?php echo $id_pegawai; ?>">
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

								<a href="<?php echo site_url('pegawai') ?>" class="btn btn-default">Cancel</a></td>
								</tr>
								</table>
							</form>
							<?php $this->load->view('templates/footer');?>