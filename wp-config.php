<?php
/**
 * Основне поставке Вордпреса.
 *
 * Ова датотека се користи од стране скрипте за прављење wp-config.php током
 * инсталирања. Не морате да користите веб место, само умножите ову датотеку
 * у "wp-config.php" и попуните вредности.
 *
 * Ова датотека садржи следеће поставке:
 * * MySQL подешавања
 * * тајне кључеве
 * * префикс табеле
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL подешавања - Можете добити ове податке од свог домаћина ** //
/** Име базе података за Вордпрес */
define( 'DB_NAME', 'webkreiranje' );

/** Корисничко име MySQL базе */
define( 'DB_USER', 'root' );

/** Лозинка MySQL базе */
define( 'DB_PASSWORD', '' );

/** MySQL домаћин */
define( 'DB_HOST', 'localhost' );

/** Скуп знакова за коришћење у прављењу табела базе. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Не мењајте ово ако сте у сумњи. */
define( 'DB_COLLATE', '' );

/**#@+
 * Јединствени кључеви за аутентификацију.
 *
 * Промените ово у различите јединствене изразе!
 * Можете направити ово користећи {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org услугу тајних кључева}
 * Ово можете променити у сваком тренутку да бисте поништили све постојеће колачиће.
 * Ово ће натерати кориснике да се поново пријаве.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '5Yh/)QjW0pz/I3ZdD!`DEq3sc|xa4(WvFfD2*<.=D%m}Vs!#2y>C:iV Y@xWVSx:' );
define( 'SECURE_AUTH_KEY',  ':Ns`2&/~vJdlS/wNZ`-Mpn4Qn=2@7@kfoI,UJ?V0w!?;+pOGQT[@BWA%%[@R5)[<' );
define( 'LOGGED_IN_KEY',    'hkTjAR?>|a#It|bP#O(O1-3G+o%3g|OCO/o4&VTQ7O3KK%}ofCAsl~^4<=V0<^ju' );
define( 'NONCE_KEY',        '7||}oZP`;4b*ydz 5[,Iw~,?Xk){OxW`I~WPB}4;9Qu@`=Us)]o8ijRPo!$!T.^K' );
define( 'AUTH_SALT',        '1i+,g?Ce_+5iUrW|RkS}2irxhJ.AFDh8aXporw*V%9~jK/!2#p$4gT?~8#f6F.Y$' );
define( 'SECURE_AUTH_SALT', '/F96Fq`Pd8>TG79f;X #QR%5!+WCFFx?k $FcuU>C?~C+C$TeUC6;i(Bxjj+4sLF' );
define( 'LOGGED_IN_SALT',   'Pr%:xhov_}s@iXL/,2rN7U@09ypjtV2hdll?lskf3|zd-N[*gnkk~EXh8g{J2y6g' );
define( 'NONCE_SALT',       '/t!|h:j|t%+r$|?O/;C^6d?(? [ooLO:Y5W&-0VOwQQwXLK!7htnP?[xFHR|@$)p' );

/**#@-*/

/**
 * Префикс табеле Вордпресове базе података.
 *
 * Можете имати више инсталација Вордпреса у једној бази уколико
 * свакој дате јединствени префикс. Само бројеви, слова и доње цртице!
 */
$table_prefix = 'wp_';

/**
 * За градитеље: исправљање грешака у Вордпресу ("WordPress debugging mode").
 *
 * Промените ово у true да бисте омогућили приказ напомена током градње.
 * Веома се препоручује да градитељи тема и додатака користе WP_DEBUG
 * у својим градитељским окружењима.
 *
 * За више података о осталим константама које могу да се
 * користе током отклањања грешака, посетите Документацију.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* То је све, престаните са уређивањем! Срећно објављивање. */

/** Апсолутна путања ка Вордпресовом директоријуму. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Поставља Вордпресове променљиве и укључене датотеке. */
require_once( ABSPATH . 'wp-settings.php' );
