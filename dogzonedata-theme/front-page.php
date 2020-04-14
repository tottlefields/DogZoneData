<?php get_header(); ?>

<div class="row">
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
		<div class="card dog mb-3">
			<div class="card-body">
				<img src="<?php echo get_template_directory_uri() . '/assets/img/generic-paw.png'; ?>"
					class="rounded-circle m-1 float-right" alt="Tally"
					style="border: 2px solid #008000; background-color: #008000">
				<h5 class="card-title" style="color: #008000">Tally</h5>
				<p class="card-text">31st August 2009<br />
				Working Cocker Spaniel<br />
				11.75kg (29/02/20)</p>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
		<div class="card dog mb-3">
			<div class="card-body">
				<img src="/app/wp-content/uploads/sites/2/2020/04/lexey.png"
					class="rounded-circle m-1 float-right" alt="Lexey"
					style="border: 2px solid #663399; background-color: #663399">
				<h5 class="card-title" style="color: #663399">Lexey</h5>
				<p class="card-text">14th October 2013<br />
				Borde Collie<br />
				12.40kg (29/02/20)</p>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
		<div class="card dog mb-3">
			<div class="card-body">
				<img src="/app/wp-content/uploads/sites/2/2020/04/finnick.png"
					class="rounded-circle m-1 float-right" alt="Finnick"
					style="border: 2px solid #fd7e14; background-color: #fd7e14">
				<h5 class="card-title" style="color: #fd7e14">Finnick</h5>
				<p class="card-text">2nd November 2015<br />
				Miniature American Shepherd<br />
				14.00kg (29/02/20)</p>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
		<div class="card dog mb-3">
			<div class="card-body">
				<img src="/app/wp-content/uploads/sites/2/2020/04/bella.png"
					class="rounded-circle m-1 float-right" alt="Bella"
					style="border: 2px solid #ff00ee; background-color: #ff00ee">
				<h5 class="card-title" style="color: #ff00ee">Bella</h5>
				<p class="card-text">15th March 2017<br />
				Working Cocker Spaniel<br />
				9.45kg (27/02/20)</p>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
		<div class="card dog mb-3">
			<div class="card-body">
				<img src="/app/wp-content/uploads/sites/2/2020/04/kylo.png"
					class="rounded-circle m-1 float-right" alt="Kylo"
					style="border: 2px solid #000000; background-color: #000000">
				<h5 class="card-title" style="color: #000000">Kylo</h5>
				<p class="card-text">30th November 2018<br />
				Crossbreed<br />
				11.35kg (12/03/20)</p>
			</div>
		</div>
	</div>
</div>


<?php get_template_part('modals/modal', 'basic'); ?>

<?php get_footer(); ?>
