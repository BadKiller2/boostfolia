<?php

require_once 'assets/db/create.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Text&family=Roboto:wght@100;300;700&family=Saira+Semi+Condensed&display=swap" rel="stylesheet">
	<title>Boostfolia</title>
</head>
<div class="page">
<body>

<header class="header">
	<div class="header__container">
		<div class="header__logo">
			<img src="assets/images/logo.png" alt="">
			<div class="header__logo-name">BOOSTFOLIA</div>
		</div>
		<div class="header__menu menu"></div>
		<div class="menu__icon">
			<span>

			</span>
		</div>
		<nav class="menu__body">
			<ul class="menu__list">
			    <li><a data-goto=".intro" href="#" class="menu__link">Home</a></li>
        		<li><a data-goto=".aboutus" href="#" class="menu__link">About us</a></li>
        		<li><a data-goto=".ourworks" href="#" class="menu__link">Out works</a></li>
        		<li><a data-goto=".whoweare" href="#" class="menu__link">Who we are</a></li>
        		<li><a data-goto=".somefeatrs" href="#" class="menu__link">Some features</a></li>
        		<li><a data-goto=".blogposts" href="#" class="menu__link">Blog posts</a></li>
        		<li><a data-goto=".choseplan" href="#" class="menu__link">Chost plan</a></li>
        		<li><a data-goto=".getintouch" href="#" class="menu__link">Get in touch</a></li>
        		<li><a data-goto=".map" href="#" class="menu__link">Locate in map</a></li>
			</ul>
		</nav>
	</div>
</header>


<!-- Intro -->
<div class="intro">
	<div class="intro__container">
		<div class="intro__slider">
			<div class="intro__item">
				<div class="intro__item-title">1WE THINK CREATIVE BE CREATIVE</div>
				<div class="intro__item-subtitle">LIKE TO DO CREATIVE WORKS</div>
			</div>
			<div class="intro__item">
				<div class="intro__item-title">2WE THINK CREATIVE BE CREATIVE</div>
				<div class="intro__item-subtitle">LIKE TO DO CREATIVE WORKS</div>
			</div>
			<div class="intro__item">
				<div class="intro__item-title">3WE THINK CREATIVE BE CREATIVE</div>
				<div class="intro__item-subtitle">LIKE TO DO CREATIVE WORKS</div>
			</div>
		</div>
		<div class="intro__info">
			<img src="assets/images/mouse.png" alt="">
			<div class="intro__info-text">
				SCROLL DOWN
			</div>
		</div>
	</div>
</div>
<!-- Intro -->


<!-- About Us -->
<div class="aboutus">
	<div class="container">
		<div class="section__header">
			<div class="section__title">about us</div>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
		</div>

		<div class="aboutus__sections">
			<div class="aboutus__sections-item">
				<img class="aboutus__sections-img" src="assets/images/about_us/1.png" alt="">
				<div class="aboutus__sections-title">CREATIVE DESIGN</div>
				<div class="aboutus__sections-text">Lorem ipsum dolor sit amet, consecte&shy;tur adipi&shy;si&shy;ci&shy;ng elit, sed do ...</div>
			</div>

			<div class="aboutus__sections-item">
				<img class="aboutus__sections-img" src="assets/images/about_us/2.png" alt="">
				<div class="aboutus__sections-title">UNIQU PORTFOLIO</div>
				<div class="aboutus__sections-text">Lorem ipsum dolor sit amet, consecte&shy;tur adipi&shy;si&shy;ci&shy;ng elit, sed do ...</div>
			</div>

			<div class="aboutus__sections-item">
				<img class="aboutus__sections-img" src="assets/images/about_us/3.png" alt="">
				<div class="aboutus__sections-title">INFINITE UPDATES</div>
				<div class="aboutus__sections-text">Lorem ip&shy;sum dolor sit amet, consecte&shy;tur adipi&shy;si&shy;ci&shy;ng elit, sed do ...</div>
			</div>
		</div>
	</div>
</div>
<!-- About Us -->


