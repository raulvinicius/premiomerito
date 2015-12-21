<!-- CÓDIGO HTML VEM AQUI -->


<?php if ( strpos( $_SERVER[ "REQUEST_URI" ], "frontend" ) ) : ?>

    <!-- 
        NÃO ESQUEÇA DE ADICIONAR UMA PÁGINA FRONTEND/"SUAPAGINA" NO PAINEL ADMIN 
        E DE ALTERAR OS PERMALINKS PARA "NOME DO POST"
    -->
    <?php $frontendUrl = "/frontend"; //variável usada nos urls dentro do ambiente de desenvolvimento frontend?>

<?php endif; ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--[if lt IE 7]>
      <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8 lt-ie7" 
        lang="pt-br">
<![endif]-->
<!--[if IE 7]>
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9 lt-ie8" 
        lang="pt-br">
<![endif]-->
<!--[if IE 8]>
    <html 
        xmlns='http://www.w3.org/1999/xhtml' 
        xmlns:og='http://ogp.me/ns#' 
        class="no-js lt-ie9" 
        lang="pt-br">
<![endif]-->
<!--[if gt IE 8]><!-->
<html
    xmlns='http://www.w3.org/1999/xhtml'
    xmlns:og='http://ogp.me/ns#'
    class="no-js"
    lang="pt-br">
<!--<![endif]-->

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>Ignite by Humano</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico"><![endif]-->
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        <!-- PUBLICAÇÃO EM REDES SOCIAIS -->
        <meta property='og:title' content='' />
        <meta property='og:description' content='' />
        <meta property='og:url' content='<?php bloginfo('url') ?>' />
        <meta property='og:image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/>
        <meta property='og:type' content='website' />
        <meta property='og:site_name' content='' />

    </head>

    <body>
        <?php wp_path_to_js(); ?>

        <!--[if lt IE 8]>

            <div class="alert">

                <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize seu browser</a> para melhorar sua experiência na internet.</p>
                <button type="button" class="close">×</button>

            </div>

        <![endif]-->

        <?php //$fileN =  basename ( $_SERVER["SCRIPT_NAME"] ); ?>
        <?php $fileN2 = $_SERVER[ "REQUEST_URI" ] ?>
        <!-- ATENÇÃO! Alterar "ignite" pelo nome da pasta WordPress -->
        <?php $fileN2 = str_replace("/ignite", '', $fileN2) ?>
        <?php $fileN2 = str_replace("/frontend", '', $fileN2) ?>
        <?php $fileN2 = explode('/', $fileN2) ?>
        <?php $fileN2 = $fileN2[1]; ?>

        <?php

        if ( $fileN2 == "" ) : 
        	$fileN2 = "index";
        endif;

        ?>

        <?php if ( $frontendUrl != "" ) : ?>

            <?php $tUrl = get_bloginfo("template_url"); ?>

            <?php require( "frontend/" . $fileN2 . '.php' ) ?>
            <?php die(); ?>

        <?php endif; ?>


        
