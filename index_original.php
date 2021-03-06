<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="en-US"><!--<![endif]-->
<head>
	<title>Spectra - Ultimate Music Theme</title>
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
</head>
<body>

<!-- ############################# Update Message for older browsers ############################# -->
<!--[if lte IE 7]>
   <div id="ie-message"><p>You are using Internet Explorer 7.0 or older to view this site. Your browser is an eight year old browser which does not display modern web sites properly. Please upgrade to a newer browser to fully enjoy the web. <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Upgrade your browser</a></p></div>
<![endif]-->


<!-- ############################# intro ############################# -->
<section id="intro" class="intro-resize parallax clearfix" style="background-image: url(placeholders/intro-image-1920x1080.jpg)">
	<!-- animated bg -->
	<div class="intro-bg"></div>
	<!-- container -->
	<div class="container">
		<!-- ############ logo ############ -->
		<img id="intro-logo" src="placeholders/intro-logo.png" alt="Logo">
		<!-- ############ ticker ############ -->
		<div id="ticker-wrap">
			<ul id="ticker">
				<li>
					DJ SPECTRA
				</li>
				<li>
					Music Producer
				</li>
				<li>
					I Love bass music
				</li>
			</ul>
		</div>
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
		   		<img src="placeholders/logo.png" alt="Logo">
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
				<!-- flipper -->
				<div class="flip-container">
					<div class="flipper">
						<!-- front -->
						<div class="front" style="background:#ff7700">
							<!-- icon -->
							<span class="brick-icon icon-soundcloud"></span>
							<!-- title -->
							<span class="brick-title">//Spectra @ Club Republic</span>
						</div>
						<!-- /front -->
						<!-- back -->
						<div class="back">
							<!-- icon -->
							<span class="brick-icon icon-arrow-right-3"></span>
							<!-- title -->
							<span class="brick-title">New York (09/22/13) 1:34h</span>
						</div>
						<!-- /back -->
					</div>
				</div>
				<!-- /flipper -->
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="https://soundcloud.com/ukfmusic/ukf-music-podcast-2-physical-in-the-mix" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play in player</h6>
					</div>
					<!-- image -->
					<img src="placeholders/release10-360x360.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">FREE</span>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<!-- flipper -->
				<div class="flip-container">
					<div class="flipper">
						<!-- front -->
						<div class="front" style="background:#ff7700">
							<!-- icon -->
							<span class="brick-icon icon-soundcloud"></span>
							<!-- title -->
							<span class="brick-title">//Spectra @ Ministry Of Sound Radio</span>
						</div>
						<!-- /front -->
						<!-- back -->
						<div class="back">
							<!-- icon -->
							<span class="brick-icon icon-arrow-right-3"></span>
							<!-- title -->
							<span class="brick-title">London, UK (11/22/13) 1:16h</span>
						</div>
						<!-- /back -->
					</div>
				</div>
				<!-- /flipper -->
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-4 height-1-4">
				<a href="https://soundcloud.com/deepdrumnbass/deep-podcast-25" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play in player</h6>
					</div>
					<!-- image -->
					<img src="placeholders/release07-360x360.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">FREE</span>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-2 height-1-4">
				<a href="https://soundcloud.com/deepdrumnbass/deep-podcast-24-l-side-glo" class="thumb fap-single-track">
					<!-- Title and opacity mask -->
					<div class="inner">
						<h6>Play in player</h6>
					</div>
					<!-- image -->
					<img src="placeholders/masonry-release01-544x272.jpg" alt="Release image" >
					<!-- badge -->
					<span class="badge free">FREE</span>
				</a>
			</div>
			<!-- /brick -->
			<!-- brick -->
			<div class="brick width-1-2 height-1-4">
				<!-- flipper -->
				<div class="flip-container">
					<div class="flipper">
						<!-- front -->
						<div class="front" style="background:#ff7700">
							<!-- icon -->
							<span class="brick-icon icon-soundcloud"></span>
							<!-- title -->
							<span class="brick-title">//Spectra @ Bass Therapy</span>
						</div>
						<!-- /front -->
						<!-- back -->
						<div class="back">
							<!-- icon -->
							<span class="brick-icon icon-arrow-left-3"></span>
							<!-- title -->
							<span class="brick-title">London, UK (07/22/13) 1:30h</span>
						</div>
						<!-- /back -->
					</div>
				</div>
				<!-- /flipper -->
			</div>
			<!-- /brick -->
		</div>
		<!-- /masonry -->
	</div>
	<!-- /container -->
</section>
<!-- /masonry news -->


