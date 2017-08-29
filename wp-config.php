<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wpMarvel');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8I#5P|{>`hrV5)w0.wPI2mNetdP,*ePJc)K{yYDlrs>4]`(]%t-JFVEz#!M8_*{g');
define('SECURE_AUTH_KEY',  ',,.~taLn#S/=oI!?*6t7Kwz%7c|lPR_w?cB?pYUsW[ZSkjB}/y,@J}M08QrN?&L{');
define('LOGGED_IN_KEY',    'BySx*;T}2I=_X=hvUE&vhS<e5zs K)`W< wfP0i));Ht$E&=L8QoL/^vZgU8jxV&');
define('NONCE_KEY',        'l3}QUk0:*3@MjX&So;B`;4b`4)cn&]>(Q$CGVS(ctB^>]FA+/yg1vo=ZP#V[ob_D');
define('AUTH_SALT',        'b&P]W.* (@rue$r=>qs`I6);jdcV*VNm5J.>Yohi>uY^[~}2pE!6*GxULbXJf31a');
define('SECURE_AUTH_SALT', '}m(%S;%em8TKk)okMt.90#:G6Q#[w`1)J3Rbt<jeSo1UjvBZq,6+%CIvQ4e.z!)d');
define('LOGGED_IN_SALT',   'Y>psjfeHu3uweV:[Mznnw{PR|^0T>l1YE?)~@wc]29n9!1s5{F9h|YikBe4VcV%F');
define('NONCE_SALT',       'k/,#]Fj,=G]d{5]Qi1fV0vl*xTe4k?Bj_+{n.I6^zzmF,.5;pN$nW~gTrMjlht7o');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
