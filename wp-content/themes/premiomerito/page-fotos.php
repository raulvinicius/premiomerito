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

                    $terms = $edicao;
                    $arEdicoes[] = $edicao->name;
                endwhile;

                $arEdicoes = array_unique( $arEdicoes );
                rsort( $arEdicoes );

            ?>

            <select class="ani-04 bg-cor-1 bg-cor-2-hover" name="ano" <?php echo ( isset($_GET['ano']) ) ? 'data-s="' . $_GET['ano'] . '"' : ''; ?> <?php echo ( count( $arEdicoes ) <= 1 ) ? 'disabled' : ''; ?>>
                <?php 
                    for ($i=0; $i < count( $arEdicoes ); $i++) : 
                        ?>
                        
                        <option value="<?php echo $arEdicoes[$i] ?>" <?php echo ( ( isset( $_GET['ano'] ) && $_GET['ano'] == $arEdicoes[$i] ) || $i == 0 ) ? 'selected' : ''; ?>>em <?php echo $arEdicoes[$i] ?></option>

                        <?php 
                    endfor;

                    if ( isset( $_GET['ano'] ) ) 
                    {
                        $ano = $_GET['ano'];
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

            $extraArgs = array('tax_query' => array(
                'name' => $ano
            ));

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
                
                <div class="wrap-img col-xs-10">
                    <span id="helper"></span>
                    <img src="" />
                </div>
                <!-- <button id="right" class="col-xs-1"></button> -->

            </div>
        </div>
        
        
    </div>


</section>


<?php get_footer(); ?>