<!-- Video -->
<div class="video">
	<div class="video__container">
		<div class="video__play">
			<div class="video__play-title">
				WATCH BEHIND THE SCENE
			</div>
			<div class="video__play-text">
				Lorem ipsum dolo the lorem r sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
			</div>
			<button class="video__play-button">
				play now
			</button>
		</div>
		<div class="video__section">
			<video class="video-vdo" poster="assets/images/video/video.png">
				<source src="assets/video/1.avi" type='video/avi; codecs="theora, vorbis"'>
			</video>
			<div class="video__playpause-btn"></div>
		</div>
    </div>
</div>
<!-- Video -->



<!-- Our Works -->
<div class="ourworks">
	<div class="container">
		<div class="section__header">
			<div class="section__title">our works</div>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
		</div>

		<div class="ourworks__buttons">
			<a class="ourworks__buttons-item owbi1 active">ALL PROJECTS</a>
			<a class="ourworks__buttons-item owbi2">PHOTOGRAPHY</a>
			<a class="ourworks__buttons-item owbi3">WEB DESIGN</a>
			<a class="ourworks__buttons-item owbi4">BRANDING</a>
			<a class="ourworks__buttons-item owbi5">MOBILE APP</a>
		</div>
	</div>

	<div class="ourworks__img-inner">
		<div class="ourworks__img">
			<div class="ourworks__img-item owii1 active">
				<img src="assets/images/our_works/1.png" alt="">
			</div>

			<div class="ourworks__img-item owii2 active">
				<img src="assets/images/our_works/2.png" alt="">
			</div>

			<div class="ourworks__img-item owii3 active">
				<img src="assets/images/our_works/3.png" alt="">
			</div>

			<div class="ourworks__img-item owii4 active">
				<img src="assets/images/our_works/4.png" alt="">
			</div>

			<div class="ourworks__img-item owii1 active">
				<img src="assets/images/our_works/1.png" alt="">
			</div>

			<div class="ourworks__img-item owii3 active">
				<img src="assets/images/our_works/3.png" alt="">
			</div>

			<div class="ourworks__img-item owii4 active">
				<img src="assets/images/our_works/4.png" alt="">
			</div>

			<div class="ourworks__img-item owii1 active">
				<img src="assets/images/our_works/1.png" alt="">
			</div>

			<div class="ourworks__img-item owii2 active">
				<img src="assets/images/our_works/2.png" alt="">
			</div>

			<div class="ourworks__img-item owii3 active">
				<img src="assets/images/our_works/3.png" alt="">
			</div>

			<div class="ourworks__img-item owii4 active">
				<img src="assets/images/our_works/4.png" alt="">
			</div>

			<div class="ourworks__img-item owii4 active">
				<img src="assets/images/our_works/4.png" alt="">
			</div>

			<div class="ourworks__img-item owii1 active">
				<img src="assets/images/our_works/1.png" alt="">
			</div>

			<div class="ourworks__img-item owii1 active">
				<img src="assets/images/our_works/1.png" alt="">
			</div>

			<div class="ourworks__img-item owii3 active">
				<img src="assets/images/our_works/3.png" alt="">
			</div>
		</div>
	</div>
</div>
<!-- Our Works -->


<!-- Clients -->
<div class="clients">
	<div class="client__container">
        <div class="client__slider">
        	<div class="client__item">
        		<img src="assets/images/clients/1.png" alt="">
        	</div>
        	<div class="client__item">
        		<img src="assets/images/clients/2.png" alt="">
        	</div>
        	<div class="client__item">
        		<img src="assets/images/clients/3.png" alt="">
        	</div>
        	<div class="client__item">
        		<img src="assets/images/clients/1.png" alt="">
        	</div>
        	<div class="client__item">
        		<img src="assets/images/clients/2.png" alt="">
        	</div>
        	<div class="client__item">
        		<img src="assets/images/clients/3.png" alt="">
        	</div>
        </div>
	</div>
</div>
<!-- Clients -->


