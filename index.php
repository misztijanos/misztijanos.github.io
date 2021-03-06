﻿<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133588851-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133588851-1');
</script>
	<!-- <script src="https://kit.fontawesome.com/f01d56b8ce.js"></script> -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Miszti János' Portfolio</title>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700&amp;subset=latin-ext" rel="stylesheet"> 
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<header>
		<!--  -->
		<div class="name-container">
			<a href="index.html"><img class="logo" src="images/logo.png"></img></a>
			<div class="name">Miszti János</div>
		</div>
		<ul class="navigation">
			<li><a class="not-last" href="index.html">Home</a></li>
			<li><a class="not-last" href="about.html">About</a></li>
			<li class="portf" id="portf"><a class="not-last" id="portf-anchor">Portfolio</a></li>
			<ul class="dropdown" id="dropdown">
        <li class="first-dd"><a href="index.html#port-container">React Examples</a></li>
				<li class="second-dd"><a href="index.html#port-container">Freelance work</a></li>
				<li class="third-dd"><a href="index.html#css3-examples">CSS3 Examples</a></li>
			</ul>
			<li><a class="not-last" href="index.html#testimonials">Testimonials</a></li>
			<li><a target="_blank" class="not-last" href="http://janos-blog.22web.org">Blog</a></li>
			<li><a class="last" href="janos-hire.html">Hire János</a></li>
		</ul>
	</header>
	<div class="banner-container">
		<section class="who-am-i">
			<h2>I'm János, a front-end web developer ... who might design his own stuff from time to time.</h2>
			<div class="red-line"></div>
			<p> Scroll down to take a look at my portfolio, and let's create something beautiful together.</p>
		</section>
		<img class="face" src="images/face.png" alt="face"></img>
	</div>

  <!-- React Examples -->

  <div class="scroller" id="react-examples">
    <a class="button-naira" href="index.html#react-examples"><i class="icon-naira fa fa-chevron-down"></i><span>React Examples</span></a>
  </div>
  <section class="port-container" id="port-container">
    <a href="http://robotalk.22web.org" class="port-item larger-gif robotalk" target="_blank">
      <img src="images/port/robotalk.gif" alt="robotalk gif"></img>
      <p class="slide-up">react, hooks, react-timer-hook, react-speech-kit</p>
    </a>
    <a href="http://multi-step-form.22web.org" class="port-item larger-gif profile" target="_blank">
      <img src="images/port/multi-step-form.gif" alt="profile"></img>
      <p class="slide-up">react-router, framer-motion, context, react-hook-form</p>
    </a>
    <a href="https://github.com/misztijanos" class="port-item codepen all-pens" target="_blank">
      <img src="images/port/github.gif" alt="all pens"></img>
      <p class="slide-up">Check out all the code & more, on my Github</p>
    </a>
  </section>

  <!-- Freelance work -->

	<div class="scroller" id="freelance-work">
		<a class="button-naira" href="index.html#freelance-work"><i class="icon-naira fa fa-chevron-down"></i><span>Freelance work</span></a>
	</div>
	<section class="port-container" id="port-container">
		<a href="comic-about.html" class="port-item comic">
			<img src="images/port/comic-logo2.png" alt="Comic Flix"></img>
			<p class="slide-up">HTML5, CSS3, Responsive, Javascript</p>
		</a>
		<a href="famtrav-about.html" class="port-item famtrav">
			<img src="images/port/famtrav-logo.png" alt="Family Travel Adventure"></img>
			<p class="slide-up">WordPress, SQL, PHP, HTML5, CSS3, Javascript</p>
		</a>
		<a href="vps-about.html" class="port-item vps">
		<!--vps is a unique class, to allow us to pick the right background color in css -->
			<img src="images/port/vps-logo.png" alt="Vancouver Pet Sitting"></img>
			<p class="slide-up">JQuery, Bootstrap, PHP, HTML5, CSS3</p>
		</a>				
		<a href="http://www.sonialiao.com/" class="port-item sonia" target="_blank">
			<img src="images/port/sonia-logo.png" alt="Sonia Liao"></img>
			<p class="slide-up">HTML5, CSS3, Responsive, Javascript</p>
		</a><!-- 
		<a href="croatia-about.html" class="port-item croatia">
			<img src="images/port/croatia-logo.png" alt="Vancouver Pet Sitting"></img>
			<p class="slide-up">HTML5, CSS3, Responsive, WordPress, Javascript</p>
		</a> -->
		<a href="janos-about.html" class="port-item janos">
			<img src="images/port/janos-logo.png" alt="Miszti Janos Homepage"></img>
			<p class="slide-up">HTML5, CSS3, Photoshop, Responsive, no-script</p>
		</a>
		<a href="https://www.freelancer.com/u/BlackTurtle" class="port-item freelancer" target="_blank">
		<!--vps is a unique class, to allow us to pick the right background color in css -->
			<img src="images/port/captured.gif" alt="freelancer.com"></img>
			<p class="slide-up">Check out my Freelancer.com reviews</p>
		</a>
	</section>

  <!-- CSS Examples -->

	<div class="scroller" id="css3-examples">
		<a class="button-naira" href="index.html#css3-examples"><i class="icon-naira fa fa-chevron-down"></i><span>CSS3 Examples</span></a>
	</div>
	<section class="port-container" id="port-container">
		<a href="https://codepen.io/stansfield/pen/pmKwNJ" class="port-item codepen sunrise" target="_blank">
			<img src="images/port/sunrise.gif" alt="sunrise"></img>
			<p class="slide-up">HTML5, CSS3, animation</p>
		</a>
		<a href="https://codepen.io/stansfield/pen/KLOEej" class="port-item codepen profile" target="_blank">
			<img src="images/port/profile.gif" alt="profile"></img>
			<p class="slide-up">HTML5, CSS3, design, animation</p>
		</a>
		<a href="https://codepen.io/collection/ArYJyy" class="port-item codepen all-pens" target="_blank">
			<img src="images/port/all-pens.gif" alt="all pens"></img>
			<p class="slide-up">Check out all my pens</p>
		</a>
	</section>
	
  <!-- Javascript Katas - desktop only -->

	<div class="scroller desktop-only" id="javascript-katas">
		<a class="button-naira" href="index.html#javascript-katas"><i class="icon-naira fa fa-chevron-down"></i><span>Javascript katas</span></a>
	</div>
	<section class="port-container desktop-only" id="port-container">
		<a href="https://www.codewars.com/kata/sat-nav-directions/solutions/javascript/" class="port-item kata kata1" target="_blank">
			<img src="images/port/kata1.gif" alt="first kata"></img>
			<p class="slide-up">Javascript fundamentals, complex problem solving</p>
		</a>
		<a href="https://www.codewars.com/kata/reviews/553a8bb91e0399d6f70001b9/groups/5d0df7bddb3e840001e177c6" class="port-item kata kata2" target="_blank">
			<img src="images/port/kata2.gif" alt="second kata"></img>
			<p class="slide-up">Javascript, regular expressions</p>
		</a>
		<a href="https://www.codewars.com/users/misztijanos/completed" class="port-item kata kata3" target="_blank">
			<img src="images/port/kata3.gif" alt="all kata"></img>
			<p class="slide-up">Check out all my katas</p>
		</a>
	</section>
	
	<section class="featured">
		<h1>How I can help</h1>
		<p>A front-end developer's role is to combine design and business logic to achieve a user-facing product. This takes equal parts technology and vision. Front-end developers are the bridge between the designer and the back-end programmer, which means they have to be both creative and tech-savvy. With my experience I can:</p>
    <h3>Create responsive websites that work on a wide range of devices</h3>
    <h3>Assist with the production of clean and functional design</h3>
    <h3>Bridge the communication gap between designers and developers</h3>
    <h3>Integrate your website into an easy to use content management system</h3>
	</section>

	<section class="testimonials" id="testimonials">    
    <h1>Testimonials</h1>
    <blockquote>
    	<p>Janos did a great job. His work in css and html is very clean and ordered. Communication was very good.</p>
    	<footer>Dorin Oltean <a href="https://www.freelancer.com/u/dorinoltean">Rubrikk Group</a></footer>
    </blockquote>
    <blockquote>
    	<p>"James did a great job on this project. It wasn't even necessary to give him server access which I appreciate as an admin. Solid work."</p>
    	<footer>Bryan <a href="https://www.freelancer.com/u/rockhost">Rockhost</a></footer>
    </blockquote>
    <blockquote>
    	<p>Good freelancer A+++. I hope to work with him another time.</p>
    	<footer>Luca Fierro <a href="https://www.netcom.it/">NetCom</a></footer>
    </blockquote>
    <blockquote>
    	<p>Working with János was great. He is an incredibly talented developer, but what really makes him stand out is his work ethic and steady approach. Time after time, and without us asking, he added enhancements and improvements that resulted in a better end product for us and our clients.</p>
    	<footer>Jonathan Ellison <a href="https://wirebox.co.uk/">WireBox</a></footer>
    </blockquote>
	</section>

	<section class="footer">Copyright © 2019 <a href="index.html">Miszti János</a></section>
</body>
<script src="my-scripts.js"></script>
</html>