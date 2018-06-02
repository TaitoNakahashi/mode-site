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


//////////////////////////////////////////
//head内の文章入力場所　終了
/////////////////////////////////////////


function html_cont1(){

echo'


	<!-- content1 -->

	<div id="content1" class="cont_1">

		<div id="maximage">
			<img src="images/01.png" alt=""  />
			<img src="images/bg_2.jpg" alt=""  />
			<img src="images/bg_3.jpg" alt=""  />
		</div>

		<div class="top-title">
			<h1><img src="images/top-title.png" alt="" /></h1>
		</div>

		<a class="video_link" href="#video_event1"></a>
		<video class="video_link_event" id="video_event1" width="0" height="0" onclick="this.play()">
			<source src="images/movie/event1/DJI_0102.mp4" type="video/mp4">
			<p>ご利用のブラウザはvideo タグによる動画の再生に対応していません。</p>
		</video>


		<div class="section-news">

			<div id="news1">
				<h2>Topics</h2>
				<ul>
					<li>
						<p class="date">2017.4.20</p>
						<p class="text">当サイトをリニューアルしました！ GALLARYページにCLOTHESページとPHOTOGRAPHSページを追加しました！</p>
					</li>
					<li>
						<p class="date">2017.3.10</p>
						<p class="text">3/12 一宮「Re-TAiL」にて　13:30〜15:00ファッションショー</p>
					</li>
					<li>
						<p class="date">2017.3.10</p>
						<p class="text">3/20 大須商店街「招き猫広場」にて　14:00〜14:30ファッションショー</p>
					</li>
					<li>
						<p class="date">2017.3.10</p>
						<p class="text">3/25 名古屋モード学園「体験入学　４階マルチホール」にて　時間は未定</p>
					</li>
				</ul>
			</div>

			<div id="news2">
				<h2>Topics</h2>
				<div class="swiper-container">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<!-- Slide-01 -->
							<p class="date">2017.4.20</p>
							<p class="text">当サイトをリニューアルしました！ GALLARYページにCLOTHESページとPHOTOGRAPHSページを追加しました！</p>
						</div>

						<div class="swiper-slide">
							<!-- Slide-02 -->
							<p class="date">2017.3.10</p>
							<p class="text">3/12 一宮「Re-TAiL」にて　13:30〜15:00ファッションショー</p>
						</div>

						<div class="swiper-slide">
							<!-- Slide-03 -->
							<p class="date">2017.3.10</p>
							<p class="text">3/20 大須商店街「招き猫広場」にて　14:00〜14:30ファッションショー</p>
						</div>

						<div class="swiper-slide">
							<!-- Slide-04 -->
							<p class="date">2017.3.10</p>
							<p class="text">3/25 名古屋モード学園「体験入学　４階マルチホール」にて　時間は未定</p>
						</div>

					</div>

					<div class="swiper-pagination swiper-pagination-white swiper-pagination-clickable"></div>
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>
					<div class="swiper-scrollbar"></div>

				</div>
			</div>

		</div>

	</div>


';}

?>
