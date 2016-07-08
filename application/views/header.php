<!DOCTYPE html>
<html>
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title> <?php echo $title ?> </title>
		
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
		
		<!-- Customizable CSS -->
		<link href="<?php echo base_url('assets/css/main.css')?>" rel="stylesheet" data-skrollr-stylesheet>
		<link href="<?php echo base_url('assets/css/green.css')?>" rel="stylesheet" title="Color">
		<link href="<?php echo base_url('assets/css/owl.carousel.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/owl.transitions.css')?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/animate.min.css')?>" rel="stylesheet">
		
		<!-- Icons/Glyphs -->
		<link href="<?php echo base_url('assets/fonts/fontello.css')?>" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css')?>">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="<?php echo base_url('favicon.ico')?>"/>
		
		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
			<script src="<?php echo base_url('assets/js/html5shiv.js')?>"></script>
			<script src="<?php echo base_url('assets/js/respond.min.js')?>"></script>
		<![endif]-->
		
		<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	</head>
	
	<body>
		
		<!-- ============================================================= HEADER ============================================================= -->
		
		<header>
			<div class="navbar">
				
				<div class="navbar-header">
					<div class="container">
						
						<ul class="info pull-left">
							<li><a href="mailto:<?php echo $email[0]->kvvalue;?>"><i class="icon-mail-1 contact"></i><?php echo $email[0]->kvvalue;?></a></li>
							<li><i class="icon-mobile contact"></i><?php echo $phone[0]->kvvalue;?></li>
						</ul><!-- /.info -->
						
						<ul class="social pull-right">
							<li><a href="<?php echo $weibo[0]->kvvalue;?>"><i class="fa fa-weibo"></i></a></li>
							<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq[0]->kvvalue;?>&site=qq&menu=yes"><i class="fa fa-qq"></i></a></li>
							<li id="wechat">
								<a href="<?php echo $wechat[0]->kvvalue;?>"><i class="fa fa-weixin"></i></a>
								<div class="weixin-qrcode" style="position: absolute;right: 0px;z-index: 1;display: none;margin-top:-1px;">
									<img src="http://codeigniter.org.cn/assets/images/weixin-qrcode.jpg">
								</div>
							</li>
						</ul><!-- /.social -->
						<script type="text/javascript">
							$("#wechat").mouseover(function(){
						    	$(".weixin-qrcode").css("display","block");
						  	});
							$("#wechat").mouseout(function(){
						    	$(".weixin-qrcode").css("display","none");
						  	});
						</script>
						<!-- ============================================================= LOGO MOBILE ============================================================= -->
						
						<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url('assets/images/logo_1.png');?>" class="logo" alt=""></a>
						
						<!-- ============================================================= LOGO MOBILE : END ============================================================= -->
						
						<a class="btn responsive-menu pull-right" data-toggle="collapse" data-target=".navbar-collapse"><i class='icon-menu-1'></i></a>
						
					</div><!-- /.container -->
				</div><!-- /.navbar-header -->
				
				<div class="yamm" style="position: relative;z-index: -1;">
					<div class="navbar-collapse collapse">
						<div class="container">
							
							<!-- ============================================================= LOGO ============================================================= -->
							
							<a class="navbar-brand" href="<?php echo base_url('home')?>"><img src="<?php echo base_url('assets/images/logo_1.png');?>" class="logo" alt=""></a>
							
							<!-- ============================================================= LOGO : END ============================================================= -->
							
							
							<!-- ============================================================= MAIN NAVIGATION ============================================================= -->
							
							<ul class="nav navbar-nav">
								
								<li class="dropdown">
									<a href="<?php echo base_url('home')?>" >首页</a>
								</li><!-- /.dropdown -->
								<li class="dropdown">
									<a href="<?php echo base_url('services')?>" >服务与支持</a>
								</li><!-- /.dropdown -->
								<li class="dropdown">
									<a href="<?php echo base_url('projects')?>" class="dropdown-menu-title">解决方案</a>
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="<?php echo base_url('products')?>" class="dropdown-menu-title">产品介绍</a>
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="<?php echo base_url('about');?>" >关于我们</a>
								</li><!-- /.dropdown -->
								
								<li class="dropdown">
									<a href="<?php echo base_url('contact')?>" >联系我们</a>
								</li><!-- /.dropdown -->
								
								<li class="dropdown pull-right searchbox">
									<a href="<?php echo base_url('search')?>" class="dropdown-toggle js-activated"><i class="icon-search"></i></a>
											  
									<div class="dropdown-menu">
										<form id="search" class="navbar-form search" role="search">
											<input type="search" class="form-control" placeholder="Type to search">
											<button type="submit" class="btn btn-default btn-submit icon-right-open"></button>
										</form>
									</div><!-- /.dropdown-menu -->
								</li><!-- /.searchbox -->
								
							</ul><!-- /.nav -->
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>