<?php
	date_default_timezone_set( "Australia/Brisbane" )
?>
<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Web Developer | Riley Albiston</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<script>
		$(document).ready(function(){
				$('a[href^="#"]').on('click', function (e) {
					e.preventDefault();

					var target = this.hash;
					var $target = $(target);

					$('html, body').animate({
						'scrollTop': $target.offset().top
					}, 1000, 'swing');
				});
			});
	</script>
</head>

<body>
	<a id="home-link"></a>

	<header>
		<div id="fixed-nav">
			<nav id="main-nav">
				<a href="#home-link">Riley Albiston</a>

				<ul>
					<li><a href="#intro-link">About</a></li>
					<li><a href="#web-design-link">Web Design</a></li>
					<li><a href="#gallery-link">Gallery</a></li>
					<li><a href="#contact-link">Contact</a></li>
				</ul>
			</nav>
		</div><!-- end fixed-nav -->
	</header>

	<section id="landing-page">
		<br/>
		<br/>
		<br/>
		<br/>
		<h1>Data Driven Web Applications</h1>
		<h3>Are you ready to start your next project?</h3>
		<span class="btn"><a href="#contact-link">Get In Touch</a></span>	
	</section>

	<section id="intro-link" class="intro-section">
		<div class="content-container">
			<p>Hi, my name is Riley. I create data driven web applications &amp; clean fuctional websites.</p>
			<p>Developer or Designer? Why not both?</p>
		</div><!-- end content-container div -->
	</section><!-- end intro-section -->

	<section class="about-section">
		<div class="content-container">
			<h2>About Me</h2>
			<p>I'm a Brisbane based Web Developer. I was first introductioned to the potential of Internet Startups living Berlin.  While there I created my first simple static websites. It wasn't long before my curiosity had me wanting to understand how websites work 'under the hood'. This lead to my interest in database design understanding and programming.</p>
			<p>Now back in Australia I am currently studying a Bachelor of IT and doing as many online programming, database and algorithm courses I can.</p> 
			<p>Currently I'm working as a freelance web designer. Coming from a programmerer mindset I focus on clean and functional design. Usability, driven by simple, intuitive design and performance are key to a sucessful website. I am also interested in getting involved with long term web application frojects as a programmer.</p>
		</div><!-- end content-container div -->
	</section><!-- end about-section -->

	<section id="web-design-link" class="web-design-section">
		<div class="section-banner">
			<h2>Clean Fucntional Web Design</h2>
		</div><!-- end section-banner div -->

		<div class="content-container">
			<h2>Easy To Use Content Management System</h2>
			<div class="flex-container">
				<div id="web-design-content">
					<p>Most websites need dynamic content. That's where a good Content Management System comes in. With over 70 million websites using Wordpress it's a solid foundation to build your online presence on.</p>
					<p>I can create a Wordpress website to meet all range of budgets. From a lighly modified standard theme to completely unique custom themes with functionality tailored to your needs.</p>
					<p>Wordpress makes creating and editing your website as easy as working with a text document, no coding required!</p>
					<ul>
						<li>SEO optimized</li>
						<li>Easy to Use</li>
						<li>Mobile Friendly</li>
						<li>Unique Designs</li>
					</ul>
				</div><!-- end web-design-content -->
				<div id="wordpress-img"> 
					<img src="img/wordpress-logo-small.png" alt="">
				</div><!-- end wordpress-img -->
			</div><!-- end flex-container div -->
		</div><!-- end content-container div -->
	</section><!-- end web-design-section -->

	<section class="gallery-section"><a id="gallery-link"></a>
		<h2>Gallery Section</h2>
		<div class="flex-container">
			<div id="gallery-container">
				<figure> 
					<img src="img/web-design.jpg" alt="" >
					<figcation><h3>Hello world!</h3></figcaption>
				</figure>
				</div>
				<div>
				<figure> 
					<img src="img/web-design.jpg" alt="" >
				</figure>
				</div>
				<div>
				<figure> 
					<img src="img/web-design.jpg" alt="" >
				</figure>
			</div>
		</div><!-- end flex-container div -->
	</section><!-- end gallery-section -->

	<section class="testimonials-section">
		<div class="content-container">
			<h2>Testimonials Section</h2>
			<p>Nothing to see here :(</p>
		</div><!-- end content-container div -->
	</section><!-- end testimonials-section -->

	<section id="contact-link" class="contact-section">
		<div class="content-container">
			<h2>Get in Touch</h2>
			<p>If you have a business or want to build your personal brand online I can get you up and running.</p>
			<p>Or if you have a long term project and need a developer I'd love to hear about it.</p>
			<form action="" method="">
	            <input type="text" id="name" placeholder="Name" />
	          	<input type="email" id="email" placeholder="Email" />
	            <textarea id="message" placeholder="Enter your message"></textarea>
	            <input type="submit" value="Send your message" />
			</form>
		</div><!-- end content-container div -->
	</section><!-- end contact-section -->

	<footer>
		<div id="skills-container">
			<div class="content-container">
				<div class="flex-container">
					<div class="footer-flex-items">
						<h3>About This Site</h3>
						<p>I like a challenge. I decieded to create this site the old way. No frameworks or premade themes, just good old hand coded HTML and CSS (with a little PHP and jQuery thrown in). The choice come from my philosophy of keeping things as simple as possible and only as comples as needed.</p>
					</div>
					<div class="footer-flex-items">
						<h3>What I Use:</h3>
						<ul>
							<li>HTML5/CSS3</li>
							<li>Wordpress</li>
							<li>PHP</li>
							<li>jQuery</li>
							<li>Laravel</li>
							<li>SQL</li>
						</ul>
					</div>
					<div class="footer-flex-items">
						<h3>Find Me Online:</h3>
						<ul>
							<p>See behind the sceans of my projects</p>
							<li><a href="">Codepen</a></li>
							<li><a href="">Github</a></li>
							<p>Or connect with me</p>
							<li><a href="">Linkedin</a></li>
						</ul>
					</div>
				</div><!-- end flex-container div -->
			</div><!-- end content-container -->
		</div><!-- end skills-container div -->
		<div id="site-info">
			<div class="content-container">
				<span id="copy-container"><p><a href="#home-link">Riley Albiston</a> &copy; 2013 - <?php echo date("Y"); ?></p></span>
				<span id="footer-mysites-links"><p>Check out my other sites: <a href="">Web Dev Blog</a> and <a href="">Adventures</a></p></span>
			</div><!-- end content-container -->
	    </div><!-- end site-info div -->
	</footer>

</body>
</html>