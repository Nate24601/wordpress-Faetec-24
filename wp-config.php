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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'vuxv>dujI:$3(<QWhq8!Yj?#f`gRnMA~|!Ty3DKY2q:C0K!u}s9L!lF.4I3=qY_.' );
define( 'SECURE_AUTH_KEY',  'dS:|i]<c#DD<a|e_|uc5<rSqr.#sY-}>YvSSVN8r?A!z #d5*[zVl/5DQ;Y^T+P`' );
define( 'LOGGED_IN_KEY',    '[*G)@XU=@*x1K5,30#$Uc4YL9l!A8^uP[]auKO%&XE[KM}~<9v$h9fQRaNwVU_w{' );
define( 'NONCE_KEY',        'IBy;M2(0K9KS4Gz-}[FGpb=R>7)#ZWH @t3UImDkiqcoHfk;20B-#o7]hYg-s-g`' );
define( 'AUTH_SALT',        'saGKT6V1_U;#zvt].qK;iO6MGiN=YOUKADkWUNQG-rY0W;F 7H9ugnlen|<s22B+' );
define( 'SECURE_AUTH_SALT', 'j-vbFjW-QTFS5)vA_$,q 2+:2Rs0z%5e@Ds/LOFXe/Rz%TfwE%&*#gCq@wW{=9;?' );
define( 'LOGGED_IN_SALT',   'BSk2!&ALW1+VepM!9?7#$`a!6Ek&D3zF%$J|/o(EDN*DyGw%VM!kvr?3M)S*6VCI' );
define( 'NONCE_SALT',       '?e^XTT<}03Lvz:xV`UTzf9>;V5#P30nRt!}~x?=o8o#!r];G}J-PyCYVEX:KsU>C' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
