<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>devieAPKWeb&Mobile</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="image/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

	<?php include "style.php";?>


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="inner_page" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="images/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

	<?php @include "connexion.php" ?>


    <!-- Start header -->
	<?php @include "header.php" ?>

    <!-- End header -->

	<!-- section -->
	
	<section class="inner_banner" >
	  <div class="container">
	      <div class="row">
		      <div class="col-12">
			     <div class="full">
				     <h3>Devie Application Web & Mobile</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<!-- end section -->
   
	<!-- section -->
    <div class="section layout_padding contact_section" style="background:#f6f6f6;">
        <div class="container">
               <div class="row">
                 <div class="col-lg-8 col-md-8 col-sm-12">
				    <div class="full float-right_img">
                        <img src="images/logobleu.png" alt="Photo">
                    </div>
                 </div>
				 <div class="col-lg-4 col-md-4 col-sm-12">
				    <div class="contact_form">
					<form action="contact.php" method="POST" style=" padding: 5px; border-radius: 15px;">
						   <fieldset>
						       <div class="full field">
							      <input type="text" placeholder="Nom de L'entreprise / Particulier" name="nom" style="margin-bottom: 0px; outline: none;" />
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
							   <div class="full field">
							      <input type="email" placeholder="Adresse Email" name="email" style="margin-bottom: 0px; outline: none;" />
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
							   <div class="full field">
							      <input type="number" placeholder="Numéro téléphone" name="tel" style="margin-bottom: 0px; outline: none;" />
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
							   <div class="full field">
							      <input type="number" placeholder="Dévies Que vous Proposez" name="devies" style="margin-bottom: 0px; outline: none;" />
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
							   
							   <div class="full field" >
							      <textarea placeholder="Déscription du Projet" name="message" style="margin-bottom: 0px; outline: none;"></textarea>
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
							   <div class="full field">
								  <label for="">Importer un cahier de charge si Possible</label>
							      <input type="file" name="tel" style="margin-bottom: 0px; outline: none;" />
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
							   <div class="full field">
							      <div class="center"><input type="submit" value="Envoyer" style="margin-bottom: 0px; outline: none;"></div>
								  <div style="width: 100%; height: 4px; background-image: linear-gradient(to right, #002247, #bde1e5); margin-top: 0;"></div>
							   </div>
						   </fieldset>
						</form>
					</div>
                 </div>
               </div>			  
           </div>
        </div>
	<!-- end section -->

	
	<?php @include "footer.php" ?>


    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script>
    <script src="js/slider-index.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/custom.js"></script>
	<script>
	/* counter js */

(function ($) {
	$.fn.countTo = function (options) {
		options = options || {};
		
		return $(this).each(function () {
			// set options for current element
			var settings = $.extend({}, $.fn.countTo.defaults, {
				from:            $(this).data('from'),
				to:              $(this).data('to'),
				speed:           $(this).data('speed'),
				refreshInterval: $(this).data('refresh-interval'),
				decimals:        $(this).data('decimals')
			}, options);
			
			// how many times to update the value, and how much to increment the value on each update
			var loops = Math.ceil(settings.speed / settings.refreshInterval),
				increment = (settings.to - settings.from) / loops;
			
			// references & variables that will change with each update
			var self = this,
				$self = $(this),
				loopCount = 0,
				value = settings.from,
				data = $self.data('countTo') || {};
			
			$self.data('countTo', data);
			
			// if an existing interval can be found, clear it first
			if (data.interval) {
				clearInterval(data.interval);
			}
			data.interval = setInterval(updateTimer, settings.refreshInterval);
			
			// initialize the element with the starting value
			render(value);
			
			function updateTimer() {
				value += increment;
				loopCount++;
				
				render(value);
				
				if (typeof(settings.onUpdate) == 'function') {
					settings.onUpdate.call(self, value);
				}
				
				if (loopCount >= loops) {
					// remove the interval
					$self.removeData('countTo');
					clearInterval(data.interval);
					value = settings.to;
					
					if (typeof(settings.onComplete) == 'function') {
						settings.onComplete.call(self, value);
					}
				}
			}
			
			function render(value) {
				var formattedValue = settings.formatter.call(self, value, settings);
				$self.html(formattedValue);
			}
		});
	};
	
	$.fn.countTo.defaults = {
		from: 0,               // the number the element should start at
		to: 0,                 // the number the element should end at
		speed: 1000,           // how long it should take to count between the target numbers
		refreshInterval: 100,  // how often the element should be updated
		decimals: 0,           // the number of decimal places to show
		formatter: formatter,  // handler for formatting the value before rendering
		onUpdate: null,        // callback method for every time the element is updated
		onComplete: null       // callback method for when the element finishes updating
	};
	
	function formatter(value, settings) {
		return value.toFixed(settings.decimals);
	}
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
	formatter: function (value, options) {
	  return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
	}
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
	var $this = $(this);
	options = $.extend({}, options || {}, $this.data('countToOptions') || {});
	$this.countTo(options);
  }
});
	</script>
</body>

</html>