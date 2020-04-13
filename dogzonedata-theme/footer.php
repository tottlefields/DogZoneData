  </div>
</main>

		<footer class="footer mt-auto py-3 bg-light text-center">
<div class="container">
  <div class="row">
    <div class="col">
      <a class="active" href="#"><i class="fa fa-dog fa-lg"></i><br />Dogs</a>
    </div>
    <div class="col">
      <a href="#" class="text-muted"><i class="far fa-calendar-alt fa-lg"></i><br />Calendar</a>
    </div>
    <div class="col">
      <a href="#" class="text-muted"><i class="fas fa-chart-line fa-lg"></i><br />Statistics</a>
    </div>
  </div>
</div>
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
