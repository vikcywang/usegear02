<?php
foreach ( $product_all as $product ) {
	?>
<li class="item thumb <?php echo 'category_'.$product->category_id;?>">
	<figure>
		<div class="icon-overlay icn-link">
			<a href="<?php echo base_url('products/'.$product->product_id);?>"><img
				src="<?php echo $product->product_img;?>"
				onerror="onerror=null;src='<?php echo base_url('assets/images/default.png');?>'"></a>
		</div>
		<!-- /.icon-overlay -->
		<figcaption class="bordered no-top-border">
			<div class="info">
				<h4>
					<a href="<?php echo base_url('products/'.$product->product_id);?>"><?php echo $product->product_name?></a>
				</h4>
				<p><?php
	foreach ( $category_all as $category ) {
		if ($category->category_id === $product->category_id) {
			echo $category->category_name;
			break;
		}
	}
	?>
	</p>
				<p><?php echo $product->product_description;?></p>
			</div>
			<!-- /.info -->
		</figcaption>
	</figure>
</li>
<?php
}
?>