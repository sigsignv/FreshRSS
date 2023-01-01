<?php

/******************************************************************************/
/* Each entry of that file can be associated with a comment to indicate its   */
/* state. When there is no comment, it means the entry is fully translated.   */
/* The recognized comments are (comment matching is case-insensitive):        */
/*   + TODO: the entry has never been translated.                             */
/*   + DIRTY: the entry has been translated but needs to be updated.          */
/*   + IGNORE: the entry does not need to be translated.                      */
/* When a comment is not recognized, it is discarded.                         */
/******************************************************************************/

return array(
	'action' => array(
		'finish' => 'インストール作業を完了する',
		'fix_errors_before' => '次のステップに移る前にエラーをすべて修正してください。',
		'keep_install' => '以前の設定を維持する',
		'next_step' => '次のステップへ進む',
		'reinstall' => 'FreshRSS を再インストールする',
	),
	'auth' => array(
		'form' => 'Webフォーム (Javascriptが必要です)',
		'http' => 'HTTP (上級者向けのHTTPS)',
		'none' => 'なし (危険)',
		'password_form' => 'パスワード<br /><small>(fWeb-formログインメソッド)</small>',
		'password_format' => '少なくとも7文字必要',
		'type' => '認証方法',
	),
	'bdd' => array(
		'_' => 'データベース',
		'conf' => array(
			'_' => 'データベース設定',
			'ko' => 'データベース設定を確認してください。',
			'ok' => 'データベース設定は保存されました。',
		),
		'host' => 'ホスト',
		'password' => 'データベースのパスワード',
		'prefix' => 'テーブルの接頭辞',
		'type' => 'データベースの種類',
		'username' => 'データベースのユーザー名',
	),
	'check' => array(
		'_' => '環境確認',
		'already_installed' => 'FreshRSS が、すでにインストールされています!',
		'cache' => array(
			'nok' => ' <em>%1$s</em> ディレクトリ <em>%2$s</em> ユーザーのアクセス権限を確認してください。HTTPサーバーを書き込むには権限が必要です。',
			'ok' => 'キャッシュディレクトリの権限は正しく設定されています。',
		),
		'ctype' => array(
			'nok' => '文字タイプチェックに必要なライブラリ (php-ctype) が見つかりません。',
			'ok' => '文字タイプチェックに必要なライブラリ (ctype) が見つかりました。',
		),
		'curl' => array(
			'nok' => 'cURL ライブラリ (php-curl package) が見つかりません。',
			'ok' => 'cURL ライブラリが見つかりました。',
		),
		'data' => array(
			'nok' => 'この <em>%1$s</em> ディレクトリの <em>%2$s</em> ユーザーのアクセス権限を確認してください。HTTPサーバーは編集権限を必要としています。',
			'ok' => 'ディレクトリのパーミッションは正しく設定されています。',
		),
		'dom' => array(
			'nok' => 'DOMを検索するライブラリが見つかりませんでした。',
			'ok' => 'DOMを検索するライブラリが見つかりました。',
		),
		'favicons' => array(
			'nok' => 'この <em>%1$s</em> ディレクトリの <em>%2$s</em> ユーザーのアクセス権限を確認してください。HTTPサーバーは編集権限を必要としています。',
			'ok' => 'ディレクトリのパーミッションは正しく設定されています。',
		),
		'fileinfo' => array(
			'nok' => 'PHP fileinfoライブラリが見つかりませんでした。 (fileinfo package).',
			'ok' => 'fileinfoライブラリは正しく設定されています。',
		),
		'json' => array(
			'nok' => 'JSONをパースするライブラリが見つかりませんでした。',
			'ok' => 'JSONをパースするライブラリはインストールされています。',
		),
		'mbstring' => array(
			'nok' => 'mbstring ライブラリが見つかりません。',
			'ok' => 'mbstring ライブラリが見つかりました。',
		),
		'pcre' => array(
			'nok' => '正規表現ライブラリ (php-pcre) が見つかりませんでした。',
			'ok' => '正規表現ライブラリ (PCRE) が見つかりました。',
		),
		'pdo' => array(
			'nok' => 'PD0あるいはサポートされているドライバーが見つかりませんでした。 (pdo_mysql, pdo_sqlite, pdo_pgsql).',
			'ok' => 'PD0とサポートされているドライバーはインストールされています。 (pdo_mysql, pdo_sqlite, pdo_pgsql).',
		),
		'php' => array(
			'nok' => 'あなたのPHPのバージョンは %s ですが、FreshRSSが動作する最低限のバージョンは %s です。',
			'ok' => 'あなたのPHPのバージョンは、 %s でFreshRSSと互換性があるバージョンです。',
		),
		'reload' => '再度確かめる',
		'tmp' => array(
			'nok' => 'この <em>%1$s</em> ディレクトリの <em>%2$s</em> ユーザーのアクセス権限を確認してください。HTTPサーバーは編集権限を必要としています。',
			'ok' => 'tempディレクトリの権限は正しく設定されています。',
		),
		'unknown_process_username' => '不明',
		'users' => array(
			'nok' => 'この <em>%1$s</em> ディレクトリの <em>%2$s</em> ユーザーのアクセス権限を確認してください。 HTTPサーバーは編集権限を必要としています。',
			'ok' => 'usersディレクトリの権限は正しく設定されています。',
		),
		'xml' => array(
			'nok' => 'XMLをパースするライブラリが見つかりませんでした。',
			'ok' => 'XMLをパースするライブラリが見つかりました。',
		),
	),
	'conf' => array(
		'_' => '一般設定',
		'ok' => '一般設定は保存されました。',
	),
	'congratulations' => 'おめでとうございます!',
	'default_user' => 'デフォルトのユーザー名 <small>(最大16文字の英数字)</small>',
	'fix_errors_before' => 'エラーを次のステップへ移る前に修正してください。',
	'javascript_is_better' => 'FreshRSS はJavascriptが有効だとより快適にご利用いただけます。',
	'js' => array(
		'confirm_reinstall' => 'もし再インストールするとFreshRSSの設定は削除されます。それでも続けますか?',
	),
	'language' => array(
		'_' => '言語',
		'choose' => 'FreshRSS で使う言語を選択してください',
		'defined' => '言語が設定されました。',
	),
	'missing_applied_migrations' => '何かが誤っています; 空のファイルを手動で作ることができます <em>%s</em>',
	'ok' => 'インストール作業は成功しました。',
	'session' => array(
		'nok' => 'webサーバーは、不正な設定がされておりPHPセッションが必要とされているクッキーの設定が誤っています!',
	),
	'step' => 'ステップ %d',
	'steps' => 'ステップ',
	'this_is_the_end' => '終了',
	'title' => 'インストール · FreshRSS',
);
