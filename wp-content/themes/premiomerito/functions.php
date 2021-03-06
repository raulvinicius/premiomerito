<?php 
//IN CASE OF REWRITE CHASH BREAK THIS COMMENTS
//flush_rewrite_rules( false );

//OR THIS
// global $wp_rewrite;
// $wp_rewrite->flush_rules();

// CUSTOM POST

function codex_custom_init() {
	$labelsLivros = array(
		'name' => _x('Livros', 'nome plural do tipo de post'),
		'singular_name' => _x('Livro', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Livro', 'livros'),
		'add_new_item' => __('Adicionar Livro'),
		'edit_item' => __('Editar Livro'),
		'new_item' => __('Novo Livro'),
		'all_items' => __('Todos os Livros'),
		'view_item' => __('Ver Livro'),
		'search_items' => __('Procurar por Livro'),
		'not_found' =>  __('Nenhum Livro foi encontrado'),
		'not_found_in_trash' => __('Não há Livros na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Livros'

	);
	$argsLivros = array(
		'labels' => $labelsLivros,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array( 'title' ),
		'taxonomies' => array('tag-edicoes')
	); 
	register_post_type('livros',$argsLivros);




	$labelsPalestrantes = array(
		'name' => _x('Palestrantes', 'nome plural do tipo de post'),
		'singular_name' => _x('Palestrante', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Palestrante', 'palestrantes'),
		'add_new_item' => __('Adicionar Palestrante'),
		'edit_item' => __('Editar Palestrante'),
		'new_item' => __('Novo Palestrante'),
		'all_items' => __('Todos os Palestrantes'),
		'view_item' => __('Ver Palestrante'),
		'search_items' => __('Procurar por Palestrante'),
		'not_found' =>  __('Nenhum Palestrante foi encontrado'),
		'not_found_in_trash' => __('Não há Palestrantes na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Palestrantes'

	);
	$argsPalestrantes = array(
		'labels' => $labelsPalestrantes,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array( 'title' )
	); 
	register_post_type('palestrantes',$argsPalestrantes);




	$labelsHomenageados = array(
		'name' => _x('Homenageados', 'nome plural do tipo de post'),
		'singular_name' => _x('Homenageado', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Homenageado', 'homenageados'),
		'add_new_item' => __('Adicionar Homenageado'),
		'edit_item' => __('Editar Homenageado'),
		'new_item' => __('Novo Homenageado'),
		'all_items' => __('Todos os Homenageados'),
		'view_item' => __('Ver Homenageado'),
		'search_items' => __('Procurar por Homenageado'),
		'not_found' =>  __('Nenhum Homenageado foi encontrado'),
		'not_found_in_trash' => __('Não há Homenageados na lixeira'), 
		'parent_item_colon' => '',
		'menu_name' => 'Homenageados'

	);
	$argsHomenageados = array(
		'labels' => $labelsHomenageados,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array( 'title' ),
		'taxonomies' => array('tag-edicoes')
	); 
	register_post_type('homenageados',$argsHomenageados);




	$labelsFotos = array(
		'name' => _x('Fotos', 'nome plural do tipo de post'),
		'singular_name' => _x('Foto', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Foto', 'fotos'),
		'add_new_item' => __('Adicionar Foto'),
		'edit_item' => __('Editar Foto'),
		'new_item' => __('Nova Foto'),
		'all_items' => __('Todas as Fotos'),
		'view_item' => __('Ver Foto'),
		'search_items' => __('Procurar por Foto'),
		'not_found' =>  __('Nenhuma Foto foi encontradas'),
		'not_found_in_trash' => __('Não há Fotos na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Fotos'
	);
	$argsFotos = array(
		'labels' => $labelsFotos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'show_in_menu' => true, 
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false, 
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array( 'title' ),	
		'taxonomies' => array('tag-edicoes')
	); 
	register_post_type('fotos',$argsFotos);




	$labelsArtigos = array(
		'name' => _x('Artigos', 'nome plural do tipo de post'),
		'singular_name' => _x('Artigo', 'nome singular do tipo de post'),
		'add_new' => _x('Adicionar Artigo', 'artigos'),
		'add_new_item' => __('Adicionar Artigo'),
		'edit_item' => __('Editar Artigo'),
		'new_item' => __('Novo Artigo'),
		'all_items' => __('Todos os Artigos'),
		'view_item' => __('Ver Artigo'),
		'search_items' => __('Procurar por Artigo'),
		'not_found' =>  __('Nenhum Artigo foi encontrado'),
		'not_found_in_trash' => __('Não há Artigos na lixeira'),
		'parent_item_colon' => '',
		'menu_name' => 'Artigos'

	);
	$argsArtigos = array(
		'labels' => $labelsArtigos,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => false,
		'hierarchical' => false,
		'menu_position' => 5,
		'menu_icon' => 'dashicons-screenoptions',
		'supports' => array( 'title' )
	);	
	register_post_type('artigos',$argsArtigos);

}
add_action( 'init', 'codex_custom_init' );









add_action('init', 'add_homenageado_url');
function add_homenageado_url()
{
    add_rewrite_rule(
        'homenageados/([0-9]+)/([^/]+)/?$',
        'index.php?homenageados=$matches[2]&category_name=$matches[1]',
        'top'
    );

    add_rewrite_rule(
        'homenageados/([0-9]+)/?$',
        'index.php?pagename=homenageados&category_name=$matches[1]',
        'top'
    );

    add_rewrite_rule(
        'fotos/([0-9]+)/?$',
        'index.php?pagename=fotos&category_name=$matches[1]',
        'top'
    );

    add_rewrite_rule(
        'livros/([0-9]+)/?$',
        'index.php?pagename=livros&category_name=$matches[1]',
        'top'
    );

    // flush_rewrite_rules();
}









add_action( 'init', 'build_taxonomies', 0 );
 
function build_taxonomies() 
{

	register_taxonomy(
	    'tag-edicoes',
	    array('homenageados'),
	    array(
	        'hierarchical' => false,
	        'label' => 'Edições',
	        'query_var' => true,
	        'rewrite' => false
	    )
	);

}




// CUSTOM IMAGE SIZE

if ( function_exists( 'add_image_size' ) ) 
{
	add_image_size( 'artigo-saude-cartao', 350, 250, true );
	add_image_size( 'header-artigo', 1170, 500, true );
	add_image_size( 'foto-galeria', 480, 310, true );
	add_image_size( 'foto-palestrante', 800, 650, true );
	add_image_size( 'foto-homenageado', 570, 480, true );
	add_image_size( 'mini-foto-homenageado', 100, 100, true );
	add_image_size( 'logo-homenageado', 390, 390, false );
	add_image_size( 'capa-livro', 585, 428, true );
}



function get_post_by_type($type, $extra_args = NULL, $order = 'DESC', $per_page = -1, $paged = NULL)
{
	$args = array();
	if (!isset( $paged ) )
	{
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	}

	$args = array();
	if (isset( $extra_args ) )
	{
		$args = $extra_args;
	}

	$args['post_type']			=	$type;
	$args['posts_per_page'] 	=	$per_page;
	$args['paged']			 	=	$paged;
	$args['order']				=	$order;

	return new WP_Query( $args );
}


// ALTERA O COMPORTAMENTO DO TITLE FIELD
function change_default_title( $title ){

    $screen = get_current_screen();

	// ALTERAR O PLACEHOLDER DO TITLE FIELD
    if ( 'palestrantes' == $screen->post_type )
    {
        $title = 'Nome do palestrante';
    }
    if ( 'homenageados' == $screen->post_type )
    {
        $title = 'Nome do homenageado';
    }


    // ESCONTE O TITLE FIELD DE POST EDITS DO TIPO PÁGINA
	/*
    if ( 'page' == $screen->post_type )
    {
    ?>
	    <style class="euquero" type="text/css">
	    <!--
	    #post-body-content
	    {
	    	margin-bottom: 0;
	    }
	    #titlediv
	    {
	        display: none;
	    }
	    -->
	    </style>
    <?php
    }
	*/

    return $title;
}

add_filter( 'enter_title_here', 'change_default_title' );


function wp_path_to_js()
{
	echo "
	    <script class='segredo' type=\"text/javascript\">

	        templateUrl = '" . get_bloginfo('template_url') . "/';
	        blogUrl = '" . get_bloginfo('url') . "/';

	    </script>
	";
}

function slugify($text)
{ 
  // replace non letter or digits by -
  $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

  // trim
  $text = trim($text, '-');

  // transliterate
  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

  // lowercase
  $text = strtolower($text);

  // remove unwanted characters
  $text = preg_replace('~[^-\w]+~', '', $text);

  if (empty($text))
  {
    return 'n-a';
  }

  return $text;
}

function pluralize ($num, $plural = 's', $single = '')
{ 
    if ($num == 1) :
    	return $single; 
 	else :
 		return $plural; 
 	endif;
}


// ADICIONA URL ABSOLUTO NO AMBIENTE DE DESENVOLVIMENTO
function completaUrl ($urlAdicional = "")
{
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		echo get_bloginfo('url') . $urlAdicional;
	}
}

// RETORNA URL ABSOLUTO NO AMBIENTE DE DESENVOLVIMENTO
function get_completaUrl ($urlAdicional = "")
{
	if($_SERVER['HTTP_HOST'] == "localhost")
	{
		return get_bloginfo('url') . $urlAdicional;
	}
}

// ORDENA ARRAYS MULTIDIMENSIONAIS
function array_orderby()
{
    $args = func_get_args();
    $data = array_shift($args);
    foreach ($args as $n => $field) {
        if (is_string($field)) {
            $tmp = array();
            foreach ($data as $key => $row)
                $tmp[$key] = $row[$field];
            $args[$n] = $tmp;
            }
    }
    $args[] = &$data;
    call_user_func_array('array_multisort', $args);
    return array_pop($args);
}

function wp_dump($str)
{
	echo "<div class='alert' style='position: fixed; z-index: 10000; top: 100px; right: 100px; bottom: 100px; left: 100px; background: white; padding: 20px; border: 20px solid black; overflow: auto'><button>Fecha</button><p>";
	var_dump($str);
	echo "</p></div>";
}

// Handle the post_type parameter given in get_terms function
function df_terms_clauses($clauses, $taxonomy, $args) {
	if (!empty($args['post_type']))	{
		global $wpdb;

		$post_types = array();

		foreach($args['post_type'] as $cpt)	{
			$post_types[] = "'".$cpt."'";
		}

	    if(!empty($post_types))	{
			$clauses['fields'] = 'DISTINCT '.str_replace('tt.*', 'tt.term_taxonomy_id, tt.term_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields']).', COUNT(t.term_id) AS count';
			$clauses['join'] .= ' INNER JOIN '.$wpdb->term_relationships.' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN '.$wpdb->posts.' AS p ON p.ID = r.object_id';
			$clauses['where'] .= ' AND p.post_type IN ('.implode(',', $post_types).')';
			$clauses['orderby'] = 'GROUP BY t.term_id '.$clauses['orderby'];
		}
    }
    return $clauses;
}
add_filter('terms_clauses', 'df_terms_clauses', 10, 3);
