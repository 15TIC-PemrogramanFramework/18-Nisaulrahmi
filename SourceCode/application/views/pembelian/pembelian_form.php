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
									<label class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-12">
										<select name="id_customer" class="form-control">
											<?php foreach ($customer as $key => $value) { ?>
												<option value="<?php echo $value->id_customer; ?>"><?php echo $value->nama ?> </option>
											<?php } ?>
										</select>
									</div>
								</div>
								<br>

								<div class="form-group">
									<label class="col-sm-2 control-label">Nama Buku</label>
									<div class="col-sm-12">
										<select name="id_buku" class="form-control">
											<?php foreach ($buku as $key => $value) { ?>
												<option value="<?php echo $value->id_buku; ?>"><?php echo $value->judul ?> </option>
											<?php } ?>
										</select>
									</div>
								</div>

								<tr>
								<td><input type="hidden" name="id_pembelian" value="<?php echo $id_pembelian; ?>">
								<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>

								<a href="<?php echo site_url('pembelian') ?>" class="btn btn-default">Cancel</a></td>
								</tr>
							</form>
							<?php $this->load->view('templates/footer');?>