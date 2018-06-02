<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = '';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = '';

/************
記入例
**************
//ファイルの回想を記入
$level = '../../';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />
        <link rel="stylesheet" href="'.$level.'css/style.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';・・・内容がない場合はそのままにする

//サイトのタイトルを記入
$title = 'webサイト -TOP-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keyword = 'web,犬,単語';
//サイトの説明文を記入(表示には関係ない・任意)
$description = 'これはサイトの説明を表しています。';
//サイトの製作者を記入(表示には関係ない・任意)
$auther = 'IW32班';
*************
記入例終了
*************/

$addfrom = $_POST["addfrom"];
$mail = $_POST["mail"];
$kenmei = $_POST["kenmei"];
$msg = $_POST["msg"];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="keywords" content="威風堂々,IFYOUDODO,IF YOU DO DO">
	<meta name="description" content="">
	<meta name="robots" content="nofollow">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="">
	<title>mail</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" />

<title>mail</title>
</head>
<body style="margin: 0 auto">
<link rel="stylesheet" href="css/cont5_mail.css" type="text/css">
<link rel="stylesheet" href="css/common.css" type="text/css">

<article>

	<!-- content5 -->

		<div id="content5" class="cont_1">

			<div class="Content5-Text fade mb-font">

				<h2 class="cont_2__heading">CONTACT</h2>
				<h3>この内容で送信しますか？</h3>

					<div class="cont_box cfx">
						<label for="name">お名前</label>
						<p><?php print $addfrom ?></p>
					</div>

					<div class="cont_box cfx">
						<label for="mail">メールアドレス</label>
						<p><?php print $mail ?></p>
					</div>

					<div class="cont_box cfx">
						<label for="name">ご用件</label>
						<p><?php print $kenmei ?></p>
					</div>

					<div class="cont_box cfx">
						<label for="msg">お問い合わせ内容</label>
						<div class="msg_box">
							<P><?php print $msg ?></P>
						</div>

					</div>

					<form method="POST" action="mailoutput.php">
						<input type="hidden" name="addfrom" value="<?php print $addfrom; ?>" />
						<input type="hidden" name="mail" value="<?php print $mail; ?>" />
						<input type="hidden" name="kenmei" value="<?php print $kenmei; ?>" />
						<input type="hidden" name="msg" value="<?php print $msg; ?>" />

						<a class="back_button" href="index.php">戻る</a>
						<input class="button" name="action" type="submit" value="送信">
					</form>

			</div>
		</div>
</article>
