'use strict'

Set-Cookie: widget_session=abc123; SameSite=None; Secure

/* Menu */
const menuIcon = document.querySelector('.menu__icon');
const menuBody = document.querySelector('.menu__body');

if (menuIcon) {
	menuIcon.addEventListener("click", function(e) {
		document.body.classList.toggle('lock');
		menuIcon.classList.toggle('active');
		menuBody.classList.toggle('active');
	});
};


/* Scroll */
const menuLinks = document.querySelectorAll('.menu__link[data-goto]');
if (menuLinks.length > 0) {
	menuLinks.forEach(menuLink => {
		menuLink.addEventListener("click", function (e) {
			const menuLink = e.target;
			if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {
				const gotoSection = document.querySelector(menuLink.dataset.goto);
				const gotoSectionScroll = gotoSection.getBoundingClientRect().top + pageYOffset - document.querySelector('.header').offsetHeight;
				if (menuIcon.classList.contains) {
					document.body.classList.remove('lock');
					menuIcon.classList.remove('active');
					menuBody.classList.remove('active');
				}

				window.scrollTo ({
					top: gotoSectionScroll,
					behavior: 'smooth'
				});

				e.preventDefault();
			};
		});
	});
};


/* jQuery */
$(document).ready(function() {


	/* Slick */
	/* Intro */
$('.intro__slider').slick({
	arrows:true,
	slidesToShow:1,
	infinite:true,
	autoplay:true,
	draggable:true,
	swipe:true,
	waitForAnimate:true
});

	/* Cliets */
$('.client__slider').slick({
	arrows:true,
	slidesToShow:3,
	infinite:true,
	autoplay:true,
	draggable:true,
	swipe:true,
	waitForAnimate:true
});
});


/* Video */
const videoBtn_1 = document.querySelector('.video__play-button');
const videoBtn_2 = document.querySelector('.video__playpause-btn');
const video = document.querySelector('.video-vdo');

if (videoBtn_1 && videoBtn_2 && video) {
	videoBtn_1.addEventListener("click", function (e) {

		videoBtn_1.classList.add('active');
		videoBtn_2.classList.add('active');

		video.setAttribute('controls', 'controls');
	});

	videoBtn_2.addEventListener("click", function (e) {

		videoBtn_1.classList.add('active');
		videoBtn_2.classList.add('active');

		video.setAttribute('controls', 'controls');
	});
};


/* Our Works */
const ourWorksBtns = document.querySelectorAll('.ourworks__buttons-item')
const ourWorksBtn_1 = document.querySelector('.owbi1');
const ourWorksBtn_2 = document.querySelector('.owbi2');
const ourWorksBtn_3 = document.querySelector('.owbi3');
const ourWorksBtn_4 = document.querySelector('.owbi4');
const ourWorksBtn_5 = document.querySelector('.owbi5');

const ourWorksImgs = document.querySelectorAll('.ourworks__img-item');
const ourWorksImg_1 = document.querySelectorAll('.owii1');
const ourWorksImg_2 = document.querySelectorAll('.owii2');
const ourWorksImg_3 = document.querySelectorAll('.owii3');
const ourWorksImg_4 = document.querySelectorAll('.owii4');


ourWorksBtn_1.addEventListener("click", function (e) {

	ourWorksBtns.forEach(btn => {
		btn.classList.remove('active');
	});

	ourWorksBtn_1.classList.add('active');

	ourWorksImgs.forEach(img => {
		img.classList.add('active');
	});
});


ourWorksBtn_2.addEventListener("click", function (e) {

	ourWorksBtns.forEach(btn => {
		btn.classList.remove('active');
	});

	ourWorksBtn_2.classList.add('active');

	ourWorksImgs.forEach(img => {
		img.classList.remove('active');
	});

	ourWorksImg_1.forEach(img => {
		img.classList.add('active');
	});
});

