

        <footer>

            <section class="parceiros container-fluid">
                <div class="row">
                    <div class="container">
                        
                        <div class="row">
                            <h2 class="titulo-section"><span class="cor-1">Nossos</span> Parceiros</h2>
                        </div>
                        <div class="row">
                            <ul>
                                <li>
                                    <a id="humano" href="http://humanostud.io" target="_blank">Humano Studio</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <section class="rodape container-fluid">
                <div class="row-fluid">
                    <div class="container">
                        <div class="row">
                            <div id="realizacao" class="col-lg-12">
                                <ul>
                                    <h3>Realização</h3>
                                    <li>
                                        <a id="facidf" href="http://blogdafacidf.blogspot.com.br/" target="_blank">FACIDF</a>
                                    </li>
                                </ul>
                                <ul>
                                    <h3>Coordenação</h3>
                                    <li>
                                        <a id="merito-comunicacao" href="http://meritocomunicacao.com" target="_blank">Mérito Comunicação</a>
                                    </li>
                                </ul>
                                <ul>
                                    <h3>Apoio Institucional</h3>
                                    <li>
                                        <a id="cacb" href="http://www.cacb.com.br" target="_blank">CACB</a>
                                    </li>
                                    <li>
                                        <a id="atlantida" target="_blank">Atlântida Móveis</a>
                                    </li>
                                    <li>
                                        <a id="faciplac" target="_blank">Faciplac</a>
                                    </li>
                                    <li>
                                        <a id="dona" target="_blank">Supermercado Dona de Casa</a>
                                    </li>
                                    <li>
                                        <a id="saopaulo" target="_blank">São Paulo Pizzaria e Restaurante</a>
                                    </li>
                                    <li>
                                        <a id="castelo" target="_blank">Home Center Castelo Forte</a>
                                    </li>
                                    <li>
                                        <a id="pedragon" target="_blank">Pedragon</a>
                                    </li>
                                    <li>
                                        <a id="perboni" target="_blank">Perboni</a>
                                    </li>
                                    <li>
                                        <a id="influencia" target="_blank">Revista Influência</a>
                                    </li>
                                    <li>
                                        <a id="cidades" href="http://www.sde.df.gov.br" target="_blank">Secretaria de Estado das Cidades</a>
                                    </li>
                                    <li>
                                        <a id="economia" href="http://www.sde.df.gov.br" target="_blank">Secretaria de Estado de Economia e Desenvolvimento Sustentável</a>
                                    </li>
                                    <li>
                                        <a id="turismo" href="http://www.setur.df.gov.br" target="_blank">Secretaria de Estado de Turismo</a>
                                    </li>
                                    <li>
                                        <a id="governo" href="http://www.df.gov.br" target="_blank">CACB</a>
                                    </li>
                                    <li>
                                        <a id="brb" href="http://www.brb.com.br" target="_blank">BRB</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </footer>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src= "<?php bloginfo("template_url") ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src= "<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
        <script src= "<?php bloginfo('template_url') ?>/js/vendor/modernizr-2.8.3.min.js"></script>

        <script src= "<?php bloginfo('template_url') ?>/js/main.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.mask.min.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.form.js"></script>
        <script src="<?php bloginfo('template_url') ?>/js/jquery.validate.min.js"></script>
        <!-- <script src="<?php bloginfo('template_url') ?>/js/jquery.cookie.js"></script> -->

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!-- 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
         -->

        <!-- 
        -->
        <?php 
            if( isset($_GET['bar']) )
            {
                wp_footer();
            }
        ?> 
    </body>

</html>
