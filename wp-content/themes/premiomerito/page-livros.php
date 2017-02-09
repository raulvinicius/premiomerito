<?php get_header(); ?>


<section class="page-homenageados container-fluid">
		
	<div class="row	merito-title-pagina">
		<div class="container">
			<h2 class="merito-title">Livros</h2>

<!-- 			<?php 

				$arHomenageados = array(
					'atendimento' => array(),
					'crescimento' => array(),
					'criatividade' => array(),
					'personalidade' => array()
				);

				$arEdicoes = array();

				$homenageados = get_post_by_type('homenageados');

				while ( $homenageados->have_posts() ) :
					$homenageados->the_post();
					$edicao = get_field('edicao');
					
					$arEdicoes[] = array(
					    'id' => $edicao[0],
					    'name' => get_term_by('id', $edicao[0], 'tag-edicoes')->name
					);

				endwhile;


				wp_reset_query();

				$arEdicoes = array_map('unserialize', array_unique(array_map('serialize', $arEdicoes)));

				$arEdicoes = array_orderby($arEdicoes, 'name', SORT_DESC);

			?>
 -->


<!-- 			<select id="select-edicao" class="ani-04 bg-cor-1 bg-cor-2-hover" name="ano" <?php echo ( isset($_GET['ano']) ) ? 'data-s="' . $_GET['ano'] . '"' : ''; ?> <?php echo ( count( $arEdicoes ) <= 1 ) ? 'disabled' : ''; ?>>
				<?php
					for ($i=0; $i < count( $arEdicoes ); $i++) :
						?>
						
						<option value="<?php echo $arEdicoes[$i]['name'] ?>" <?php echo ( ( isset( $_GET['ano'] ) && $_GET['ano'] == $arEdicoes[$i]['name'] ) || $i == 0 ) ? 'selected' : ''; ?>>em <?php echo $arEdicoes[$i]['name'] ?></option>

						<?php 
					endfor;


					if ( isset( $_GET['ano'] ) ) 
					{
					    $ano = get_term_by('slug', $_GET['ano'], 'tag-edicoes')->term_id;
					    var_dump($ano);
					}
					else
					{
					    $ano = $arEdicoes[0]->id;
					}

				?>

			</select> -->
		</div>
	</div>

	<?php

		$extraArgs = array(
			'meta_query'	=> array(
				array(
					'key'      => 'edicao',
				    'value'    => $ano,
				    'compare'   => 'LIKE'
				)		  
			)
		);

		$homenageados = get_post_by_type('homenageados', $extraArgs);
		
		while ( $homenageados->have_posts() ) :
			$homenageados->the_post();
			$nome = get_the_title();
			$foto = get_field('foto');
			$edicao = get_field('edicao');
			$categoria = get_field('categoria');
			$empresa = get_field('empresa');
			$biografia = get_field('biografia');

			$arHomenageados[ $categoria ][] = array(
				'nome' => $nome,
				'foto' => $foto['sizes']['foto-homenageado'],
				'edicao' => $edicao,
				'categoria' => $categoria,
				'empresa' => $empresa,
				'biografia' => $biografia
			);

		endwhile;

		$currentUrl = home_url(add_query_arg(array(),$wp->request)); 
	?>

	<div class="grade">
		<section class="container categorias" id="atendimento">

			<div class="row">
				<ul class="col-xs-12">
					<?php 
					 ?>
					<?php for ($i=0; $i < count( $arHomenageados['atendimento'] ); $i++) :

						?>
						<li class="col-md-6 <?php echo ( $i % 2 != 0 ) ? 'dir' : '' ; ?>" id="<?php echo slugify( $arHomenageados['atendimento'][$i]['nome'] ); ?>">
							<a href="<?php echo $currentUrl ?>/#" class="ani-06" id="fecha-lista"></a>
							<a href="<?php echo $currentUrl ?>/#<?php echo slugify( $arHomenageados['atendimento'][$i]['nome'] ); ?>" id="abre-lista"></a>

							<!-- <img src="<?php echo $arHomenageados['atendimento'][$i]['foto'] ?>" nopin="nopin"> -->

							<img src="img/ph-capa-livro.png">
							<div id="wrap">
								<h3 class="cor-1"><?php echo $arHomenageados['atendimento'][$i]['nome'] ?></h3>
								<h4><?php echo $arHomenageados['atendimento'][$i]['empresa'] ?></h4>
								<div id="txt">
									<?php echo $arHomenageados['atendimento'][$i]['biografia'] ?>
								</div>
							</div>
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