<!-- ############################# upcoming event ############################# -->
<section id="upcoming-event" class="event-countdown">
	<!-- container -->
	<div class="container clearfix">
		<!-- ############ content header ############ -->
		<header class="content-header">
			<h6 class="upcoming-event">Upcoming Event</h6>
			<h2 class="content-title">Amsterdam Dance</h2>
			<span class="sub-heading">Amsterdam, Netherlands</span>
		</header>
		<!-- /content header -->
		<!-- countdown -->
		<div class="countdown" data-event-date="2014/10/18 20:20:00">
			<div class="days" data-label="Days">000</div>
			<div class="hours" data-label="Hours">000</div>
			<div class="minutes" data-label="Minutes">000</div>
			<div class="seconds" data-label="Seconds">000</div>
		</div>
		<!-- /countdown -->
	</div>
	<!-- /container -->
</section>
<!-- /upcoming event -->


<!-- ############################# recent tweet ############################# -->
<section class="recent-tweet">
    <!-- section sign -->
    <div class="section-sign">
        <span class="icon-twitter"></span>
    </div>
    <!-- /section sign -->
    <!-- container -->
    <div class="container clearfix">
        <!-- twitter feed -->
        <ul class="tweets" data-tweets-count="0">
        	<li>Oops, our Twitter feed is unavailable at the moment - <a href="#">Follow us on Twitter!</a></li>
        </ul>   
        <!-- /twitter feed  -->
    </div>
    <!-- /container -->
</section>
<!-- /recent tweet -->


