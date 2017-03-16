<?php get_header(); ?>


<section class="page-livros container-fluid">
		
	<div class="row	merito-title-pagina">
		<div class="container">
			<h2 class="merito-title">Livros</h2>
		</div>
	</div>

	<?php


		$livros = get_post_by_type('livros');
		
		while ( $livros->have_posts() ) :
			$livros->the_post();
			$ano = get_the_title();
			$capa = get_field('capa');
			

			$arLivros[] = array(
				'ano' => $ano,
				'capa' => $capa['sizes']['capa-livro']
				
			);

		endwhile;

		$currentUrl = home_url(add_query_arg(array(),$wp->request)); 
	?>

	<div class="grade">
		<section class="container categorias">

			<div class="row">
				<ul class="col-xs-12">

					<?php for ($i=0; $i < count( $arLivros ); $i++) :
						?>

						<li class="col-sm-6">
							
							<a href="<?php echo bloginfo('url') ?>/livro/<?php echo $ano ?>">
								<div id="wrap">
									<h3 class="cor-1">
										<?php echo $arLivros[$i]['ano'] ?>
									</h3>
								</div>

								<img src="<?php echo $arLivros[$i]['capa'] ?>" nopin="nopin">
								<div class="clearfix"></div>
							</a>
						</li>

						<?php 
					endfor;
					?>

				</ul>
			</div>
		</section>

		

		
	</div>

</section>


<?php get_footer(); ?>