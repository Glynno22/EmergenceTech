<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>devieEmergence</title>
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
	<style>
		label{
			padding-top: 20px;
		}
		input[type="checkbox"]{
			padding-top: 20px;
		}
	</style>
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
				     <h3>Demande De Devie Form</h3>
				 </div>
			  </div>
		  </div>
	  </div>
	</section>
	
	<!-- end section -->
   
	<!-- section -->
	<div class="container p-5">
		<form class="row g-3">
		<div class="col-md-6">
				<label for="inputNom" class="form-label">Nom</label>
				<input type="text" class="form-control" id="inputNom">
			</div>
			<div class="col-md-6">
				<label for="inputEmail4" class="form-label">Email</label>
				<input type="email" class="form-control" id="inputEmail4">
			</div>
			
			<div class="col-12">
				<label for="inputAddress" class="form-label">Address De l'entreprise</label>
				<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
			</div>
			<div class="col-12">
				<label for="inputAddress2" class="form-label">Address </label>
				<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
			</div>
			<div class="col-md-6">
				<label for="inputCity" class="form-label">Description du Projet</label>
				<textarea class="form-control" cols="30" id="inputCity"> </textarea>
			</div>
			<div class="col-md-4">
				<label for="inputState" class="form-label">Nos Service</label>
				<select id="inputState" class="form-select">
				<option selected>Devellopement des Sites Web.</option>
				<option>Design Graphique</option>
				<option value="">Community Management</option>
				<option value="">Devellopement apk Web et Mobile</option>
				</select>
			</div>
			<div class="col-md-2">
				<label for="inputZip" class="form-label">Ficher</label>
				<input type="file" class="form-control" id="inputZip">
			</div>
			<!-- <div class="col-12">
				<div class="form-check">
				<input class="form-check-input" type="checkbox" id="gridCheck">
				<label class="form-check-label" for="gridCheck">
					Check me out
				</label>
				</div>
			</div> -->
			<div class="col-12 pt-5">
				<button type="submit" class="btn btn-primary">Faire Demande</button>
			</div>
		</form>
	</div>
	<!-- end section -->

	<!-- section -->

		

		<!-- <div class="container mt-5 mb-5 bg-gray">
			
			<form class="row g-3 needs-validation" novalidate>
				<div class="col-md-4">
					<label for="validationCustom01" class="form-label">First name</label>
					<input type="text" class="form-control" id="validationCustom01" placeholder="Nom" required>
					<div class="valid-feedback">
					Looks good!
					</div>
				</div>
				<div class="col-md-4">
					<label for="validationCustom02" class="form-label">Last name</label>
					<input type="text" class="form-control" id="validationCustom02" value="Otto" required>
					<div class="valid-feedback">
					Looks good!
					</div>
				</div>
				<div class="col-md-4">
					<label for="validationCustomUsername" class="form-label">Username</label>
					<div class="input-group has-validation">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
					<input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
					<div class="invalid-feedback">
						Please choose a username.
					</div>
					</div>
				</div>
				<div class="col-md-6">
					<label for="validationCustom03" class="form-label">City</label>
					<input type="text" class="form-control" id="validationCustom03" required>
					<div class="invalid-feedback">
					Please provide a valid city.
					</div>
				</div>
				<div class="col-md-3">
					<label for="validationCustom04" class="form-label">State</label>
					<select class="form-select" id="validationCustom04" required>
					<option selected disabled value="">Choose...</option>
					<option>...</option>
					</select>
					<div class="invalid-feedback">
					Please select a valid state.
					</div>
				</div>
				<div class="col-md-3">
					<label for="validationCustom05" class="form-label">Zip</label>
					<input type="text" class="form-control" id="validationCustom05" required>
					<div class="invalid-feedback">
					Please provide a valid zip.
					</div>
				</div>
				<div class="col-12">
					<div class="form-check">
					<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
					<label class="form-check-label" for="invalidCheck">
						Agree to terms and conditions
					</label>
					<div class="invalid-feedback">
						You must agree before submitting.
					</div>
					</div>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Submit form</button>
				</div>
			</form>
		</div> -->

		<div class="container ">
			<form action="">
				<div class="col-6">

				</div>
				
			</form>
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