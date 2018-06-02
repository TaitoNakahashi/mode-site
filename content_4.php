<?php
//ヘッダー・フッター・キャプションの内容を入れる場所(public.php)



//////////////////////////////////////////
//head内の文章入力場所　開始
//////////////////////////////////////////


//ファイルの回想を記入
$level = '';
//使用するcssを記入
$css = '<link rel="stylesheet" href="'.$level.'css/cont4.css" type="text/css" />';
//使用するjavascript(jQuery)を記入
$js = '';
//サイトのタイトルを記入
$title = 'IF.YOU.DO.DO';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = '';
//サイトの説明文を記入(表示には関係ない・任意)
$description = '';
//サイトの製作者を記入(表示には関係ない・任意)
$author = 'IW31 : Seki Daichi';

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


//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////

function html_cont4(){

echo'

	<!-- content4 -->

		<div id="content4" class="cont_2 container">

			<div class="container-in">

				<h2 class="cont_2__heading">GALLARY</h2>

				<div class="content-box">
					<div class="link-button">
						<a href="clothes.php">
							<img class="clothes" src="images/gallery/code_top.jpg" alt="" />
							<p>clothes</p>
						</a>
					</div>

					<div class="link-button">
						<a href="photo.php">
							<img class="photo" src="images/gallery/gallery_top.jpg" alt="" />
							<p>photo</p>
						</a>
					</div>
				</div>



			</div>

		</div>

';}

?>
