
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js gt-ie9 non-ie" lang="en"> <!--<![endif]-->
<head>
	<title>Emoticate-Sentiment Analysis</title>
	<link rel="shortcut icon" type="image/png" href="img/home/favicon.png">
	<meta name="keywords" content="" />
	<meta name="description" content="CreativeMob, Inc. is a full-service digital marketing and technology agency located in San Diego, California." />
	<meta charset="utf-8">
	<meta name="robots" content="index, follow">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/mobile-menu.css">
	<link rel="stylesheet" type="text/css" href="css/common.css">
	<link type="text/css" media="screen" rel="stylesheet" href="css/awwwards.css" />
	<style>
	.antispam { display:none;}
	</style>

	<link type="text/css" media="screen" rel="stylesheet" href="css/iexplorer.css" />

	<script type="text/javascript" src="js/libs/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/libs/js-modernizr.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.validate.min.js"></script>
	<script type="text/javascript" src="js/libs/jquery.toftrigger.js"></script>
	<script type="text/javascript" src="js/common.min.js"></script>
	<script type="text/javascript" src="js/js-iedetect.js"></script>
	<!--[if gte IE 8]>
		<link rel="stylesheet" type="text/css" href="css/iexplorer.css" media="screen, projection" />
	<![endif]-->
	<!--[if lte IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if gte IE 9]>
	  <style type="text/css">
	    .gradient {
	       filter: none;
	    }
	  </style>
	<![endif]-->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-47781007-1', 'creative-mob.com');
	  ga('send', 'pageview');

	</script>
	<script>
	$(document).ready(function() {
			// init form validation
			$('#connectForm').validate({
				rules: {
					name:    {required: true},
					email:   {required: true, email: true},
					phone:   {required: true, digits: true, rangelength: [10, 10]},
					message: {required: true}
				}
			});
		});
	</script>
</head>
<body class="home">
	<!-- MOBILE MENU -->
	<!-- START MOBILE MENU -->

<div class="overlay-menu overlay-hugeinc">
    <div class="overlay-close">Close</div>
    <nav>
        <ul>
            <li><a href="/"><div class="icon-wrap"><div class="icon home"></div></div>HOME</a></li>
            <li><a class="small" href="/about.html"><div class="icon-wrap"><div class="icon meet"></div></div>ABOUT</a></li>
            <li><a href="http://creative-mob.com/showroom/"><div class="icon-wrap"><div class="icon what"></div></div>SHOWROOM</a></li>
            <li><a href="/services.html"><div class="icon-wrap"><div class="icon services"></div></div>SERVICES</a></li>
            <li><a href="/contact.html"><div class="icon-wrap"><div class="icon contact"></div></div>CONTACT</a></li>
        </ul>
    </nav>
</div>
	
	<div class="maincontainer">
		
		<!-- MOBILE HEADER -->
		<header class="mobile">
	<div class="menu-mobile-trigger" id="trigger-overlay"></div>
