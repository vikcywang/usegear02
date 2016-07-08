<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="<?php echo base_url('index') ?>"><svg
						class="glyph stroked home">
						<use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active"><a href="<?php echo base_url('project')?>">解决方案管理</a></li>
		</ol>
	</div>
	<div class="row">
		<div class="container-fluid">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">
						<svg class="glyph stroked clipboard with paper">
							<use xlink:href="#stroked-clipboard-with-paper" /></svg>
						解决方案列表
					</h3>
					<a href="<?php echo base_url('project/view/project_add')?>"
						data-toggle="tooltip" title="" class="btn btn-primary pull-right"
						data-original-title="新增" style="margin-top: -25px;">添加</a>
				</div>

				<div class="panel-body">
					<form action="#" method="post" enctype="multipart/form-data"
						id="form-category">
						<div class="table-responsive">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<td style="width: 2px;" class="text-center">ID</td>
										<td class="text-left"><a href="#" class="asc">解决方案名称</a></td>
										<td class="text-right"><a href="#">所属分类</a></td>
										<td class="text-right"><a href="#">属性</a></td>
										<td class="text-right"><a href="#">发布时间</a></td>
										<td class="text-right"><a href="#">编辑</a></td>
									</tr>
								</thead>
								<tbody>
								<?php
								foreach ( $product_all as $item ) {
									?>
									<tr>
										<td class="text-center"><?php echo $item->product_id; ?></td>
										<td class="text-left"><?php echo $item->product_name; ?></td>
										<td class="text-right">
											<?php
									foreach ( $category_all as $category ) {
										if ($category->category_id === $item->category_id) {
											echo $category->category_name;
											break;
										}
									}
									?>
										</td>
										<td class="text-right"><?php echo $item->product_att; ?></td>
										<td class="text-right"><?php echo $item->pub_time; ?></td>
										<td class="text-right"><a
											href="project/edit/<?php echo $item->product_id; ?>"
											class="btn btn-default">修改</a>
											<button type="button" data-toggle="tooltip" title=""
												class="btn btn-danger"
												onclick="confirm('确定吗？?') ? window.location.href='project/delete/<?php echo $item->product_id; ?>' : false;"
												data-original-title="删除">删除</button> </a></td>
									</tr>
									<?php
								}
								?>
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>