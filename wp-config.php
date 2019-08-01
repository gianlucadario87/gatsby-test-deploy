<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via
 * web, è anche possibile copiare questo file in «wp-config.php» e
 * riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Prefisso Tabella
 * * Chiavi Segrete
 * * ABSPATH
 *
 * È possibile trovare ultetriori informazioni visitando la pagina del Codex:
 *
 * @link https://codex.wordpress.org/it:Modificare_wp-config.php
 *
 * È possibile ottenere le impostazioni per MySQL dal proprio fornitore di hosting.
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'wordpress' );

/** Nome utente del database MySQL */
define( 'DB_USER', 'root' );

/** Password del database MySQL */
define( 'DB_PASSWORD', '' );

/** Hostname MySQL  */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '~WyEh$w8x?boETgHIXYZ%MYJilM[OOBO>d^~i2ek$q;!jiXgRJ5ExHt RE?7[o0Q' );
define( 'SECURE_AUTH_KEY',  'Jouj,Eq~;8u%9K}3eWAYi JW2cbYShjxl*6elh[q/L*@j!*N2e`)9]P2YO834(6`' );
define( 'LOGGED_IN_KEY',    ')i?u$h1Q/+Qyv(]zxqxgCwlpx:aV+9fc6 {EyPJHHMK,vNUpMW{-*?1xcN)P/Qdm' );
define( 'NONCE_KEY',        'YS=QF f{Ge4:R`c#UQ?P0-!OA_F$zRsdY,VkgD ;aJf29T,^j,^{:*xcDlh9hmKr' );
define( 'AUTH_SALT',        '/ {,}(U+v$#<l=WbmRd/Y~oPF<*H<Uc+fQ^kg;[BqL6PcP7#e2^]6%C NX%|ImBL' );
define( 'SECURE_AUTH_SALT', 'f{R&}]:dt%R-s6b8EdU9t`uWehNCIp/kW,bj)0f^w1/hN4]38|KsQ!t,C:0FP:L@' );
define( 'LOGGED_IN_SALT',   'wi53BCA&>mbxm*d1S)it>g&~j;H},5X>})^};+u19)-NPf:ohrbn& eimSZ61jNC' );
define( 'NONCE_SALT',       'bTOR]m#&}#^e|i8OWV({ue%*}Q8t`^(ub&kRDZq|{0|kY.1D.plu09%x[mo_YsM.' );

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi
 * durante lo sviluppo.
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 */
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
