<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'fm_wordpress' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'fujishima_mizuho' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'Asdf3333-' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ly$wp3Pi>bV+zD* e<_tB&F5pK##>u>)&}qrb;M) uZ^S#u?ui0V+6BRx?ia|G<u' );
define( 'SECURE_AUTH_KEY',  'lwMS~c$ByN1YP(I,Xx<+=?<h}I5zR.|,@WJs8Oj_MJZ#f(Cy>0nY>)T69]pf>7dT' );
define( 'LOGGED_IN_KEY',    'DI!!sX`M$FHjw69P/SS!x1gRLdjhk9W9vfaMxq%+V&w/2ij,Nm-u0<:AF.fG8+l%' );
define( 'NONCE_KEY',        'a.; B.`smB7D0dj4.1aBC.uUK_?RHXiI]``7N3GW{od~m>)Fu|V~%)SRJX3#`1%u' );
define( 'AUTH_SALT',        'QrPFUnN4V+..yH%>y;0!|FpA> rek!!2R9!!~iUf{bG(!$Sr-^`opvUXOJUsn<-i' );
define( 'SECURE_AUTH_SALT', ';^XUg~p?/Xyo/SB 5ka9`:G3r6A&nkf*IRWY|;If01tD{}CpeseM(+=x$11CFIh,' );
define( 'LOGGED_IN_SALT',   'WdR{nw_82WPOFT1Js%$dCpAxU L{_Q[SsG0-6=7J_nJ<&7$y^jRqSX<*5_(9pW{0' );
define( 'NONCE_SALT',       'jY&S#v6(@ndxqY@8-il!Mfi_ky+[s4*4u0MHh;V7VB0Jn/dhR>*._3~-KBMR9c6N' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
