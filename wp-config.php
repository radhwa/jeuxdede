<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpressdemo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i~pDGqccXWLyo%f6$dkC@y[qvi,sbG7}.36|ksvSP4`ZE<<Ug8n@]ilT4kn1et$.' );
define( 'SECURE_AUTH_KEY',  'gpH;h?mM[wI#z5Zm_*~TgI&KG&DqOc=J]V<$+y% )f7/@iBGF4Kp]Dy8X,+ *{)b' );
define( 'LOGGED_IN_KEY',    'vhQs$v}9F(P6-!IH1H.(#$$u,px>&S~E1KVLx9WNbyI;;&)BNj`pP(_bDYjS*/:+' );
define( 'NONCE_KEY',        'QcyXOXKGFsZfNo.<e5)LL<jx[G,6-{^$dnm5nolJ$)a`DN`l&hq+t|z2`jlEZGg1' );
define( 'AUTH_SALT',        'NL/^i;lwitwK;ygTP5BFgX` 1F#P?r*L*u9N~PmBvs.m<jh`z_tR3FL4_WpX2+R7' );
define( 'SECURE_AUTH_SALT', '!M9S}~fQVyOFa2d[a(2H),%Sj{S]GR0B?LVCxijX|Mb9n~w`~{p2!|+fC0*7g)vG' );
define( 'LOGGED_IN_SALT',   'KY2A{,KNSa5G+4r4p{K6j}jT/+TQSShM`/{*aG9HI<-8@3aP2!ph[1(6?:D @PZc' );
define( 'NONCE_SALT',       'LYv1{#;hG2] @L^V.Dk`[u,DY7W3}j ~4Y|L;9AZani2s*BjJ`T#4^WUr5T.xW74' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'demo_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
