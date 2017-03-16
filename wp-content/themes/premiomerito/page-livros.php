<?php get_header(); ?>


<section class="page page-livros container-fluid">
		
	<div class="row	merito-title-pagina">
		<div class="container">
			<h2 class="merito-title">Livro</h2>

			<?php 

				$ano = get_query_var('category_name');


				$arEdicoes = get_terms('tag-edicoes', array(
				            'order'         => DESC,
				            'post_type'     => array('livros'),
				        )
				    );

			?>

			<select id="select-edicao" class="ani-04 bg-cor-1 bg-cor-2-hover" name="ano" data-p="livros" <?php echo ( $ano != '' ) ? 'data-s="' . $ano . '"' : ''; ?> <?php echo ( count( $arEdicoes ) <= 1 ) ? 'disabled' : ''; ?>>
				<?php
					for ($i=0; $i < count( $arEdicoes ); $i++) :
						?>
						
						<option value="<?php echo $arEdicoes[$i]->name ?>" <?php echo ( ( $ano != '' && $ano == $arEdicoes[$i]->name ) || $i == 0 ) ? 'selected' : ''; ?>><?php echo $arEdicoes[$i]->name ?></option>

						<?php
					endfor;

				?>

			</select>

			<?php 

				if ( $ano == '' ) 
				{
				    $ano = $arEdicoes[0]->name;
				}

			?>

		</div>
	</div>

	<?php


		$livros = get_post_by_type('livros');
		
		while ( $livros->have_posts() ) :
			$livros->the_post();
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

			<iframe src="<?php echo bloginfo('url') ?>/livro/<?php echo ($ano != '') ? $ano : '2016' ; ?>" frameborder="0"></iframe>

		</section>

		

		
	</div>

</section>


<?php get_footer(); ?>