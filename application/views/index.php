<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Wedding of Dian & Fataa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The Wedding of Dian and Fataa" />
	<meta name="keywords" content="wedding, wedding invitation, invitation, the wedding" />
	<meta name="author" content="Dian & Fataa" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:type" content="website">
	<meta property="og:title" content="The Wedding of Dian and Fataa" />
	<meta property="og:image" content="images/readme/df-w.png" />
	<meta property="og:url" content="<?= base_url(); ?>" />
	<meta property="og:site_name" content="The Wedding of Dian and Fataa" />
	<meta property="og:description" content="The Wedding of Dian and Fataa. Open source wedding invitation" />

	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@coldalpha" />
	<meta name="twitter:creator" content="@coldalpha" />
	<meta name="twitter:title" content="The Wedding of Dian and Fataa" />
	<meta name="twitter:description" content="Open Source Wedding Invitation. The Wedding of Dian and Fataa" />
	<meta name="twitter:image" content="images/logoAwal.png" />
	<meta name="twitter:url" content="<?= base_url(); ?>" />

	<link rel="icon" href="images/readme/df-w.png">

	<!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

	<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Estonia" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!--<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.2/css/lightgallery-bundle.min.css" />-->
	<link type="text/css" rel="stylesheet" href="lib/lightgallery.js/dist/css/lightgallery-bundle.min.css" />
	<link type="text/css" rel="stylesheet" href="lib/lightgallery.js/dist/css/lg-thumbnail.css" />
	<link type="text/css" rel="stylesheet" href="lib/lightgallery.js/dist/css/lg-autoplay.css" />
	<link type="text/css" rel="stylesheet" href="lib/lightgallery.js/dist/css/lg-fullscreen.css" />
	<link type="text/css" rel="stylesheet" href="lib/lightgallery.js/dist/css/lg-transitions.css" />

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<!--<div class="container">-->
	<div id="page">
		<!--Floating button-->
		<div id="floating-button" class="float">
			<div class="control-center open">
				<div class="audio-play">
					<div data-video="_KoPS4sVy28" data-autoplay="0" data-loop="1" id="youtube-audio1"></div>
				</div>
				<ul class="right-sidebar">
					<!--gallery-->
					<li onclick="scrollToElement('fh5co-health-protocol')" style="background-image: url('data:image/png;base64,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')"></li>
					<!--chat-->
					<li onclick="scrollToElement('fh5co-testimonial')" style="background-image: url('data:image/png;base64,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')"></li>
				</ul>
				<!--calendar-->
				<div onclick="scrollToElement('fh5co-event')" class="option-btn open"></div>
				<ul class="left-sidebar">
					<!--countdown-->
					<li onclick="scrollToElement('fh5co-header')" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAQAAAD9CzEMAAAAIGNIUk0AAHomAACAhAAA+gAAAIDoAAB1MAAA6mAAADqYAAAXcJy6UTwAAAACYktHRAD/h4/MvwAAAAlwSFlzAAAHYgAAB2IBOHqZ2wAAAAd0SU1FB+cKFgsYLqrP6w8AAALXelRYdFJhdyBwcm9maWxlIHR5cGUgeG1wAABIx6VWSbKcMAzd6xQ5gi3ZkjkOwfQuVVnm+HkyM99Nun6aasCg4elpMPTn12/6gV/kEkkmKzJa0WpBq2ZLGjn4WiedTfydVDaNmvSlrFnG5fku/WKTmcLI4XrANENJZcycUtKb2eWdmy6WcAQZYepF1n48G6R41hcEjV8SZfADd0EYZ8a5LkZwFRtgFmiscHUHLOSwwviEC6CyiQrWgwWoDwhxBs71PYJmBSLE6UDZvho7hwQl+RoQDGcYnHimLRgXxDlDMTuNDh2QESTPshLaw90cjJYIcJMr98X28KJOQP4gQwA96bCF0VZRZzUPo1EJhlRBa3ZTjitxkxH9ySEj1AYlExYC+ryKgItDqk4l/gI2QKKHiafIUlMYYGLCesZ1eTNBxkA24FUAzDLxa88DMPbDOGTuwdJVbKPumbmTub006Fwb/1NRdJTUpxWVYqskGFM+Kou20mqFDgoPITe8+pxBPWiHFFp3r65wri66BnHx5oRC7bnCkPNs8R/dv1bYukKBRMQNxZwMHCEVCCxz4631GgN4ftcCN4xOdHYCcEby0faYDpgblTAwUEk+Jjytz2pPjmhVyQbuUb8Qd3xSBGlGTRVgrQhsaKirJEhYuyvCGuGpQr9IIYhgKRHKLN5B2kF2cvMOFZ3EMfwWYXGj/lecBwSfxJ0N4khDxxE06dnPIZyTl6y38p6z+cwrPQk+99m1takvtJVZ31SvbOnz/n5ub/rOjtFr7z20yyYY+pvg1tjbnns0swVqW97SzfJ+r1hN+wjxmVB870HWohT23CUBIowDHN4omNfIW2nTuLpfPImtF6PfYVbXpK1hIorYeTyZp8P+/5F+m0ffJ53uKK4fNL5NfUY6rayDGQu9EXpDvJg+DxgE713hhibsnuL7q+lK4lvxRbrngj6h8ykJy8fYm5ntmO6fgxD9C3OeTeM+NpGRAAADJElEQVRYw+2XW4iMYRzGn29nZk+xJnZCuBARJaItK8mSQ+FilRQppOXChtwISQ4lCklKbtAWKdy4cCapUVjlLOfd2nbTtqzVnsz+XMzszLzvfLPzzawbh+e7+b7/+/8/z/993u/9DtKfDsd7KjmVecyMk/vlqDtRSkYyTwIxmqBWaK4CCuuMGrz260EgRj9Je7VEeZKk+9qhe5KkUlVqqBB6rJuKZOV5lBwh/CznNclooJoixP54pIkZWJZ5pQ9xkFZsdHKacVyOX/ewMisBeo8yrpMOtbyJn0eyEoiR57OWj3hDGgF/H8s6Qtu1RkXZ2ZpRIN7DLO3XTGuoVmH91FSVK5CjXsyaYqppsCxo5QDDEGIQW2h0sWhVtDrzso7mNJ1W+SuW4VBCGeWEEBWEUyRuMqWXIz29w0IepfR2iYmIudyihW88ZDkOIzhJu5X5jlUEXCVi9CVs44tV1MxOBlLEVpqS7DrIEAJUUWdlt3EkZqQL/QQu8NMqeMIixBhq6LZGrjENMZ1bKVbdodywCiF8VPLcSuyihjGIRTxxvfM/sBofIQ7TZo3Us55CU2A1X62kRrZQyAB20Jx2c/3gGENxWMlba6SDXfgSAkEeWAlhKhATuJhimo27zEBM5go9RvwzYxMCpTw11E8yErGUF3hBPRsIEGSv4UIjExMCDnviA3VUESDIvhTT0qODU4xCVPIsHjtLYfIalFJDG+3cYLrrhDMjzBzEeM7znXauM9ZcZFFCBfMZjMOKlCXzhkY2U0Axs1lAyNgLJA6HTS4vF6/o4lD09ky/mxfQkjM9QCfrTOo8S2Wegjk+iKPI12LzUW4L+LMgc0fA/LDIy5XHK7x3TO8XXazOY2teBd7rqD4liYW0UdN+p8AJHbcirTqn/MyF3iYaUZ0kObFDktRkWNZPAaL0vXDMy98g0A/8F/gHBX70m/G7In0J3OunRI9u9y1wRydcdqjP9ffR5yJwThfMgD+5AqlLu/VSSzXcKI+oxcWKWhUnvbx61KyrOqOv5iY3OotnF6jImlubuhwz06+BMkMdak8lTZl6+h8IJ+usvwO/AON4+JHEcsjIAAAAPHRFWHRDb21tZW50AHhyOmQ6REFGeDkzOE5EazA6NDQsajo0NDk5NTAyODI1NjczMzEzNTgwLHQ6MjMxMDIyMTF5eI3+AAAAJXRFWHRkYXRlOmNyZWF0ZQAyMDIzLTEwLTIyVDExOjI0OjM4KzAwOjAwr2EtnAAAACV0RVh0ZGF0ZTptb2RpZnkAMjAyMy0xMC0yMlQxMToyNDozOCswMDowMN48lSAAAAAodEVYdGRhdGU6dGltZXN0YW1wADIwMjMtMTAtMjJUMTE6MjQ6NDYrMDA6MDDT08a7AAAALXRFWHRwZGY6QXV0aG9yADE4LjI0MC4wMDEwIE11aGFtbWFkIEF1cmEgQWwtRmF0YWGbqjkrAAAAFXRFWHR4bXA6Q3JlYXRvclRvb2wAQ2FudmHqxxKxAAAAAElFTkSuQmCC')"></li>
					<!--couple-->
					<li onclick="scrollToElement('fh5co-couple')" style="background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAAB7UlEQVRIie2VPUiVURjH/+eqSSJN4tDWRRAH5xD8QDCwgqAWhwwSaarBwUGaHFwcBAchGqNNdDaKoKAkBEvUURAVRInw82Jx0Z/De64+Xu5773nv0CD3P533eZ//+T3nW6qoomstwAEPgXfAKnAA7AE/gWGgJsbXAIwCi8ARkAF+AS+AqlLQJmCB4voMDAL1xvfUFxin98WgLX5kIdoHbnvfK+AswJMBvgGPLbQGWAmEAgx7XzuQTeDLaSgHfpLA9Bu45X0/yoAC/AXSKUn9AfvuTNIXSb3OuUOgQ9LdAJ8kfZDUJenYf9dKGqiW1JyXuCbpq6RlSRuStiStO+f2TM6DQOiSpOfOuV1gStKIj3eKyx2ZJdqxrlRvwHzMNP4DlomOYx/m+AEdJm9H5mM8cBQCNvKA00AbcKOIp9GuswW3JgBnjO9toKfWVmrBdQnAVkkKvlBKUsbHY6ephNbKMaUkffftj0C6jD5uhiRhrtlcoAXY9jPwJrATq+5AT+eVNfbBZqLjdAq0JwTPBOQ7YM54Nu3PMR/8A9wrYH4UAwZ4VgSaBmYtFOi1CSlgxiTMA5PAhG9jcrfywFngJQGXT1x1VcBrosc8X/sm734BOERPX9AdXrBCoh3YI+mOogdiXdIn59xJWSOqqKL/qXMXI9MKbss7gAAAAABJRU5ErkJggg==)"></li>
				</ul>
			</div>
		</div>

		<div id="overlay">
			<div class="content">
				<img class="flower-3-top" src="images/background/flowers/top-2.svg">
				<img class="flower-4-bottom" src="images/background/flowers/bottom-2.svg">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box fadeInUp animated-fast">
							<img src="images/logoAwal.png" width="300" height="160" alt="" class="couple-main">
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
							<h1>Dian & Fataa</h1>
							<p style="margin-bottom: 0; color: #bf9b73 ">Kepada Bapak/Ibu/Saudara/i</p>
							<p>
							<h2 id="namaPlaceholder"><?= $nama; ?></h2>
							</p>
							<p style="color: #bf9b73">Tanpa mengurangi rasa hormat, Kami mengundang Anda <br> Untuk hadir di Acara Pernikahan Kami</p>
							<button class="btn btn-primary" id="open-invitation" style="display: none;">Terima Undangan</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-header">
			<div class="container">
				<img class="flower-1" style="position: absolute; right: 0; top: 0" src="images/background/flowers/top-right-1.svg">
				<img class="flower-1" style="position: absolute; left: -25px; top:0" src="images/background/flowers/top-left-1.svg">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>The Wedding Of</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<img src="images/logoAwal.png" alt="" class="couple-main">
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h1>Dian & Fataa</h1>
						<p style="color: #bf9b73">Kami berharap Anda menjadi bagian dari hari istimewa kami!</p>
						<div class="simply-countdown simply-countdown-wedding"></div>
						<br>
						<p>
							<a href="https://calendar.google.com/calendar/event?action=TEMPLATE&tmeid=NjI5OTl0dTcwcDRwa3ExcGlqOWxlZjNsaHQgdGkxOGZhdGFhLjAwMTBAbQ&tmsrc=ti18fataa.0010%40gmail.com" target="_blank" class="btn btn-primary btn-sm">Save the date</a><br>
							<i style="font-size: 15px">*Klik tombol ini untuk menyimpan tanggal pada google kalender</i>
						</p>
					</div>
					<br><br>
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box" align="center">
						“Dan segala sesuatu Kami ciptakan
						<br>
						berpasang-pasangan supaya kamu
						<br>
						mengingat kebesaran Allah”
						<br>
						<b>- Q.S Adz-Dzariyat : 49 - </b>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-couple" style="background: url('images/background/repeat-background/so-white.png'); background-repeat:repeat ">
			<div class="container">
				<img class="flower-2-right" style="position: absolute;" src="images/background/flowers/right-1.svg">
				<img class="flower-2-left" style="position: absolute;" src="images/background/flowers/left-1.svg">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<img src="images/bismillah.svg" alt="" style="margin-bottom: 20px">
						<h2>Assalamu'alaikum Wr. Wb.</h2>
						<p style="color: #bf9b73">Tanpa mengurangi rasa hormat. Kami mengundang Bapak/Ibu/Saudara/i serta Kerabat sekalian untuk menghadiri acara pernikahan kami:</p>
					</div>
				</div>
				<div class="couple-wrap animate-box">
					<div class="couple-half">
						<div class="groom">
							<img src="images/ce.png" alt="groom" class="img-responsive">
						</div>
						<div class="desc-groom">
							<h3>Dian Noviani, Amd.Kep</h3>
							<p><span style="color: #bf9b73">Putri dari</span><br>
								<span class="parents-font">Bapak Rasidan</span>
								<br>
								<span class="parents-font">Ibu Sunarsih</span>
							</p>
							<div id="social-media-dian">
								<ul class="fh5co-social-icons">
									<li><a target="_blank" href="https://www.instagram.com/diaann.o/"><i class="icon-instagram-with-circle"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
					<p class="heart text-center"><i class="icon-heart2"></i></p>
					<div class="couple-half">
						<div class="bride">
							<img src="images/co.png" alt="groom" class="img-responsive">
						</div>
						<div class="desc-bride">
							<h3>M. Aura Al - Fataa, S.Kom</h3>
							<p><span style="color: #bf9b73">Putra dari</span><br>
								<span class="parents-font">Bapak Abdul Mukti</span>
								<br>
								<span class="parents-font">Ibu Nurul Hidayah</span>
							</p>
							<div id="social-media-molid">
								<ul class="fh5co-social-icons">
									<li><a target="_blank" href="https://github.com/coldalpha"><i class="icon-github-with-circle"></i></a></li>
									<li><a target="_blank" href="https://www.instagram.com/cold.alpha/"><i class="icon-instagram-with-circle"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-event" class="fh5co-bg" style="border-top: 1px solid #f2f2f2">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading animate-box">
						<h2>Save The Date</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="col-md-6 col-sm-6 text-center">
							<div class="event-wrap animate-box">
								<h3 style="font-family: 'Oswald', Arial, serif;">Akad Nikah</h3>
								<div class="event-col">
									<i class="icon-clock"></i>
									<span>07:00</span>
									<span>Selesai</span>
								</div>
								<div class="event-col">
									<i class="icon-calendar"></i>
									<span>Jumat</span>
									<span class="tanggal">03 November 2023</span>
								</div>
								<p style="font-family: 'Courgette', Arial, serif">Alamat : Kediaman mempelai putri, Tirto, Pekalongan </p>

								<a href="https://maps.app.goo.gl/VuS8JKyBntrZLH4x5" target="_blank" class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 text-center">
							<div class="event-wrap animate-box">
								<h3 style="font-family: 'Oswald', Arial, serif;">Walimah</h3>
								<div class="event-col">
									<i class="icon-clock"></i>
									<span>13:00</span>
									<span>15:00</span>
								</div>
								<div class="event-col">
									<i class="icon-calendar"></i>
									<span>Jum'at</span>
									<span class="tanggal">03 November 2023</span>
								</div>
								<p style="font-family: 'Courgette', Arial, serif">Alamat : GOR UNIKAL PEKALONGAN</p>

								<a href="https://maps.app.goo.gl/DHN6tiqbpJ8rbYf48" target="_blank" class="btn btn-primary">Penunjuk Lokasi <i class="icon-map2"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-gallery" style="background: url('images/background/repeat-background/so-white.png'); background-repeat:repeat ">
			<img class="flower-3-top" src="images/background/flowers/top-2.svg">
			<img class="flower-4-bottom" src="images/background/flowers/bottom-2.svg">
			<div class="container">
				<br><br>
				<div class="ayat-content animate-box" align="center">
					Dan di antara tanda-tanda kekuasaan-Nya lah Dia menciptakan untukmu istri-istri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.
					<br>
					<b>- Q.S Ar Rum : 21 -</b>
				</div>
			</div>
		</div>

		<div id="fh5co-health-protocol">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Adab Walimah</h2>
						<hr>
					</div>

					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="row">
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 10px" height="90px" width="90px" src="images/health-protocol/adabPakaian.png" alt="Adab makan minum" />
									</div>
									<div class="description">
										<h3>Pakaian</h3>
										<p>Berpakai tertutup dan sopan</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 15px" height="100px" width="100px" src="images/health-protocol/eating.png" alt="Jaga jarak" />
									</div>
									<div class="description">
										<h3>Makan & Minum</h3>
										<p>Menjaga adab makan dan minum</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 15px" height="100px" width="100px" src="images/health-protocol/adabBerbicara.png" alt="Jaga jarak" />
									</div>
									<div class="description">
										<h3>Menjaga Lisan</h3>
										<p>Hendaklah membicarakan hal-hal yang baik bukan hal buruk (ghibah)</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 10px" height="90px" width="90px" src="images/health-protocol/rug.png" alt="Sholat" />
									</div>
									<div class="description">
										<h3>Sholat</h3>
										<p>Tidak melupakan waktu sholat</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 15px" height="100px" width="100px" src="images/health-protocol/adabDoa.png" alt="Jaga jarak" />
									</div>
									<div class="description">
										<h3>Berdoa</h3>
										<p>Memberikan doa kepada pengantin</p>
									</div>
								</div>
							</div>
						</div>

						<p style="color: #bf9b73">Para tamu undangan yang hadir berkenan menerapkan protokol kesehatan :</p>
						<div class="row">
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 10px" height="90px" width="90px" src="images/health-protocol/distance.png" alt="Jaga jarak" />
									</div>
									<div class="description">
										<h3>Jaga Jarak</h3>
										<p>Jaga jarak dengan orang lain</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 10px" height="90px" width="90px" src="images/health-protocol/washing-hands.png" alt="Cuci Tangan" />
									</div>
									<div class="description">
										<h3>Cuci Tangan</h3>
										<p>Cuci tangan yang bersih</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-6">
								<div class="item-protocol">
									<div class="icon">
										<img style="padding: 10px" height="90px" width="90px" src="images/health-protocol/shaking-hands.png" alt="Tidak Bersalaman" />
									</div>
									<div class="description">
										<h3>Tidak Bersalaman</h3>
										<p>Diusahakan untuk tidak bersalaman</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-testimonial" style="background: url('images/background/repeat-background/so-white.png'); background-repeat:repeat; border-top: 1px solid #f2f2f2">
			<img height="400" class="flower-bukutamu-right" style="right: 0;top: 0;position: absolute;" src="images/background/flowers/top-right-3.svg">
			<img height="400" class="flower-bukutamu-left" style="position: absolute; left: 0; bottom: 0" src="images/background/flowers/bottom-left-3.svg">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Buku Tamu & Ucapan</h2>
						<span style="color: #bf9b73">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami.</span>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div id="ucapan-list">
							<!-- Tempat menampilkan data ucapan -->
						</div>
						<br>
						<button id="prev-button" class="text-center btn btn-primary btn-sm">Previous</button>
						<button id="next-button" class="text-center btn btn-primary btn-sm">Next</button>
						<button id="refresh-button" class="text-center btn btn-primary btn-sm"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAQAAABu4E3oAAAAIGNIUk0AAHomAACAhAAA+gAAAIDoAAB1MAAA6mAAADqYAAAXcJy6UTwAAAACYktHRAD/h4/MvwAAAAlwSFlzAAAOxAAADsQBlSsOGwAAAAd0SU1FB+cKGRAwEH7jBMkAAALYelRYdFJhdyBwcm9maWxlIHR5cGUgeG1wAABIx6WWWbKbQAxF/7WKLKFb6gGWQwD/pSqfWX6OGoyBh4nrxZSBBg1XV0Mjf379lh/8onZRbKydDbUrUw1lKrmmEjX4uoxlrubvbNJaYknlUbRkG5bnm/RDq80SBg3HA9OKUrEha0qpnMwu79x0VxNHsAFTD6ntp3NFSufyQLDqw6L1fnAXTDkr52kxwtVqj1nQ1E4nd6AmDisMd7gAlasVY93XgHpPiDM41/cErQVExOlAtX41tg8JJfsaEIYzBked5RmMC3LOKGan0aEDmSB1tpXQK9zNwVCTADe58rXYFl4sI8hvZATQY+mfYbRVLHOpHkajEoZKgdbsphxX0iZj5aeGTKgNShYWBn1eReDSkCankr/BBiR6mDwlS02hx8TIeua6vBmRqZANvAmAxUZ9bHkA43UYL5lzsHIUe1J3z9zO3FYasq+N/6koeZXUpxWVYqskjBV9VZY8S6sVOhS+hNzw6nOGemhHitbdqivsq0uOQRy8OaGo3VcYOc81/qP71wpbVxRIJG4Uc6pwRCoILGvjrfWaAjy/a4ETRic6OwGcST5tz3RgbkzCwKCSWGRP673anSNZVXKFe+oXcdZqdAUuolWfQ9x3eMavJXOT/ixyT7Z5lnnbCxccW+fhUQTJ7ALZzs07VLITZ/gtwhjX9i+ce2u+cdY33+HCEZpy7+clnJOXrLfyljOnejMqd4L3fXZsbbkWepbZtamrspXP+/u+veU7O8ZVe2+hHTbBcL0JPhv7uee+mrkGaVve0s32fq9YTfsI8ZnQ+d5D1qJ16rlLBiLGAYc3CvOavHVtGk/ulyex9WL0O2b1lEprmEhdO4878/Ky/3+kn+bR90mXM4rjB41vU5+RLivrMFPD1Qg9IV5M7wcMwXtXuKGR3dN8f61lJfGt+CJ95UI+ofMuCcvH2JuZ7ZjOn4OI/gXHXU2/WXJkhgAAAZ9JREFUOMu9k0FIk3EYxp9vrNxYGVseXAwU2cm8KBaCiIJSuySFx7wMOrhDUAdvgbcNNegUaSjRedNrHYQOXqRLh4I0IkJiMCG1bdFB69fh/+3z+/ZtIh72f0//932e531fXh6pFc/yfjkDyGoADyquuEKqqqhSLW35lTAR4i4FvnPAIT/ZYYURAqbm64IkdSmrSX3RG31UVTENKqUOLWtev3wj2ZHmGw+JcZJJkKPMK9rx7ukArtDtgpuwmKHCHJaLhBBtPOBaDVYnFeAZJQacip2eokrOo+SmJdll0Uvp4gOwzy1vF9fIr3lPxK4iLrKEeVtmuDpKgnFW2eM+o1w2lA4ek+cPL3lCXwPKdT7zl38cs047TuvbHDJWv75TzXAEFBly79NLiUf+5W1ShDww6xJEhNngHZeakvp5TrT+MtNUSDe8izlo2CNnNy/wgwnf9YMkCfm3NIkeNimSMQNQu9hTvnLTDbY8XulWVne0rbf6pN+6qhtKKaoXWlC5uV/C3GPN8cs2ywwbv5zuyguKq1MhVVTUnt+V5/B+a95/LNRp/dTRM2EAAAA8dEVYdENvbW1lbnQAeHI6ZDpEQUZ4OTM4TkRrMDo2MixqOjY1NzM0MTA3ODc2NzU5ODIxNTgsdDoyMzEwMjUxNu96OLUAAAAldEVYdGRhdGU6Y3JlYXRlADIwMjMtMTAtMjVUMTY6NDg6MDkrMDA6MDD1mvUrAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDIzLTEwLTI1VDE2OjQ4OjA5KzAwOjAwhMdNlwAAACh0RVh0ZGF0ZTp0aW1lc3RhbXAAMjAyMy0xMC0yNVQxNjo0ODoxNiswMDowMOkwHD8AAAAtdEVYdHBkZjpBdXRob3IAMTguMjQwLjAwMTAgTXVoYW1tYWQgQXVyYSBBbC1GYXRhYZuqOSsAAAAVdEVYdHhtcDpDcmVhdG9yVG9vbABDYW52YerHErEAAAAASUVORK5CYII=" alt=""></button> <!-- Tombol Refresh -->

					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<div id="form-container">
							<form id="ucapan-form">
								<div class="form-group">
									<label for="nama">Nama:</label>
									<input type="text" readonly class="form-control" id="nama" placeholder="Nama Peserta" value="<?= $nama; ?>">
								</div>
								<div class="form-group">
									<label for="ucapan">Ucapan:</label>
									<textarea class="form-control" id="ucapan" rows="4" placeholder="Ucapan Anda" required></textarea>
								</div>
								<div id="button-send" class="text-center animate-box">
									<button type="submit" class="btn btn-primary btn-sm">Kirim Ucapan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-testimonial" style="background: url('images/background/repeat-background/so-white.png'); background-repeat:repeat; border-top: 1px solid #f2f2f2">
			<img height="400" class="flower-bukutamu-right" style="right: 0;top: 0;position: absolute;" src="images/background/flowers/top-right-3.svg">
			<img height="400" class="flower-bukutamu-left" style="position: absolute; left: 0; bottom: 0" src="images/background/flowers/bottom-left-3.svg">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2>Amplop Digital</h2>
						<i style="font-size: 15px">Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. dan jika memberi adalah ungkapan tanda kasih Anda, Anda dapat memberi kado secara cashless.</i>
					</div>
					<div class="col-md-8 col-md-offset-2 text-center">
						<img src="images/mandiri.png" width="100">
						<br><br>
						<h4 style="font-family: 'Satisfy', Arial, serif">
							<p id="copyTextM">1390026587943</p> an Muhammad Aura Al-Fataa
						</h4>
						<div id="copyButtonM" class="btn btn-primary text-center animate-box">
							Salin Rekening
							<br>
						</div>
					</div>
					<br><br>
					<div class="col-md-8 col-md-offset-2 text-center">
						<img src="images/bsi.png" width="100">
						<br>
						<br>
						<h4 style="font-family: 'Satisfy', Arial, serif">
							<p id="copyTextB">7185193653</p> an Dian Noviani
						</h4>
						<div id="copyButtonB" class="btn btn-primary text-center animate-box">
							Salin Rekening
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer id="fh5co-footer" role="contentinfo" style="background: url('images/background/repeat-background/witewall_3.png'); background-repeat:repeat ">
			<div class="container">
				<img class="flower-1" style="position: absolute; right: 0; bottom: 0" src="images/background/flowers/bottom-right-1.svg">
				<img class="flower-1" style="position: absolute; left: 0; bottom:0" src="images/background/flowers/bottom-left-1.svg">
				<div class="row copyright animate-box">
					<div class="col-md-12 text-center">
						<p>
							Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila Bapak/Ibu/Saudara/i berkenan hadir dan memberikan doa restu.
							<br>Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.
						<h3 style="color: #bf9b73">Wassalamu'alaikum Wr. Wb.</h3>
						Jazakumullahu Khairan
						</p>
						<img src="images/logoAwalB.png" width="300" height="300">
						<br>
						<h1 style="font-family: 'Satisfy', Arial, serif">Dian & Fataa</h1>
						<p>
							© Copyright 2023 COLDALPHA All Rights Reserved </br>
							<small>Instagram : cold.alpha | Whatsapp : (+62) 895-3771-17145 | coldalpha.github.io</small>
						<ul class="fh5co-social-icons">
							<li><a target="_blank" href="https://wa.me/62895377117145/"><i class="icon-phone"></i></a></li>
							<li><a target="_blank" href="https://coldalpha.github.io/"><i class="icon-globe"></i></a></li>
							<li><a target="_blank" href="https://www.instagram.com/cold.alpha/"><i class="icon-instagram"></i></a></li>
							<li><a target="_blank" href="https://github.com/coldalpha"><i class="icon-github"></i></a></li>
							<li><a target="_blank" href="https://www.linkedin.com/in/alfataa/"><i class="icon-linkedin"></i></a></li>
						</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>
	<!--</div>-->

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<script src="js/simplyCountdown.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	<script src="lib/lightgallery.js/dist/lightgallery.min.js"></script>
	<script src="lib/lightgallery.js/dist/plugins/thumbnail/lg-thumbnail.min.js"></script>
	<script src="lib/lightgallery.js/dist/plugins/autoplay/lg-autoplay.min.js"></script>
	<script src="lib/lightgallery.js/dist/plugins/fullscreen/lg-fullscreen.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/showdown/2.0.3/showdown.min.js"></script>

	<script>
		document.getElementById('copyButtonM').addEventListener('click', function() {
			// Pilih teks yang akan disalin
			const textToCopy = document.getElementById('copyTextM').innerText;

			// Menggunakan Clipboard API untuk menyalin teks
			navigator.clipboard.writeText(textToCopy)
				.then(() => {
					// Tampilkan pesan toast dengan Toastify
					Toastify({
						text: 'Teks berhasil disalin: ' + textToCopy,
						duration: 3000, // Durasi tampilan pesan dalam milidetik
						close: true // Tampilkan tombol tutup pada pesan toast
					}).showToast();
				})
				.catch(err => {
					// Tangani kesalahan jika penyalinan gagal
					console.error('Gagal menyalin teks: ', err);
				});
		});
		document.getElementById('copyButtonB').addEventListener('click', function() {
			// Pilih teks yang akan disalin
			const textToCopy = document.getElementById('copyTextB').innerText;

			// Menggunakan Clipboard API untuk menyalin teks
			navigator.clipboard.writeText(textToCopy)
				.then(() => {
					// Tampilkan pesan toast dengan Toastify
					Toastify({
						text: 'Teks berhasil disalin: ' + textToCopy,
						duration: 3000, // Durasi tampilan pesan dalam milidetik
						close: true // Tampilkan tombol tutup pada pesan toast
					}).showToast();
				})
				.catch(err => {
					// Tangani kesalahan jika penyalinan gagal
					console.error('Gagal menyalin teks: ', err);
				});
		});
		day = 3;
		month = 11 - 1;
		year = 2023;
		hour = 7;
		minute = 0;
		var d = new Date(year, month, day, hour, minute, 0, 0);

		// default example
		simplyCountdown('.simply-countdown-wedding', {
			year: d.getFullYear(),
			month: d.getMonth() + 1,
			day: d.getDate(),
			hour: d.getHours(),
			minutes: 0, // Default is 0 [0-59] integer
			seconds: 0, // Default is 0 [0-59] integer
			countUp: true
			// enableUtc: true
		});

		//jQuery example
		// $('#simply-countdown-losange').simplyCountdown({
		// 	year: d.getFullYear(),
		// 	month: d.getMonth() + 1,
		// 	day: d.getDate(),
		// 	enableUtc: false
		// });

		$('#open-invitation').click(function() {
			$('#overlay').addClass('hide-overlay');
			playAudio1();
			/*yang bagian floating button ada animasinya tapi karena ketutup dulu sama overlay jadinya gak nampak*/
			/*pengen pas di klik buka undangan baru jalan animasinya*/
			/*var c = document.getElementsByClassName('right-sidebar');
			for (var i = 0; i < c.length; i++) {
				c[i].classList.add('animate');
			}*/
		});

		// function fetchData() {
		// 	$.get("<?= base_url() ?>/api/get_data", function(response) {
		// 		const data = response.data;

		// 		if (data.length > 0) {
		// 			// Hapus data yang ada sebelum menambahkan data baru
		// 			$("#fh5co-testimonial .list-group").empty();

		// 			for (let i = 0; i < data.length; i++) {
		// 				const item = `
		//         <a class="list-group-item">
		//             <div class="name"><span class="strong" style="font-size: 15px">${data[i].nama}</span></div>
		//             <hr style="margin-top: 0;">
		//             <div class="comment">${new showdown.Converter().makeHtml(data[i].kata_ucapan)}</div>
		//         </a>
		//         `;
		// 				$("#fh5co-testimonial .list-group").append(item);
		// 			}
		// 		} else {
		// 			// Jika data kosong
		// 			const caution = "<div class='alert alert-warning'>Pesan ucapan kosong.</div>";
		// 			$("#fh5co-testimonial .list-group").append(caution);
		// 		}
		// 	});
		// }

		// // Panggil fetchData pertama kali
		// fetchData();

		// // Atur interval pembaruan data setiap 3 detik
		// setInterval(fetchData, 3000);



		function scrollToElement(el) {
			$("html, body").animate({
				scrollTop: $(`#${el}`).offset().top
			}, 1000);
		}
	</script>
	<script>
		const dataPerPage = 3; // Jumlah data per halaman
		let currentPage = 1;
		let data = []; // Data yang telah dimuat

		function loadPage(page) {
			// Lakukan permintaan AJAX untuk mengambil data
			// Gantilah URL dengan URL API Anda.
			$.get(`/api/get_data`, function(response) {
				data = response.data; // Mengambil semua data

				// Menampilkan data pada halaman saat ini
				displayDataOnPage(page);
			});
		}

		function displayDataOnPage(page) {
			const startIndex = (page - 1) * dataPerPage;
			const endIndex = startIndex + dataPerPage;
			const pageData = data.slice(startIndex, endIndex);

			// Menampilkan data pada halaman saat ini di #ucapan-list
			$("#ucapan-list").empty();
			if (Array.isArray(pageData) && pageData.length > 0) {
				for (let i = 0; i < pageData.length; i++) {
					// Tampilkan data sesuai dengan format yang Anda inginkan
					const item = `
		
                    <div class="list-group-item ucapan-item">
						<div class="name"><span class="strong" style="font-size: 15px">${pageData[i].nama}</span></div>
		       			<hr style="margin-top: 0;">
		             	<div class="comment">${new showdown.Converter().makeHtml(pageData[i].kata_ucapan)}</div>			                        
                    </div>
                `;
					$("#ucapan-list").append(item);

					// Aktifkan atau nonaktifkan tombol "Previous" dan "Next" sesuai dengan halaman saat ini
					$("#prev-button").prop("disabled", page === 1);
					$("#next-button").prop("disabled", endIndex >= data.length);
				}
			} else {
				const caution = "<div class='alert alert-warning'>Pesan ucapan kosong.</div>";
				$("#ucapan-list").append(caution);
			}
		}

		// Panggil loadPage pertama kali
		loadPage(currentPage);

		// Tangani klik "Next" untuk memuat halaman berikutnya
		$("#next-button").on("click", function() {
			currentPage++;
			displayDataOnPage(currentPage);
		});

		// Tangani klik "Previous" untuk memuat halaman sebelumnya
		$("#prev-button").on("click", function() {
			currentPage--;
			displayDataOnPage(currentPage);
		});

		$("#refresh-button").on("click", function() {
			loadPage(currentPage);
		});
	</script>
	<script>
		// 2. This code loads the IFrame Player API code asynchronously.
		var tag = document.createElement('script');

		tag.src = "https://www.youtube.com/iframe_api";
		var firstScriptTag = document.getElementsByTagName('script')[0];
		firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

		// 3. This function creates an <iframe> (and YouTube player)
		//    after the API code downloads.
		var player1;

		function onYouTubeIframeAPIReady() {

			var ctrlq1 = document.getElementById("youtube-audio1");
			ctrlq1.innerHTML = '<img id="youtube-icon1" src=""/><div id="youtube-player1"></div>';
			ctrlq1.style.cssText = 'width:20px;margin:0 auto;cursor:pointer;cursor:hand;display:none';
			ctrlq1.onclick = toggleAudio1;

			player1 = new YT.Player('youtube-player1', {
				height: '0',
				width: '0',
				videoId: ctrlq1.dataset.video,
				playerVars: {
					autoplay: ctrlq1.dataset.autoplay,
					loop: ctrlq1.dataset.loop,
				},
				events: {
					'onReady': onPlayerReady1,
					'onStateChange': onPlayerStateChange1
				}
			});
		}

		function togglePlayButton1(play) {
			document.getElementById("youtube-icon1").src = play ? "https://ngodingsolusi.github.io/the-wedding-of-rehan-maulidan/images/audio/pause.png" : "https://ngodingsolusi.github.io/the-wedding-of-rehan-maulidan/images/audio/play.png";
		}

		function toggleAudio1() {
			if (player1.getPlayerState() == 1 || player1.getPlayerState() == 3) {
				player1.pauseVideo();
				togglePlayButton1(false);
			} else {
				player1.playVideo();
				togglePlayButton1(true);
			}
		}

		function playAudio1() {
			if (!(player1.getPlayerState() == 1 || player1.getPlayerState() == 3)) {
				player1.playVideo();
				togglePlayButton1(true);
			}
		}

		function onPlayerReady1(event) {
			player1.setPlaybackQuality("small");
			document.getElementById("youtube-audio1").style.display = "block";
			togglePlayButton1(player1.getPlayerState() !== 5);
		}

		function onPlayerStateChange1(event) {
			if (event.data === 0) {
				togglePlayButton1(false);
			}
		}
	</script>

	<script>
		function akadLocation() {
			// If it's an iPhone..
			if ((navigator.platform.indexOf("iPhone") != -1) ||
				(navigator.platform.indexOf("iPod") != -1) ||
				(navigator.platform.indexOf("iPad") != -1))
				window.open("maps://www.google.com/maps?daddr=Gg.+I+No.88,+Tirto,+Kec.+Pekalongan+Bar.,+Kota+Pekalongan,+Jawa+Tengah");
			else
				window.open("https://www.google.com/maps?daddr=Gg.+I+No.88,+Tirto,+Kec.+Pekalongan+Bar.,+Kota+Pekalongan,+Jawa+Tengah");
		}

		function walimahLocation() {
			// If it's an iPhone..
			if ((navigator.platform.indexOf("iPhone") != -1) ||
				(navigator.platform.indexOf("iPod") != -1) ||
				(navigator.platform.indexOf("iPad") != -1))
				window.open("maps://www.google.com/maps?daddr=GOR+UNIKAL+-+GEDUNG+OLAHRAGA+UNIVERSITAS+PEKALONGAN");
			else
				window.open("https://www.google.com/maps?daddr=GOR+UNIKAL+-+GEDUNG+OLAHRAGA+UNIVERSITAS+PEKALONGAN");
		}
	</script>
	<script>
		// Fungsi untuk mengambil nama dari URL
		function getNamaFromURL() {
			const url = window.location.href;
			const params = new URL(url).searchParams;
			return params.get("nama");
		}

		// Fungsi untuk menampilkan nama di elemen HTML
		function showNama() {
			const nama = getNamaFromURL();
			if (nama) {
				document.getElementById("namaPlaceholder").textContent = nama;
			}
		}

		// Panggil fungsi showNama saat halaman dimuat
		window.addEventListener("load", showNama);
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Menambahkan jeda 3 detik sebelum tombol muncul
			setTimeout(function() {
				document.getElementById("open-invitation").style.display = "";
			}, 3000); // Jeda 3 detik (3000 milidetik)
		});
	</script>
	<script>
		$(document).ready(function() {
			$("#button-send a").on("click", function(e) {
				e.preventDefault();
				$("#form-container").show();
			});

			$("#ucapan-form").submit(function(e) {
				e.preventDefault();
				var nama = $("#nama").val();
				var ucapan = $("#ucapan").val();

				// Kirim data ke API menggunakan AJAX
				$.post("<?= base_url() ?>/api/post_data", {
					nama: '<?= $nama; ?>',
					kata_ucapan: ucapan
				}, function(response) {
					if (response.success) {
						alert("Ucapan berhasil dikirim!");
					} else {
						alert("Gagal mengirim ucapan. Silakan coba lagi.");
					}
				}, "json");
			});
		});
	</script>

</body>

</html>