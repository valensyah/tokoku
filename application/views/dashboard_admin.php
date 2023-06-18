<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard <?php echo $this->session->userdata('name') ?></h1>
		<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
				class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
	</div>
    <div class="row">
        <div class="col-12 mb-4">
        <table class="table">
            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Customer</th>
                <th scope="col">Price</th>
                <th scope="col">Payment status</th>
                <th scope="col">Order Date</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php foreach($checkout as $c) { ?>
                    <?php $no = 1; ?>
                    <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $c->product_name ?></td>
                    <td><?php echo $c->name ?></td>
                    <td><?php echo $c->price ?></td>
                    <td><?php if ($c->isPaid == 1) { echo 'Verified'; } else { echo 'unverified'; } ?></td>
                    <td><?php echo $c->created_at ?></td>
                    <td><button class="btn btn-md btn danger">Delete</button> | <button class="btn btn-md btn-success">Verifikasi</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div>
    </div>
</div>