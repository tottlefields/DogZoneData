

		<footer class="footer mt-auto py-3">
		  <div class="container">
		    <span class="text-muted">Place sticky footer content here.</span>
		  </div>
		</footer>

		
		<!-- start: JavaScript-->
		<script>
		var DzdAjax = {"ajax_url":"<?php echo admin_url( 'admin-ajax.php' ); ?>", "site_url":"<?php echo get_site_url(); ?>"};
		</script>
		<?php wp_footer(); ?>
		
		<script>
		$(document).ready(function() {
			$('.datepick').datepicker({
				format: 'dd/mm/yyyy'
			});
		});
		<!-- end: JavaScript-->

	</body>
</html>
