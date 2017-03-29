<?php get_header(); ?>

<div class="container">
	<div class="widgetForm row">
			<?php get_template_part( 'content', get_post_format() ); ?>

	</div>

	
	<div class="widgetSection row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
				<div class="col-sm-4 text-center">
					<h1><i class="fa fa-usd" aria-hidden="true"></i><h1>
					<h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit,  </h5>
				</div>

				<div class="col-sm-4 text-center">
					<h1><i class="fa fa-plane" aria-hidden="true"></i><h1>
					<h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit,  </h5>
				</div>

				<div class="col-sm-4 text-center">
					<h1><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><h1>
					<h5> Lorem ipsum dolor sit amet, consectetur adipiscing elit,  </h5>
				</div>
			</div>
		</div>
	</div> <!-- /.row -->
</div>

<?php get_footer(); ?>