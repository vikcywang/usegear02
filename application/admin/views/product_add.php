<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('product') ?>"><svg
						class="glyph stroked home">
						<use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">产品管理</li>
		</ol>
	</div>
	<!--/.row-->

	<form action="<?php echo base_url('product/add') ?>" method="post">
		<div class="container-fluid">
			<div class="col-lg-12">
				<h2 class="page-header">添加产品</h2>
			</div>

			<div class="pull-right">
				<input type="submit" class="btn btn-primary" value="保存" /> <input
					type="reset" class="btn btn-primary" value="重置" />
			</div>
		</div>
		<!--/.row-->

		<div class="tab-content">
			<div class="tab-content">
				<div class="form-group required">
					<label class="col-sm-2 control-label" for="product_name">标题</label>
					<div class="col-sm-10">
						<input type="text" name="product_name" value="" placeholder="标题"
							class="form-control" />
					</div>
				</div>
				<!--/.row-->

				<div class="form-group">
					<label class="col-sm-2 control-label" for="category_id">分类</label>
					<div class="col-sm-10">
						<select name="category_id" class="form-control">
							<option value="0">请选择一个分类</option>
                    <?php
                    	foreach ( $category_all as $item ) {
							if($item->parent_id == 0){
								?>
								<option value="<?php echo $item->category_id; ?>"><?php echo $item->category_name; ?></option>
								<?php
								foreach ($category_all as $item2){
									if($item2->parent_id == $item->category_id){
					?>
                    					<option value="<?php echo $item2->category_id; ?>"><?php echo '--'.$item2->category_name; ?></option>
                    <?php
                    				}
								}
							}
                    	}
                    ?>
                    </select>
					</div>
				</div>
				<br />

				<div class="form-group">
					<label class="col-sm-2 control-label" for="product_description">描述</label>
					<div class="col-sm-10">
						<textarea rows="3" name="product_description" value=""
							placeholder="描述（选填）" class="form-control"></textarea>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="product_img">图片链接</label>
					<div class="col-sm-10">
						<input name="product_img"
							placeholder="展示图片链接（http://www.xxx.com/images/123.jpg）"
							class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="product_att">属性</label>
					<div class="col-sm-10">
						<input name="product_att" placeholder="属性" class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="product_download_url">下载链接</label>
					<div class="col-sm-10">
						<input name="product_download_url" placeholder="下载链接"
							class="form-control" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label" for="product_content">正文</label>
					<div class="col-sm-10">
						<textarea name="product_content" id="product_content" rows="10"
							cols="80" class="form-control"></textarea>
						<script>
                		CKEDITOR.replace( 'product_content' );
            		</script>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>