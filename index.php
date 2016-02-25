<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US"><!--<![endif]-->
<head>
	<title>Symeon - Dance Music Producer</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
	<![endif]-->
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="description" content="Premium theme.">
	<meta name="keywords" content=""/>
	<meta name="author" content="Site Author">
	<!-- Fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<!-- <meta name="robots" content="index,follow"> -->

	<!-- ############################# Stylesheets ############################# -->
	<link rel="stylesheet" href="css/menu.css" media="screen" />
	<link rel="stylesheet" href="css/style.css" media="screen" />
	<link rel="stylesheet" href="css/media-queries.css" media="screen" />
	<!-- Fancybox styles -->
	<link rel="stylesheet" href="css/fancybox.custom.css" media="screen" />
	<!-- Flexslider styles -->
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
	<!-- Fullwidth player -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.fullwidthAudioPlayer.css">
	<!-- //Fullwidth player -->

	<!-- ############################# Javascripts ############################# -->
	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
	<!-- Add HTML5 support for older IE browsers -->
	<!--[if lt IE 9]>
		<script src="js/html5.min.js"></script>
		<script src="js/selectivizr-and-extra-selectors.min.js"></script>
	<![endif]-->
	<!-- Modernizr -->
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery_2_1_1.js" type="text/javascript"></script>
	<script src="js/mailchimp_special.js"></script>
</head>
<body>

<!-- ############################# Update Message for older browsers ############################# -->
<!--[if lte IE 7]>
   <div id="ie-message"><p>You are using Internet Explorer 7.0 or older to view this site. Your browser is an eight year old browser which does not display modern web sites properly. Please upgrade to a newer browser to fully enjoy the web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->


<!-- ############################# intro ############################# -->
<section id="intro" class="intro-resize parallax clearfix" style="background-image: url(placeholders/djsymeon_with_logo.png); background-size: 760px auto; background-repeat: no-repeat; background-color: #000;">
	<!-- animated bg -->
	<div class="intro-bg"></div>
	<!-- container -->
	<div class="container">
		<!-- ############ logo ############ -->
		<!-- <img id="intro-logo" src="placeholders/intro-logo.png" alt="Logo"> -->
		<!-- ############ ticker ############ -->
		<!-- <div id="ticker-wrap">
			<ul id="ticker">
				<li>
					<img src="placeholders/symeon_logo_2016.png" width="300px" height="80px" />
				</li>
				<li>
					Music Producer
				</li>
			</ul>
		</div> -->
		<!-- /ticker -->
		<!-- ############ header button ############ -->
		<!-- <a id="intro-button" class="smooth-scroll" href="#upcoming-event"><span>ENTER</span></a> -->
		<!-- ############ scroll arrows ############ -->
		<a id="scroll-arrows" class="smooth-scroll" href="#masonry-news"><img src="img/scroll-arrows.png" alt="scroll down"></a>
	</div>
	<!-- /container -->
</section>
<!-- /intro -->


