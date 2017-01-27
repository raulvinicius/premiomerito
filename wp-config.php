<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'premiomerito');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '1234');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '[iiJZ)?=-$|OI-=`!6EN*F{P|9f*8`+&A||8>#7H8n0<[;Ie_47HRga7t} `|-kN');
define('SECURE_AUTH_KEY',  '%yqDT|YAiGM~yFciu9%0UyGF04Z[q/zd4Myq!X[w^pV+UUv)>G|4)s$y!wu{?a9>');
define('LOGGED_IN_KEY',    'O7]q[?C{Uq(fV$8l%R?H5gE|T&./mW.::b]4!Hl,)4D@0{zt|AjJVP5??_X9? Bf');
define('NONCE_KEY',        'l@wX0gsbT=a(J)6he+{=uQS^*G(Nx.*b=>L7u@BOqDLo60{r++vpWY?3HX k<@^8');
define('AUTH_SALT',        '6C$((ir&uz{P7Fw-+3LI?gV4Yy[xsu$Qh`|+a+;1w_ex8)W+S?$3<9(9hd~$kiVx');
define('SECURE_AUTH_SALT', '31yXaNU{OT>MQ4ZN<v+f<5@qL8Ea+|xSJ_w[$`UD8K6S v2IuO7w&HT+k%.$In|k');
define('LOGGED_IN_SALT',   'xIseuZ%m9RL%(AieQmd8z,~Y%<@kosg3e[gUR=EUlA@bXTKxo)AHRo,?*QO~;pJ9');
define('NONCE_SALT',       'W#S bLVznLAR$lma}?r=li6(I)M+R Z-b /e~ubD_po|%e-+/lM<wv`F]NGJ7[.|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
