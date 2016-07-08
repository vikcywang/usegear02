		<main>
<section id="hero" class="img-bg-bottom img-bg-soft"
	style="background-color:#52acc1">
	<div class="container inner">
		<div class="row"
			style="background-image: url();">
			<div class="col-md-8 col-sm-9 center-block text-center">
				<header style="color: #fff;">
					<h1 style="color: #fff;">众诚解决方案</h1>
					<p>对各类行业的运营生产提供数字化，综合性的解决方案</p>
					<p>以帮助客户提高生产管理效率并节约管理成本</p>
				</header>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
</section>
<br/><br/>
	<!-- ============================================================= SECTION – WHY CHOOSE USEGEAR ============================================================= -->
			
			<section id="why-choose-projects">
				<div class="container inner">
					
					<div class="row">
						
						<div class="col-sm-6 inner-right-xs text-right">
							<figure><img src="assets/images/art/project/banner01.png" alt=""></figure>
						</div><!-- /.col -->
						
						<div class="col-sm-6 inner-top-xs inner-left-xs">
							<span >众诚软件只能解决方案是针对企业信息化遇到的困难，为企业提供专业的<strong>商业智能解决方案</strong>。商业智能分析模块可以预测模拟企业将来的发展，协助企业及时调整策略做出更好的决策，增强企业的可持续竞争性。</span>
								<div class="gap" style="line-height: 10px; height: 10px;"></div>
								<div class="col-md-6 col-sx-6 inner-left-xs">
								<ul class="circled">
									<li><p>高速卓越的处理速度<span> &nbsp;</span></p></li>
									<li><p>智能精确的数据分析</p></li>
									<li><p>全面灵活的适应能力</p></li>
									<li><p>简单灵活的操作方式</p></li>
									<li><p>流畅出色的用户体验</p></li>
								</ul>
							</div>
							<div class="col-md-6 col-sx-6 inner-left-xs">
								<ul class="arrowed">
									<li><p>多种多样的展示方式</p></li>
									<li><p>快速高效的实施周期</p></li>
									<li><p>随需而变的后期维护</p></li>
									<li><p>完善周到的服务体系</p></li>
									<li><p>安全可靠的权限控制</p></li>
								</ul>
							</div>
						</div><!-- /.col -->
						
					</div><!-- /.row -->
				</div><!--/.container-->
			</section>
				
				<!-- ============================================================= END SECTION – WHY CHOOSE USEGEAR ============================================================= -->	
			<section id="blog" class="light-bg">
				<div class="container inner-top-sm inner-bottom">
					
					<div class="row inner-bottom-xs">
						<div class="col-sm-12">	
							<ul class="format-filter text-center">
								<li><a class="active" href="#" data-filter="*" title="全部方案" data-rel="tooltip" data-placement="top"><i class="icon-th"></i></a></li>
								<?php
								foreach ( $categorys as $category ) {
									echo '<li><a href="#" data-filter=".category_' . $category->category_id . '">' . $category->category_name . '</a></li>';
								}
								?>
							</ul><!-- /.format-filter -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
					<div class="row">
						<div class="col-sm-12">
							
							<div class="grid-blog col-2 no-sidebar">
								<div class="posts">
								<?php
									foreach ($product_all as $product){
								?>
								<div class="post <?php echo 'category_'.$product->category_id;?>">
										<div class="post-content">
											<figure class="icon-overlay icn-link post-media">
												<a href="<?php echo base_url('projects/'.$product->product_id);?>"><img
									src="<?php echo $product->product_img;?>"
									alt="<?php echo $product->product_name?>" onerror="onerror=null;src='<?php echo base_url('assets/images/default.png');?>'"></a>
											</figure><!-- /.post-media -->
											<h2 class="post-title">
												<a href="<?php echo base_url('projects/'.$product->product_id);?>"><?php echo $product->product_name?></a>
											</h2>
											<ul class="meta">
												<li class="date"><?php echo $product->pub_time?></li>
												<li class="categories"><a><?php
												foreach ($category_all as $category){
													if($category->category_id === $product->category_id){
													echo $category->category_name;
													break;
													}
												}
												?></a></li>
											</ul><!-- /.meta -->
											<p><?php echo $product->product_description?></p>
											<a href="<?php echo base_url('projects/'.$product->product_id);?>" class="btn">查看更多</a>
											
										</div><!-- /.post-content --> 
										
									</div><!-- /.post -->
								<?php 
									} 
								?>
								</div><!-- /.posts -->
							</div><!-- /.grid-blog -->
							
							<!-- <ul class="pagination">
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">Next</a></li>
							</ul>-->
							
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->
			</section>
			
			<!-- ============================================================= SECTION – BLOG : END ============================================================= -->
			
		</main>