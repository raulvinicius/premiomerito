<?php get_header(); ?>


<section class="page-fotos container-fluid">
		
    <div class="row merito-title-pagina">
        <div class="container">
            <h2 class="merito-title">Fotos</h2>

            <?php 

                $arFotos = array();

                $arEdicoes = array();

                $fotos = get_post_by_type('fotos');
                
                while ( $fotos->have_posts() ) :
                    $fotos->the_post();
                    $edicao = get_field('edicao');

                    $arEdicoes[] = array(
                        'id' => $edicao,
                        'name' => get_term_by('id', $edicao, 'tag-edicoes')->name
                    );
                endwhile;

                $arEdicoes = array_map('unserialize', array_unique(array_map('serialize', $arEdicoes)));

                $arEdicoes = array_orderby($arEdicoes, 'name', SORT_DESC);

            ?>

            <select id="select-edicao" class="ani-04 bg-cor-1 bg-cor-2-hover" name="ano" <?php echo ( isset($_GET['ano']) ) ? 'data-s="' . $_GET['ano'] . '"' : ''; ?> <?php echo ( count( $arEdicoes ) <= 1 ) ? 'disabled' : ''; ?>>
                <?php 
                    for ($i=0; $i < count( $arEdicoes ); $i++) : 
                        ?>
                        
                        <option value="<?php echo $arEdicoes[$i]['name'] ?>" <?php echo ( ( isset( $_GET['ano'] ) && $_GET['ano'] == $arEdicoes[$i]['name'] ) || $i == 0 ) ? 'selected' : ''; ?>>em <?php echo $arEdicoes[$i]['name'] ?></option>

                        <?php 
                    endfor;

                    if ( isset( $_GET['ano'] ) ) 
                    {
                        $ano = get_term_by('slug', $_GET['ano'], 'tag-edicoes')->term_id;
                    }
                    else
                    {
                        $ano = $arEdicoes[0];
                    }

                ?>

            </select>
        </div>
    </div>

    <div class="row">
        <ul>


            <?php 


            $extraArgs = array(
                'meta_key'      => 'edicao',
                'meta_value'    => $ano
            );

            $fotos = get_post_by_type('fotos', $extraArgs);

            while ( $fotos->have_posts() ) :
                $fotos->the_post();

                $galeria = get_field('foto');
                
                for ($i=0; $i < count( $galeria ); $i++) :
                    ?>


                    <li class="col-sm-3">
                        <a href="javascript:void(0)" data-img="<?php echo $galeria[$i]['sizes']['large'] ?>"> 
                            <figure><img src="<?php echo $galeria[$i]['sizes']['foto-galeria'] ?>" nopin="nopin"/></figure>
                        </a>
                    </li>
                

                    <?php 
                endfor;
            endwhile;

            ?>

            <div class="clearfix"></div>

        </ul>

        <div class="foto-full container-fluid">
            <div class="row">
                
                <button id="close"></button>

                <!-- <button id="left" class="col-xs-1"></button> -->
                
                <div class="wrap-img col-xs-10 col-xs-offset-1">
                    <span id="helper"></span>
                    <img src="" />
                </div>
                <!-- <button id="right" class="col-xs-1"></button> -->

            </div>
        </div>
        
        
    </div>


</section>


<?php get_footer(); ?>