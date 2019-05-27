<?php
	session_start();

// トークン認証
if ( isset( $_POST['csrf_token'] ) && $_POST['csrf_token'] === $_SESSION['csrf_token'] ) {

	mb_language( 'Japanese' );
	mb_internal_encoding( 'UTF-8' );

	$emailTo = 'tanegashimav48273@gmail.com';
	$subject = 'ポートフォリオから「 ' . $_POST['subject'] . '」';
	$body    = $_POST['message'];
	$header  = 'From: ' . $_POST['email'];

	if ( mb_send_mail( $emailTo, $subject, $body, $header ) ) {
		// 送信完了を意味する値
		$_SESSION['mail-comp'] = 1;
		header( 'Location: ../index.php' );

	} else {
		echo "送信に失敗しました。<br><input type='button' value='お問い合わせに戻る' onclick='history.go(-2)'>";
	}
} else {
	// トークンが一致しなかったら1つ前のページに戻す
	echo '<script>window.history.back();</script>';
}

