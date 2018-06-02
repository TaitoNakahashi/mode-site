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
	<title>IF.YOU.DO.DO - CLOTHES -</title>
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/common.css" type="text/css">
	<link rel="stylesheet" href="css/clothes.css" type="text/css">
</head>
<body style="margin: 0 auto">


<article>

	<div id="contents" class="cont_2">

		<a class="button" href="index.php">←</a>

		<h2 class="heading_2">Clothes</h2>

		<h3 class="heading_3">Tops</h3>

		<span><a href="#open01"><img src="images/gallery/clothes/icon/01_icon.jpg" alt="" /></a></span>
		<span><a href="#open02"><img src="images/gallery/clothes/icon/02_icon.jpg" alt="" /></a></span>
		<span><a href="#open03"><img src="images/gallery/clothes/icon/03_icon.jpg" alt="" /></a></span>
		<span><a href="#open04"><img src="images/gallery/clothes/icon/04_icon.jpg" alt="" /></a></span>


		<h3 class="heading_3">Bottoms</h3>

		<span><a href="#open05"><img src="images/gallery/clothes/icon/05_icon.jpg" alt="" /></a></span>
		<span><a href="#open06"><img src="images/gallery/clothes/icon/06_icon.jpg" alt="" /></a></span>
		<span><a href="#open07"><img src="images/gallery/clothes/icon/07_icon.jpg" alt="" /></a></span>
		<span><a href="#open08"><img src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a></span>

		<h3 class="heading_3">Coat  One-piece</h3>

		<span><a href="#open09"><img src="images/gallery/clothes/icon/09_icon.jpg" alt="" /></a></span>
		<span><a href="#open10"><img src="images/gallery/clothes/icon/10_icon.jpg" alt="" /></a></span>
		<span><a href="#open11"><img src="images/gallery/clothes/icon/11_icon.jpg" alt="" /></a></span>



		<div id="modal">

		<!--#open01-->
			<div id="open01">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div class="float-content"> <!-- float部分　-->
						<div id="slideshow" class="slideshow">
							<div>
								<div><a href="#1"><img class="main" src="images/gallery/clothes/01/01_1.jpg" alt="" /></a></div>
								<div><a href="#2"><img class="main" src="images/gallery/clothes/01/01_2.jpg" alt="" /></a></div>
								<div><a href="#3"><img class="main" src="images/gallery/clothes/01/01_3.jpg" alt="" /></a></div>
								<div><a href="#4"><img class="main" src="images/gallery/clothes/01/01_4.jpg" alt="" /></a></div>
								<div><a href="#5"><img class="main" src="images/gallery/clothes/01/01_5.jpg" alt="" /></a></div>
								<div><a href="#6"><img class="main" src="images/gallery/clothes/01/01_6.jpg" alt="" /></a></div>
								<div><a href="#7"><img class="main" src="images/gallery/clothes/01/01_7.jpg" alt="" /></a></div>
								<div><a href="#8"><img class="main" src="images/gallery/clothes/01/01_8.jpg" alt="" /></a></div>
								<div><a href="#9"><img class="main" src="images/gallery/clothes/01/01_9.jpg" alt="" /></a></div>
								<div><a href="#10"><img class="main" src="images/gallery/clothes/01/01_10.jpg" alt="" /></a></div>
								<div><a href="#11"><img class="main" src="images/gallery/clothes/01/01_11.jpg" alt="" /></a></div>
								<div class="info-image"><a href="#12"><img class="main" src="images/gallery/clothes/01/01_12.jpg" alt="" /></a></div>
							</div>

							<ul>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_1.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_2.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_3.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_4.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_5.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_6.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_7.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_8.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_9.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_10.jpg" width="50" height="70" alt="" /></a></li>
								<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_11.jpg" width="50" height="70" alt="" /></a></li>
								<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/01/01_12.jpg" width="50" height="70" alt="" /></a></li>
							</ul>
						</div><!--/#slideshow-->

						<div id="product-info">
							<img class="main" src="images/gallery/clothes/01/01_12.jpg" alt="" />
						</div>
					</div><!--// float部分 -->

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open05"><img class="code" src="images/gallery/clothes/icon/05_icon.jpg" alt="" /></a>
						<a class="code_bottom" href="#open06"><img class="code" src="images/gallery/clothes/icon/06_icon.jpg" alt="" /></a>
						<a class="code_bottom" href="#open07"><img class="code" src="images/gallery/clothes/icon/07_icon.jpg" alt="" /></a>
					</div>
						<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open01-->

		<!--#open02-->
			<div id="open02">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">

					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/02/02_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/02/02_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/02/02_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/02/02_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/02/02_5.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#6"><img class="main" src="images/gallery/clothes/02/02_6.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/02/02_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/02/02_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/02/02_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/02/02_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/02/02_5.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/02/02_6.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/02/02_6.jpg" alt="" />
					</div>

					<div class="code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open05"><img class="code" src="images/gallery/clothes/icon/05_icon.jpg" alt="" /></a>
					</div>
						<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open02-->

		<!--#open03-->
			<div id="open03">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/03/03_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/03/03_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/03/03_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/03/03_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/03/03_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/03/03_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/03/03_7.jpg" alt="" /></a></div>
							<div><a href="#8"><img class="main" src="images/gallery/clothes/03/03_8.jpg" alt="" /></a></div>
							<div><a href="#9"><img class="main" src="images/gallery/clothes/03/03_9.jpg" alt="" /></a></div>
							<div><a href="#10"><img class="main" src="images/gallery/clothes/03/03_10.jpg" alt="" /></a></div>
							<div><a href="#11"><img class="main" src="images/gallery/clothes/03/03_11.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#12"><img class="main" src="images/gallery/clothes/03/03_12.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_7.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_8.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_9.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_10.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_11.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/03/03_12.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/03/03_12.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open03-->

		<!--#open04-->
			<div id="open04">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/04/04_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/04/04_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/04/04_3.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#4"><img class="main" src="images/gallery/clothes/04/04_4.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/04/04_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/04/04_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/04/04_3.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/04/04_4.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/04/04_4.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open04-->

		<!--#open05-->
			<div id="open05">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/05/05_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/05/05_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/05/05_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/05/05_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/05/05_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/05/05_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/05/05_7.jpg" alt="" /></a></div>
							<div><a href="#8"><img class="main" src="images/gallery/clothes/05/05_8.jpg" alt="" /></a></div>
							<div><a href="#9"><img class="main" src="images/gallery/clothes/05/05_9.jpg" alt="" /></a></div>
							<div><a href="#10"><img class="main" src="images/gallery/clothes/05/05_10.jpg" alt="" /></a></div>
							<div><a href="#11"><img class="main" src="images/gallery/clothes/05/05_11.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#12"><img class="main" src="images/gallery/clothes/05/05_12.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_7.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_8.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_9.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_10.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_11.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/05/05_12.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/05/05_12.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open05-->

		<!--#open06-->
			<div id="open06">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/06/06_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/06/06_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/06/06_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/06/06_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/06/06_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/06/06_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/06/06_7.jpg" alt="" /></a></div>
							<div><a href="#8"><img class="main" src="images/gallery/clothes/06/06_8.jpg" alt="" /></a></div>
							<div><a href="#9"><img class="main" src="images/gallery/clothes/06/06_9.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#10"><img class="main" src="images/gallery/clothes/06/06_10.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_7.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_8.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_9.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/06/06_10.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/06/06_10.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open06-->

		<!--#open07-->
			<div id="open07">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/07/07_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/07/07_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/07/07_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/07/07_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/07/07_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/07/07_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/07/07_7.jpg" alt="" /></a></div>
							<div><a href="#8"><img class="main" src="images/gallery/clothes/07/07_8.jpg" alt="" /></a></div>
							<div><a href="#9"><img class="main" src="images/gallery/clothes/07/07_9.jpg" alt="" /></a></div>
							<div><a href="#10"><img class="main" src="images/gallery/clothes/07/07_10.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#11"><img class="main" src="images/gallery/clothes/07/07_11.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_7.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_8.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_9.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_10.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/07/07_11.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/07/07_11.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open01"><img class="code" src="images/gallery/clothes/icon/01_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open07-->

		<!--#open08-->
			<div id="open08">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/08/08_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/08/08_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/08/08_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/08/08_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/08/08_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/08/08_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/08/08_7.jpg" alt="" /></a></div>
							<div><a href="#8"><img class="main" src="images/gallery/clothes/08/08_8.jpg" alt="" /></a></div>
							<div><a href="#9"><img class="main" src="images/gallery/clothes/08/08_9.jpg" alt="" /></a></div>
							<div><a href="#10"><img class="main" src="images/gallery/clothes/08/08_10.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#11"><img class="main" src="images/gallery/clothes/08/08_11.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_7.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_8.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_9.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_10.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/08/08_11.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/08/08_11.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open03"><img class="code" src="images/gallery/clothes/icon/03_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open08-->

		<!--#open09-->
			<div id="open09">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/09/09_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/09/09_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/09/09_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/09/09_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/09/09_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/09/09_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/09/09_7.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#8"><img class="main" src="images/gallery/clothes/09/09_8.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_7.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/09/09_8.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/09/09_8.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open09-->

		<!--#open10-->
			<div id="open10">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow">
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/10/10_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/10/10_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/10/10_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/10/10_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/10/10_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/10/10_6.jpg" alt="" /></a></div>
							<div><a href="#7"><img class="main" src="images/gallery/clothes/10/10_7.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#8"><img class="main" src="images/gallery/clothes/10/10_8.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_6.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_7.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/10/10_8.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/10/10_8.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open10-->

		<!--#open11-->
			<div id="open11">
				<a href="#" class="close_overlay">×</a>

				<div class="modal_window">
					<div id="slideshow" class="slideshow" >
						<div>
							<div><a href="#1"><img class="main" src="images/gallery/clothes/11/11_1.jpg" alt="" /></a></div>
							<div><a href="#2"><img class="main" src="images/gallery/clothes/11/11_2.jpg" alt="" /></a></div>
							<div><a href="#3"><img class="main" src="images/gallery/clothes/11/11_3.jpg" alt="" /></a></div>
							<div><a href="#4"><img class="main" src="images/gallery/clothes/11/11_4.jpg" alt="" /></a></div>
							<div><a href="#5"><img class="main" src="images/gallery/clothes/11/11_5.jpg" alt="" /></a></div>
							<div><a href="#6"><img class="main" src="images/gallery/clothes/11/11_6.jpg" alt="" /></a></div>
							<div class="info-image"><a href="#7"><img class="main" src="images/gallery/clothes/11/11_7.jpg" alt="" /></a></div>
						</div>

						<ul>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_1.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_2.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_3.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_4.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_5.jpg" width="50" height="70" alt="" /></a></li>
							<li><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_6.jpg" width="50" height="70" alt="" /></a></li>
							<li class="info-image"><a href="javascript:void(0);"><img class="main" src="images/gallery/clothes/11/11_7.jpg" width="50" height="70" alt="" /></a></li>
						</ul>
					</div><!--/#slideshow-->

					<div id="product-info">
						<img class="main" src="images/gallery/clothes/11/11_7.jpg" alt="" />
					</div>

					<div class=" code-cloth-btn">
						<h4 class="">Code cloth</h4>
						<a class="code_bottom" href="#open08"><img class="code" src="images/gallery/clothes/icon/08_icon.jpg" alt="" /></a>
					</div>
					<a class="close" href="#"><img src="images/close_image.png" alt="" /></a>
				</div><!--/.modal_window-->
			</div><!--/#open11-->


		</div><!--/#modal-->


	</div><!--/#contents-->
