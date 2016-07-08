<main>
<section id="hero" class="img-bg-bottom img-bg-soft"
	style="background-color: #94ab3e;">
	<div class="container inner">
		<div class="row"
			style="background-image: url();">
			<div class="col-md-8 col-sm-9 center-block text-center">
				<header style="color: #fff;">
					<h1 style="color: #fff;">众诚解决方案中心</h1>
					<p>公司对各类行业管理软件的开发</p>
					<p>以解决和达到用户使用通用软件所不能满足要求的需要。</p>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<br/><br/>
<section id="portfolio">
	<div class="container inner-bottom">
		<div class="row">
			<div class="col-sm-12 portfolio">

				<ul class="filter text-center">
					<li><a href="#" data-filter="*" class="active">全部产品</a></li>
					<?php
					foreach ( $categorys as $category ) {
						echo '<li><a href="#" data-filter=".category_' . $category->category_id . '">' . $category->category_name . '</a></li>';
					}
					?>
				</ul>
				<!-- /.filter -->
				<ul class="items col-3 gap">
				<?php
				foreach ( $product_all as $product ) {
					?>
					<li
						class="item thumb <?php echo 'category_'.$product->category_id;?>">
						<figure>
							<div class="icon-overlay icn-link">
								<a href="<?php echo base_url('products/'.$product->product_id);?>"><img
									src="<?php echo $product->product_img;?>"
									alt="<?php echo $product->product_name?>" onerror="onerror=null;src='<?php echo base_url('assets/images/default.png');?>'"></a>
							</div>
							<!-- /.icon-overlay -->
							<figcaption class="bordered no-top-border">
								<div class="info">
									<h4>
										<a
											href="<?php echo base_url('products/'.$product->product_id);?>"><?php echo $product->product_name?></a>
									</h4>
									<p><?php
									foreach ($category_all as $category){
										if($category->category_id === $product->category_id){
											echo $category->category_name;
											break;
										}
									} 
									?></p>
								</div>
								<!-- /.info -->
							</figcaption>
						</figure>
					</li>
				<?php
				}
				?>
				</ul>
				<!-- /.items -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>

<!-- ============================================================= SECTION – PORTFOLIO : END ============================================================= -->


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

