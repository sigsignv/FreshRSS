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
	'access' => array(
		'denied' => 'このページにアクセスする権限がありません。',
		'not_found' => 'お探しのページは見つかりません。',
	),
	'admin' => array(
		'optimization_complete' => '最適化が完了しました',
	),
	'api' => array(
		'password' => array(
			'failed' => 'パスワードは変更できません',
			'updated' => 'パスワードは変更されました',
		),
	),
	'auth' => array(
		'login' => array(
			'invalid' => 'ログインは無効です。',
			'success' => 'ログインしました。',
		),
		'logout' => array(
			'success' => 'ログアウトされました。',
		),
	),
	'conf' => array(
		'error' => '設定を保存するとき、エラーが発生しました。',
		'query_created' => '“%s”クエリは作成されました。',
		'shortcuts_updated' => 'ショートカットはアップデートされました。',
		'updated' => '設定が更新されました。',
	),
	'extensions' => array(
		'already_enabled' => '%s は既に有効になっています',
		'cannot_remove' => '%s は消去できません',
		'disable' => array(
			'ko' => '%s を無効化できませんでした。詳細は <a href="%s">FreshRSS のログ</a>を確認してください。',
			'ok' => '%s は無効化されました',
		),
		'enable' => array(
			'ko' => '%s を有効化できませんでした。詳細は <a href="%s">FreshRSS のログ</a>を確認してください。',
			'ok' => '%s は有効化されました',
		),
		'no_access' => 'あなたは%sにアクセスする権限がありません',
		'not_enabled' => '%sは有効にされていません',
		'not_found' => '%sは存在しません',
		'removed' => '%sは消去されました',
	),
	'import_export' => array(
		'export_no_zip_extension' => 'ZIP 拡張は現在あなたのサーバーに存在しません。一つずつファイルをエクスポートしてみてください。',
		'feeds_imported' => 'あなたのフィードはインポートされ、更新されます。',
		'feeds_imported_with_errors' => 'あなたのフィードはインポートされましたが、エラーが起きました。',
		'file_cannot_be_uploaded' => 'ファイルをアップロードすることはできません!',
		'no_zip_extension' => 'ZIP拡張は現在あなたのサーバーに存在しません。',
		'zip_error' => 'ZIPをインポートするときエラーが発生しました。',
	),
	'profile' => array(
		'error' => 'あなたのプロフィールは変更できません',
		'updated' => 'あなたのプロフィールは変更されました',
	),
	'sub' => array(
		'actualize' => '更新中',
		'articles' => array(
			'marked_read' => '選択された記事は既読になります。',
			'marked_unread' => '選択された記事は未読になります。',
		),
		'category' => array(
			'created' => '%sカテゴリは作成されました',
			'deleted' => 'カテゴリは消去されました',
			'emptied' => 'カテゴリは空になりました',
			'error' => 'カテゴリが更新することができません',
			'name_exists' => 'そのカテゴリは既に存在します',
			'no_id' => 'あなたはカテゴリのIDを指定する必要があります。',
			'no_name' => 'カテゴリ名を空白にすることはできません!',
			'not_delete_default' => 'デフォルトカテゴリを消去することはできません!',
			'not_exist' => 'カテゴリは存在しません!',
			'over_max' => 'カテゴリの上限に達しました(%d)',
			'updated' => 'カテゴリは更新されました。',
		),
		'feed' => array(
			'actualized' => '<em>%s</em>は更新されました。',
			'actualizeds' => 'RSSフィードは更新されました。',
			'added' => 'RSS フィードの <em>%s</em> は更新されました',
			'already_subscribed' => 'すでにあなたは<em>%s</em>を購読しています',
			'cache_cleared' => '<em>%s</em>キャッシュは作られました',
			'deleted' => 'フィードは消去されました',
			'error' => 'フィードを更新することができません',
			'internal_problem' => 'newsfeedを追加することはできません。<a href="%s">FreshRSSログの詳細を</a>確かめてください。強制的に追加することを試せます <code>#force_feed</code>このURLを確認ください。',
			'invalid_url' => 'URL <em>%s</em>は無効です',
			'n_actualized' => '%d フィードはアップデートされました',
			'n_entries_deleted' => '%d 記事が消去されました',
			'no_refresh' => 'リフレッシュするフィードがありません',
			'not_added' => '<em>%s</em> は追加することができません',
			'not_found' => 'フィードを見つけることができませんでした',
			'over_max' => 'フィードの最大値に達しました (%d)',
			'reloaded' => '<em>%s</em> は再読み込みされました',
			'selector_preview' => array(
				'http_error' => 'webサイトの読み込みに失敗しました',
				'no_entries' => 'このフィードには記事がありません。少なくともプレビュー表示を作成するには一つの記事が必要です。',
				'no_feed' => '内部エラー (フィードが見つかりませんでした).',
				'no_result' => '選択されたものはどれともマッチしませんでした。代わりにフォールバックとして、元のテキストが表示されます。',
				'selector_empty' => '選択されたものは空白です。プレビューするには一つ定義することが必要です。',
			),
			'updated' => 'フィードは更新されました。',
		),
		'purge_completed' => '不要データの削除が完了されました (%d 記事は消去されました)',
	),
	'tag' => array(
		'created' => '“%s” タグが作成されました',
		'name_exists' => 'このタグ名は既に存在します',
		'renamed' => '“%s”タグは“%s”に改名されました',
	),
	'update' => array(
		'can_apply' => 'FreshRSSは<strong>バージョン %s</strong>に更新されます。',
		'error' => 'アップデートプロセスはエラーによって失敗しました: %s',
		'file_is_nok' => '新規 <strong>バージョン %s</strong> があります、しかし <em>%s</em> ディレクトリには権限がありません。HTTP は書き込み権限が必要です。',
		'finished' => 'アップデートが完了しました!',
		'none' => '適用できるアップデートはありません',
		'server_not_found' => 'アップデートサーバーが見つかりませんでした [%s]',
	),
	'user' => array(
		'created' => array(
			'_' => 'ユーザー %s が作成されました',
			'error' => 'ユーザー %s を作成できませんでした',
		),
		'deleted' => array(
			'_' => 'ユーザー %s が削除されました',
			'error' => 'ユーザー %s を削除できませんでした',
		),
		'updated' => array(
			'_' => 'ユーザー %s が更新されました',
			'error' => 'ユーザー %s を更新できませんでした',
		),
	),
);
