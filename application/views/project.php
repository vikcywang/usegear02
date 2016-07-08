<main>
<section id="hero" class="img-bg-bottom img-bg-soft"
	style="background-color:#00697f">
	<div class="container inner">
		<div class="row"
			style="background-color:#00697f">
			<div class="col-md-8 col-sm-9 center-block text-center">
				<header>
					<h1 style="color: white;">众诚软件</h1>
					<p style="color: white;">智能解决方案</p>
				</header>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<section id="portfolio-post">
	<div class="container inner-top">
		<div class="row">
			<div class="col-sm-9 center-block text-center">
				<header>
					<h1><?php echo $product[0]->product_name;?></h1>
					<p><?php echo $product[0]->product_description;?></p>
				</header>
			</div>
			<!-- /.col -->
		</div>
		<!-- ./row -->

		<div class="row inner-top-xs">
			<div
				class="col-sm-10 col-xs-11 center-block text-center inner-top-xs border-top">
				<ul class="item-details">
					<li class="date"><?php echo $product[0]->pub_time;?></li>
					<li class="categories"><?php echo $category[0]->category_name;?></li>
					<li class="client"><?php echo $product[0]->product_att;?></li>
					<li class="url"><a
						href="<?php echo $product[0]->product_download_url;?>">下载链接</a></li>
				</ul>
				<!-- /.item-details -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->

		<div class="row inner-top-sm"><?php echo $product[0]->product_content;?></div>
		<!-- /.row -->

	</div>
	<!-- /.container -->

</section>

<!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->


<!-- ============================================================= SECTION – MORE WORKS ============================================================= -->

<section id="more-works">
	<div class="container inner-top-md inner-bottom">
		<div class="row">
			<div class="col-sm-12">
				<div id="accordion" class="panel-group blank">
					<div class="panel panel-default">

						<div class="panel-heading text-center">
							<h4 class="panel-title">
								<a class="panel-toggle collapsed" data-toggle="collapse"
									data-parent="#accordion" href="#content"> <span>更多解决方案</span>
								</a>
							</h4>
						</div>
						<!-- /.panel-heading -->

						<div id="content" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="portfolio">

									<ul class="filter text-center">
										<li><a href="#" data-filter="*" class="active">全部</a></li>
										<?php
										foreach ( $categorys as $category ) {
											echo '<li><a href="#" data-filter=".category_' . $category->category_id . '">' . $category->category_name . '</a></li>';
										}
										?>
									</ul>
									<!-- /.filter -->

									<ul class="items col-4">
									<?php
									foreach ( $product_all as $product ) {
										?>
										<li
											class="item thumb <?php echo 'category_' . $product->category_id;?>"><a
											href="<?php echo base_url('products/'.$product->product_id);?>">
												<figure>
													<figcaption class="text-overlay">
														<div class="info">
															<h4><?php echo $product->product_name;?></h4>
															<p><?php
										foreach ( $category_all as $category ) {
											if ($category->category_id === $product->category_id) {
												echo $category->category_name;
												break;
											}
										}
										?></p>
														</div>
														<!-- /.info -->
													</figcaption>
													<img src="<?php echo $product->product_img;?>"
														alt="<?php echo $product->product_name;?>"
														onerror="onerror=null;src='<?php echo base_url('assets/images/default.png');?>'">
												</figure>
										</a></li>
										<!-- /.item -->
									<?php
									}
									?>
									</ul>
									<!-- /.items -->

								</div>
								<!-- /.portfolio -->
							</div>
							<!-- /.panel-body -->
						</div>
						<!-- /.content -->

					</div>
					<!-- /.panel -->
				</div>
				<!-- /.accordion -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<!-- ============================================================= SECTION – MORE WORKS : END ============================================================= -->


<!-- ============================================================= SECTION – SHARE ============================================================= -->

<!-- <section id="share" class="light-bg">
	<div class="container">

		<div class="col-sm-4 reset-padding">
			<a href="#" class="btn-share-md">
				<p class="name">Facebook</p> <i class="icon-s-facebook"></i>
				<p class="counter">1080</p>
			</a>
		</div>

		<div class="col-sm-4 reset-padding">
			<a href="#" class="btn-share-md">
				<p class="name">Twitter</p> <i class="icon-s-twitter"></i>
				<p class="counter">1263</p>
			</a>
		</div>

		<div class="col-sm-4 reset-padding">
			<a href="#" class="btn-share-md">
				<p class="name">Google +</p> <i class="icon-s-gplus"></i>
				<p class="counter">963</p>
			</a>
		</div>

	</div>
</section> -->

<!-- ============================================================= SECTION – SHARE : END ============================================================= -->

</main>

<!-- ============================================================= MAIN : END ============================================================= -->