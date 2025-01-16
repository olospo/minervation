/*
 *
 * Slider activation on home page
 *
*/
jQuery(document).ready(function($){

	if ($('ul').hasClass('bxslider')) {
		
		$('.bxslider').bxSlider({

			'controls': false,
			'auto' : true,
			'pause': 5000,
			'mode': 'fade' // Change mode to fade

		});

		$('.work-bxslider').bxSlider({

			'pager': false

		});

	}

});

/*
 *
 * Activate Google map
 *
*/
jQuery(document).ready(function($){

	if ( $('div').hasClass('contact-map') ) {

		var map;
		var minervation_location = new google.maps.LatLng(51.746080, -1.256264);
		var MY_MAPTYPE_ID = 'custom_style';

		function initialize() {

			var featureOpts = [
		    {
		      	
		    }
		  	];

			var mapOptions = {

				zoom: 16,
				center: minervation_location,
				scrollwheel: false,
				mapTypeControlOptions: {
      				mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
    			},
    			mapTypeId: MY_MAPTYPE_ID

			};

			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			var styledMapOptions = {
	    		name: 'Custom Style'
	  		};

	  		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	  		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

	  		var pin = '../wp-content/themes/minervation/images/pin.png';

	  		var marker = new google.maps.Marker({
		     	position: minervation_location,
		      	map: map,
		      	icon: pin
		  	});

	  	}

	  	google.maps.event.addDomListener(window, 'load', initialize);

	}

});

/*
 *
 * Adding placeholder to newsletter form
 *
*/
jQuery(document).ready(function($){

	if ($('div').hasClass('gform_wrapper')) {
		
		$('#field_2_1 input').attr('placeholder' , '* First name');
		$('#field_2_2 input').attr('placeholder' , '* Last Name');
		$('#field_2_3 input').attr('placeholder' , '* Email');
		$('#field_2_4 input').attr('placeholder' , '* Phone number');
		$('#field_2_5 input').attr('placeholder' , 'Organisation');
		$('#gform_submit_button_2').attr('value' , 'Sign up');

	}

});

/*
 *
 * Changing the style of slider on mobile
 *
*/
jQuery(document).ready(function($){ 

	if ($('ul').hasClass('bxslider')) {

		width = $(window).width();

		if (width < 768) {
			$('.bxslider li').addClass('slider-colour-bg ');
		}

	}

});

// Bootstrap for windows phone fix bugs

if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}



/*
 *
 * Writting review page js
 *
*/
jQuery(document).ready(function($){

	if ($('section').hasClass('write-review-page')) {

		$('label').each(function(){
			$(this).remove();

		});

		if ($('p').hasClass('login-submit')) {

			$('#user_pass').attr("placeholder", "Your given password");
			$('#user_login').attr("placeholder", "Your given username");
		}

		// Add counter to text field
		$("#input_1_17").after('<div id="counter" class="maison-demi"><span>200</span> characters remaining</div>');

		// Get the current page URL
		var url = window.location.href;
		// Split the URL into two piecec if there is any argument passed by URL
		var pieces = url.split("&");
		var company = "";

		if ( pieces[1] ) {

			company = pieces[1].substring(8);

		};

		// check if the compnay exists in select menu
		if ( company != "" ) { 

			$('#input_1_8').css('display', 'none');

		}

		$("#input_1_17").keyup(function(){

			$("#counter").html( "<span>" + (200 - $(this).val().length) + "</span> characters remaining");

		});

		var site_url = $('body').attr('data-site-url');

		$('#acf-field-stars').raty({

			starOff     : site_url + '/wp-content/themes/minervation/images/star-review-page-off.png',                           
			starOn      : site_url + '/wp-content/themes/minervation/images/star-review-page-on.png',
			size        : 26,
			score    	: 5,

			click: function(score, evt) {

		    	$('#input_1_14').attr("value", score);

		  	}

		});
		
	}
	if ($('div').hasClass('gform_wrapper')) {

		$('#input_1_11').attr('placeholder', 'Full Name');
		$('#input_1_12').attr('placeholder', 'Job Title');
		$('#input_1_17').attr('placeholder', 'Review');
		$('#input_1_8').attr('placeholder', 'Company');
		

	}


});


