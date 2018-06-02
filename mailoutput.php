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

$coment = "";

$addfrom = $_POST["addfrom"];
$mail = $_POST["mail"];
$kenmei = $_POST["kenmei"];
$msg = $_POST["msg"];

$to = "sa.na.gi1029@gmail.com";
$addto = "管理人";



$Cont = mb_convert_kana($msg,"KV","UTF-8");

mb_language("uni");

$Title= mb_convert_encoding($kenmei,"ISO-2022-JP","UTF-8");

$headers="To:\"".$addto."\"<".$to.">\r\n";
$headers.="From:\"".$addfrom."\"<".$mail.">\r\n";
$headers.="Content-Type:text/plain;charset=ISO-2022-JP\r\n";
$headers.="Content-Transfer-Encoding:7bit\r\n";


if(mb_send_mail($to,$kenmei,$msg,$headers)){
 $coment = "メール送信<br />完了しました。";
}else{
 $coment = "メール送信<br />出来ませんでした。";
}
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
</head>
<body style="margin: 0 auto">
<link rel="stylesheet" href="css/cont5_mail.css" type="text/css">
<link rel="stylesheet" href="css/common.css" type="text/css">

<article>

	<!-- content5 -->

		<div id="content5" class="cont_1">

			<div class="Content5-Text fade">

				<h2 class="cont_2__heading">CONTACT</h2>

				<p class="mail_msg"><?php print $coment ?></p>

				<div style="margin-top:10%;">
					<a style="margin:0;" class="back_button" href="index.php">TOPへ戻る</a>
				</div>



			</div>
		</div>
</article>
