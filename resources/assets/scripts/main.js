// import external dependencies
import 'jquery';
import imagesLoaded from 'imagesloaded';
import 'slick-carousel/slick/slick.min.js';
import LazyLoad from 'vanilla-lazyload';


// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

function resizeGridItem(item){
  var grid = document.getElementsByClassName('grid')[0];
  var rowHeight = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-auto-rows'));
  var rowGap = parseInt(window.getComputedStyle(grid).getPropertyValue('grid-row-gap'));
  var rowSpan = Math.ceil((item.querySelector('.content').getBoundingClientRect().height+rowGap)/(rowHeight+rowGap));
  item.style.gridRowEnd = 'span '+rowSpan;
}

function resizeAllGridItems(){
  var allItems = document.getElementsByClassName('item');
  var x;
  for(x=0;x<allItems.length;x++){
     resizeGridItem(allItems[x]);
  }
}

window.onload = resizeAllGridItems();

window.addEventListener('resize', resizeAllGridItems);

var allItems = document.getElementsByClassName('item');
var x;
for(x=0;x<allItems.length;x++){
  imagesLoaded( allItems[x], resizeInstance);
}

function resizeInstance(instance){
  var item = instance.elements[0];
  resizeGridItem(item);
}

//Navigation Fade in Menu Effect
window.addEventListener('load',function(){
	var nodes = document.querySelectorAll('nav[data-action="expand"] *:first-child');
	for(var i=0; i<nodes.length; i++){
		nodes[i].addEventListener('click',function(){
			var parent = this.parentNode;
			if(parent.classList.contains('open') == false)parent.classList.add('open');
				else parent.classList.remove('open');
		});
	}

	var nodesi = document.querySelectorAll(
		'nav[data-action="expand"] *:nth-child(2) > *'
	);
	for(var o=0; o<nodesi.length; o++){
		nodesi[o].style.transitionDelay = (0.5+(o/5))+'s';
	}
});

//Slick Carousel Slides on Project page
$('.coolio').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 9000,
}); 

//LazyLoad
new LazyLoad({
  elements_selector: '.card-img-top',
  threshold: 0,
});

//Toggle Hamburger Menu
$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
  $(this).toggleClass('open');
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());