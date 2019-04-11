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
define( 'DB_NAME', 'WORDPRESSEVAL' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'dania' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '0000' );

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
define( 'AUTH_KEY',         'K&Kl#sB>)Z-)o=-H}(6u_CTR6LSUz?R7WISMH[Vm@A/gBdKo/H8V]f 5`b68B]-o' );
define( 'SECURE_AUTH_KEY',  'Z_xX0^S,b<,RSZf/ah$/yrbz `eO-,-ln)gMA=Bp[V-24mHY/L/;zGMiUU/{P;cF' );
define( 'LOGGED_IN_KEY',    'h{:Qd-,3,j&IE_P{$_Ee7%m+:x$1~BDG|14.VVTWV5r,6U]C. mOZH%CP`._s}_}' );
define( 'NONCE_KEY',        'c`PJ0l/lwsLX$|rnVLSRzG6sD|dxk:[I*y<_H?9/LxsN~-xD(BEJ/=L1zQY#:@{5' );
define( 'AUTH_SALT',        'Q{T!U^+S*.$]*4, R Fe&X%JN:>OyuyYf1{cjN?zuxzn|+H`97P;u23_y~7#a_yf' );
define( 'SECURE_AUTH_SALT', '@6Ef(oMTR: |U(!5Te/vO|/)QyR!` V(8z)PrjtN7Ia;iB]@cu#+:&.h=%XV]HFQ' );
define( 'LOGGED_IN_SALT',   '>_+Z7ZYal4deHdN-smzuinds5dH6GcCaHoz6o2%A{=S*^Q64@ypWI~(LO)<VszIv' );
define( 'NONCE_SALT',       'bC]BzNe+9l4-tC5f_Nz>0Jo_+<S0V283ttSMqIcR;F)9hJ):~Pb!2<5.}erDZU3e' );
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
