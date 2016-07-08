	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">管理首页</li>
			</ol>
		</div><!--/.row-->
		
		<form action="<?php echo base_url('admin/update') ?>" method="post">
		<div class="container-fluid">
			<div class="col-lg-12">
				<h2 class="page-header">欢迎使用众诚软件USEGEAR后台管理系统</h2>
			</div>

			<div class="pull-right">
				<input type="submit" class="btn btn-primary" value="更新" />
			</div>
		</div>
		<!--/.row-->

		<div class="tab-content">
			<div class="tab-content">
				<div class="form-group required">
                 	<label class="col-sm-2 control-label" for="email">邮箱</label>
					<div class="col-sm-10">
                      <input type="text" name="email" value="<?php echo $email[0]->kvvalue;?>" placeholder="" class="form-control"/>
                    </div>
                </div>
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="phone">联系电话</label>
					<div class="col-sm-10">
						<input type="text" name="phone" value="<?php echo $phone[0]->kvvalue;?>" placeholder=""
							class="form-control" />
					</div>
				</div>
				
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="weibo">微博</label>
					<div class="col-sm-10">
						<input type="text" name="weibo" value="<?php echo $weibo[0]->kvvalue;?>" placeholder=""
							class="form-control" />
					</div>
				</div>
				
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="qq">QQ</label>
					<div class="col-sm-10">
						<input type="text" name="qq" value="<?php echo $qq[0]->kvvalue;?>" placeholder=""
							class="form-control" />
					</div>
				</div>
				
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="wechat">微信</label>
					<div class="col-sm-10">
						<input type="text" name="wechat" value="<?php echo $wechat[0]->kvvalue;?>" placeholder=""
							class="form-control" />
					</div>
				</div>
				
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="address">地址</label>
					<div class="col-sm-10">
						<input type="text" name="address" value="<?php echo $address[0]->kvvalue;?>" placeholder=""
							class="form-control" />
					</div>
				</div>
				
			</div>
		</div>
	</form>
	</div>	<!--/.main-->

