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
define('DB_NAME', 'coruemari3');

/** Nome utente del database MySQL */
define('DB_USER', 'administrator');

/** Password del database MySQL */
define('DB_PASSWORD', '8_g1ugn0!1982');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'v4VeL$k4:=`tUhLP/WB8ij>^{m^Eo&x+]Gy1_)7=l.M-nwEzi#J@h}<|y;]8n>B(');
define('SECURE_AUTH_KEY',  'rL-QPsI0$?TzQ;_7w]P%)4l`%y)QN%`9)%wi9}@d)3e;{eCgNb]sAGZ98;7L=LQ@');
define('LOGGED_IN_KEY',    'rhUNa1|j*O{v}@d~K3WSrjuU3hz.~L*jgZCO+/`bIMk}v(Ul0&_jy5fffL{Iu3WO');
define('NONCE_KEY',        'ws2XJ:sSl:;_$bTal@gO-6a95/1mOi7iK&mw8fthcc~0+.&R*}x.-Iux.SJ)t>JN');
define('AUTH_SALT',        'D_$NB~SbY {klP[$sgKWzZ$V1yU:Ct8P?mwif,nd@nEkP)MT,1vufCTH89ORky2$');
define('SECURE_AUTH_SALT', ' xDXJuT mJd]t12O$7|~ozN75+NZd+WpPiWJRqllE6tn,_+q?|W2dlxz:ka`%UXu');
define('LOGGED_IN_SALT',   'gD,k8U6t=x}|-uCqO:XI`#MEDsYs)LL#lnc2m*O0*#C#*bZD=h3ca#u{o=y|`8GG');
define('NONCE_SALT',       '7u765)OH]BkvzQ55|P< [eD*~Q%2%WrRNWfT 8B6!VE|aiP -eTA!cr0 k[cu{.r');

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix  = 'wp_';

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