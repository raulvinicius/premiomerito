<?php get_header(); ?>


<section class="page-palestrantes container-fluid">
		
	<div class="row	merito-title-pagina">
		<div class="container">
			<h2 class="col-xs-12 merito-title">Palestrantes</h2>
		</div>
	</div>

	<div class="row">
		<ul>

		<?php 

			$palestrantes = get_post_by_type('palestrantes');
			$i = 0;
			
			while ( $palestrantes->have_posts() ) :
				$palestrantes->the_post();

				$ano = get_field('ano');
				$biografia = get_field('biografia');
				$foto = get_field('foto');

				?>

				<li class="col-xs-12">
					<div class="col-md-5 img">
						<img src="<?php echo $foto['sizes']['foto-palestrante'] ?>">
					</div>
					<div class="col-md-7 txt">
						<div class="wrap">
							<h4 class="merito-title"><?php echo $ano ?></h4>
							<h3 class="cor-1 merito-title"><?php the_title(); ?></h3>
							<?php echo $biografia ?>
						</div>
					</div>
					<div class="clearfix"></div>
				</li>

				<?php 
				$i++;
			endwhile;
			?>

		</ul>
	</div>

</section>


<?php get_footer(); ?>