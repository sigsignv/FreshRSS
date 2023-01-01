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
	'auth' => array(
		'allow_anonymous' => '匿名でデフォルトユーザー (%s) の記事を読むことを許可する',
		'allow_anonymous_refresh' => '匿名で記事を更新することを許可する',
		'api_enabled' => '<abbr>API</abbr> アクセスを許可する<small>(モバイルアプリが必要)</small>',
		'form' => 'ウェブフォーム (JavaScriptが必要です)',
		'http' => 'HTTP (上級者はHTTPSでも)',
		'none' => 'なし (危険)',
		'title' => '認証',
		'token' => '認証トークン',
		'token_help' => 'ユーザーが承認無しで、RSSを出力できるようにします。:',
		'type' => '認証方式',
		'unsafe_autologin' => '危険な自動ログインを有効にします',
	),
	'check_install' => array(
		'cache' => array(
			'nok' => '<em>./data/cache</em>ディレクトリのパーミッションを確認してください。 HTTP serverは編集権限を必要としています。',
			'ok' => 'キャッシュディレクトリのパーミッションは正しく設定されています。',
		),
		'categories' => array(
			'nok' => 'カテゴリテーブルが適切に設定されていません。',
			'ok' => 'カテゴリテーブルは正常です。',
		),
		'connection' => array(
			'nok' => 'データベース接続を確立できませんでした。',
			'ok' => 'データベース接続は正常です。',
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
			'nok' => '<em>./data</em>ディレクトリのパーミッションを確認してください。 HTTP serverは編集パーミッションを必要としています。',
			'ok' => 'ディレクトリのパーミッションは正しく設定されています。',
		),
		'database' => 'データベースのインストール',
		'dom' => array(
			'nok' => 'DOMを検索するライブラリが見つかりませんでした。 (php-xml package).',
			'ok' => 'DOMを検索するライブラリが見つかりました。',
		),
		'entries' => array(
			'nok' => 'エントリテーブルが適切に設定されていません。',
			'ok' => 'エントリテーブルは正常です。',
		),
		'favicons' => array(
			'nok' => '<em>./data/favicons</em>ディレクトリのパーミッションを確認してください。 HTTP serverは編集パーミッションを必要としています。',
			'ok' => 'ファビコンディレクトリのパーミッションは正しく設定されています。',
		),
		'feeds' => array(
			'nok' => 'フィードテーブルが適切に設定されていません。',
			'ok' => 'フィードテーブルは正常です。',
		),
		'fileinfo' => array(
			'nok' => 'fileinfo ライブラリ (fileinfo package) が見つかりません。',
			'ok' => 'fileinfo ライブラリが見つかりました。',
		),
		'files' => 'ファイルのインストール',
		'json' => array(
			'nok' => 'JSON (php-json package) が見つかりません。',
			'ok' => 'JSON 拡張機能が見つかりました。',
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
			'_' => 'PHPインストール',
			'nok' => 'あなたのPHPのバージョンは %s ですが、FreshRSSが動作する最低限のバージョンは %s です。',
			'ok' => 'あなたのPHPのバージョン (%s) はFreshRSSが動作することができるバージョンです。',
		),
		'tables' => array(
			'nok' => 'データベースには1つ以上の失われたテーブルが存在します。',
			'ok' => '適切なテーブルがデータベースに存在します。',
		),
		'title' => 'インストールチェック',
		'tokens' => array(
			'nok' => '<em>./data/tokens</em>ディレクトリのパーミッションを確認してください。HTTP serverは編集パーミッションを必要としています。',
			'ok' => 'tokensディレクトリのパーミッションは正しく設定されています。',
		),
		'users' => array(
			'nok' => '<em>./data/users</em>ディレクトリのパーミッションを確認してください。HTTP serverは編集パーミッションを必要としています。',
			'ok' => 'usersディレクトリのパーミッションは正しく設定されています。',
		),
		'zip' => array(
			'nok' => 'ZIP拡張が見つかりませんでした。 (php-zip package).',
			'ok' => 'ZIP拡張はインストールされています。',
		),
	),
	'extensions' => array(
		'author' => '作者',
		'community' => '利用可能なコミュニティ製の拡張機能',
		'description' => '説明',
		'disabled' => '無効',
		'empty_list' => 'インストールされている拡張機能はありません',
		'enabled' => '有効',
		'latest' => 'インストール済み',
		'name' => '名前',
		'no_configure_view' => 'この拡張機能は設定できません。',
		'system' => array(
			'_' => 'システム拡張機能',
			'no_rights' => 'システムの拡張機能 (あなたは権限を所持していません',
		),
		'title' => '拡張機能',
		'update' => 'アップデート可能',
		'user' => 'ユーザー拡張機能',
		'version' => 'バージョン',
	),
	'stats' => array(
		'_' => '統計',
		'all_feeds' => 'すべてのフィード',
		'category' => 'カテゴリ',
		'entry_count' => 'エントリの統計',
		'entry_per_category' => 'カテゴリのエントリ',
		'entry_per_day' => '日にちごとのエントリ (直近30日間)',
		'entry_per_day_of_week' => '週あたり (平均: %.2f メッセージ)',
		'entry_per_hour' => '時間当たり (平均: %.2f メッセージ)',
		'entry_per_month' => '月あたり (平均: %.2f メッセージ)',
		'entry_repartition' => 'エントリの仕切り',
		'feed' => 'フィード',
		'feed_per_category' => 'カテゴリごとのフィード',
		'idle' => '未使用のフィード',
		'main' => '主な統計',
		'main_stream' => '主なストリーム',
		'no_idle' => '未使用のフィードはありません!',
		'number_entries' => '%d 記事',
		'percent_of_total' => '%% 総計',
		'repartition' => '記事の仕切り',
		'status_favorites' => 'お気に入り',
		'status_read' => '既読',
		'status_total' => 'すべて',
		'status_unread' => '未読',
		'title' => '仕切り',
		'top_feed' => '上位10位のフィード',
	),
	'system' => array(
		'_' => 'システム設定',
		'auto-update-url' => '自動アップグレードするサーバーのURL',
		'cookie-duration' => array(
			'help' => '秒',
			'number' => 'ログインを維持する期間',
		),
		'force_email_validation' => 'メールアドレスの確認を強制する',
		'instance-name' => 'インスタンス名',
		'max-categories' => 'ユーザー毎のカテゴリ数の上限',
		'max-feeds' => 'ユーザー毎の購読数の上限',
		'registration' => array(
			'number' => 'アカウント数の上限',
			'select' => array(
				'label' => '登録フォーム',
				'option' => array(
					'noform' => '無効: 登録フォームなし',
					'nolimit' => '有効: アカウント数上限なし',
					'setaccountsnumber' => 'アカウント数の上限を設定',
				),
			),
			'status' => array(
				'disabled' => '登録フォームは無効です',
				'enabled' => '登録フォームは有効です',
			),
			'title' => 'ユーザー登録フォーム',
		),
	),
	'update' => array(
		'_' => 'システム更新',
		'apply' => '更新',
		'check' => 'アップデートを確認する',
		'current_version' => 'FreshRSS の現在のバージョンは %s です。',
		'last' => '最近の検証: %s',
		'none' => '適用する更新はありません',
		'title' => 'システム更新',
	),
	'user' => array(
		'admin' => '管理者',
		'article_count' => '記事',
		'back_to_manage' => '← ユーザーの一覧に戻る',
		'create' => '新規ユーザーを作成',
		'database_size' => 'データベース容量',
		'email' => 'メールアドレス',
		'enabled' => '有効',
		'feed_count' => 'フィード',
		'is_admin' => '管理者',
		'language' => '言語',
		'last_user_activity' => '直近のユーザーアクティビティ',
		'list' => 'ユーザーの一覧',
		'number' => '%d 件のアカウントを作成しました',
		'numbers' => '%d 件のアカウントを作成しました',
		'password_form' => 'パスワード<br /><small>(Web-formログインメソッド)</small>',
		'password_format' => '少なくとも7文字必要',
		'title' => 'ユーザー管理',
		'username' => 'ユーザー名',
	),
);