<!-- Who we are -->
<div class="whoweare">
	<div class="container">
		<div class="section__header">
			<div class="section__title">who we are</div>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
		</div>

		<div class="whoweare__team">
			<div class="whoweare__team-member">
				<div class="whoweare__member-image"></div>
				<div class="whoweare__member-name" id="wwa__name">JANE SMITH</div>
				<div class="whoweare__member-prof" id="wwa__prof">DESIGNER</div>
				<div class="whoweare__member-social">
					<a href=""><img src="assets/images/socials/1.png" alt=""></a>
					<a href=""><img src="assets/images/socials/2.png" alt=""></a>
					<a href=""><img src="assets/images/socials/3.png" alt=""></a>
				</div>
				<div class="whoweare__member-select">
					<button class="whoweare__select-dot but_1 active"></button>
					<button class="whoweare__select-dot but_2"></button>
					<button class="whoweare__select-dot but_3"></button>
				</div>
			</div>
			<div class="whoweare__team-skill">
				<div class="whoweare__skill-title">
					MY SKILLS
				</div>
				<div class="whoweare__skill-text">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
				</div>
				<div class="whoweare__skill-progress">

					<div class="whoweare__skill-item photoshop">

						<div class="whoweare__progress-name">
							photoshop
						</div>

						<div class="whoweare__progress-item">

							<div class="whoweare__progress">
								<div id="phts" class="whoweare__progress-strip_phts" style="width:88%;"></div>
							</div>

							<div id="wwapp_1" class="whoweare__progress-procents" >88%</div>

						</div>

					</div>

					<div class="whoweare__skill-item illustrator">

						<div class="whoweare__progress-name">
							illustrator
						</div>

						<div class="whoweare__progress-item">

							<div class="whoweare__progress">
								<div id="ilst" class="whoweare__progress-strip_ilst" style="width:92%;"></div>
							</div>

							<div id="wwapp_2" class="whoweare__progress-procents">92%</div>

						</div>

					</div>

					<div class="whoweare__skill-item sketch">

						<div class="whoweare__progress-name">
							sketch
						</div>

						<div class="whoweare__progress-item">

							<div class="whoweare__progress">
								<div id="sket" class="whoweare__progress-strip_sket" style="width:90%;"></div>
							</div>

							<div id="wwapp_3" class="whoweare__progress-procents">90%</div>

						</div>

					</div>

					<div class="whoweare__skill-item aftereffects">

						<div class="whoweare__progress-name">
							after effects
						</div>

						<div class="whoweare__progress-item">

							<div class="whoweare__progress">
								<div id="afef" class="whoweare__progress-strip_afef" style="width:98%;"></div>
							</div>

							<div id="wwapp_4" class="whoweare__progress-procents">98%</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Who we are -->


<!-- Some features -->
<div class="somefeatrs">
	<div class="container">
		<div class="black__header">
			SOME FEATURES
		</div>

		<div class="somefeatrs__info">
			<div class="somefeatrs__info-inner">
				<img  class="somefeatrs__inner-img"  src="assets/images/features/1.png" alt="">
				<div class="somefeatrs__inner-title">
					Shortcodes
				</div>
				<div class="somefeatrs__inner-number">
					46
				</div>
			</div>

			<div class="somefeatrs__info-inner">
				<img  class="somefeatrs__inner-img"  src="assets/images/features/2.png" alt="">
				<div class="somefeatrs__inner-title">
					Integrated Plugins
				</div>
				<div class="somefeatrs__inner-number">
					128
				</div>
			</div>

			<div class="somefeatrs__info-inner">
				<img class="somefeatrs__inner-img" src="assets/images/features/3.png" alt="">
				<div class="somefeatrs__inner-title">
					Creative Products
				</div>
				<div class="somefeatrs__inner-number">
					450
				</div>
			</div>

			<div class="somefeatrs__info-inner">
				<img  class="somefeatrs__inner-img"  src="assets/images/features/4.png" alt="">
				<div class="somefeatrs__inner-title">
					Clients Worldwide
				</div>
				<div class="somefeatrs__inner-number">
					100+
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Some features -->