ourWorksBtn_3.addEventListener("click", function (e) {

	ourWorksBtns.forEach(btn => {
		btn.classList.remove('active');
	});

	ourWorksBtn_3.classList.add('active');

	ourWorksImgs.forEach(img => {
		img.classList.remove('active');
	});

	ourWorksImg_2.forEach(img => {
		img.classList.add('active');
	});
});

ourWorksBtn_4.addEventListener("click", function (e) {

	ourWorksBtns.forEach(btn => {
		btn.classList.remove('active');
	});

	ourWorksBtn_4.classList.add('active');

	ourWorksImgs.forEach(img => {
		img.classList.remove('active');
	});

	ourWorksImg_3.forEach(img => {
		img.classList.add('active');
	});
});

ourWorksBtn_5.addEventListener("click", function (e) {

	ourWorksBtns.forEach(btn => {
		btn.classList.remove('active');
	});

	ourWorksBtn_5.classList.add('active');

	ourWorksImgs.forEach(img => {
		img.classList.remove('active');
	});

	ourWorksImg_4.forEach(img => {
		img.classList.add('active');
	});
});


/* Who we are */
/* Button */
const whoweareBtns = document.querySelectorAll('.whoweare__select-dot');
let whoweareAct = document.querySelector('.whoweare__select-dot.active');

if (whoweareBtns) {
	whoweareBtns.forEach(whoweare => {

		whoweare.addEventListener("click", function (e) {
			whoweareAct.classList.remove('active');
			whoweare.classList.add('active');
			whoweareAct = whoweare;
		});

	});
};

/* Skill */
const but_1 = document.querySelector('.but_1');
const but_2 = document.querySelector('.but_2');
const but_3 = document.querySelector('.but_3');

const nameMember = document.getElementById("wwa__name");;
const profMember = document.getElementById("wwa__prof");;

const skill_1 = document.getElementById('phts');
const skill_2 = document.getElementById('ilst');
const skill_3 = document.getElementById('sket');
const skill_4 = document.getElementById('afef');

const wwapp_1 = document.getElementById('wwapp_1');
const wwapp_2 = document.getElementById('wwapp_2');
const wwapp_3 = document.getElementById('wwapp_3');
const wwapp_4 = document.getElementById('wwapp_4');

if (but_1 && but_2 && but_3) {
	but_1.addEventListener("click", function (e) {
	    nameMember.innerHTML = "JANE SMITH";
	    profMember.innerHTML = "DESIGNER";
	    skill_1.style = "width:88%;";
	    skill_2.style = "width:92%;";
	    skill_3.style = "width:90%;";
	    skill_4.style = "width:98%;";
	    wwapp_1.innerHTML = "88%";
	    wwapp_2.innerHTML = "92%";
	    wwapp_3.innerHTML = "90%";
	    wwapp_4.innerHTML = "98%";
	});

	but_2.addEventListener("click", function (e) {
	    nameMember.innerHTML = "Bogdan";
	    profMember.innerHTML = "programmer";
	    skill_1.style = "width:83%;";
	    skill_2.style = "width:86%;";
	    skill_3.style = "width:100%;";
	    skill_4.style = "width:79%;";
	    wwapp_1.innerHTML = "83%";
	    wwapp_2.innerHTML = "86%";
	    wwapp_3.innerHTML = "100%";
	    wwapp_4.innerHTML = "79%";
	});

	but_3.addEventListener("click", function (e) {
	    nameMember.innerHTML = "Kirill";
	    profMember.innerHTML = "programmer";
	    skill_1.style = "width:100%;";
	    skill_2.style = "width:68%;";
	    skill_3.style = "width:100%;";
	    skill_4.style = "width:88%;";
	    wwapp_1.innerHTML = "100%";
	    wwapp_2.innerHTML = "68%";
	    wwapp_3.innerHTML = "100%";
	    wwapp_4.innerHTML = "88%";
	});
}

/* Map */
const open__map = document.querySelector('.open__map');
const maps = document.querySelector('.maps');

if (open__map) {
	open__map.addEventListener("click", function (e) {
		open__map.classList.toggle('active');
		maps.classList.toggle('active');
	})
}