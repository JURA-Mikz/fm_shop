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
define( 'AUTH_KEY',         'C<Z/)ghG]E4xb$0Q&0#q;V%GEXAXoph_Gug]mb<1sIs!bn2l]9WvwJ(QZ/v%4)o>' );
define( 'SECURE_AUTH_KEY',  'wR.!K)~@0)v|(MmG5AT?vhG5*@FY9=  ]rW1;Bf/tR/,`d)o1{f~5h<l}hZ6`Ll)' );
define( 'LOGGED_IN_KEY',    'B=KLKrP8X2Y@es*63Vtkyu0jzU8DMYALnr&_*sbbU8. ^r|9F>k,]HUymhpB=D7D' );
define( 'NONCE_KEY',        'CAJGy>*37S/pOxk50(UImlLxLTmh2O(F&RfBy&Bwd>.Ls2$,_8&PR_1:eq0@{{at' );
define( 'AUTH_SALT',        's]U[4MsS/Cg#[>6W=7w&- Rf!2z%2n0xJOVsNN<.%@]I#w[^*3OMF, fBO/Tj0#*' );
define( 'SECURE_AUTH_SALT', 'deVCARJcA]2VuL]$V1=Xz<IOC<%yv9KJvz!T7O09?9,:B$zj,v/oNp0kfn0H#(^G' );
define( 'LOGGED_IN_SALT',   'eM|e+Z7};.%bC1in=tg{Moq4=n_&8>9.sg*vY@,aZuZd0R$^kA-N-=G*!343r8d&' );
define( 'NONCE_SALT',       'FKE`|5%+V!%A/SYCg3fH[L2$kB[!._SFXZO3(S* V;d^$ob40X:|Gb5Q60QFU5Va' );

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