<!-- ############################# navigation section ############################# -->
<section id="main-nav-wrapper">
	<!-- main navigation -->
	<div id="main-nav">

		<!-- ############ search ############ -->
		<div id="search-wrap" style="display:none">
			<input type="text" placeholder="Search and hit enter..." name="s" id="search" />
		</div>
		<!-- /search -->

		<!-- navigation container -->
	   	<div class="nav-container">

		   	<!-- ############ logo ############ -->
		   	<a href="#intro" id="logo" class="smooth-scroll">
		   		<img src="placeholders/symeon_logo_2016.png" alt="Logo" width="112">
		   	</a>
		   	<!-- /logo -->

		   	<!-- ############ icon navigation ############ -->
			<nav id="icon-nav">
				<ul>
					<li><a href="#intro" id="nav-up" class="smooth-scroll"><span class="icon-arrow-up-2"></span></a></li>
					<li><a href="#" id="nav-search"><span class="icon-search"></span></a></li>
				</ul>
			</nav>
			<!-- /icon navigation -->

			<!-- ############ navigation ############ -->
			<nav id="nav" class="one-page-nav">
				<ul>
					<li>
                		<a href="#">Features</a>
                        <ul>
                        	<li>
                            	<a href="grid.html" class="page-by-ajax" data-ajax-options='{"target" :"#custom-page"}'>Grid</a>
                            </li>
                            <li>
                            	<a href="masonry.html" class="page-by-ajax" data-ajax-options='{"target" :"#custom-page"}'>Masonry Boxes</a>
                            </li>
                            <li>
                            	<a href="gallery.html" class="page-by-ajax" data-ajax-options='{"target" :"#custom-page"}'>Gallery</a>
                            </li>
                            <li>
                            	<a href="elements.html" class="page-by-ajax" data-ajax-options='{"target" :"#custom-page"}'>Elements</a>
                            </li>
                            <li>
                            	<a href="videos.html" class="page-by-ajax" data-ajax-options='{"target" :"#custom-page"}'>Videos</a>
                            </li>
                            <li>
                            	<a href="#newsletter">Newsletter</a>
                            </li>
                            <li>
                            	<a href="#">Sub Menu</a>
                            	<ul>
                            		<li>
                            			<a href="#">Level 2.1</a>
                            		</li>
                            		<li>
                            			<a href="#">Level 2.2</a>
                            		</li>
                            		<li>
                            			<a href="#">Level 2.3</a>
                            		</li>
                            	</ul>
                            </li>
                        </ul>
                    </li>
					<li>
						<a href="#portfolio">Releases</a>
					</li>
					<li>
						<a href="#events">Events</a>
					</li>
					<li>
						<a href="#bio">Bio</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</nav>
			<!-- /navigation -->

			<!-- responsive navigation -->
			<div id="dl-menu" class="dl-menuwrapper one-page-nav">
				<button class="dl-trigger">Open Menu</button>
				<!-- RESPONSIVE NAVIGATION HERE -->
			</div>
			<!-- /responsive navigation -->
	   	</div>
	   	<!-- /navigation container -->
	</div>
	<!-- /main navigation -->
</section>
<!-- /navigation section -->


<!-- ############ page container loaded via ajax ############ -->
<div id="custom-page" class="ajax-holder"></div>
<!-- /project container -->


