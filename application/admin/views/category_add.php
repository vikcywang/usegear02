	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('category') ?>"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">分类管理</li>
			</ol>
		</div><!--/.row-->
        
    <form action="<?php echo base_url('category/add') ?>" method="post">
		<div class="container-fluid">
			<div class="col-lg-12">
				<h2 class="page-header">添加分类</h2>
			</div>
		
			<div class="pull-right">
        		<input type="submit" class="btn btn-primary" value="保存" />
        		<input type="reset" class="btn btn-primary" value="重置" />
			</div>
		</div> <!--/.row-->
        
        <div class="tab-content">
         	<div class="tab-content">
				<div class="form-group required">
                 	<label class="col-sm-2 control-label" for="input-name5">分类名称</label>
					<div class="col-sm-10">
                      <input type="text" name="category_name" value="" placeholder="分类名称" class="form-control">
                    </div>
                </div><!--/.row-->
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-description5">分类描述</label>
                    <div class="col-sm-10">
                     <textarea rows="3" name="category_description" value="" placeholder="分类描述（选填）" class="form-control"></textarea>
                	</div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-description5">父类ID</label>
                    <div class="col-sm-10">
                     <input name="parent_id" value="0" placeholder="父类id（默认为0）" class="form-control"/>
                	</div>
            	</div><!--/.row of editor-->
                
                <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-description5">排序</label>
                    <div class="col-sm-10">
                     <input name="sort" value="0" placeholder="排序（默认为0）" class="form-control"/>
                	</div>
            	</div><!--/.row of editor-->
        </div><!--/.row content-->
     </div>
   </form>
</div>