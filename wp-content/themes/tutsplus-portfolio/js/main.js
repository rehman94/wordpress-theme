jQuery(document).ready(function( $ ) {
	var $container = $('.portfolio-items').isotope('layout');

	$('.portfolio-filter').on( 'click', 'a', function(e) {
	  e.preventDefault();
	  $('.portfolio-filter li').removeClass('active');
	  $(this).closest('li').addClass('active');
	  var filterValue = $(this).attr('data-filter');
	  $container.isotope({ filter: filterValue });
	});
	            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
});