<!-- ############################# masonry news ############################# -->
<section id="masonry-news" class="masonry-news clearfix">
	<!-- container -->
	<div class="container clearfix">
		<!-- ############ masonry ############ -->
		<div class="masonry">
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="placeholders/mp3/when_the_night_falls_sample.mp3" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play Sample</h6>
					</div>
					<!-- image -->
					<img src="placeholders/album_covers/when_the_night_falls.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">Soon!!!</span>
				</a>
			</div>
			<div class="brick width-1-4 height-1-4">
				<a href="placeholders/mp3/when_the_night_falls_sample.mp3" class="thumb">
					<div class="flip-container">
						<div class="flipper">
							<div class="front" style="background:#333333">
								<span class="brick-icon icon-soundcloud"></span>
								<span class="brick-title">COMING SOON!! <br> When The Night Falls by Symeon (Sample)</span>
							</div>
							<div class="back">
								<span class="brick-icon icon-arrow-left-3"></span>
								<span class="brick-title">Coming Soon!!!</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="https://soundcloud.com/planetsymeon/sample-of-at-the-bitter-end-by-sinisha-remixed-by-symeon" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play Sample</h6>
					</div>
					<!-- image -->
					<img src="placeholders/album_covers/at_the_bitter_end_sinisha_symeon.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">Soon!!!</span>
				</a>
			</div>
			<div class="brick width-1-4 height-1-4">
				<a href="placeholders/mp3/at_the_bitter_end_sample.mp3" class="thumb fap-single-track">
					<div class="flip-container">
						<div class="flipper">
							<div class="front" style="background:#333333">
								<span class="brick-icon icon-soundcloud"></span>
								<span class="brick-title">COMING SOON!! <br> At The Bitter End by Sinisha Golemac (Symeon Remix)</span>
							</div>
							<div class="back">
								<span class="brick-icon icon-arrow-left-3"></span>
								<span class="brick-title">Coming Soon!!!</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="placeholders/mp3/site_promo_feel_so_free.mp3" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play Sample</h6>
					</div>
					<!-- image -->
					<img src="placeholders/album_covers/feel_so_free_symeon.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">Out Now!</span>
				</a>
			</div>
			<div class="brick width-1-4 height-1-4">
				<a href="http://pro.beatport.com/track/feel-so-free-feat-lulu-jones-feat-lulu-jones-original-mix/7424580" class="thumb">
					<div class="flip-container">
						<div class="flipper">
							<div class="front" style="background:#333333">
								<span class="brick-icon icon-soundcloud"></span>
								<span class="brick-title">DOWNLOAD NOW!! <br> Feel So Free by Symeon (Original Mix)</span>
							</div>
							<div class="back">
								<span class="brick-icon icon-arrow-left-3"></span>
								<span class="brick-title">Download from Beatport (Released December 18, 2015)</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="placeholders/mp3/site_promo_feel_so_free_cds_remix.mp3" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play Sample</h6>
					</div>
					<!-- image -->
					<img src="placeholders/album_covers/feel_so_free_symeon.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">Out Now!</span>
				</a>
			</div>
			<div class="brick width-1-4 height-1-4">
				<a href="https://pro.beatport.com/track/feel-so-free-feat-lulu-jones-feat-lulu-jones-remix/7424581" class="thumb">
					<div class="flip-container">
						<div class="flipper">
							<div class="front" style="background:#333333">
								<span class="brick-icon icon-soundcloud"></span>
								<span class="brick-title">DOWNLOAD NOW!! <br> Feel So Free by Symeon (Channa De Silva Remix)</span>
							</div>
							<div class="back">
								<span class="brick-icon icon-arrow-left-3"></span>
								<span class="brick-title">Download from Beatport (Released December 18, 2015)</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="https://soundcloud.com/beergut247/symeon-spots" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play Sample</h6>
					</div>
					<!-- image -->
					<img src="placeholders/album_covers/spots_symeon.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">Out Now!</span>
				</a>
			</div>
			<div class="brick width-1-4 height-1-4">
				<a href="https://soundcloud.com/beergut247/symeon-spots" class="thumb">
					<div class="flip-container">
						<div class="flipper">
							<div class="front" style="background:#333333">
								<span class="brick-icon icon-soundcloud"></span>
								<span class="brick-title">DOWNLOAD NOW!! <br> Spots by Symeon (Original Mix)</span>
							</div>
							<div class="back">
								<span class="brick-icon icon-arrow-left-3"></span>
								<span class="brick-title">Download from Beatport (Released December 18, 2015)</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="https://pro.beatport.com/track/transfers-original-mix/6641443" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play Sample</h6>
					</div>
					<!-- image -->
					<img src="placeholders/album_covers/transfers_symeon.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">Out Now!</span>
				</a>
			</div>
			<div class="brick width-1-4 height-1-4">
				<a href="https://pro.beatport.com/track/transfers-original-mix/6641443" class="thumb">
					<div class="flip-container">
						<div class="flipper">
							<div class="front" style="background:#333333">
								<span class="brick-icon icon-soundcloud"></span>
								<span class="brick-title">DOWNLOAD NOW!! <br> Transfers by Symeon (Original Mix)</span>
							</div>
							<div class="back">
								<span class="brick-icon icon-arrow-left-3"></span>
								<span class="brick-title">Download from Beatport (Released May 21, 2015)</span>
							</div>
						</div>
					</div>
				</a>
			</div>
			<!-- /brick -->

		</div>
		<!-- /masonry -->
	</div>
	<!-- /container -->
</section>
<!-- /masonry news -->