</header>		
		<!-- WELCOME SECTION -->
		<section class="welcome">
			<div class="lights"></div>
			<div class="buildings"></div>
			<div class="blackbg"></div>
			<div class="title">
				<h1>Welcome to Emoticate</h1>
				<h2 class="subtitle">EMOTION ANALYSIS</h2>
			</div>
			<div class="blurb">
				<div class="inner">
					<h2>HELLO. WE ARE EMOTICATE.</h2>
					<p class="gray2">We use Deep Learning powered algorithms to extract features from the input data. These features are used to classify the emotion attached to the data.Sometimes the three classes of sentiment (positive, negative and neutral) are not sufficient to understand the nuances regarding the underlying tone of a sentence. Our Emotion Analysis classifier is trained on our proprietary dataset and tells whether the underlying emotion behind a message is: Happy, Sad, Angry, Fearful, Excited, Bored or Sarcastic.</p>
				</div>
			</div>
		</section>
		
		<!-- WHO-WE-ARE SECTION -->
		<section class="who">
			<div class="alley3d">
				<div class="cube">
					<div class="computer-scene"></div>
					<div class="code-window"><div class="code"></div></div>
					<div class="mobster-coding"></div>
					<div class="backface"></div>
					<div class="rightface"></div>
					<div class="bottomface"></div>
					<div class="blurb">
						<div class="inner">
							<h2 class="large">Who We Are</h2>
							<p>*Some text to be entered.*</p>
							<!-- doesn't fit nicely
							<p>Our team of highly motivated designers, developers, strategists and writers prides itself on collaborative development and flexibility resulting in projects that consistently exceed the expectations of our partners and their customers.</p>
						-->
					</div>
				</div>
				<div class="lamppost-shadow"></div>
				<div class="lamppost"></div>
				<div class="trashcan"></div>
			</div>
		</div>
	</section>
	
	<!-- MEET THE MOB -->
	<section class="meet">
		<div class="bricks"></div>
		<div class="mobsters">
			<div class="mobster mobster2"><div></div></div>
			<div class="mobster mobster5"><div></div></div>
			<div class="mobster mobster7"><div></div></div>
			<div class="mobster mobster3"><div></div></div>
			<div class="mobster mobster6"><div></div></div>
			<div class="mobster mobster8"><div></div></div>
			<div class="mobster mobster4"><div></div></div>
			<div class="mobster mobster9"><div></div></div>
			<div class="mobster mobster1"><div></div></div>
		</div>
		<div class="blurb">
			<div class="inner">
				<h2 class="large">Meet The Mob</h2>
				<p>Our team comprises of Apratim Shukla, Anmol Tomer, Mayank K Tolani and Ameesh Kumar Singh. <!-- <span class="extra">In industry terms, we are able to provide the full suite of digital marketing services.</span> --></p>
				<a class="button black inverted" href="/about.html">ABOUT US</a>
			</div>
		</div>
	</section>
	
	<!-- WHAT WE DO -->
	<section class="what">
		<div class="blackbg"></div>
		<div class="bottom"></div>
		<div class="bags">
			<div class="guitar"></div>
			<div class="bag1">
				<div class="bag1-handle"></div>
				<div class="bag1-bg"></div>
			</div>
			<div class="bag3"></div>
			<div class="bag2">
				<div class="bag2-paper">
					<div class="inner">
						<p class="black">We analyse the user's emotions based upon his input in the form of text,speech or image.We process the emotional tone behind a series of words, used to gain an understanding of the the attitudes, opinions and emotions expressed within an online mention.<span class="extra"></span></p>
						<a class="button black inverted" href="http://creative-mob.com/showroom/">SHOWROOM</a>
					</div>
				</div>
				<div class="bag2-flap"></div>
			</div>
		</div>
		<div class="fishingpole">
			<div class="fishingpole-handle"></div>
		</div>
		<div class="title">
			<h2 class="large">What We Do</h2>
		</div>
	</section>
	
	<!-- SERVICES SECTION -->
	<section class="services">
		<div class="waves">
			<div class="wave wave1"></div>
			<div class="wave wave2"></div>
			<div class="wave wave3"></div>
		</div>
		<div class="waterbg-shallow"></div>
		<div class="waterbg-deep"></div>
		<div class="seascene">
			<div class="inner">
				<div class="fish-blurry1"><div></div></div>
				<div class="fish-blurry2"><div></div></div>
				<div class="fish-blurry3"><div></div></div>
				<div class="seaweed-blurry1"></div>
				<div class="fish-blurry4"><div></div></div>
				<div class="fish-blurry5"><div></div></div>
				<div class="fish-blurry6"><div></div></div>
				<div class="seaweed-blurry2"></div>
				
				<div class="barrel"></div>
				<div class="seaweed1"></div>
				<div class="seaweed2"></div>
				<div class="starfish"></div>
				<div class="fish1"><div></div></div>
				<div class="fish2"><div></div></div>
				<div class="fish3"><div></div></div>
				<div class="seaweed3"></div>
				<div class="fish4"><div></div></div>
			</div>
		</div>
		<div class="blurb">
			<div class="inner">
				<h2 class="large">Services</h2>
				<p>The applications of sentiment analysis are broad and powerful. The ability to extract insights from social data is a practice that is being widely adopted by organisations across the world.</p>
				<p></p>
				<br>
				<a class="button black inverted" href="registration/register.php">SIGN UP</a>
				<a class="button black inverted" href="registration/login.php">LOGIN</a>
			</div>
		</div>
		<div class="fishingline">
			<div class="worm">
				<div class="worm-eyes"></div>
			</div>
		</div>
	</section>

</div>

<!-- DESKTOP MENU -->
<div class="menu-desktop open">
	<ul>
		<li class="home"><a href="/">HOME</a></li>
		<li class="about"><a href="/about.html">ABOUT</a></li>
		<li class="showroom"><a href="http://creative-mob.com/showroom/">SHOWROOM</a></li>
		<li class="services"><a href="/services.html">SERVICES</a></li>
		<li class="contact"><a href="/contact.html">CONTACT</a></li>
	</ul>
	<div class="circle">
		<img src="img/common/menus/test.png">
	</div>
	<div class="ribbon-left"></div>
	<div class="ribbon-right"></div>
</div>

<div class="overlay-window overlay-hugeinc">
	<div class="contact-window">
		<div class="close-window"><img src="http://creative-mob.com/img/common/close-window.svg" /></div>
		<div class="window-form">
			<h3>Let's Start Creating!</h3>
			<p>Fill out the fields below and send us a message. Look forward to hearing from you!</p>
			<form method="POST">
				<input type="text" name="w_name" placeholder="Name" />
				<input type="email" name="w_email" placeholder="Email" />
				<textarea name="w_message" placeholder="Message"></textarea>
				<button class="button send-msg">SEND MESSAGE</button>
			</form>
		</div>
		<div class="window-bar">
			<div class="the-bar"></div>
		</div>
		<div class="call-us-today">
			<h3>Call Us Today!</h3>
			<p>Perhaps a phone conversation is more your style? No worries!</p>
			<button class="button bigger call-us">Call Us Directly!</button>
			<h2>619.734.9265</h2>
		</div>
	</div>
</div><script type="text/javascript" src="js/menus.js"></script>
<script type="text/javascript" src="js/home.js"></script>
</body>
</html>