<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'youcef' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost:3306' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'n+e_&FM_M{y<+~Eog5ZYHkh.y@1u~Sc(/Gh+5Bn`W3vvV+h8(dr)c>i_}++h:J9b' );
define( 'SECURE_AUTH_KEY',  'C:u4]BU,*KYz]_v~b1]tE$j*5Vq6K8GH9I0jn~oG$RtB=EFMPYLMIgGG@z!5Ex<_' );
define( 'LOGGED_IN_KEY',    '@Q[?g@AwN,pP?[,59HYtM9My~dZ/bR-Ifi&_ssc,!h0qlaE(hFACt<.Ij}OH)Yi3' );
define( 'NONCE_KEY',        '<nmeat)iRoF _{,HYp o;?A1:GHwoW7Cz[_wH>%-f@GUgTd#L0?g_UqDvAK/)Zid' );
define( 'AUTH_SALT',        ' ,`J8Hy^gfUS>~lWdy^=*%maD#js?Mt$?F{r~IL>ZPH-$zYg<3vR+]{+~|kLB|wu' );
define( 'SECURE_AUTH_SALT', 'zES*| z/_oE&P(@#jg$jZA[<Mw=*Jy];hMl4=1A`:v_<V(@0()e,3l%1)t?!~z;r' );
define( 'LOGGED_IN_SALT',   'B:3&2}8u9%n(XgXO~:kqKT[ps~@#E.o8JqZdQNNsXZr2-tRVhE]fv`ltKUdv-7(9' );
define( 'NONCE_SALT',       'J]K(4o!T$D.f}c(|0h}iw8%*O+#{Yt`#;dYVmo|%=q4,Sv=NEr:$0q_c$iBf*4&[' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
