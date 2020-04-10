					
					<div class="clearfix"></div>
				</main><!--/#content.col-sm-9.col-md-10-->
				<!-- end: Content -->

			</div><!--/row-->
		</div><!--/.container-fluid-->
		
		
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
