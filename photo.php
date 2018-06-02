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
$title = 'IF YOU DO DO -Photo-';
//サイトのキーワードを記入(表示には関係ない・任意)
$keywords = 'classの"cont_2"は背景画像を反映させるため';
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
$css = '<link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />';
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
	<title>IF.YOU.DO.DO - PHOTOGRAPHS -</title>
	<!-- css link -->
	<link rel="stylesheet" href="css/reset.css" type="text/css" />
	<link rel="stylesheet" href="css/common.css" type="text/css">
	<link rel="stylesheet" href="css/photo.css" type="text/css">
	<link rel="stylesheet" href="css/justifiedGallery.min.css" type="text/css">
	<link rel="stylesheet" href="css/lightbox.min.css" type="text/css">
	<!-- js link -->
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/swiper.min.js"></script>
	<script type="text/javascript" src="js/jquery.justifiedGallery.min.js"></script>
	<script type="text/javascript" src="js/lightbox.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
	<script type="text/javascript" src="js/jquery.maximage.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body style="margin: 0 auto">

	<div id="contents" class="cont_2 container">

		<div class="container_in">

			<a class="button" href="index.php">←</a>
			<h2 class="container__heading">
				PHOTOGRAPHS
			</h2>
			<div class="container__wrapp">
				<div id="gallery" class="gallery">
					<a class="gallery__link" href="images/gallery/gallery_image01.JPG" data-lightbox="gallery" data-title="Concept Image 1">
						<img class="gallery__link--image" alt="Concept Image 1" src="images/gallery/gallery_image01.JPG"/>
					</a>
					<a class="gallery__link" href="images/gallery/gallery_image02.JPG" data-lightbox="gallery" data-title="Concept Image 2">
						<img class="gallery__link--image" alt="Concept Image 2" src="images/gallery/gallery_image02.JPG"/>
					</a>
					<a class="gallery__link" href="images/gallery/gallery_image03.JPG" data-lightbox="gallery" data-title="Concept Image 3">
						<img class="gallery__link--image" alt="Concept Image 3" src="images/gallery/gallery_image03.JPG"/>
					</a>
					<a class="gallery__link" href="images/gallery/gallery_image04.JPG" data-lightbox="gallery" data-title="Concept Image 4">
						<img class="gallery__link--image" alt="Concept Image 4" src="images/gallery/gallery_image04.JPG"/>
					</a>
					<a class="gallery__link" href="images/gallery/gallery_image05.JPG" data-lightbox="gallery" data-title="Concept Image 5">
						<img class="gallery__link--image" alt="Concept Image 5" src="images/gallery/gallery_image05.JPG"/>
					</a>
					<a class="gallery__link" href="images/gallery/gallery_image06.JPG" data-lightbox="gallery" data-title="Concept Image 6">
						<img class="gallery__link--image" alt="Concept Image 6" src="images/gallery/gallery_image06.JPG"/>
					</a>
					<a class="gallery__link" href="images/gallery/gallery_image07.JPG" data-lightbox="gallery" data-title="Concept Image 7">
						<img class="gallery__link--image" alt="Concept Image 7" src="images/gallery/gallery_image07.JPG"/>
					</a>

					<!-- event_1 images -->
						<a class="gallery__link" href="images/gallery/event_1/event_image01.jpg" data-lightbox="gallery" data-title="Event_1 Image 1">
						<img class="gallery__link--image" alt="Event_1 Image 1" src="images/gallery/event_1/event_image01.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image02.jpg" data-lightbox="gallery" data-title="Event_1 Image 2">
						<img class="gallery__link--image" alt="Event_1 Image 2" src="images/gallery/event_1/event_image02.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image03.jpg" data-lightbox="gallery" data-title="Event_1 Image 3">
						<img class="gallery__link--image" alt="Event_1 Image 3" src="images/gallery/event_1/event_image03.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image04.jpg" data-lightbox="gallery" data-title="Event_1 Image 4">
						<img class="gallery__link--image" alt="Event_1 Image 4" src="images/gallery/event_1/event_image04.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image05.jpg" data-lightbox="gallery" data-title="Event_1 Image 5">
						<img class="gallery__link--image" alt="Event_1 Image 5" src="images/gallery/event_1/event_image05.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image06.jpg" data-lightbox="gallery" data-title="Event_1 Image 6">
						<img class="gallery__link--image" alt="Event_1 Image 6" src="images/gallery/event_1/event_image06.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image07.jpg" data-lightbox="gallery" data-title="Event_1 Image 7">
						<img class="gallery__link--image" alt="Event_1 Image 7" src="images/gallery/event_1/event_image07.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image08.jpg" data-lightbox="gallery" data-title="Event_1 Image 8">
						<img class="gallery__link--image" alt="Event_1 Image 8" src="images/gallery/event_1/event_image08.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image09.jpg" data-lightbox="gallery" data-title="Event_1 Image 9">
						<img class="gallery__link--image" alt="Event_1 Image 9" src="images/gallery/event_1/event_image09.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image10.jpg" data-lightbox="gallery" data-title="Event_1 Image 10">
						<img class="gallery__link--image" alt="Event_1 Image 10" src="images/gallery/event_1/event_image10.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image11.jpg" data-lightbox="gallery" data-title="Event_1 Image 11">
						<img class="gallery__link--image" alt="Event_1 Image 11" src="images/gallery/event_1/event_image11.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image12.jpg" data-lightbox="gallery" data-title="Event_1 Image 12">
						<img class="gallery__link--image" alt="Event_1 Image 12" src="images/gallery/event_1/event_image12.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image13.jpg" data-lightbox="gallery" data-title="Event_1 Image 13">
						<img class="gallery__link--image" alt="Event_1 Image 13" src="images/gallery/event_1/event_image13.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image14.jpg" data-lightbox="gallery" data-title="Event_1 Image 14">
						<img class="gallery__link--image" alt="Event_1 Image 14" src="images/gallery/event_1/event_image14.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image15.jpg" data-lightbox="gallery" data-title="Event_1 Image 15">
						<img class="gallery__link--image" alt="Event_1 Image 15" src="images/gallery/event_1/event_image15.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image16.jpg" data-lightbox="gallery" data-title="Event_1 Image 16">
						<img class="gallery__link--image" alt="Event_1 Image 16" src="images/gallery/event_1/event_image16.jpg"/>
					</a>
					<a class="gallery__link" href="images/gallery/event_1/event_image17.jpg" data-lightbox="gallery" data-title="Event_1 Image 17">
						<img class="gallery__link--image" alt="Event_1 Image 17" src="images/gallery/event_1/event_image17.jpg"/>
					</a>
					<!-- other images... -->
				</div>
			</div>

		</div>

	</div>
	<!--/#contents-->
</body>
</html>
