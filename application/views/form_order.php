<div class="container-fluid">
	<div class="d-flex justify-content-center mt-5">
		<div class="card">
			<div class="card-body">
				<form action="<?php echo base_url().'Order/checkout?id_product='.$id_product ?>" method="POST">
					<div class="form-group">
						<label for="formGroupExampleInput">Nama</label>
						<input type="text" name="nama" class="form-control" id="formGroupExampleInput"
							placeholder="Example input placeholder">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Email</label>
						<input type="email" name="email" class="form-control" id="formGroupExampleInput2"
							placeholder="Another input placeholder">
					</div>
					<div class="form-group">
						<label for="formGroupExampleInput2">Alamat</label>
						<input type="text" name="alamat" class="form-control" id="formGroupExampleInput2"
							placeholder="Another input placeholder">
					</div>
                    <button class="btn btn-lg btn-success">Order</button>
				</form>
			</div>
		</div>
	</div>
</div>
