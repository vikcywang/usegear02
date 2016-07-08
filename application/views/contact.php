			<!-- ============================================================= MAIN ============================================================= -->
		<main>
			<!-- ============================================================= SECTION – CONTACT FORM ============================================================= -->
			<section id="hero" class="light-bg img-bg-bottom img-bg-softer">
				<div class="container inner">
					
					<div class="row">
						<div class="col-md-8 col-sm-9 center-block text-center">
							<header>
								<h1>联系我们</h1>
								<h3>您是否想了解如何实现独特的智能创意？</h3>
								<h2>我们诚挚聆听您的需求！</h2>
							</header>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!--/.container-->
				</section><!--/.section-->
				<div id="contact-form" class="container inner" style="margin-top:0px;padding-top:0px;">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								
								<div class="col-sm-6 outer-top-md inner-right-sm">
									
									<h2>留下您的建议</h2>
									
									<form id="contactform" class="forms" action="contact.php" method="post">
										
										<div class="row inner-top-sm" style="padding-top:10px">
											<div class="col-sm-6 inner-top-xs" style="padding-top:0px">
												<input type="text" name="name" class="form-control" placeholder="您的名字">
											</div><!-- /.col -->
											<div class="col-sm-6 inner-top-xs" style="padding-top:0px">
												<input type="email" name="email" class="form-control" placeholder="您的邮箱">
											</div><!-- /.col -->
										</div><!-- /.row -->
										
										<div class="row">
											<div class="col-sm-12">
												<input type="text" name="subject" class="form-control" placeholder="您的主题">
											</div><!-- /.col -->
										</div><!-- /.row -->
										
										<div class="row">
											<div class="col-sm-12">
												<textarea name="message" class="form-control" placeholder="留下您的建议...."></textarea>
											</div><!-- /.col -->
										</div><!-- /.row -->
										
										<button type="submit" class="btn btn-default btn-submit">提交您的宝贵建议</button>
										
									</form>
									
									<div id="response"></div>
									
								</div><!-- ./col -->
								
								<div class="col-sm-6 outer-top-md inner-left-sm border-left">
									
									<h2>联系方式</h2>
									<h3>盐城市众诚软件（USEGEAR）有限公司</h3>
									<ul class="contacts" style="margin-top:10px">
										<li><i class="icon-location contact"></i><?php echo $address[0]->kvvalue;?></li>
										<li><i class="icon-mobile contact"></i><?php echo $phone[0]->kvvalue;?></li>
										<li><i class="fa fa-qq"></i> <?php echo $qq[0]->kvvalue;?></li>
										<li><a href="mailto:<?php echo $email[0]->kvvalue;?>"><i class="icon-mail-1 contact"></i> <?php echo $email[0]->kvvalue;?></a></li>
										<li><a href="mailto:market@usegear.com.cn"><i class="fa fa-line-chart"></i> market@usegear.com.cn</a></li>
										<li><a href="mailto:RD-dept@usegear.com.cn"><i class="fa fa-connectdevelop"></i> RD-dept@usegear.com.cn</a></li>
									</ul><!-- /.contacts -->
									
								</div><!-- /.col -->
								
							</div><!-- /.row -->
						</div><!-- /.col -->
					</div><!-- /.row -->
					
				</div><!-- /.container -->

			<!-- ============================================================= SECTION – CONTACT FORM : END ============================================================= -->

			<!-- ============================================================= SECTION – MAP ============================================================= -->			
			<section id="map" class="height-sm"></section>
			<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=B4qh13m7gpqcuO0UVxvG1rfQ"></script>
		<script type="text/javascript">
			// 百度地图API功能
			var map = new BMap.Map("map");
			var point = new BMap.Point(120.18817471507, 33.370612163434);
			map.centerAndZoom(point, 17);
			var marker = new BMap.Marker(point);  // 创建标注
			map.addOverlay(marker);               // 将标注添加到地图中
			marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
		</script>
			<!-- ============================================================= SECTION – MAP : END ============================================================= -->
		</main>
		<!-- ============================================================= MAIN : END ============================================================= -->