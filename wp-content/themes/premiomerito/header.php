<!-- CÓDIGO HTML VEM AQUI -->


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

        <title><?php echo ( $post->post_name != '' ) ? get_the_title() . " | " : ""; ?>Prêmio Mérito</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--[if IE]><link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.ico"><![endif]-->
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
        <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/apple-touch-icon.png">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css">

        
        <!-- http://www.favicon-generator.org/ -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url') ?>/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url') ?>/favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url') ?>/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="64x64" href="<?php bloginfo('template_url') ?>/favicon/favicon-64x64.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url') ?>/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url') ?>/favicon/android-icon-192x192.png">
        <link rel="manifest" href="<?php bloginfo('template_url') ?>/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#f26539">
        <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#f26539">


        <!-- PUBLICAÇÃO EM REDES SOCIAIS -->

        <!-- FACEBOOK -->
        <meta property='fb:admins' content='fanpagedofacebook' /> <!-- essa configuração diz ao Facebook que você é o administrador da fanpage -->
        <meta property='og:locale' content='pt_BR' />
        <!-- <meta property='og:locale:alternate' content='en_US' /> idiomas alternativos em que o site também pode estar disponível -->
        <meta property='og:title' content='' /> <!-- título interessante para a página (ex.: Conhecendo a equipe) -->
        <meta property='og:site_name' content='' /> <!-- nome do site (ex.: Empresa X) -->
        <meta property='og:description' content='' /> <!-- Descrição do conteúdo/site para intrigar os usuários (ex.: Fazendo o bem para o mundo), max: 200 caracteres -->
        <meta property='og:url' content='<?php bloginfo('url') ?>' />
        <meta property='og:image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/>
        <meta property='og:image:type' content="image/png">
        <meta property="og:image:width" content="800">
        <meta property="og:image:height" content="600">
        <meta property='og:type' content='website' />
        <!-- caso o tipo seja um "ARTICLE" -->
        <!-- 
        <meta property="og:type" content="article">
        <meta property="article:author" content="Autor">
        <meta property="article:section" content="Tutoriais">
        <meta property="article:tag" content="Facebook, tags, og, open graph">
        <meta property="article:published_time" content="date_time">
         -->

        <!-- TWITTER -->
        <meta name='twitter:card' content='summary'> <!-- photo (para imagens), player (para vídeos), Summary (para todo o resto) -->
        <meta name='twitter:url' content='<?php bloginfo('url') ?>'>
        <meta name='twitter:title' content='' /> <!-- título interessante para a página (ex.: Conhecendo a equipe) -->
        <meta name='twitter:description' content='' /> <!-- Descrição do conteúdo/site para intrigar os usuários (ex.: Fazendo o bem para o mundo), max: 200 caracteres -->
        <meta name='twitter:image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/> <!-- entre 60x60px e 120x120px -->

        <!-- GOOGLE+ -->
        <!-- Atualize a tag html para incluir os atributos itemscope e itemtype. -->
        <meta itemprop='name' content=''> <!-- nome ou título interessante para a página (ex.: Conhecendo a equipe) -->
        <meta itemprop='description' content=''>  <!-- Descrição do conteúdo/site para intrigar os usuários (ex.: Fazendo o bem para o mundo), max: 200 caracteres -->
        <meta itemprop='image' content='<?php bloginfo('template_url') ?>/img/imagem.png'/> <!-- entre 60x60px e 120x120px -->


    </head>

    <body>
        <?php wp_path_to_js(); ?>

        <!--[if lt IE 8]>

            <div class="alert">

                <p class="browserupgrade">Você está usando um navegador <strong>desatualizado</strong>. Por favor, <a href="http://browsehappy.com/">atualize seu browser</a> para melhorar sua experiência na internet.</p>
                <button type="button" class="close">×</button>

            </div>

        <![endif]-->

        <section class="pagina">

            <header>

                <nav>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <a class="logo" href="<?php bloginfo('url') ?>">
                                    <h1>Prêmio Mérito Empreendedor</h1>
                                    <!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In  -->
                                    <svg version="1.1"
                                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
                                         x="0px" y="0px" width="322px" height="79px" viewBox="0 0 437.5 100.9" style="enable-background:new 0 0 437.5 100.9;"
                                         xml:space="preserve">
                                    <style type="text/css">
                                        .st0{fill-rule:evenodd;clip-rule:evenodd;fill:#454545;}
                                        .st1{fill-rule:evenodd;clip-rule:evenodd;fill:#ff4c34;}
                                        .st2{fill-rule:evenodd;clip-rule:evenodd;fill:#00A489;}
                                    </style>
                                    <defs>
                                    </defs>
                                    <g>
                                        <path class="st0" d="M3.3,53.9c0,0,0,0.1,0,0.2v6.9c0,0.3,0.2,0.5,0.5,0.5l8,0.1c0.2,0,0.3,0.1,0.4,0.3c0.4,3,1.2,6,2.4,8.9
                                            c0.1,0.2,0,0.4-0.2,0.5l-6.8,4.1c-0.3,0.1-0.3,0.5-0.2,0.7l3.4,6c0.1,0.2,0.3,0.3,0.5,0.3c0.1,0,0.2,0,0.3-0.1l7-3.9
                                            c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0.1,0.3,0.1c1.9,2.5,4.1,4.6,6.5,6.5c0.1,0.1,0.2,0.3,0.1,0.5l-3.9,7c-0.1,0.3,0,0.6,0.2,0.7l6,3.4
                                            c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.4-0.1,0.5-0.3l4.1-6.9c0.1-0.1,0.2-0.2,0.3-0.2c0,0,0.1,0,0.1,0c2.9,1.2,5.9,2,8.9,2.4
                                            c0.2,0,0.3,0.2,0.3,0.4l0.2,8c0,0.3,0.3,0.5,0.6,0.5h6.9c0.3,0,0.5-0.2,0.5-0.5l0.2-8c0-0.2,0.1-0.3,0.3-0.4
                                            c3.1-0.4,6.1-1.2,8.9-2.4c0,0,0.1,0,0.1,0c0.1,0,0.2,0.1,0.3,0.2l4.1,6.9c0.1,0.2,0.3,0.3,0.5,0.3c0.1,0,0.2,0,0.3-0.1l6-3.4
                                            c0.3-0.1,0.3-0.5,0.2-0.7l-3.9-7c-0.1-0.2,0-0.4,0.1-0.5c2.5-1.9,4.6-4.1,6.5-6.5c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.1,0,0.2,0l7,3.9
                                            c0.1,0,0.2,0.1,0.3,0.1c0.2,0,0.4-0.1,0.5-0.3l3.4-6c0.1-0.3,0.1-0.6-0.2-0.7l-6.9-4.1c-0.2-0.1-0.2-0.3-0.1-0.5
                                            c1.2-2.9,2-5.9,2.4-8.9c0-0.2,0.2-0.3,0.4-0.3l8-0.1c0.3,0,0.5-0.3,0.5-0.5V54c0-0.1,0-0.1,0-0.2H69.7c0.2,1.2,0.3,2.4,0.3,3.6
                                            c0,12.9-10.5,23.3-23.4,23.3l0,0c-12.9,0-23.3-10.5-23.3-23.3c0-1.2,0.1-2.4,0.3-3.6H3.3z"/>
                                        <path class="st1" d="M3.8,45h4.6c-0.4-2.1-0.6-4.3-0.6-6.6c0-13.8,7.2-25.8,18-32.7v12c0,2.8,2.3,5.1,5.1,5.1l0,0
                                            c2.8,0,5.1-2.3,5.1-5.1V1.2c1.7-0.5,3.4-0.8,5.2-1.1v17.6c0,2.8,2.3,5.1,5.1,5.1h0c2.8,0,5.1-2.3,5.1-5.1V0c1.7,0.2,3.4,0.5,5.1,1
                                            v16.7c0,2.8,2.3,5.1,5.1,5.1l0,0c2.8,0,5.1-2.3,5.1-5.1V5.3c11.2,6.8,18.6,19.1,18.6,33.1c0,2.2-0.2,4.5-0.6,6.6h4.8
                                            c2.1,0,3.8,1.7,3.8,3.8l0,0c0,2.1-1.7,3.8-3.8,3.8H3.8c-2.1,0-3.8-1.7-3.8-3.8l0,0C0,46.7,1.7,45,3.8,45z"/>
                                        <path class="st0" d="M53.9,53.7c0.1,0.6,0.2,1.1,0.2,1.7c0,4.1-3.3,7.4-7.4,7.4s-7.4-3.3-7.4-7.4c0-0.6,0.1-1.2,0.2-1.7h-3.8
                                            c-0.1,0.6-0.1,1.1-0.1,1.7c0,6.2,5,11.1,11.1,11.1s11.1-5,11.1-11.1c0-0.6,0-1.2-0.1-1.7H53.9z"/>
                                        <path class="st0" d="M156.6,35.9h4.1v-5h2.3c3.2,0,5.3-2.4,5.3-5.7c0-3.3-2.1-5.6-5.3-5.6h-7.9V23h1.5V35.9L156.6,35.9z
                                             M160.7,27.4V23h1.6c1.3,0,1.9,0.9,1.9,2.2c0,1.3-0.6,2.2-2,2.2H160.7z"/>
                                        <path class="st0" d="M169.9,35.9h3.9v-4.4c0-0.6,0.1-1.2,0.2-1.6c0.6-1.8,2.1-2.1,3-2.1c0.5,0,0.8,0.1,0.8,0.1V24c0,0-0.2,0-0.5,0
                                            c-1.8,0-3.2,1.3-3.7,2.9h0c0,0,0-0.2,0-0.6v-0.6c0-1.1-0.6-1.5-1.7-1.5h-3.5v3.3h0.9c0.3,0,0.5,0.2,0.5,0.5V35.9z"/>
                                        <path class="st0" d="M178,30c0,3.1,2.3,6.2,6.5,6.2c3.1,0,5-1.9,5-1.9l-1.6-2.6c0,0-1.4,1.2-3.1,1.2c-1.3,0-2.4-0.7-2.7-2.1h7.4
                                            c0,0,0.1-0.8,0.1-1.2c0-3.3-2-5.7-5.4-5.7C180.3,23.8,178,26.5,178,30L178,30z M182.1,28.3c0.3-0.9,0.8-1.5,2-1.5
                                            c0.8,0,1.4,0.8,1.4,1.5H182.1L182.1,28.3z M180.2,23h2.7l1.1-1.9h0l1.1,1.9h2.8l-2.3-3.4h-3.2L180.2,23z"/>
                                        <path class="st0" d="M190.9,35.9h3.9V31c0-0.5,0.1-1,0.2-1.4c0.3-1.3,0.9-2.2,2.1-2.2c0.8,0,0.9,0.6,0.9,1.5v7h3.9V31
                                            c0-0.5,0-0.9,0.1-1.3c0.3-1.3,0.9-2.3,2.1-2.3c0.8,0,0.9,0.6,0.9,1.5v5.3c0,1.2,0.5,1.7,1.7,1.7h3.6v-3.3h-0.9
                                            c-0.3,0-0.5-0.2-0.5-0.5v-3.8c0-3.2-1.7-4.4-3.8-4.4c-1.8,0-3.1,1-3.8,2h0c-0.6-1.3-1.8-2-3.3-2c-1.8,0-2.9,1.2-3.4,2h0
                                            c0,0,0-0.2,0-0.3v-0.2c0-0.8-0.6-1.3-1.6-1.3h-3.5v3.3h0.9c0.3,0,0.5,0.2,0.5,0.5V35.9z"/>
                                        <path class="st0" d="M211,22.8h3.3v-3.2H211V22.8L211,22.8z M210.7,34.2c0,1.2,0.5,1.7,1.7,1.7h3.6v-3.3h-0.9
                                            c-0.3,0-0.5-0.2-0.5-0.5v-6.3c0-1.2-0.5-1.7-1.7-1.7h-3.6v3.3h0.9c0.3,0,0.5,0.2,0.5,0.5V34.2z"/>
                                        <path class="st0" d="M215.9,30c0,3.7,2.9,6.1,6.6,6.1s6.6-2.4,6.6-6.1c0-3.7-2.9-6.2-6.7-6.2C218.8,23.8,215.9,26.3,215.9,30
                                            L215.9,30z M219.9,30c0-1.8,1.2-2.9,2.7-2.9c1.4,0,2.7,1.1,2.7,2.9c0,1.8-1.2,2.8-2.7,2.8C221.1,32.9,219.9,31.8,219.9,30z"/>
                                        <path class="st0" d="M229,35.9h2c1,0,1.4-0.4,1.5-1.5l0.6-8.5c0.1-1,0-2.4,0-2.4h0c0,0,0.5,1.6,0.9,2.4l3.3,7.1h1.9l3.3-7.1
                                            c0.4-0.9,0.8-2.4,0.8-2.4h0c0,0,0,1.4,0,2.4l0.7,8.5c0.1,1,0.4,1.5,1.5,1.5h2v-2h-0.8c-0.3,0-0.5-0.2-0.5-0.5l-1.1-13.6h-2.3
                                            l-3.8,8.5c-0.4,0.9-0.8,2-0.8,2h0c0,0-0.4-1.2-0.8-2l-3.8-8.5h-2.3l-1.1,13.6c0,0.3-0.2,0.5-0.5,0.5H229V35.9z"/>
                                        <path class="st0" d="M247.7,30.1c0,3.4,2.5,6,6.1,6c2.7,0,4.4-1.7,4.4-1.7l-1-1.6c0,0-1.4,1.3-3.4,1.3c-2.1,0-3.8-1.4-4-3.9h8.4
                                            c0,0,0.1-0.6,0.1-0.9c0-3-1.7-5.4-5-5.4C250.2,24.1,247.7,26.4,247.7,30.1L247.7,30.1z M250,28.8c0.3-1.9,1.7-2.9,3.4-2.9
                                            c1.4,0,2.6,1,2.7,2.9H250L250,28.8z M252.5,22.7h1.7l2.2-2.9h-2.2L252.5,22.7z"/>
                                        <path class="st0" d="M260.1,35.9h2.2v-4.7c0-0.7,0.1-1.4,0.3-2.1c0.5-1.7,1.8-2.7,3.2-2.7c0.4,0,0.7,0.1,0.7,0.1v-2.2
                                            c0,0-0.3,0-0.6,0c-1.8,0-3.1,1.3-3.6,3h0c0,0,0-0.3,0-0.8v-0.7c0-0.9-0.5-1.3-1.5-1.3h-2.1v1.9h0.9c0.3,0,0.5,0.2,0.5,0.5V35.9z"/>
                                        <path class="st0" d="M268.5,22.1h2v-2.3h-2V22.1L268.5,22.1z M268.4,34.4c0,1,0.4,1.5,1.5,1.5h2.2V34h-0.9c-0.3,0-0.5-0.2-0.5-0.5
                                            v-7.7c0-1-0.4-1.5-1.5-1.5H267v1.9h0.9c0.3,0,0.5,0.2,0.5,0.5V34.4z"/>
                                        <path class="st0" d="M272.7,31.6c0,3.9,2.9,4.3,4.4,4.3c0.5,0,0.8,0,0.8,0v-2c0,0-0.2,0-0.5,0c-0.8,0-2.4-0.3-2.4-2.6v-5.3h2.8
                                            v-1.8h-2.8v-3.2h-2.2v3.2h-1.6v1.8h1.5V31.6z"/>
                                        <path class="st0" d="M277.5,30.1c0,3.5,2.8,6.1,6.2,6.1c3.4,0,6.2-2.6,6.2-6.1c0-3.5-2.8-6-6.2-6C280.2,24.1,277.5,26.6,277.5,30.1
                                            L277.5,30.1z M279.7,30.1c0-2.4,1.8-4.1,3.9-4.1c2.2,0,4,1.7,4,4.1c0,2.4-1.8,4.2-4,4.2C281.5,34.2,279.7,32.5,279.7,30.1z"/>
                                        <path class="st2" d="M112.9,65.6c0,2.4,1,3.4,3.4,3.4h15.8c2.4,0,3.4-1,3.4-3.4v-6.5h-7.5V61c0,0.7-0.4,1-1,1h-4.7
                                            c-0.7,0-1-0.4-1-1v-5.3h9.6v-7.1h-9.6v-6.1h4.6c0.7,0,1,0.4,1,1v1.8h7.5v-6.5c0-2.4-1-3.4-3.4-3.4h-21.2v7.1h3.1V65.6L112.9,65.6z
                                             M138.7,69.1h8.2V59c0-1,0.1-2,0.3-2.9c0.6-2.6,1.9-4.5,4.3-4.5c1.6,0,1.9,1.3,1.9,3.1v14.4h8.2V59c0-1,0.1-1.9,0.3-2.7
                                            c0.5-2.7,1.9-4.7,4.4-4.7c1.6,0,1.9,1.3,1.9,3.1v10.9c0,2.4,1,3.4,3.4,3.4h7.5v-6.8h-1.8c-0.7,0-1-0.4-1-1v-7.9
                                            c0-6.7-3.4-9.1-7.9-9.1c-3.6,0-6.5,2.1-7.8,4.1h-0.1c-1.3-2.7-3.7-4.1-6.8-4.1c-3.8,0-6,2.5-7.1,4.2h-0.1c0,0,0-0.3,0-0.6v-0.3
                                            c0-1.7-1.2-2.7-3.4-2.7h-7.3v6.8h1.8c0.7,0,1,0.4,1,1V69.1L138.7,69.1z M182,78.5h8.2v-8.9c0-1.2-0.1-2.1-0.1-2.1h0.1
                                            c0,0,2.2,2.1,6.2,2.1c6.5,0,11.3-5,11.3-12.7c0-7.5-4.3-12.7-10.9-12.7c-5.1,0-7.3,3.1-7.3,3.1h-0.1c0,0,0-0.1,0-0.4
                                            c0-1-0.8-2.1-3.2-2.1h-7v6.8h1.8c0.7,0,1,0.4,1,1V78.5L182,78.5z M189.9,57.1c0-4.2,2.3-6,4.8-6c2.8,0,4.8,2.4,4.8,6
                                            c0,3.7-2.2,5.8-4.8,5.8C191.5,62.9,189.9,60,189.9,57.1L189.9,57.1L189.9,57.1z M211,69.1h8.2v-9.2c0-1.3,0.1-2.4,0.4-3.3
                                            c1.2-3.6,4.3-4.2,6.3-4.2c1,0,1.7,0.1,1.7,0.1v-8c0,0-0.5-0.1-0.9-0.1c-3.6,0-6.7,2.7-7.7,6h-0.1c0,0,0.1-0.5,0.1-1.2v-1.3
                                            c0-2.2-1.2-3.1-3.4-3.1h-7.2v6.8h1.8c0.7,0,1,0.4,1,1V69.1L211,69.1z M227.2,56.9c0-7.1,4.8-12.7,12.6-12.7c7.2,0,11.2,5,11.2,11.7
                                            c0,0.8-0.2,2.5-0.2,2.5h-15.3c0.6,3.1,3.1,4.4,5.7,4.4c3.5,0,6.5-2.5,6.5-2.5l3.3,5.5c0,0-3.9,3.9-10.4,3.9
                                            C231.9,69.6,227.2,63.4,227.2,56.9L227.2,56.9z M235.8,53.5h6.9c0-1.5-1.2-3.1-2.9-3.1C237.5,50.4,236.3,51.7,235.8,53.5
                                            L235.8,53.5z M252.2,56.9c0,6.5,4.7,12.7,13.3,12.7c6.5,0,10.4-3.9,10.4-3.9l-3.3-5.5c0,0-3,2.5-6.5,2.5c-2.6,0-5-1.4-5.7-4.4h15.3
                                            c0,0,0.2-1.7,0.2-2.5c0-6.7-4.1-11.7-11.2-11.7C257,44.2,252.2,49.8,252.2,56.9L252.2,56.9z M260.8,53.5c0.5-1.8,1.7-3.1,4.1-3.1
                                            c1.7,0,2.9,1.6,2.9,3.1H260.8L260.8,53.5z M279.8,69.1h8.2V58.3c0-1.2,0.1-2.3,0.5-3.2c0.7-2.1,2.3-3.5,4.8-3.5
                                            c1.8,0,2.7,0.9,2.7,3.2v10.8c0,2.4,1,3.4,3.4,3.4h7.5v-6.8h-1.8c-0.7,0-1-0.4-1-1v-7.9c0-6.8-3.8-9.1-8.7-9.1
                                            c-4.3,0-6.6,2.3-7.7,4.2h-0.1c0,0,0-0.3,0-0.6v-0.3c0-1.7-1.2-2.7-3.4-2.7h-7.3v6.8h1.8c0.7,0,1,0.4,1,1V69.1L279.8,69.1z
                                             M307.3,56.9c0,7.5,4.3,12.7,10.9,12.7c5,0,7-3.3,7-3.3h0.1c0,0,0,0.2,0,0.4c0,1.1,0.8,2.3,3.2,2.3h7.3v-6.8h-1.8c-0.7,0-1-0.4-1-1
                                            V38.8c0-2.4-1-3.4-3.4-3.4h-7.5v6.8h1.8c0.7,0,1,0.4,1,1v1.6c0,0.6,0,1.1,0,1.1h-0.1c0,0-1.5-1.7-6.4-1.7
                                            C311.9,44.2,307.3,49.2,307.3,56.9L307.3,56.9z M320.2,62.9c-2.8,0-4.8-2.4-4.8-6c0-3.7,2.2-5.8,4.8-5.8c3.2,0,4.8,2.9,4.8,5.8
                                            C325,61.1,322.7,62.9,320.2,62.9L320.2,62.9z M336.3,56.9c0,6.5,4.7,12.7,13.3,12.7c6.5,0,10.4-3.9,10.4-3.9l-3.3-5.5
                                            c0,0-3,2.5-6.5,2.5c-2.6,0-5-1.4-5.7-4.4h15.3c0,0,0.2-1.7,0.2-2.5c0-6.7-4.1-11.7-11.2-11.7C341.1,44.2,336.3,49.8,336.3,56.9
                                            L336.3,56.9z M344.8,53.5c0.5-1.8,1.7-3.1,4.1-3.1c1.7,0,2.9,1.6,2.9,3.1H344.8L344.8,53.5z M361.3,56.9c0,7.5,4.3,12.7,10.9,12.7
                                            c5,0,7-3.3,7-3.3h0.1c0,0,0,0.2,0,0.4c0,1.1,0.8,2.3,3.2,2.3h7.3v-6.8h-1.8c-0.7,0-1-0.4-1-1V38.8c0-2.4-1-3.4-3.4-3.4h-7.5v6.8
                                            h1.8c0.7,0,1,0.4,1,1v1.6c0,0.6,0,1.1,0,1.1h-0.1c0,0-1.5-1.7-6.4-1.7C365.9,44.2,361.3,49.2,361.3,56.9L361.3,56.9z M374.2,62.9
                                            c-2.8,0-4.8-2.4-4.8-6c0-3.7,2.2-5.8,4.8-5.8c3.2,0,4.8,2.9,4.8,5.8C379,61.1,376.7,62.9,374.2,62.9L374.2,62.9z M390.3,57
                                            c0,7.6,6.1,12.6,13.7,12.6c7.6,0,13.7-5,13.7-12.6c0-7.6-6.1-12.8-13.8-12.8C396.3,44.2,390.3,49.4,390.3,57L390.3,57z M398.5,57
                                            c0-3.7,2.5-6,5.5-6c3,0,5.5,2.3,5.5,6c0,3.6-2.5,5.8-5.5,5.8C401,62.8,398.5,60.6,398.5,57L398.5,57z M421,69.1h8.2v-9.2
                                            c0-1.3,0.1-2.4,0.4-3.3c1.2-3.6,4.3-4.2,6.3-4.2c1,0,1.7,0.1,1.7,0.1v-8c0,0-0.5-0.1-0.9-0.1c-3.6,0-6.7,2.7-7.7,6h-0.1
                                            c0,0,0.1-0.5,0.1-1.2v-1.3c0-2.2-1.2-3.1-3.4-3.1h-7.2v6.8h1.8c0.7,0,1,0.4,1,1V69.1z"/>
                                    </g>
                                    </svg>

                                </a>
                            </div>
                        </div>
                    </div>
                        
                    <?php 

                        $arEdicoesHomenageados = array();

                        $homenageados = get_post_by_type('homenageados', NULL, 'ASC', -1);

                        while ( $homenageados->have_posts() ) :
                            $homenageados->the_post();
                            $edicao = get_field('edicao');
                            
                            $arEdicoesHomenageados[] = array(
                                'id' => $edicao[0],
                                'name' => get_term_by('id', $edicao[0], 'tag-edicoes')->name
                            );

                        endwhile;

                        wp_reset_query();
                        $arEdicoesHomenageados = array_map('unserialize', array_unique(array_map('serialize', $arEdicoesHomenageados)));
                        $arEdicoesHomenageados = array_orderby($arEdicoesHomenageados, 'name', SORT_DESC);

                    ?>
                    
                    <div class="container-fluid menu">
                        <div class="container">
                            
                            <div class="row">
                                <div class="col-md-offset-1 col-md-10">
                                    <ul>
                                        <!-- <li>
                                        <a href="<?php bloginfo('url') ?>/sobre" class="ani-04">O Prêmio Mérito</a>
                                        </li> --><li>
                                            <a href="<?php bloginfo('url') ?>/palestrantes" class="merito-bt bg-cor-1-hover ani-04">Palestrantes</a>
                                        </li><li class="has-submenu">
                                            <a href="<?php bloginfo('url') ?>/homenageados" class="merito-bt bg-cor-1-hover ani-04">Homenageados</a>
                                            <ul>

                                                <?php for ($i=0; $i<count($arEdicoesHomenageados); $i++): ?>

                                                    <li class="ani-04 bg-cor-1 bg-cor-2-hover"><?php echo $arEdicoesHomenageados[$i]['name'] ?></li>
                                                    
                                                <?php endfor ?>

                                            </ul>
                                        </li><li>
                                            <a href="<?php bloginfo('url') ?>/fotos" class="merito-bt bg-cor-1-hover ani-04">Fotos</a>
                                        </li><li>
                                            <a href="<?php bloginfo('url') ?>/livros" class="merito-bt bg-cor-1-hover ani-04">Livros</a>
                                        </li><li>
                                            <a href="<?php bloginfo('url') ?>/contato" class="merito-bt bg-cor-1-hover ani-04">Contato</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </nav>
            </header>

        