</article>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js"></script>
<script type="text/javascript">
$(function (){
    var setId = '#slideshow';
    var fadeTime = 1000;
    var delayTime = 5000;

    $(setId + ' div div').each(function(i){
        $(this).attr('id','view' + (i + 1).toString());
        $(setId + ' div div').css({zIndex:'98',opacity:'0'});
        $(setId + ' div div:first').css({zIndex:'99'}).stop().animate({opacity:'1'},fadeTime);
    });

    $(setId + ' ul li').click(function(){
        clearInterval(setTimer);

        var connectCont = $(setId + ' ul li').index(this);
        var showCont = connectCont+1;

        $(setId + ' div div#view' + (showCont)).siblings().stop().animate({opacity:'0'},fadeTime,function(){$(this).css({zIndex:'98'})});
        $(setId + ' div div#view' + (showCont)).stop().animate({opacity:'1'},fadeTime,function(){$(this).css({zIndex:'99'})});

        $(this).addClass('active');
        $(this).siblings().removeClass('active');

        timer();

    });

    $(setId + ' ul li:not(.active)').hover(function(){
        $(this).stop().animate({opacity:'1'},200);
    },function(){
        $(this).stop().animate({opacity:'0.5'},200);
    });

    $(setId + ' ul li').css({opacity:'0.5'});
    $(setId + ' ul li:first').addClass('active');

    timer();

    function timer() {
        setTimer = setInterval(function(){
            $('li.active').each(function(){
                var listLengh = $(setId + ' ul li').length;
                var listIndex = $(setId + ' ul li').index(this);
                var listCount = listIndex+1;

                if(listLengh == listCount){
                    $(setId + ' ul li:first').click()
                } else {
                    $(this).next('li').click();
                };
            });
        },delayTime);
    };
});
</script>
