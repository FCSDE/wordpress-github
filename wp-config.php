<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
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
define('DB_NAME', 'babilony_wordpress-entrevista');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'babilony_super');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'developer88#');

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
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|zkd-vn1~DU.$8W2Pp@IJBA:;<}G#!/B6Vf7%3WVhr8$7y6]^4 t/MPA6Y3PpP&Q');
define('SECURE_AUTH_KEY',  'sA(V[4l@xJ>a1Z/Jbbm<.S5q0ipbrP:},=3rw:hxJe;M}}^LMxeMaS#hZhz%:7SF');
define('LOGGED_IN_KEY',    '(m^On9fG`oQzS:{~6/ip7&Uq&av<3$+:g8#y-Qx4t9$L_].I;L0!BauZk3q3Va F');
define('NONCE_KEY',        'HA<Ey]#ZEOw6euldzO-sH[aq2PlbdPp-p1Vm:xc-@VHaIkNP5mb+9%m1sr~Rz92t');
define('AUTH_SALT',        '-QG(R1i|RUY.MkOT.Aehp{J+08u9WEY]b]}<jPX#n 6WwN))s=ecdhfY]70YszyT');
define('SECURE_AUTH_SALT', 'Un+*a r~!b|ch)SgeCxRQcdXX?6Eh&1QZy3{E;XbV^oH!^cdEJ(%|?JKS:5Y(_QG');
define('LOGGED_IN_SALT',   'r>Zqqh=H+rG3p*./F!bh{>dlo0Id!eOY^|A&hP^:{!9T@(LC{kE4y7u7{ 9^^}LO');
define('NONCE_SALT',       'Lku! ZYn`_O^C.@E*{[Vl_?IZ9PjN26jXEE*ghAD,|D5JtiTL,$>l)$xix~<Okv6');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
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