<!-- ############################# portfolio ############################# -->
<section id="portfolio" class="section">

	<!-- ############ Paralax Intro ############ -->
	<div id="portfolio-header" class="section-header parallax clearfix" style="background-image: url(placeholders/release-header-1920x1000.jpg)" data-interia="0.1">
		<div class="overlay"></div> <!-- overlay layer -->
		<!-- /container -->
		<div class="container clearfix">
			<h6 class="section-sub-heading">LISTEN MY TRACKS & MIXES</h6>
			<h2 class="section-heading">AMAZING RELEASES</h2>
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
			<li><a data-categories="drum-and-bass">Drum and Bass</a></li>
			<li><a data-categories="glitch">Glitch Hop</a></li>
			<li><a data-categories="breakbeat">Breakbeat</a></li>
			<li><a data-categories="uk-funky">UK Funky</a></li>
			<li><a data-categories="dubstep">Dubstep</a></li>
		</ul>
	</div>
	<!-- /portfolio filter -->

	<!--############ portfolio grid ############ -->
	<div id="portfolio-items" class="fullwidth items clearfix">
		<!-- item -->
		<div class="item" data-categories="new glitch">
			<a href="project01.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Awesome Bass <span>(Big image intro)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<!-- image -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release01-360x360.jpg" alt="Release image" >
				<!-- badge -->
				<span class="badge new">NEW</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Awesome Bass</span>
					<span class="tip-genre">NEW / Glitch Hop</span>
					<span class="tip-date">2013-04-05</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="new drum-and-bass">
			<a href="project02.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Tomorrow's Harvest <span>(Vimeo video)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release02-360x360.jpg" alt="Release image" >
				<!-- badge -->
				<span class="badge new">NEW</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Tomorrow's Harvest</span>
					<span class="tip-genre">NEW / Drum and Bass</span>
					<span class="tip-date">2013-01-23</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="drum-and-bass uk-funky">
			<a href="project03.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Atmosphere <span>(Image slider+soundcloud)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release03-360x360.jpg" alt="Release image" >
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Atmosphere</span>
					<span class="tip-genre">Drum and Bass / UK Funky</span>
					<span class="tip-date">2012-12-23</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="drum-and-bass glitch">
			<a href="project04.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Center of The Universe <span>(Full width image slider)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release04-360x360.jpg" alt="Release image" >
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Center of The Universe</span>
					<span class="tip-genre">Drum and Bass / Glitch Hop</span>
					<span class="tip-date">2012-10-07</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="breakbeat dubstep">
			<a href="project05.html" class="thumb project-thumb project-by-ajax tip" data-ajax-options='{"target" :"#project"}'>
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Faster Than Light EP <span>(Masonry boxes)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release05-360x360.jpg" alt="Release image" >
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Faster Than Light EP</span>
					<span class="tip-genre">Breakbeat / Dubstep</span>
					<span class="tip-date">2012-08-07</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="breakbeat dubstep">
			<a href="https://soundcloud.com/ukfmusic/ukf-music-podcast-2-physical-in-the-mix" class="thumb project-thumb tip fap-single-track">
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Back To The Acid <span>(Play Soundcloud podcast)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release06-360x360.jpg" alt="Release image">
				<!-- badge -->
				<span class="badge free">FREE</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Back To The Acid</span>
					<span class="tip-genre">Breakbeat / Dubstep</span>
					<span class="tip-date">2012-07-22</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="uk-funky glitch">
			<a href="https://soundcloud.com/chinch-jack/sets/jungle-sets" class="thumb project-thumb tip fap-single-track">
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Skylarking - Remixes <span>(Play Soundcloud playlist)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release07-360x360.jpg" alt="Release image" >
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Skylarking - Remixes</span>
					<span class="tip-genre">UK Funky / Glitch Hop</span>
					<span class="tip-date">2012-07-16</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="breakbeat dubstep glitch">
			<a href="https://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Fplaylists%2F2999711&amp;color=ff7700&amp;auto_play=false&amp;show_artwork=true" class="thumb project-thumb mediabox tip" data-width="auto" data-height="450">
				<!-- title and opacity mask -->
				<div class="inner">
					<h6>Defiant Order <span>(Open Soundcloud in lightbox)</span></h6>
				</div>
				<!-- /title and opacity mask -->
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release08-360x360.jpg" alt="Release image">
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Defiant Order</span>
					<span class="tip-genre">Breakbeat / Glitch Hop / Dubstep</span>
					<span class="tip-date">2012-05-07</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="drum-and-bass uk-funky">
			<a href="placeholders/cover01-big.jpg" class="thumb project-thumb tip imagebox" title="Album Cover">
				<div class="inner">
					<h6>Things Can Only Get Better <span>(Open image in lightbox)</span></h6>
				</div>
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release09-360x360.jpg" alt="Release image">
				<!-- badge -->
				<span class="badge free">FREE</span>
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Things Can Only Get Better</span>
					<span class="tip-genre">Drum and Bass / UK Funky</span>
					<span class="tip-date">2012-04-11</span>
				</div>
				<!-- /tooltip -->
			</a>
		</div>
		<!-- /item -->
		<!-- item -->
		<div class="item" data-categories="breakbeat uk-funky">
			<a href="//player.vimeo.com/video/47224685?byline=0&amp;portrait=0&amp;color=ff9933" class="thumb project-thumb tip mediabox" data-width="auto" data-height="auto">
				<div class="inner">
					<h6>Numbers / Limelight <span>(Open video in lightbox)</span></h6>
				</div>
				<img class="lazy" src="placeholders/placeholder.png" data-src="placeholders/release10-360x360.jpg" alt="Release image">
				<!-- tooltip -->
				<div class="tip-content animate hidden">
					<span class="tip-title">Numbers / Limelight</span>
					<span class="tip-genre">Breakbeat / UK Funky</span>
					<span class="tip-date">2012-03-11</span>
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
<section id="events" class="section">

	<!-- ############ paralax intro ############ -->
	<div id="events-header" class="section-header parallax clearfix" style="background-image: url(placeholders/events-header-1920x1000.jpg);" data-interia="0">
		<div class="overlay"></div> <!-- overlay layer -->
		<!-- container -->
		<div class="container clearfix">
			<h6 class="section-sub-heading">SEE YOU AT THE CLUB</h6>
			<h2 class="section-heading">SHOWS AND EVENTS</h2>
		</div>
		<!-- /container -->
	</div>
	<!-- /parallax intro -->

	<!-- ############ event container loaded via ajax ############ -->
	<div id="event" class="ajax-holder"></div>
	<!-- /event container -->

	<!-- ############ events list ############ -->
	<ul id="events-list">
		<!-- event -->
		<li style="background-image: url(placeholders/event-01-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">08/23</span>
				<h2><a href="event01.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Amsterdam Dance</a></h2>
				<span class="event-location">Amsterdam, Netherlands</span>
			</div>
		</li>
		<!-- /event -->
		<!-- event -->
		<li style="background-image: url(placeholders/event-02-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">09/02</span>
				<h2><a href="event02.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Bacardi Original Bar</a></h2>
				<span class="event-location">Budapest (budapest), Hungary</span>
			</div>
		</li>
		<!-- /event -->
		<!-- event -->
		<li style="background-image: url(placeholders/event-03-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">09/18</span>
				<h2><a href="event03.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Luxorlive</a></h2>
				<span class="event-location">Arnhem, Netherlands</span>
			</div>	
		</li>
		<!-- /event -->
		<!-- event -->
		<li style="background-image: url(placeholders/event-04-1920x573.jpg);">
			<div class="inner">
				<span class="event-date">10/30</span>
				<h2><a href="event04.html" class="event-by-ajax" data-ajax-options='{"target" :"#event"}'>Papagayo Beach Club</a></h2>
				<span class="event-location">Santa Cruz De Tenerife, Spain</span>
			</div>
		</li>
		<!-- /event -->
	</ul>
	<!-- /events list -->

	<!-- ############ more events ############ -->
	<div class="more-events">
		<h6 class="heading-xl">More events</h6>
	</div>
	<!-- /more events -->

	<!-- ############ masonry events ############ -->
	<div class="masonry-events">
		<!-- event brick -->
		<a href="event01.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/23</span>
			<span class="event-title">Roseland Ballroom</span>
			<span class="event-location">NEW YORK, NY</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event02.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/28</span>
			<span class="event-title">Hollywood Bowl</span>
			<span class="event-location">Hollywood, Ca</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/01</span>
			<span class="event-title">Shanghai Expo Center</span>
			<span class="event-location">Shanghai, China</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event04.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/03</span>
			<span class="event-title">Sepang International Circuit</span>
			<span class="event-location">Kuala Lumpur, Malaysia</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/18</span>
			<span class="event-title">Bacardi Original Bar</span>
			<span class="event-location">Budapest (budapest), Hungary</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event01.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/23</span>
			<span class="event-title">Roseland Ballroom</span>
			<span class="event-location">NEW YORK, NY</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event02.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">11/28</span>
			<span class="event-title">Hollywood Bowl</span>
			<span class="event-location">Hollywood, Ca</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/01</span>
			<span class="event-title">Shanghai Expo Center</span>
			<span class="event-location">Shanghai, China</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event04.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/03</span>
			<span class="event-title">Sepang International Circuit</span>
			<span class="event-location">Kuala Lumpur, Malaysia</span>
		</a>
		<!-- /event brick -->
		<!-- event brick -->
		<a href="event03.html" class="event-brick event-by-ajax" data-ajax-options='{"target" :"#event"}'>
			<span class="event-date">12/18</span>
			<span class="event-title">Bacardi Original Bar</span>
			<span class="event-location">Budapest (budapest), Hungary</span>
		</a>
		<!-- /event brick -->

	
	</div>
	<!-- /masonry events -->

