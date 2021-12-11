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
define( 'DB_NAME', 'fmzi_wordpress' );

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
define( 'AUTH_KEY',         '2yhjUd=0Rb=56dIg^#CaJ/]x3r*jK*j]2PIlNa`?IC<5(LP[q1G(sQlNWAE95EnF' );
define( 'SECURE_AUTH_KEY',  'u;47}!(z2sMyjgV0LWK?je#HjUQ2pac?+D`#mhI+0aVdkMA}3oFe!jCH42P*b*|F' );
define( 'LOGGED_IN_KEY',    'p|}e[Dmt{@3D=sofY@m-PXz MW_d|l=.7NHA.rOa(mU}[LuPZC@mc6|N]EN$5ae^' );
define( 'NONCE_KEY',        'E2bn0M/?7%Ov/0t1^rM=mSxv%J)oyAZ.-0|wX!2=@$7Icg<1mG=aW0E{]p=JoE<4' );
define( 'AUTH_SALT',        'JtZB=nC816NB]}_joAH<gjZ%u7&D0#p_>QPVC&8Oh9x,jN2}q*,xsV5ow<UIu0[T' );
define( 'SECURE_AUTH_SALT', '(rY4k&<+]`eq~k:BM>+4t|/0=e=Q+Ug(2@{.IRl{8&M~:z)]FFI}lxm78Wadw95y' );
define( 'LOGGED_IN_SALT',   't4.JM+UtpF@m6Lw0w1lL.jf@#.g+=.tp~.Sc,q*DHhiUG2Di;B4^/WY1eI<Rpfdl' );
define( 'NONCE_SALT',       ';xKS*sY8F-Lm;yd`c:[z>t_:WgcxroAJ72H.-rwS,TP@2^~/6n$JrT7c>0V.{6KF' );

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