<!-- ############################# upcoming event ############################# -->
<!-- <section id="upcoming-event" class="event-countdown">
	<div class="container clearfix">
		<header class="content-header">
			<h6 class="upcoming-event">Upcoming Event</h6>
			<h2 class="content-title">Amsterdam Dance</h2>
			<span class="sub-heading">Amsterdam, Netherlands</span>
		</header>
		<div class="countdown" data-event-date="2014/10/18 20:20:00">
			<div class="days" data-label="Days">000</div>
			<div class="hours" data-label="Hours">000</div>
			<div class="minutes" data-label="Minutes">000</div>
			<div class="seconds" data-label="Seconds">000</div>
		</div>
	</div>
</section> -->
<!-- /upcoming event -->


<!-- ############################# recent tweet ############################# -->
<section class="recent-tweet">
    <!-- <div class="section-sign">
        <span class="icon-twitter"></span>
    </div>
    <div class="container clearfix">
        <ul class="tweets" data-tweets-count="0">
        	<li>Oops, our Twitter feed is unavailable at the moment - <a href="#">Follow us on Twitter!</a></li>
        </ul>
    </div> -->
</section>


<!-- ############################# portfolio ############################# -->
<section id="portfolio" class="section">

	<!-- ############ Paralax Intro ############ -->
	<div id="portfolio-header" class="section-header parallax clearfix" style="background-image: url(placeholders/release-header-1920x1000.jpg)" data-interia="0.1">
		<div class="overlay"></div> <!-- overlay layer -->
		<!-- /container -->
		<div class="container clearfix">
			<!-- <h6 class="section-sub-heading">LISTEN MY TRACKS</h6> -->
			<img src="placeholders/symeon_logo_2016.png" class="aligncenter" alt="footer-logo" width="400">
			<h2 class="section-heading">HEAR MY TRACKS</h2>
		</div>
		<!-- /container -->
	</div>
	<!-- /parallax intro -->

	<!-- ############ project container loaded via ajax ############ -->
	<div id="project" class="ajax-holder"></div>
	<!-- /project container -->

	<!-- ############ portfolio filter ############ -->
	<div id="portfolio-main-filter" class="filter">
		<ul class="filter-list item-filter active-filter clearfix">
			<li class="filter-label"><span class="label">Filter</span></li>
			<li><a data-categories="*">All</a></li>
			<li><a data-categories="new">New Tracks</a></li>
			<li><a data-categories="trance">Trance</a></li>
			<li><a data-categories="futurehouse">Future House</a></li>
			<li><a data-categories="deephouse">Deep House</a></li>
			<!-- <li><a data-categories="drum-and-bass">Drum and Bass</a></li>
			<li><a data-categories="glitch">Glitch Hop</a></li>
			<li><a data-categories="breakbeat">Breakbeat</a></li>
			<li><a data-categories="uk-funky">UK Funky</a></li>
			<li><a data-categories="dubstep">Dubstep</a></li> -->
		</ul>
	</div>
	<!-- /portfolio filter -->

	<!--############ portfolio grid ############ -->
	<div id="portfolio-items" class="fullwidth items clearfix">
		<!-- item -->
		<div class="item" data-categories="new trance deephouse">
			<a href="project01.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Feel So Free <span>(Original Mix)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<!-- image -->
				<img class="lazy" src="placeholders/album_covers/feel_so_free_symeon.jpg" data-src="placeholders/album_covers/feel_so_free_symeon.jpg" alt="Release image" >
				<!-- badge -->
				<span class="badge new">NEW</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Feel So Free</span>
					<span class="tip-genre">Vocal Trance</span>
					<span class="tip-date">December 18, 2015</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="new trance deephouse">
			<a href="project01.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Feel So Free <span>(Channa De Silva Remix)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/album_covers/feel_so_free_symeon.jpg" data-src="placeholders/album_covers/feel_so_free_symeon.jpg" alt="Release image" >
				<!-- badge -->
				<span class="badge new">NEW</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Feel So Free</span>
					<span class="tip-genre">Vocal Trance</span>
					<span class="tip-date">December 18, 2015</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="new trance">
			<a href="project02.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Spots <span>(Original Mix)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/album_covers/spots_symeon.jpg" data-src="placeholders/album_covers/spots_symeon.jpg" alt="Release image" >
				<!-- badge -->
				<span class="badge new">NEW</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Spots</span>
					<span class="tip-genre">Trance</span>
					<span class="tip-date">May 23, 2015</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="new trance">
			<a href="project03.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Transfers <span>(Original Mix)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/album_covers/transfers_symeon.jpg" data-src="placeholders/album_covers/transfers_symeon.jpg" alt="Release image" >
				<!-- badge -->
				<span class="badge new">NEW</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Transfers</span>
					<span class="tip-genre">Trance</span>
					<span class="tip-date">May 21, 2015</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
	</div>
	<!-- /portfolio grid -->