</section>
<!-- /events -->


<!-- ############################# bio ############################# -->
<section id="bio" class="section">

	<!-- ############ paralax Intro ############ -->
	<div id="bio-header" class="section-header parallax clearfix" style="background-image: url(placeholders/bio-header-1920x1000.jpg);" data-interia="0">
		<div class="overlay"></div> <!-- overlay layer -->
		<!-- container -->
		<div class="container clearfix">
			<h6 class="section-sub-heading">MY MUSIC STORY</h6>
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
				<h2>Long long time ago</h2>
				<div class="col-1-2">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor fermentum ullamcorper. Aliquam erat volutpat. Nullam purus metus, interdum ac lacinia non, sodales non arcu. In eleifend vestibulum eleifend. Maecenas ut felis mi, vitae pharetra justo. Ut lacus lacus, fermentum sed tincidunt eget, suscipit nec orci. Sed pellentesque dapibus tellus in semper. Aenean faucibus aliquet turpis, id fermentum sem consectetur id. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis faucibus euismod nunc scelerisque tincidunt.</p>

					<p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo. Vestibulum tortor eros, mollis ac tempor et, commodo eu tellus. Curabitur a leo non nunc tristique tincidunt. Donec enim eros, blandit pharetra dapibus ullamcorper, aliquet sit amet diam. Aenean tempus laoreet adipiscing. Vivamus eleifend pretium pellentesque.</p>

					<blockquote>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eu felis tellus, sit amet elementum est. Proin posuere turpis lectus, eget vulputate erat. Nunc eget metus in magna vulputate elementum sed ut leo. Mauris at mauris purus, ut laoreet eros.</p>
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
			<div class="row">
				<h3>Latest mix from soundcloud</h3>
                <iframe style="width:100%;border:0" height="166" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/91789660"></iframe>
                <p>Phasellus ligula sem, laoreet luctus luctus sed, pharetra in mi. Aenean accumsan gravida convallis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus congue tellus lectus, quis sodales sem. Ut nec nisl id sem ultricies malesuada. Nunc eu justo mauris, non lobortis dolor. Nunc id condimentum leo.</p>
			</div>
			<!-- /row -->
			
		</div>
		<!-- /container -->
	</div>
	<!-- /section container -->
</section>
<!-- /bio -->


<!-- ############################# stats ############################# -->
<section class="stats-wrap">
    <!-- section sign -->
    <div class="section-sign invert">
        <span class="icon-lightning"></span>
    </div>
    <!-- /section sign -->
    <!-- container -->
    <div class="container clearfix">
       <h3>Look at my stats</h3>
		<!-- stats list -->
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
		<!-- /stats list -->
    </div>
    <!-- /container -->
