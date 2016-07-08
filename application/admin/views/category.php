
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('index') ?>"><svg
						class="glyph stroked home">
						<use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active"><a href="<?php echo base_url('category')?>">分类管理</a></li>
		</ol>
	</div>
	<div class="row">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<svg class="glyph stroked clipboard with paper">
							<use xlink:href="#stroked-clipboard-with-paper" /></svg>
						分类列表
					</h3>
					<a href="<?php echo base_url('category/view/category_add')?>"
						data-toggle="tooltip" title="" class="btn btn-primary pull-right"
						data-original-title="新增"
						style="margin-top: -25px;">添加</a>
					<br/>
				</div>
				<!--end of new category_add-->
				<div class="panel-body">
					<form action="#" method="post" enctype="multipart/form-data"
						id="form-category">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td style="width: 2px;" class="text-center">ID</td>
										<td class="text-left"><a href="#" class="asc">分类名称</a></td>
										<td class="text-right"><a href="#">父类ID</a></td>
										<td class="text-right"><a href="#">排序</a></td>
										<td class="text-right"><a href="#">编辑</a></td>
									</tr>
								</thead>
								<tbody>
								<?php
								foreach ( $category_all as $item ) {
									?>
									<tr>
										<td class="text-center"><?php echo $item->category_id; ?></td>
										<td class="text-left"><?php echo $item->category_name; ?></td>
										<td class="text-right"><?php echo $item->parent_id; ?></td>
										<td class="text-right"><?php echo $item->sort; ?></td>
										<td class="text-right"><a
											href="category/edit/<?php echo $item->category_id; ?>"
											class="btn btn-default">修改</a>
											<button type="button" data-toggle="tooltip" title=""
												class="btn btn-danger"
												onclick="confirm('确定吗？?') ? window.location.href='category/delete/<?php echo $item->category_id; ?>' : false;"
												data-original-title="删除">删除</button> </a></td>
									</tr>
                  				<?php
								}
								?>
                  				</tbody>
							</table>
						</div>
					</form>
					<div class="row">
						<div class="col-sm-6 text-left"></div>
						<div class="col-sm-6 text-right"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>