<!-- Blog posts -->
<div class="blogposts">
	<div class="container">
		<div class="section__header">
			<div class="section__title">Blog posts</div>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consecte&shy;tur adi&shy;pisi&shy;cing elit, sed do eius&shy;mod tem&shy;por inci&shy;di&shy;dunt ut la&shy;bo&shy;re et do&shy;lore magna aliqua. Ut enim ad mi&shy;nim ve&shy;niam.</p>
            </div>
		</div>

		<div class="blogs">
			<div class="blog__item">
				<div class="card__img">
					<img class="blog__item-img" src="assets/images/blog_posts/Image2.png" alt="">
				</div>

				<div class="blog__inside-item">
					<div>
						<div class="blog__item-title">Creat Creative & Clean</div>
						<div class="blog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					</div>
					<div class="blog__item-bottom">
						<div class="blog__item-date">
							<img src="assets/images/blog_posts/clock.png" alt="">
							25 Jan 2015
						</div>
						<div class="blog__item-like--comment">
							<div class="blog__likcom-container">
								<button>
								    <img src="assets/images/blog_posts/like.png" alt="">
							    </button>

				                <p class="like__post-1">
				                	25
				                </p>
							</div>

							<div class="blog__likcom-container">
								<button>
								    <img src="assets/images/blog_posts/comment.png" alt="">
							    </button>

				                <p class="comment__post-1">
				                	11
				                </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="blog__item">
				<div class="card__img">
					<img class="blog__item-img" src="assets/images/blog_posts/Image2.png" alt="">
				</div>

				<div class="blog__inside-item">
					<div>
						<div class="blog__item-title">Make A Sleek Break</div>
						<div class="blog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					</div>
					<div class="blog__item-bottom">
						<div class="blog__item-date">
							<img src="assets/images/blog_posts/clock.png" alt="">
							25 Jan 2015
						</div>
						<div class="blog__item-like--comment">
							<div class="blog__likcom-container">
								<button>
								    <img src="assets/images/blog_posts/like.png" alt="">
							    </button>

				                <p class="like__post-1">
				                	25
				                </p>
							</div>

							<div class="blog__likcom-container">
								<button>
								    <img src="assets/images/blog_posts/comment.png" alt="">
							    </button>

				                <p class="comment__post-1">
				                	11
				                </p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="blog__item">
				<div class="card__img">
					<img class="blog__item-img" src="assets/images/blog_posts/Image2.png" alt="">
				</div>

				<div class="blog__inside-item">
					<div>
						<div class="blog__item-title">Creative Manipulations</div>
						<div class="blog__item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
					</div>
					<div class="blog__item-bottom">
						<div class="blog__item-date">
							<img src="assets/images/blog_posts/clock.png" alt="">
							25 Jan 2015
						</div>
						<div class="blog__item-like--comment">
							<div class="blog__likcom-container">
								<button>
								    <img src="assets/images/blog_posts/like.png" alt="">
							    </button>

				                <p class="like__post-1">
				                	25
				                </p>
							</div>

							<div class="blog__likcom-container">
								<button>
								    <img src="assets/images/blog_posts/comment.png" alt="">
							    </button>

				                <p class="comment__post-1">
				                	11
				                </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Blog posts -->


