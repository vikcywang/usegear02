		<footer class="dark-bg">
			<div class="container inner">
				<div class="row">
					<div class="col-md-4 col-sm-6 inner">
						<h4>关于我们</h4>
						<!--<a href="index.html"><img class="logo img-intext" src="assets/images/logo-white.svg" alt=""></a>-->
						<p>众诚软件是一家集管理咨询、软件开发、代理、销售、服务的高科技民营企业，是江苏省“双软”企业，盐城市软件协会常务理事单位，江苏省信息化协会成员单位。具有知识产权的企业ERP、MES、医院管理信息系统、医药进销存、手机进销存、人事档案管理、嵌入式控制系统研发等多行业管理软件系统</p>
					</div><!-- /.col -->
					
					<div class="col-md-4 col-sm-6 inner">
						<h4>产品方案</h4>
						
						<div class="row thumbs gap-xs">
														
							<div class="col-xs-6 thumb">
								<figure class="icon-overlay icn-link">
									<a href=""><img src="<?php echo base_url('assets/images/art/hospital.png')?>" alt=""></a>
								</figure>
							</div><!-- /.thumb -->
							
							<div class="col-xs-6 thumb">
								<figure class="icon-overlay icn-link">
									<a href=""><img src="<?php echo base_url('assets/images/art/bus.png')?>" alt=""></a>
								</figure>
							</div><!-- /.thumb -->
							
						</div><!-- /.col -->
					</div>
					
					<div class="col-md-4 col-sm-6 inner">
						<h4>联系我们</h4>
						<p>江苏省盐城市科技园</p>
						<ul class="contacts">
							<li><i class="icon-location contact"></i><?php echo $address[0]->kvvalue;?></li>
							<li><i class="icon-mobile contact"></i><?php echo $phone[0]->kvvalue;?></li>
							<li><a href="mailto:<?php echo $email[0]->kvvalue;?>"><i class="icon-mail-1 contact"></i><?php echo $email[0]->kvvalue;?></a></li>
						</ul><!-- /.contacts -->
					</div><!-- /.col -->
				</div>
			</div><!-- .container -->
		  
			<div class="footer-bottom">
				<div class="container inner">
					<p class="pull-left" id="copyright"></p>
					<ul class="footer-menu pull-right">
						<li><a href="<?php echo base_url('home')?>">首页</a></li>
						<li><a href="<?php echo base_url('services')?>">服务与支持</a></li>
						<li><a href="<?php echo base_url('project')?>">解决方案</a></li>
						<li><a href="<?php echo base_url('products')?>">产品介绍</a></li>
						<li><a href="<?php echo base_url('about')?>">关于我们</a></li>
						<li><a href="<?php echo base_url('contact')?>">联系我们</a></li>
					</ul><!-- .footer-menu -->
				</div><!-- .container -->
			</div><!-- .footer-bottom -->
		</footer>
		
		<!-- ============================================================= FOOTER : END ============================================================= -->
		
		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="<?php echo base_url('assets/js/jquery.easing.1.3.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.form.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.validate.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap-hover-dropdown.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/skrollr.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/skrollr.stylesheets.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/waypoints.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/waypoints-sticky.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/owl.carousel.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.isotope.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.easytabs.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/viewport-units-buggyfill.js');?>"></script>
		<script src="<?php echo base_url('assets/js/scripts.js');?>"></script>
		<script type="text/javascript">
			var myDate = new Date();
			$('#copyright').html('&copy; 2009-'+myDate.getFullYear()+' 众诚软件USEGEAR全权所有。本公司保留所有权利。');
		</script>
		
	</body>
</html>