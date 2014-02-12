<?php
	
	// カレントの言語を日本語に設定する
	mb_language( "ja" );
	
	// 内部文字エンコードを設定する
	mb_internal_encoding( "UTF-8" );

	$message = "お名前：" . $_POST["name"] . "\nメールアドレス：" . $_POST["email"] . "\n本文：" . $_POST["message"];
	
	if ( !mb_send_mail( "uchida@mimi-happy.com", "", $message, "From: " . $_POST["email"] ) ) {
		exit( "error" );
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>10cm Official Site</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<script src="js/jquery-1.8.2.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
</head>

<body>
	
	<div id="container">
	
		<!-- ヘッダー -->
		<div id="header">
		
			<!-- ナビメニュー  -->
			<script type="text/javascript" src="js/navi_menu.js"></script>
		
		</div>
		
		<div id="mail-send">
			メールを送信しました。
		</div>
		
		<br/>
		<br/>
		<br/>
		
	</div>
	
</body>

</html>