</section>
<!-- /portfolio -->


<!-- ############################# events ############################# -->
<!-- <section id="events" class="section">

	<div id="events-header" class="section-header parallax clearfix" style="background-image: url(placeholders/events-header-1920x1000.jpg);" data-interia="0">
		<div class="overlay"></div>
		<div class="container clearfix">
			<h6 class="section-sub-heading">SEE YOU AT THE CLUB</h6>
			<h2 class="section-heading">SHOWS AND EVENTS</h2>
		</div>
	</div>

	<div id="event" class="ajax-holder"></div>

	<ul id="events-list">
		<li style="background-image: url(placeholders/event-01-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">08/23</span>
				<h2><a href="event01.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Amsterdam Dance</a></h2>
				<span class="event-location">Amsterdam, Netherlands</span>
			</div>
		</li>
		<li style="background-image: url(placeholders/event-02-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">09/02</span>
				<h2><a href="event02.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Bacardi Original Bar</a></h2>
				<span class="event-location">Budapest (budapest), Hungary</span>
			</div>
		</li>
		<li style="background-image: url(placeholders/event-03-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">09/18</span>
				<h2><a href="event03.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Luxorlive</a></h2>
				<span class="event-location">Arnhem, Netherlands</span>
			</div>
		</li>
		<li style="background-image: url(placeholders/event-04-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">10/30</span>
				<h2><a href="event04.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Papagayo Beach Club</a></h2>
				<span class="event-location">Santa Cruz De Tenerife, Spain</span>
			</div>
		</li>
	</ul>

	<div class="more-events">
		<h6 class="heading-xl">More events</h6>
	</div>

	<div class="masonry-events">
		<a href="event01.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/23</span>
			<span class="event-title">Roseland Ballroom</span>
			<span class="event-location">NEW YORK, NY</span>
		</a>
		<a href="event02.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/28</span>
			<span class="event-title">Hollywood Bowl</span>
			<span class="event-location">Hollywood, Ca</span>
		</a>
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/01</span>
			<span class="event-title">Shanghai Expo Center</span>
			<span class="event-location">Shanghai, China</span>
		</a>
		<a href="event04.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/03</span>
			<span class="event-title">Sepang International Circuit</span>
			<span class="event-location">Kuala Lumpur, Malaysia</span>
		</a>
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/18</span>
			<span class="event-title">Bacardi Original Bar</span>
			<span class="event-location">Budapest (budapest), Hungary</span>
		</a>
		<a href="event01.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/23</span>
			<span class="event-title">Roseland Ballroom</span>
			<span class="event-location">NEW YORK, NY</span>
		</a>
		<a href="event02.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/28</span>
			<span class="event-title">Hollywood Bowl</span>
			<span class="event-location">Hollywood, Ca</span>
		</a>
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/01</span>
			<span class="event-title">Shanghai Expo Center</span>
			<span class="event-location">Shanghai, China</span>
		</a>
		<a href="event04.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/03</span>
			<span class="event-title">Sepang International Circuit</span>
			<span class="event-location">Kuala Lumpur, Malaysia</span>
		</a>
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/18</span>
			<span class="event-title">Bacardi Original Bar</span>
			<span class="event-location">Budapest (budapest), Hungary</span>
		</a>
	</div>

