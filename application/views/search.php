<main>
<section id="hero" class="light-bg img-bg-bottom img-bg-softer">
	<div class="container inner">
		<div class="row">
			<div class="col-md-8 col-sm-9 center-block text-center">
				<header>
					<h1>搜索</h1>
					<div class="navbar-form search">
						<input id="search_k" style="background: #fff;" type="text" class="form-control" placeholder="请输入要搜索的内容">
						<button type="button"
							class="btn btn-default btn-submit icon-right-open"
							style="margin-top: 5px;" 
							id="search_b"></button>
					</div>
				</header>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$('#search_b').click(function(){
			var search_key = $('#search_k').val();
			if ($.trim(search_key) === "") {
				alert('搜索内容不能为空！');
				return false;
		    }else{
				$.ajax({     
			    	url:'<?php echo base_url('search/doSearch')?>',     
			    	type:'post',     
			    	data:'key='+search_key,     
			    	async : false, //默认为true 异步     
			    	error:function(){     
			       		alert('error');     
			    	},     
			    	success:function(data){     
			       		$("#search_r").html(data);     
			    	}  
				});
		    }

		    $('#search_r').attr('style','');
		});
	</script>
</section>
<br />
<br />
<section id="portfolio">
<div class="container inner-bottom">
		<div class="row">
			<div class="col-sm-12 portfolio">

				<ul class="filter text-center">
					<li><a href="#" data-filter="*" class="active">搜索结果</a></li>
				</ul>
				<!-- /.filter -->
				<ul id="search_r" class="items col-3 gap">
				</ul>
				<!-- /.items -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
</section>
</main>