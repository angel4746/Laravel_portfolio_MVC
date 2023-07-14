@extends('frontend.master')
@section('content')
<body>
	<!--------header---->
	<header>
		<a href="#" class="logo"><h1><span>TOSMIA</span></h1></a>
		<div class="bx bx-menu" id="menu-icon"></div>

		<ul class="navlist">
			<li><a href="#home">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#portfolio">Portfolio</a></li>
			<li><a href="#service">Education</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>
		<a href="#" class="top-btn">Download CV</a>
	</header>

	<!--------home---->
	<section class="home" id="home">
		<div class="home-text">
			<h3>Hello, I'm</h3>
			<h1>Tosmia Islam Nishat</h1>
			<h5>A Creative Designer <span>From Dhaka, Bangladesh</span></h5>
			<p>I'm Full stack Web Developer based Dhaka, and I'm very passionate <br> and dedicated to my work.</p>
			<div class="social">
				<a href="https://www.facebook.com/tosmiaislam.nishat"><i class='bx bxl-facebook'></i></a>
				{{-- <a href=""><i class='bx bxl-twitter' ></i></a> --}}
				<a href="https://www.linkedin.com/in/tosmia-islam"><i class='bx bxl-linkedin' ></i></a>
				{{-- <a href="#"><i class='bx bxl-behance' ></i></a> --}}
				<a href="https://mail.google.com/mail/u/1/#inbox"><i class="bx bxl-gmail"></i></a>
			</div>
			<a href="#" class="btn">About Me</a>
		</div>
		
	<div class="home-img">
			<img src="{{asset('/')}}assets/img/my-pic.png">
		</div>

		

	</section>

	<!--------sub service---->
	<section class="sub-service">
		<div class="items">
			<div class="sub-box">
				<div class="sub-img">
					<img src="{{asset('/')}}assets/img/target.svg">
				</div>
				<h3>Pixel Perfect</h3>
				<p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
			</div>

			<div class="sub-box">
				<div class="sub-img">
					<img src="{{asset('/')}}assets/img/brush.svg">
				</div>
				<h3>High Quality</h3>
				<p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
			</div>

			<div class="sub-box">
				<div class="sub-img">
					<img src="{{asset('/')}}assets/img/energy.svg">
				</div>
				<h3>Awesome Idea</h3>
				<p>Most common methods for designing websites that work well on desktop is responsive and adaptive design.</p>
			</div>

		</div>
	</section>

	<!--------About---->
	<section class="about" id="about">
		<div class="about-img">
			<img src="{{asset('/')}}assets/img/about.jpg">
		</div>

		<div class="about-text">
			<h3>I'm a Web Developer</h3>
			<h2>I Can Make Any project You Want</h2>
			<p>Hello there! I’m a Full stack Web developer. I have completed a course on Full Stack Web Development In PHP with Laravel from BESIS – BITM/SEIP. I have been working with OOP and MVC with Laravel for a couple of years. I know Laravel CRUD operations and have a great knowledge on how to make a website fully  I have acquired the skills and knowledge necessary to make your project a success. I enjoy every step of the design process, from discussion and collaboration.</p>
			<a href="#" class="btn">Hire Me</a>
		</div>
	</section>

	<!--------portfolio---->
	<section class="portfolio" id="portfolio">
		<div class="heading">
			<h3>Portfolio</h3>
			<h2>My Amazing Work</h2>
			<p>I have good knowledge of row HTML and CSS. I have done so many projects with HTML and CSS. And I have good knowledge about bootstrap. I have acquired the skills and knowledge necessary to make your project a success.

			</p>
		</div>

		<div class="portfolio-content">

			@foreach ($products as $product)
				
			<div class="col">
				<img src="{{asset('/')}}{{$product->image}}">
				<div class="layer">
					<h3 class="p-5">{{$product->title}}</h3>
					<h5 class="p-5">{{$product->desc}}</h5>
				</div>
			</div>

			@endforeach


		</div>
	</section>

	<!--------service---->
	<section class="service" id="service">
		<div class="heading"></div>
			<h3>Education</h3>
			<h2>I’m a Full stack Web developer. </h2>
			<p>Most common methods for designing websites that work well on desktop is <br> responsive and adaptive design</p>
		</div>

		<div class="service-content">
			<div class="row">
				<div class="s s-one">
					<img src="{{asset('/')}}assets/img/anchor.svg">
				</div>
				<h3>North South University </h3>
				<h5>Bachelor Of Engineering In Computer Science And Engineering <span>2022</span></h5>
				<p>It was 130 cedit course. That time I was connect with ECE club. I did some raw PHP website project that time.</p>
			</div>

			<div class="row">
				<div class="s s-tow">
					<img src="{{asset('/')}}assets/img/physics.svg">
				</div>
				<h3>Shoheed Anwar School and College</h3>
				<h5>(Higher Secondary School Certificate) <span>Science</span></h5>
				<p>I have passed HSC in 2016 at Science</p>
			</div>

			<div class="row">
				<div class="s s-three">
					<img src="{{asset('/')}}assets/img/contact.svg">
				</div>
				<h3>EXPERIENCE</h3>
				<h5>WEB Developer<span> Laravel</span></h5>
				<p>I have completed a course on Full Stack Web Development In PHP with Laravel from BESAIS – BITM/SEIP. It was government fully funded Scholarship program. I know OOP and MVC with Laravel. I also know laravel CRUD. I never joined a company before. But I have completed some projects in Laravel.</p>
			</div>

			<div class="row">
				<div class="s s-four">
					<img src="{{asset('/')}}assets/img/web.svg">
				</div>
				<h3>HTML, CSS </h3>
				<h5>FrontEnd<span></span></h5>
				<p>I have good knowledge of row HTML and CSS. I have done so many projects with HTML and CSS. And I have good knowledge about bootstrap. I have acquired the skills and knowledge necessary to make your project a success.</p>
			</div>

		</div>
	</section>

	<!--------work---->
	<section class="cta">
		<div class="heading">
			<h2>Completed 20+ Projects <br> Successfully</h2>
		</div>

		<div class="cta-box">
			<div class="wrap one">
				<h3>20+</h3>
				<p>Finished Projects</p>
			</div>

			<div class="wrap two">
				<h3>10+</h3>
				<p>Happy Customer</p>
			</div>

			<div class="wrap three">
				<h3>1k</h3>
				<p>Global Customers</p>
			</div>

		</div>
	</section>

	<!--------contact---->
	<section class="contact" id="contact">
		<div class="container">
			<div class="center">
				<p><h3>Let's talk about everything</h3></p>
				<p>My Contact NO - 01748608636</p>
				<p> Send me an email...</p>
				<p>tosmiaislam@gmail.com</p>
			</div>

			<div class="action">
				<form action="{{route('email.store')}}"  method="POST" enctype="multipart/form-data">  
					@csrf
					<input type="text" name="text" placeholder="Text me" required>
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</section>

	<!--------ends---->
	<div class="ends">
		<p>Made with love by Tosmia islam Nishat © 2023</p>
	</div>

	<script src="https://unpkg.com/scrollreveal"></script>

	<!--------Link to js---->
	<script type="text/javascript" src="{{asset('/')}}assets/js/script.js"></script>
	
</body>
@endsection