</section> -->


<!-- ############################# bio ############################# -->
<section id="bio" class="section">

	<!-- ############ paralax Intro ############ -->
	<div id="bio-header" class="section-header parallax clearfix" style="background-image: url(placeholders/bio-header-1920x1000.jpg);" data-interia="0">
		<div class="overlay"></div> <!-- overlay layer -->
		<!-- container -->
		<div class="container clearfix">
			<!-- <h6 class="section-sub-heading">Symeon</h6> -->
			<img src="placeholders/symeon_logo_2016.png" class="aligncenter" alt="footer-logo" width="400">
			<h2 class="section-heading">BIOGRAPHY</h2>
		</div>
		<!-- /container -->
	</div>
	<!-- /parallax intro -->

	<!-- ############ section container ############ -->
	<div id="bio-content" class="section-container clearfix">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- column -->
				<h2>Symeon</h2>
				<div class="col-1-2">
					<p>
						Don't let Symeon's "chill" attitude fool you.  This
						rising star will take you for a joy ride.  SYMEON has
						signed with iRED Recordings and a resident DJ at Club RED.
						His tracks "Spots" and "Transfers" can be heard played
						by DJ's around the globe.  His current release, "Feel So Free"
						has hit as high as #8 on the prestigious Beatport 100.
					</p>
					<p>
						SYMEON Brings emotionally elevating tracks to the dance
						music scene with a fusion of Vocals, Trance, House music.
						His influences comes from his love for Trance. Soon
						later he started experimenting with other genres such as
						house, disco house, and deep house. He graduated with a
						degree in Audio Recording and applied those skills to
						doing what he does today. It's the kind of music that
						you can't help but to sing along to.
					</p>
					<p>
						Make sure to check out SYMEON the next time he is in
						town or for his most recent releases!
					</p>

					<blockquote>
						<p>
							I want to create songs to convey the events that I go
							through in my life. Whether I'm happy or sad, you'll hear it in
							my songs" - Symeon
						</p>
					</blockquote>
				</div>
				<!-- /column -->
				<!-- column -->
				<div class="col-1-2 last">
					<!-- <img src="placeholders/about-image-520x560.jpg" alt="My photo" class="aligncenter"> -->
				</div>
				<!-- /column -->
			</div>
			<!-- /row -->
			<!-- row -->
			<!-- <div class="row">
				<h3>Latest mix from soundcloud</h3>
                <iframe style="width:100%;border:0" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/91789660"></iframe>
                <p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo.</p>
			</div> -->
			<!-- /row -->

		</div>
		<!-- /container -->
	</div>
	<!-- /section container -->
</section>
<!-- /bio -->


<!-- ############################# stats ############################# -->
<!-- <section class="stats-wrap">
    <div class="section-sign invert">
        <span class="icon-lightning"></span>
    </div>
    <div class="container clearfix">
       <h3>Look at my stats</h3>
		<ul class="stats" data-timer="10000">
			<li class="col-1-3">
				<span class="stat-value">1876</span>
				<span class="stat-name">gigs</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1200</span>
				<span class="stat-name">happy peoples</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1266</span>
				<span class="stat-name">releases</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">2356</span>
				<span class="stat-name">coffees per year</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1076</span>
				<span class="stat-name">red buls per year</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">2009</span>
				<span class="stat-name">year of creation</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1887</span>
				<span class="stat-name">Glitch tracks</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">3238</span>
				<span class="stat-name">vinyls</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">2432</span>
				<span class="stat-name">dubstep tracks</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1432</span>
				<span class="stat-name">UK funky tracks</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1234</span>
				<span class="stat-name">Dub tracks</span>
			</li>
			<li class="col-1-3">
				<span class="stat-value">1238</span>
				<span class="stat-name">countries</span>
			</li>
		</ul>
    </div>
