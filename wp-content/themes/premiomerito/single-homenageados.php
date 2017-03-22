<?php get_header(); ?>


<section class="page-homenageado page-homenageados container-fluid">


		<?php $ano = get_query_var('category_name'); ?>

		<div class="lista">
			
			<a href="<?php bloginfo('url'); echo '/homenageados/'; echo ($ano != '' ) ? $ano . '/' : '' ; ?>" class="ani-06" id="fecha-lista"></a>

			<?php

				$extraArgs = array(
					'tax_query' => array(
						array(
							'taxonomy'  => 'tag-edicoes',
							'field'		=> 'slug',
							'terms' 	=> $ano,
						),
				    ),
				    'meta_key' => 'categoria',
				    'orderby' => array(
				    	'categoria' => 'ASC',
				    	'title' => 'ASC',
				    ),
		  		);


				$homenageados = get_post_by_type('homenageados', $extraArgs);

				//variável para detectar quando trocar de categoria
				$categoriaAtual = '';
				$i = 0;

				while ( $homenageados->have_posts() ) :
					$homenageados->the_post();
					$nome = get_the_title();
					$foto = get_field('foto');
					$logo = get_field('logo');
					$edicao = get_field('edicao');
					$categoria = get_field('categoria');
					$empresario = get_field('empresario');
					$biografia = get_field('biografia');

					$arHomenageados[ $categoria ][] = array(
						'nome' => $nome,
						'foto' => $foto,
						'logo' => $logo,
						'edicao' => $edicao,
						'categoria' => $categoria,
						'empresario' => $empresario,
						'biografia' => $biografia
					);

					?>



					<!-- /////////////////////////////////////////////// -->
					<!-- se a categoria for nova escreve o cabeçalho//// -->
					<!-- /////////////////////////////////////////////// -->


					<?php if ($categoriaAtual != $categoria): ?>

					<?php if ($i > 0): ?>

							</ol>
						</div>
					</section>

					<?php endif ?>

					<section class="container categorias" id="<?php echo $categoria ?>">

						<div class="row">
							<h2 class="col-xs-12">


								<!-- /////////////////////////////////////////////// -->
								<!-- troca o ícone dependendo da categoria////////// -->
								<!-- /////////////////////////////////////////////// -->


								<?php if ($categoria == 'atendimento'): ?>
									<i class="ico">
										<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="50px" height="48px" viewBox="0 0 522.4 503.5" style="enable-background:new 0 0 522.4 503.5;"
											 xml:space="preserve">
										<style type="text/css">
											.sth0{fill:#00a489;}
										</style>
										<defs>
										</defs>
										<path class="sth0" d="M496.2,222.1c-1.6-69.2-15.3-119.6-54-156.2C398.4,24.6,330.8,0,261.2,0S124,24.7,80.3,65.9
											c-38.7,36.6-52.4,86.9-54,156.1c-39.7,20.8-33.7,133.5,13.5,133.5c19.6,0,32.9,0,40.8,0c2.4,9,5.4,16,9,23.5
											c35.8,73.3,109.4,124.5,171.6,124.5c62.2,0,135.8-51.2,171.6-124.5c3.6-7.4,6.6-14.4,9-23.4c7.9,0,21.2,0,40.8,0
											C529.9,355.6,535.9,242.9,496.2,222.1z M417.6,275.8c-0.7,27-3.2,61.5-16.2,88c-28.7,58.8-90.3,104.8-140.2,104.8
											c-38.8,0-84.7-27.9-116.7-67.9c15.2,5.9,32.8,10.3,53,12.2c7.6,9.6,22.2,16.1,39,16.1c24.6,0,44.5-13.9,44.5-31.1
											c0-17.2-19.9-31.1-44.5-31.1c-16.1,0-30.2,6-38,14.9c-42.7-4.6-70.5-21.9-84.5-36c-7-22.9-8.6-48.7-9.2-70c-0.2-7.4-0.2-14.6,0-21.6
											c34.9-3.1,79.4-37.6,84.1-106.6c52.7,70.6,116,60.8,139.1,83.8c0-6.5-5.2-20.7-13-25.9c28.1,1.1,68.7,7.1,101.8,33.1
											C417.7,250.3,417.9,262.7,417.6,275.8z M261.2,50.5c-112.7,0-175.6,61-188.8,169c-4.1,0-11.2,0-18.8,0c1.9-61,13.7-103.6,45.4-133.5
											c38.8-36.6,99.5-58.7,162.3-58.7s123.5,22.1,162.3,58.7c31.7,29.9,43.5,72.4,45.4,133.4c-7.6,0-14.8,0-18.8,0
											C436.8,111.6,373.9,50.5,261.2,50.5z"/>
										</svg>
									</i>
								<?php elseif ($categoria == 'crescimento'): ?>
									<i class="ico">
										<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="42px" height="48px" viewBox="0 0 42 48" style="enable-background:new 0 0 42 48;" xml:space="preserve">
										<style type="text/css">
											.sth0{fill:#00a489;}
										</style>
										<defs>
										</defs>
										<g>
											<path class="sth0" d="M0,33.2v11.5C0,46.5,1.5,48,3.4,48h5.2c1.8,0,3.3-1.5,3.3-3.3v-13v-9.8L1.1,30.7C0.4,31.4,0,32.2,0,33.2z
												 M4,34.4L8,32v0.4v11.6H4V34.4z"/>
											<path class="sth0" d="M15,44.7c0,1.8,1.4,3.3,3.2,3.3h5.5c1.8,0,3.2-1.5,3.2-3.3V19.8V9.9l-12,9.7V44.7z M19,22.9l4-2.9v0.4v23.6h-4
												V22.9z"/>
											<path class="sth0" d="M39.4,0c-0.5,0-0.9,0.1-1.3,0.4L30,7.7v37c0,1.8,1.5,3.3,3.3,3.3h5.4c1.8,0,3.3-1.5,3.3-3.3V7.8V2.6
												C42,1.1,40.8,0,39.4,0z M38,8.6v35.3h-4v-33l4-3V8.6z"/>
										</g>
										</svg>
									</i>

								<?php elseif ($categoria == 'criatividade'): ?>
									<i class="ico">
										<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="34.1px" height="48px" viewBox="0 0 34.1 48" style="enable-background:new 0 0 34.1 48;"
											 xml:space="preserve">
										<style type="text/css">
											.sth0{fill:#00A489;}
										</style>
										<defs>
										</defs>
										<g>
											<path class="sth0" d="M16.7,10.3c-0.7,0-1.2,0.5-1.2,1.2c0,0.7,0.5,1.2,1.2,1.2c2.7,0,4.9,2.2,4.9,4.9c0,0.7,0.5,1.2,1.2,1.2
												c0.7,0,1.2-0.5,1.2-1.2C24,13.6,20.7,10.3,16.7,10.3z"/>
											<path class="sth0" d="M17,0C7.6,0,0,7.6,0,17c0,5.5,2.5,9.1,4.7,12.2C6.5,31.7,8,33.9,8,36.7v7.1c0,1.2,1,2.1,2.2,2.1h4.7
												c0.1,1.1,1,2,2.2,2s2.1-0.9,2.2-2h4.7c1.2,0,2.2-0.9,2.2-2.1v-7.1c0-2.8,1.5-4.9,3.3-7.4c2.2-3.1,4.7-6.7,4.7-12.3
												C34.1,7.6,26.4,0,17,0z M12.4,41.6V39h9.4v2.6H12.4z M25.8,26.8c-1.6,2.3-3.3,4.7-3.9,7.8h-2.7v-4.8c0-1.2-0.9-2.2-2.1-2.2
												s-2.1,1-2.1,2.2v4.8h-2.8c-0.5-3.2-2.2-5.6-3.9-7.9c-2-2.8-3.9-5.5-3.9-9.7c0-7,5.7-12.7,12.7-12.7s12.7,5.7,12.7,12.7
												C29.7,21.2,27.8,24,25.8,26.8z"/>
										</g>
										</svg>

									</i>

								<?php elseif ($categoria == 'personalidade'): ?>
									<i class="ico">
										<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
										<svg version="1.1"
											 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
											 x="0px" y="0px" width="48.7px" height="50px" viewBox="0 0 47.4 48" style="enable-background:new 0 0 47.4 48;"
											 xml:space="preserve">
										<style type="text/css">
											.sth0{fill:#00A489;}
										</style>
										<defs>
										</defs>
										<path class="sth0" d="M47.3,38.9c-0.7-3.3-2.1-6-3.8-7.5c-1.1-1-3.1-1.6-5.5-2.4c-1.7-0.6-3.7-1.2-5.3-2L31,25
											c1.3-1.2,2.5-2.8,3.4-4.5c0.9-1.9,1.2-4.2,1.2-6.4C35.8,5.2,31.9,0,23.7,0S11.5,5.2,11.8,14.1c0.1,2.2,0.3,4.5,1.2,6.4
											c0.8,1.7,2,3.3,3.4,4.5l-1.7,2c-1.6,0.8-3.6,1.4-5.3,2c-2.5,0.8-4.4,1.4-5.5,2.4c-1.7,1.5-3.1,4.2-3.8,7.5c0,0.1,0,0.3,0,0.4
											c0,2.9,4.1,5,7.5,6.2c4.6,1.6,10.4,2.5,16.2,2.5s11.6-0.9,16.2-2.5c3.4-1.2,7.5-3.2,7.5-6.2C47.4,39.2,47.3,39.1,47.3,38.9z
											 M22.5,34.1l-0.4-0.7l1.5-1.8l1.5,1.8l-0.4,0.7H22.5z M29.5,28.9l-0.9,3l-3.3-3.8c0.9-0.2,1.8-0.5,2.7-1L29.5,28.9z M15.4,14
											c0-0.5,0-1.1,0-1.7c1.8-0.8,3.5-2.9,3.8-6.2c3.3,4.4,7.2,3.8,8.7,5.2c0-0.4-0.3-1.3-0.8-1.6c1.3,0.1,3.1,0.3,4.8,1.1
											C32,11.9,32,13,32,14c0,1.4-0.2,3.5-0.9,4.9c-0.8,1.7-2.1,3.2-3.6,4.2c-1.3,0.9-2.7,1.5-3.8,1.5s-2.5-0.5-3.8-1.5
											c-1.5-1.1-2.8-2.6-3.6-4.2C15.6,17.5,15.4,15.5,15.4,14z M22,28.1l-3.3,3.8l-0.9-2.9l1.5-1.8C20.2,27.5,21.1,27.9,22,28.1z
												 M3.7,39.3c0.5-2.3,1.5-4.2,2.5-5.1c0.6-0.5,2.5-1.1,4.3-1.7c1.3-0.4,2.8-0.9,4.2-1.5l4,13.1c-3.3-0.3-6.5-0.9-9.2-1.8
											C5.8,41.1,4.1,39.9,3.7,39.3z M22.5,44.4l-1.3-4.2l1.3-2.4h2.2l1.3,2.4l-1.3,4.2c-0.4,0-0.8,0-1.1,0C23.3,44.4,22.9,44.4,22.5,44.4z
											 M38,42.3c-2.8,0.9-5.9,1.5-9.3,1.8l4-13.2c1.4,0.6,2.9,1.1,4.2,1.5c1.7,0.6,3.7,1.2,4.3,1.7c1,0.9,2,2.9,2.5,5.1
											C43.3,39.9,41.6,41.1,38,42.3z"/>
										</svg>

									</i>

								<?php endif ?> <!-- endif se categoria igual a atendimento -->

								<!-- /////////////////////////////////////////////// -->
								<!-- FIM troca o ícone dependendo da categoria////// -->
								<!-- /////////////////////////////////////////////// -->


								<?php echo ucfirst($categoria) . " <span>{$ano}</span>"; ?>
							</h2>
							<div class="clearfix"></div>

							<?php if ($categoria == 'atendimento'): ?>
								<p class="intro">A criatividade é a ferramenta mais adequada para encontrarmos maneiras de fazer mais com menos, de reduzir custos, de simplificar processos e sistemas, de aumentar lucratividade, de encontrar novos usos para produtos, de encontrar novos segmentos de mercado, de desenvolver novos produtos e muito mais. Nesta categoria são premiadas empresas que se destacaram pelo uso da criatividade como principal ferramenta de sucesso.</p>
							<?php elseif ($categoria == 'crescimento'): ?>
								<p class="intro">Crescer é um dos maiores desafios das empresas. O aumento do faturamento e da lucratividade significa para uma empresa, o que o sangue, o alimento e oxigênio significam para um ser humano. Eles não são o sentido da vida, mas sem eles não há vida e muito menos crescimento. Nesta categoria, são premiadas as empresas que se destacaram pelo crescimento do negócio através de estratégias diversificadas.</p>
							<?php elseif ($categoria == 'criatividade'): ?>
								<p class="intro">A criatividade é a ferramenta mais adequada para encontrarmos maneiras de fazer mais com menos, de reduzir custos, de simplificar processos e sistemas, de aumentar lucratividade, de encontrar novos usos para produtos, de encontrar novos segmentos de mercado, de desenvolver novos produtos e muito mais. Nesta categoria são premiadas empresas que se destacaram pelo uso da criatividade como principal ferramenta de sucesso.</p>
							<?php elseif ($categoria == 'personalidade'): ?>
								<p class="intro">Encontrar uma exata definição para o termo personalidade não é uma tarefa simples. Personalidade é o conjunto das características marcantes de uma pessoa, que a tornam única e diferente de todas as outras. A presente categoria homenageia pessoas que se destacaram no cenário econômico, político, cultural e social do DF e entorno, deixando sua marca na história de Brasília. </p>
							<?php endif ?>

						</div>
							
						
						<div class="row">
							<ol class="col-xs-12">
							<?php endif ?> <!-- endif se trocou de categoria -->


					<!-- /////////////////////////////////////////////// -->
					<!-- FIM se a categoria for nova escreve o cabeçalho -->
					<!-- /////////////////////////////////////////////// -->




								<div id="<?php echo $post->post_name; ?>" class="wrap">
									<li class="col-xs-12">

										<?php if ($categoria == 'personalidade'): ?>
											<img src="<?php echo $foto['sizes']['mini-foto-homenageado'] ?>" nopin="nopin">
										<?php endif ?>

										<a class="ani-04" href="<?php bloginfo('url'); echo "/homenageados/{$ano}/{$post->post_name}"; ?>">
											<h2><?php the_title() ?></h2>

											<?php echo ($empresario != '') ? "<h3 class='cor-1'>( {$empresario} )</h3>" : '' ; ?>
										</a>

										<div id="txt">
											<?php echo $biografia; ?>
										</div>

									</li>
									<div class="clearfix"></div>
								</div>

					<?php

					$categoriaAtual = $categoria;
					$i++;

				endwhile;
			?>

				</div>

			</section> <!-- fim da sessão da última categoria de homenageados  -->

		</div>

		
</section> <!-- fim da sessão "page" -->

<?php get_footer(); ?>