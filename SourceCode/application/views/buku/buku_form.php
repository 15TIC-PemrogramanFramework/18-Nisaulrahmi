<?php $this->load->view('templates/header');?>
<form action="<?php echo $action; ?>" method="POST"><div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="header">
						<h4 class="title">Tambah Buku</h4>
					</div>
					<div class="content table-responsive table-full-width">
						<table class="table table-hover table-striped">

							<div class="form-group">
								<tr>
									<td><label>Judul</label>
										<input type="text" placeholder="Masukkan Judul" value="<?php echo $judul; ?>" class="form-control" name="judul"></td>
									</tr>
								</div>
								<div class="form-group">
									<tr>
										<td><label>Pengarang</label>
										<input type="text" placeholder="Masukkan Pengarang" value="<?php echo $pengarang; ?>" class="form-control" name="pengarang"></td>
									</tr>
								</div>

										<div class="form-group">
										<tr>
									<td><label class="col-sm-2 control-label">Nama Penerbit</label>
									<div class="col-sm-12">
										<select name="id_penerbit" class="form-control">
											<?php foreach ($penerbit as $key => $value) { ?>
												<option value="<?php echo $value->id_penerbit; ?>"><?php echo $value->nama_penerbit ?> </option>
											<?php } ?>
										</select></td>
									</div>
									</tr>
								</div>


								<div class="form-group">
								<tr>
									<td><label>Tahun</label>
									<input type="text" placeholder="Masukkan Tahun" value="<?php echo $tahun; ?>" class="form-control" name="tahun"></td>
								</tr>
								</div>

								<div class="form-group">
								<tr>	
									<td><label>Harga</label>
									<input type="text" placeholder="Masukkan Harga" value="<?php echo $harga; ?>" class="form-control" name="harga"></td>
								</tr>
								</div>
								<tr>
								<td><input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

								<a href="<?php echo site_url('buku') ?>" class="btn btn-default">Cancel</a></td>
								</tr>
								</table>
							</form>
							<?php $this->load->view('templates/footer');?>