</section>
<!-- /recent tweet -->


<!-- ############################# contact ############################# -->
<section id="contact" class="section">

	<!-- ############ GMap ############ -->
	<div id="contact-map" class="gmap clearfix" data-address="Level 13, 2 Elizabeth St, Melbourne Victoria 3000 Australia" data-zoom="16" data-zoom_control="true" data-scrollwheel="false"></div>
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
				<p>Cras venenatis justo mi, non posuere enim aliquet malesuada. Nullam orci sem, adipiscing id rutrum et, blandit quis lorem. Phasellus lacus orci, cursus vitae mi eget, sagittis congue elit. Donec ac tincidunt tortor. Duis vel neque eleifend odio hendrerit consequat sed vel massa. Praesent tempor libero quis tincidunt fringilla. Aliquam congue, neque et aliquam eleifend, lacus diam aliquet urna, in sollicitudin neque nisl facilisis urna.</p>
				<br>
				<!-- column icon -->
				<div class="col-1-4 column-icon">
					<span class="icon-home icon"></span>
					<span class="txt"><strong>Level 13, 2 Elizabeth St, Melbourne Victoria </strong><br>3000 Australia</span>
				</div>
				<!-- /column icon -->
				<!-- column icon -->
				<div class="col-1-4 column-icon">
					<span class="icon-phone icon"></span>
					<span class="txt"><strong>(123) 563-9899-234</strong><br>(123) 123-9899-234 (FAX)</span>
				</div>
				<!-- /column icon -->
				<!-- column icon -->
				<div class="col-1-4 column-icon">
					<span class="icon-pencil-2 icon"></span>
					<span class="txt"><strong><a href="mailto:djspectra@djspectra.com">djspectra@djspectra.com</a></strong><br><a href="mailto:booking@djspectra.com">booking@djspectra.com</a> </span>
				</div>
				<!-- /column icon -->
				<!-- column icon -->
				<div class="col-1-4 last column-icon">
					<span class="icon-share icon"></span>
					<span class="txt"><strong><a href="http://facebook.com">facebook</a></strong><br><a href="http://twitter.com">twitter</a><br><a href="http://soundcloud.com">soundcloud</a></span>
				</div>
				<!-- /column icon -->
			</div>
			
        <hr class="divider">
        <div class="row clearfix">
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
	<div class="overlay"></div> <!-- overlay layer -->
	<!-- container -->
	<div class="container">
		<h3 class="heading-l">SUBSCRIBE TO MY NEWSLETTER</h3>
		<!-- subscribe form -->
		<form action="#post" method="post" id="subscribe-form">
			<input type="email" name="subscribe_email" value="" id="subscribe-email" placeholder="Enter your email..." required>
			<input type="submit" value="+" class="large" id="subscribe-submit">
		</form>
		<!-- /subscribe form -->
	</div>
	<!-- /container -->
</section>
<!-- /newsletter -->


<!-- ############################# social ############################# -->
<section id="social">
    <div class="flex-col-1-4"><a href="#" class="social-twitter"><span class="icon-twitter"></span>Twitter</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-facebook"><span class="icon-facebook"></span>Facebook</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-soundcloud"><span class="icon-soundcloud"></span>Soundcloud</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-vimeo"><span class="icon-vimeo"></span>Vimeo</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-youtube"><span class="icon-youtube"></span>Youtube</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-dribbble"><span class="icon-dribbble"></span>Dribbble</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-flickr"><span class="icon-flickr-2"></span>Flickr</a></div>
    <div class="flex-col-1-4"><a href="#" class="social-google-plus"><span class="icon-google-plus"></span>Google Plus</a></div>
</section>
<!-- /social -->

<!-- ############################# footer ############################# -->
<footer id="footer">
	<!-- container -->
	<div class="container">
		<div id="copyrights">
			<img src="placeholders/logo-footer.png" class="aligncenter" alt="footer-logo">
			&copy; 2013 by RASCALS THEMES. All Rights Reserved. Powered by <a href="#">Themeforest</a>.
		</div>
	</div>
	<!-- /container -->
</footer>
<!-- /footer -->


<!-- ############################# fullwidth player ############################# -->
<div id="fap">
	<a href="placeholders/mp3/demo01.mp3" title="Smash It Up - Main" data-cover="placeholders/release07-360x360.jpg"></a>
	<a href="placeholders/mp3/demo02.mp3" title="Smash It Up - Loop" data-cover="placeholders/release08-360x360.jpg"></a>
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