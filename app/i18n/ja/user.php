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
	'email' => array(
		'feedback' => array(
			'invalid' => 'このメールアドレスは無効です。',
			'required' => 'メールアドレスは必須です。',
		),
		'validation' => array(
			'change_email' => 'メールアドレスは<a href="%s">プロフィールページ</a>で変更できます。',
			'email_sent_to' => '<strong>%s</strong> にメールを送信しました。メールアドレスの有効性を確認するためメールの指示に従ってください。',
			'feedback' => array(
				'email_failed' => 'サーバーの設定に問題があるためメールの送信に失敗しました。',
				'email_sent' => 'メールが送信されました。',
				'error' => 'メールアドレスの有効性の確認に失敗しました。',
				'ok' => 'このメールアドレスは有効です。',
				'unnecessary' => 'このメールアドレスの有効性は既に確認済みです。',
				'wrong_token' => 'トークンが正しくないためこのメールアドレスの有効性の確認に失敗しました。',
			),
			'need_to' => '%s を使用するためにはメールアドレスの有効性を確認する必要があります。',
			'resend_email' => 'メールを再送',
			'title' => 'メールアドレスの確認',
		),
	),
	'mailer' => array(
		'email_need_validation' => array(
			'body' => 'あなたは %s に登録しましたが、メールアドレスの有効性を確認する必要があります。次のリンクに従ってください:',
			'title' => 'アカウントの有効性を確認してください',
			'welcome' => 'ようこそ %s さん。',
		),
	),
	'password' => array(
		'invalid' => 'このパスワードは無効です。',
	),
	'tos' => array(
		'feedback' => array(
			'invalid' => '登録するためには利用規約に同意する必要があります。',
		),
	),
	'username' => array(
		'invalid' => 'このユーザー名は無効です。',
		'taken' => '%s は既に使われているユーザー名です。',
	),
);
