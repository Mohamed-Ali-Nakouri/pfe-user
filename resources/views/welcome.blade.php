{{--<!DOCTYPE HTML>--}}

{{--<html>--}}
	{{--<head>--}}
		{{--<title> </title>--}}
		{{--<meta http-equiv="content-type" content="text/html; charset=utf-8" />--}}
		{{--<meta name="description" content="" />--}}
		{{--<meta name="keywords" content="" />--}}
		{{--<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->--}}
		{{--<script src="js/jquery.min.js"></script>--}}
		{{--<script src="js/jquery.dropotron.min.js"></script>--}}
		{{--<script src="js/jquery.scrollgress.min.js"></script>--}}
		{{--<script src="js/jquery.scrolly.min.js"></script>--}}
		{{--<script src="js/jquery.slidertron.min.js"></script>--}}
		{{--<script src="js/skel.min.js"></script>--}}
		{{--<script src="js/skel-layers.min.js"></script>--}}
		{{--<script src="js/init.js"></script>--}}
		{{--<noscript>--}}
			{{--<link rel="stylesheet" href="css/skel.css" />--}}
			{{--<link rel="stylesheet" href="css/style.css" />--}}
			{{--<link rel="stylesheet" href="css/style-xlarge.css" />--}}
		{{--</noscript>--}}
		{{--<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->--}}
		{{--<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->--}}
	{{--</head>--}}
	{{--<body class="landing">--}}

		{{--<!-- Header -->--}}
			{{--<header id="header" class="alt skel-layers-fixed">--}}
				{{--<h1><a href="index.html">ISET SOUSSE</a></h1>--}}
				{{--<nav id="nav">--}}
					{{--<ul>--}}

						{{--@guest--}}
                        {{--<li>--}}
							{{--<a href="{{ route('login') }}" >Login</a>--}}

						{{--</li>--}}
						{{--<li><a href="{{ route('register') }}">Register</a></li>--}}

                        {{--@else--}}
                            {{--<li><a href="/home">Home</a></li>--}}
                            {{--<li><a class="dropdown-item" href="{{ route('logout') }}"--}}
                               {{--onclick="event.preventDefault();--}}
                                                     {{--document.getElementById('logout-form').submit();">--}}
                                {{--{{ __('Logout') }}--}}
                            {{--</a></li>--}}

                            {{--<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
                                {{--@csrf--}}
                            {{--</form>--}}
                    {{--</ul>--}}

                    {{--@endguest--}}
				{{--</nav>--}}
			{{--</header>--}}

		{{--<!-- Banner -->--}}
			{{--<section id="banner">--}}
				{{--<div class="inner">--}}
					{{--<h2>Magna Aliquam</h2>--}}
					{{--<p>Sed lorem ipsum sed dolor nullam adipiscing</p>--}}
					{{--<ul class="actions">--}}
						{{--<li><a href="#one" class="button big scrolly">Learn More</a></li>--}}
					{{--</ul>--}}
				{{--</div>--}}
			{{--</section>--}}

		{{--<!-- One -->--}}
			{{--<section id="one" class="wrapper style1">--}}
				{{--<div class="container">--}}
					{{--<header class="major">--}}
						{{--<h2>Lorem ipsum dolor</h2>--}}
						{{--<p>Ipsum dolor tempus commodo turpis adipiscing adipiscing in tempor placerat<br />--}}
						{{--sed amet accumsan enim lorem sem turpis ut. Massa amet erat accumsan curae<br />--}}
						{{--blandit porttitor faucibus in nisl nisi volutpat massa mi non nascetur.</p>--}}
					{{--</header>--}}
					{{--<div class="slider">--}}
						{{--<span class="nav-previous"></span>--}}
						{{--<div class="viewer">--}}
							{{--<div class="reel">--}}
								{{--<div class="slide">--}}
									{{--<img src="images/slide01.jpg" alt="" />--}}
								{{--</div>--}}
								{{--<div class="slide">--}}
									{{--<img src="images/slide02.jpg" alt="" />--}}
								{{--</div>--}}
								{{--<div class="slide">--}}
									{{--<img src="images/slide03.jpg" alt="" />--}}
								{{--</div>--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<span class="nav-next"></span>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</section>--}}

		{{--<!-- Two -->--}}
			{{--<section id="two" class="wrapper style2">--}}
				{{--<div class="container">--}}
					{{--<div class="row uniform">--}}
						{{--<div class="4u 6u(2) 12u$(3)">--}}
							{{--<section class="feature fa-briefcase">--}}
								{{--<h3>Natoque phasellus</h3>--}}
								{{--<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>--}}
							{{--</section>--}}
						{{--</div>--}}
						{{--<div class="4u 6u$(2) 12u$(3)">--}}
							{{--<section class="feature fa-code">--}}
								{{--<h3>Ultricies dolore</h3>--}}
								{{--<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>--}}
							{{--</section>--}}
						{{--</div>--}}
						{{--<div class="4u$ 6u(2) 12u$(3)">--}}
							{{--<section class="feature fa-save">--}}
								{{--<h3>Magna lacinia</h3>--}}
								{{--<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>--}}
							{{--</section>--}}
						{{--</div>--}}
						{{--<div class="4u 6u$(2) 12u$(3)">--}}
							{{--<section class="feature fa-desktop">--}}
								{{--<h3>Praesent lacinia</h3>--}}
								{{--<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>--}}
							{{--</section>--}}
						{{--</div>--}}
						{{--<div class="4u 6u(2) 12u$(3)">--}}
							{{--<section class="feature fa-camera-retro">--}}
								{{--<h3>Morbi semper</h3>--}}
								{{--<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>--}}
							{{--</section>--}}
						{{--</div>--}}
						{{--<div class="4u$ 6u$(2) 12u$(3)">--}}
							{{--<section class="feature fa-cog">--}}
								{{--<h3>Arcu consequat</h3>--}}
								{{--<p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>--}}
							{{--</section>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</section>--}}

		{{--<!-- Three -->--}}
			{{--<section id="three" class="wrapper style1">--}}
				{{--<div class="container">--}}
					{{--<header class="major">--}}
						{{--<h2>Amet nisl consequat</h2>--}}
						{{--<p>Ipsum dolor tempus commodo turpis adipiscing adipiscing in tempor placerat<br />--}}
						{{--sed amet accumsan enim lorem sem turpis ut. Massa amet erat accumsan curae<br />--}}
						{{--blandit porttitor faucibus in nisl nisi volutpat massa mi non nascetur.</p>--}}
					{{--</header>--}}
					{{--<div class="row">--}}
						{{--<div class="4u 6u(2) 12u$(3)">--}}
							{{--<article class="box post">--}}
								{{--<a href="#" class="image fit"><img src="images/pic01.jpg" alt="" /></a>--}}
								{{--<h3>Sed amet lorem</h3>--}}
								{{--<p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button">Learn More</a></li>--}}
								{{--</ul>--}}
							{{--</article>--}}
						{{--</div>--}}
						{{--<div class="4u 6u$(2) 12u$(3)">--}}
							{{--<article class="box post">--}}
								{{--<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>--}}
								{{--<h3>Massa accumsan</h3>--}}
								{{--<p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button">Learn More</a></li>--}}
								{{--</ul>--}}
							{{--</article>--}}
						{{--</div>--}}
						{{--<div class="4u$ 6u(2) 12u$(3)">--}}
							{{--<article class="box post">--}}
								{{--<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>--}}
								{{--<h3>Faucibus portitor</h3>--}}
								{{--<p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button">Learn More</a></li>--}}
								{{--</ul>--}}
							{{--</article>--}}
						{{--</div>--}}
						{{--<div class="4u 6u$(2) 12u$(3)">--}}
							{{--<article class="box post">--}}
								{{--<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>--}}
								{{--<h3>Non placerat</h3>--}}
								{{--<p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button">Learn More</a></li>--}}
								{{--</ul>--}}
							{{--</article>--}}
						{{--</div>--}}
						{{--<div class="4u 6u(2) 12u$(3)">--}}
							{{--<article class="box post">--}}
								{{--<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>--}}
								{{--<h3>Adipiscing dolor</h3>--}}
								{{--<p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button">Learn More</a></li>--}}
								{{--</ul>--}}
							{{--</article>--}}
						{{--</div>--}}
						{{--<div class="4u$ 6u$(2) 12u$(3)">--}}
							{{--<article class="box post">--}}
								{{--<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>--}}
								{{--<h3>Feugiat tempus</h3>--}}
								{{--<p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>--}}
								{{--<ul class="actions">--}}
									{{--<li><a href="#" class="button">Learn More</a></li>--}}
								{{--</ul>--}}
							{{--</article>--}}
						{{--</div>--}}
					{{--</div>--}}
				{{--</div>--}}
			{{--</section>--}}

		{{--<!-- CTA -->--}}
			{{--<section id="cta" class="wrapper style3">--}}
				{{--<h2>Sed faucibus et consequat</h2>--}}
				{{--<ul class="actions">--}}
					{{--<li><a href="#" class="button big">Get Started</a></li>--}}
				{{--</ul>--}}
			{{--</section>--}}

		{{--<!-- Footer -->--}}
			{{--<footer id="footer">--}}
				{{--<ul class="icons">--}}
					{{--<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>--}}
					{{--<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>--}}
					{{--<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>--}}
					{{--<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>--}}
					{{--<li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>--}}
				{{--</ul>--}}
				{{--<ul class="menu">--}}
					{{--<li><a href="#">FAQ</a></li>--}}
					{{--<li><a href="#">Terms of Use</a></li>--}}
					{{--<li><a href="#">Privacy</a></li>--}}
					{{--<li><a href="#">Contact</a></li>--}}
				{{--</ul>--}}
				{{--<span class="copyright">--}}
					{{--&copy; Copyright. All rights reserved. Design by <a href="http://www.html5webtemplates.co.uk">Responsive Web Templates</a>--}}
				{{--</span>--}}
			{{--</footer>--}}

	{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE HTML>

<html>
<head>
    <title> </title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src=" css/ie/html5shiv.js"></script><![endif]-->
    <script src=" js/jquery.min.js"></script>
    <script src=" js/jquery.dropotron.min.js"></script>
    <script src=" js/jquery.scrollgress.min.js"></script>
    <script src=" js/jquery.scrolly.min.js"></script>
    <script src=" js/jquery.slidertron.min.js"></script>
    <script src=" js/skel.min.js"></script>
    <script src=" js/skel-layers.min.js"></script>
    <script src=" js/init.js"></script>

    <link rel="stylesheet" href=" css/skel.css" />
    <link rel="stylesheet" href=" css/style.css" />
    <link rel="stylesheet" href=" css/style-xlarge.css" />

    <!--[if lte IE 9]><link rel="stylesheet" href=" css/ie/v9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href=" css/ie/v8.css" /><![endif]-->
</head>
<body class="landing">

<!-- Header -->
<header id="header" class="alt skel-layers-fixed">
    <h1><a href="">ISET Sousse </a></h1>
    <nav id="nav">

        <ul>
            @auth
                <li><a href="/dashboard">Home</a></li>
            @else
                <li><a href="/login">Login</a></li>
                <li><a href="register">Register</a></li>
            @endauth
        </ul>

    </nav>
</header>

<!-- Banner -->
<section id="banner">
    <div class="inner">
        <h2>ISET SOUSSE</h2>
        <p>Higher Institution of technological studies</p>
        <ul class="actions">
            <li><a href="#one" class="button big scrolly">Learn More</a></li>
        </ul>
    </div>
</section>

<!-- One -->
<section id="one" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Iset Sousse</h2>
            <p>the Higher Institute of Technological Studies have the role of training high-level Technicians. The course assigned with their students imposes to the narrow partnership with the world of companies. Beside the two internships which they must be done during their university course, the students must do the end of studies project whose subject is generally proposed still by the company. In addition, the industrialists have to ensure approximately 25% lesion exempted in these institutes. As it is seen the texts envisaged a privileged relation between the companies and the ISET.</p>
        </header>
        <div class="slider">
            <span class="nav-previous"></span>
            <div class="viewer">
                <div class="reel">
                    <div class="slide">
                        <img src=" images/slide01.jpg" alt="" />
                    </div>
                    <div class="slide">
                        <img src=" images/slide02.jpg" alt="" />
                    </div>
                    <div class="slide">
                        <img src=" images/slide03.jpg" alt="" />
                    </div>
                </div>
            </div>
            <span class="nav-next"></span>
        </div>
    </div>
    <br><br>
</section>

<!-- Two -->
<section id="two" class="wrapper style2">
    <div class="container">
        <div class="row uniform">
            <div class="4u 6u(2) 12u$(3)">
                <section class="feature fa-briefcase">
                    <h3>Natoque phasellus</h3>
                    <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                </section>
            </div>
            <div class="4u 6u$(2) 12u$(3)">
                <section class="feature fa-code">
                    <h3>Ultricies dolore</h3>
                    <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                </section>
            </div>
            <div class="4u$ 6u(2) 12u$(3)">
                <section class="feature fa-save">
                    <h3>Magna lacinia</h3>
                    <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                </section>
            </div>
            <div class="4u 6u$(2) 12u$(3)">
                <section class="feature fa-desktop">
                    <h3>Praesent lacinia</h3>
                    <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                </section>
            </div>
            <div class="4u 6u(2) 12u$(3)">
                <section class="feature fa-camera-retro">
                    <h3>Morbi semper</h3>
                    <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                </section>
            </div>
            <div class="4u$ 6u$(2) 12u$(3)">
                <section class="feature fa-cog">
                    <h3>Arcu consequat</h3>
                    <p>Ipsum dolor tempus commodo amet sed accumsan et adipiscing blandit porttitor sed faucibus.</p>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Three -->
<section id="three" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Events</h2>
            <p>Ipsum dolor tempus commodo turpis adipiscing adipiscing in tempor placerat<br />
                sed amet accumsan enim lorem sem turpis ut. Massa amet erat accumsan curae<br />
                blandit porttitor faucibus in nisl nisi volutpat massa mi non nascetur.</p>
        </header>
        <div class="row">
            <div class="4u 6u(2) 12u$(3)">
                <article class="box post">
                    <a href="#" class="image fit"><img src=" images/pic01.jpg" alt="" /></a>
                    <h3>Technocon</h3>
                    <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn More</a></li>
                    </ul>
                </article>
            </div>
            <div class="4u 6u$(2) 12u$(3)">
                <article class="box post">
                    <a href="#" class="image fit"><img src=" images/pic02.jpg" alt="" /></a>
                    <h3>Mechanovation</h3>
                    <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn More</a></li>
                    </ul>
                </article>
            </div>
            <div class="4u$ 6u(2) 12u$(3)">
                <article class="box post">
                    <a href="#" class="image fit"><img src=" images/pic03.jpg" alt="" /></a>
                    <h3>Iset Robot's Day</h3>
                    <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn More</a></li>
                    </ul>
                </article>
            </div>
            <div class="4u 6u$(2) 12u$(3)">
                <article class="box post">
                    <a href="#" class="image fit"><img src=" images/pic04.jpg" alt="" /></a>
                    <h3>JPO</h3>
                    <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn More</a></li>
                    </ul>
                </article>
            </div>
            <div class="4u 6u(2) 12u$(3)">
                <article class="box post">
                    <a href="#" class="image fit"><img src=" images/pic05.jpg" alt="" /></a>
                    <h3>JC 4C</h3>
                    <p>Ipsum dolor tempus et commodo lorem accumsan et adipiscing blandit porttitor feugiat tempus lorem faucibus.</p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn More</a></li>
                    </ul>
                </article>
            </div>
            <div class="4u$ 6u$(2) 12u$(3)">
                <article class="box post">
                    <a href="#" class="image fit"><img src=" images/pic06.jpg" alt="" /></a>
                    <h3></h3>
                    <p></p>
                    <ul class="actions">
                        <li><a href="#" class="button">Learn More</a></li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section id="cta" class="wrapper style3">
    <h2>Sed faucibus et consequat</h2>
    <ul class="actions">
        <li><a href="#" class="button big">Get Started</a></li>
    </ul>
</section>

<!-- Footer -->
<footer id="footer">
    <ul class="icons">
        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
        <li><a href="#" class="icon fa-envelope"><span class="label">Envelope</span></a></li>
    </ul>
    <ul class="menu">
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Privacy</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
    <span class="copyright">
					&copy; Copyright. All rights reserved. Design by AceVel</a>
				</span>
</footer>

</body>
</html>