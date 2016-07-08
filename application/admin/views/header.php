<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>众诚软件USEGEAR后台管理系统</title>

<link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/datepicker3.css')?>" rel="stylesheet">
<link href="<?php echo base_url('css/styles.css')?>" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url('js/lumino.glyphs.js')?>"></script>
<script src="<?php echo base_url('js/ckeditor/ckeditor.js')?>"></script>

<!--[if lt IE 9]>
<script src="<?php echo base_url('js/html5shiv.js')?>"></script>
<script src="<?php echo base_url('js/respond.min.js')?>"></script>
<![endif]-->

</head>

<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">管理员导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo base_url() ?>"><span>众诚软件USEGEAR</span>后台管理系统</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $username; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!--<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>-->
							<li><a href="<?php echo base_url('logout'); ?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
    	