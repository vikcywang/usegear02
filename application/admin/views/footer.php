	<script src="<?php echo base_url('js/jquery-1.11.1.min.js')?>"></script>
	<script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
	<script src="<?php echo base_url('js/bootstrap-datepicker.js')?>"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
		
		$('.<?php echo $active_class?>').addClass('active');
	</script>	
</body>

</html>