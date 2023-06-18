<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
	</div>
    <div class="row">
        <?php foreach($product as $p) { ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card mr-4" style="width: 18rem;">
                    <img src="https://images.samsung.com/pk/smartphones/galaxy-z-fold3-5g/buy/zfold3_carousel_mainsinglekv_mo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $p->product_name ?></h5>
                        <p class="card-text"><?php echo $p->description ?></p>
                        <strong style="font-size: 18px"><?php echo $p->price ?></strong>
                        <a href="<?php echo base_url().'Order/index?id_product='.$p->id ?>" class="btn btn-primary">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>