</section> -->
<!-- /Stats -->


<!-- ############################# contact ############################# -->
<section id="contact" class="section">

	<!-- ############ GMap ############ -->
	<div id="contact-map" class="gmap clearfix" data-address="Santa Monica Beach, CA" data-zoom="16" data-zoom_control="true" data-scrollwheel="false"></div>
	<!-- /gmap -->

	<!-- ############ section container ############ -->
	<div class="section-container container clearfix">

			<!-- ############ content header ############ -->
			<header class="content-header">
				<h1 class="content-title">Get in Touch</h1>
				<span class="sub-heading">Do not hesitate to booking me!</span>
				<hr class="content-line">
			</header>
			<!-- /content header -->

			<div class="row clearfix">
				<p>Contact Symeon at the information below:</p>
				<br>
				<!-- column icon -->
				<div class="col-1-4 column-icon">
					<span class="icon-home icon"></span>
					<span class="txt"><strong>Los Angeles, California</strong><br>United States</span>
				</div>
				<!-- /column icon -->
				<!-- column icon -->
				<div class="col-1-4 column-icon">
					<span class="icon-phone icon"></span>
					<span class="txt">
						<strong>(213) 761-4907</strong>
						<!-- <br>(123) 123-9899-234 (FAX) -->
					</span>
				</div>
				<!-- /column icon -->
				<!-- column icon -->
				<div class="col-1-4 column-icon">
					<span class="icon-pencil-2 icon"></span>
					<span class="txt">
						<strong><a href="mailto:symeon@djsymeon.com">symeon@djsymeon.com</a></strong>
						<!-- <br><a href="mailto:booking@djspectra.com">booking@djspectra.com</a> -->
					</span>
				</div>
				<!-- /column icon -->
				<!-- column icon -->
				<div class="col-1-4 last column-icon">
					<span class="icon-share icon"></span>
					<span class="txt">
						<strong><a href="https://www.facebook.com/symeonsounds/?view_public_for=838264372927970#">facebook</a></strong>
						<br><a href="https://soundcloud.com/planetsymeon">soundcloud</a></span>
				</div>
				<!-- /column icon -->
			</div>

        <hr class="divider">
        <div class="row clearfix">
			<img src="placeholders/symeon_logo_2016.png" class="aligncenter" alt="footer-logo" width="400">
        	<h2 class="heading-m text-center">Send me a message</h2>
        	<span class="sub-heading text-center">Please fill in your contact details</span>
        </div>

        <!-- contact form -->
        <form action="plugins/contact-form.php" method="post" class="form contact-form">
        	<div class="row clearfix">
 				<div class="col-1-3">
 					<label for="contact-name"><strong>Name</strong> (required)</label>
					<input type="text" name="name" value="" id="contact-name" required>
 				</div>
 				<div class="col-1-3">
 					<label for="contact-email"><strong>Email</strong> (required)</label>
					<input type="email" name="email" value="" id="contact-email" required>
 				</div>
 				<div class="col-1-3 last">
 					<label for="contact-subject"><strong>Subject</strong></label>
					<input type="text" name="subject" value="" id="contact-subject">
 				</div>
        	</div>
        	<div class="row clearfix">
        		<div class="col-1-1">
        			<label for="contact-message"><strong>Your Message</strong> (required)</label>
					<textarea name="message" id="contact-message" cols="88" rows="6" required></textarea>
				</div>
        	</div>
        	<div class="hidden">
				<label for="contact-spam-check">Do not fill out this field this is spam check.</label>
				<input name="anty_spam" type="text" value="" id="contact-spam-check" />
			</div>
			<input type="submit" value="Submit Message" class="large">
			<div class="clear"></div>
        </form>
        <!-- /contact form -->

    </div>
    <!-- /section container -->

</section>
<!-- /contact -->