<!-- Chose plan -->
<div class="choseplan">
	<div class="container">
		<div class="black__header">
			chose plan
		</div>

		<div class="choseplan__prices">
			<div class="choseplan__prices-item">
				<div class="choseplan__item-title">
					<div class="choseplan__item-subtitle">
						BASIC
					</div>
					<div class="choseplan__item-price">
						Free
					</div>
				</div>
				<div class="choseplan__item-content">
					<div class="choseplan__content-item">
						<p>20</p> Pages
					</div>

					<div class="choseplan__content-item">
						<p>2</p> GB Storage
					</div>

					<div class="choseplan__content-item">
						<p>150</p> Members
					</div>

					<div class="choseplan__content-item">
						<p>2</p> Contributors
					</div>
				</div>
				<div class="choseplan__item-btn">
					<button class="choseplan__btn">
						PURCHASE
					</button>
				</div>
			</div>

			<div class="choseplan__prices-item">
				<div class="choseplan__item-title">
					<div class="choseplan__item-subtitle">
						STANDART
					</div>
					<div class="choseplan__item-price">
						$24.00
					</div>
				</div>
				<div class="choseplan__item-content">
					<div class="choseplan__content-item">
						<p class="content__color">25</p> Pages
					</div>

					<div class="choseplan__content-item">
						<p class="content__color">10</p> GB Storage
					</div>

					<div class="choseplan__content-item">
						<p class="content__color">300</p> Members
					</div>

					<div class="choseplan__content-item">
						<p class="content__color">5</p> Contributors
					</div>
				</div>
				<div class="choseplan__item-btn">
					<button class="choseplan__btn">
						PURCHASE
					</button>
				</div>
			</div>

			<div class="choseplan__prices-item">
				<div class="choseplan__item-title">
					<div class="choseplan__item-subtitle">
						PREMIUM
					</div>
					<div class="choseplan__item-price">
						$40.00
					</div>
				</div>
				<div class="choseplan__item-content">
					<div class="choseplan__content-item">
						<p>30</p> Pages
					</div>

					<div class="choseplan__content-item">
						<p>20</p> GB Storage
					</div>

					<div class="choseplan__content-item">
						<p>500</p> Members
					</div>

					<div class="choseplan__content-item">
						<p>10</p> Contributors
					</div>
				</div>
				<div class="choseplan__item-btn">
					<button class="choseplan__btn">
						PURCHASE
					</button>
				</div>
			</div>

			<div class="choseplan__prices-item">
				<div class="choseplan__item-title">
					<div class="choseplan__item-subtitle">
						PROFESSIONAL
					</div>
					<div class="choseplan__item-price">
						$75.00
					</div>
				</div>
				<div class="choseplan__item-content">
					<div class="choseplan__content-item">
						<p>40</p> Pages
					</div>

					<div class="choseplan__content-item">
						<p>40</p> GB Storage
					</div>

					<div class="choseplan__content-item">
						<p>1000</p> Members
					</div>

					<div class="choseplan__content-item">
						<p>20</p> Contributors
					</div>
				</div>
				<div class="choseplan__item-btn">
					<button class="choseplan__btn">
						PURCHASE
					</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Chose plan -->


<!-- Get in touch -->
<div class="getintouch">
	<div class="container">
		<div class="section__header">
			<div class="section__title">get in touch</div>
            <div class="section__text">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            </div>
		</div>

		<form action="assets/db/create.php" method="POST">
			<string class="form__title">
				<div>
					<p><strong>name </strong> *</p>
					<input type="name" class="main__input">
				</div>

				<div>
					<p><strong>mail </strong> *</p>
					<input type="mail" class="main__input">
				</div>
			</string>
			<string>
				<p><strong>massage </strong> *</p>
				<textarea type="massage"></textarea>
			</string>
			<div>
				<string>
				    <button class="post__btn" type="submit" name="submit">SEND MESSAGE</button>
				</string>
			</div>
		</form>
	</div>
</div>
<!-- Get in touch -->


<!-- Map -->
<div class="map">
	<div class="container">
		<div class="map__container">
			<div class="map__title">
				LOCATE ON MAP
			</div>

			<div class="open__map"></div>
		</div>
		<div class="maps">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ad0664a280fa8d40cabe42503d69026c526660eb96ac74a75a74bf0956fd8eb6c&amp;width=100%25&amp;height=500&amp;lang=ru_RU&amp;scroll=true"></script>
		</div>

	</div>
</div>
<!-- Map -->


<div class="basement">
	<div class="container">
		<div class="basement__content">
			<img src="assets/images/logo.png" alt="">
			<div class="basement__name">
				Boostfolia
			</div>
			<div class="basement__text">
				MADE WITH LOVE BY CREATIVEPRODUCT
			</div>
			<div class="basement__links">
				<a href=""><img src="assets/images/basement/1.png" alt=""></a>
				<a href=""><img src="assets/images/basement/2.png" alt=""></a>
				<a href=""><img src="assets/images/basement/3.png" alt=""></a>
			</div>
		</div>
	</div>
</div>


<!-- Script -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/slick.min.js"></script>
<script type="text/javascript" src="assets/js/app.js"></script>
</body>
</div>
</html>