<!-- ############################# newsletter ############################# -->
<section id="newsletter">
	<div class="overlay"></div>
	<div class="container">
		<img src="placeholders/symeon_logo_2016.png" class="aligncenter" alt="footer-logo" width="400">
		<h3 class="heading-l">SUBSCRIBE TO MY NEWSLETTER</h3>
		<!-- <form action="#post" method="post" id="subscribe-form"> -->
		<div class="message"></div>
		<form  role="form" method="post" id="subscribe">
			<input type="email" name="email" value="" id="email" placeholder="Enter your email..." required>
			<input type="submit" value="+" class="large" id="subscribe-submit">
		</form>
	</div>
</section>
<!-- /newsletter -->


<!-- ############################# social ############################# -->
<section id="social">
    <div class="flex-col-1-4"><a href="https://twitter.com/dj_symeon" class="social-twitter"><span class="icon-twitter"></span>Twitter</a></div>
    <div class="flex-col-1-4"><a href="https://www.facebook.com/symeonsounds" class="social-facebook"><span class="icon-facebook"></span>Facebook</a></div>
    <div class="flex-col-1-4"><a href="https://soundcloud.com/planetsymeon" class="social-soundcloud"><span class="icon-soundcloud"></span>Soundcloud</a></div>
    <div class="flex-col-1-4"><a href="https://pro.beatport.com/artist/symeon/482023" class="social-vimeo"><span class="icon-beatport"></span>Beatport</a></div>
    <!-- <div class="flex-col-1-4"><a href="#" class="social-youtube"><span class="icon-youtube"></span>Youtube</a></div> -->
    <!-- <div class="flex-col-1-4"><a href="#" class="social-dribbble"><span class="icon-dribbble"></span>Dribbble</a></div> -->
    <!-- <div class="flex-col-1-4"><a href="#" class="social-flickr"><span class="icon-flickr-2"></span>Flickr</a></div> -->
    <!-- <div class="flex-col-1-4"><a href="#" class="social-google-plus"><span class="icon-google-plus"></span>Google Plus</a></div> -->
</section>
<!-- /social -->

<!-- ############################# footer ############################# -->
<footer id="footer">
	<!-- container -->
	<div class="container">
		<div id="copyrights">
			<img src="placeholders/symeon_logo_2016.png" class="aligncenter" alt="footer-logo" width="400">
			&copy; <script>document.write(new Date().getFullYear())</script> Symeon. All Rights Reserved.
		</div>
	</div>
	<!-- /container -->
</footer>
<!-- /footer -->


<!-- ############################# fullwidth player ############################# -->
<div id="fap">
	<!-- <a href="placeholders/mp3/demo01.mp3" title="Smash It Up - Main" data-cover="placeholders/release07-360x360.jpg"></a>
	<a href="placeholders/mp3/demo02.mp3" title="Smash It Up - Loop" data-cover="placeholders/release08-360x360.jpg"></a> -->
	<a href="placeholders/mp3/demo03.mp3" title="Smash It Up - Tom" data-cover="placeholders/release09-360x360.jpg"></a>
</div>
<!-- fullwidth player -->


<!-- ############################# javascripts ############################# -->
<script src="js/jquery.easing-1.3.min.js"></script>
<script src="js/jquery.dlmenu.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.parallax-1.1.3.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.jail.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/nprogress.js"></script>
<script src="js/jquery.countdown.js"></script>
<!-- fancybox -->
<script src="js/jquery.fancybox-1.3.4.pack.js"></script>
<!-- google scripts -->
<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
<script src="js/jquery.gmap.min.js"></script>
<!-- fullwidth player -->
<script src="js/jquery-ui.js" type="text/javascript"></script>
<script src="https://connect.soundcloud.com/sdk.js"></script>
<script src="js/soundmanager2-nodebug-jsmin.js" type="text/javascript"></script>
<script src="js/jquery.fullwidthAudioPlayer.min.js" type="text/javascript"></script>
<!-- //fullwidth player -->
<!-- custom scripts -->
<script src="js/custom.js"></script>
</body>
</html>