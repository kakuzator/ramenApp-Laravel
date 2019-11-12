<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>


<body class="is-preload">
	{% if flash|length > 0 %}
	<div class="flash">{{flash}}</div>
	{% endif %}

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header">
			<div class="inner">

				<!-- Logo -->
				<a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}top.php" class="logo">
					<span class="symbol"><img src="{{constant('ramenApp\\Bootstrap::APP_URL')}}images/ramen.svg" alt="" /></span><span class="title">Ramen-APP</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}top.php">Home</a></li>
				{% if session is empty %}
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}login.php">Login</a></li>
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}signup.php">Signup</a></li>
				{% else %}
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}myRestaurant.php">MyRestaurant</a></li>
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}post.php">Post</a></li>
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}logout.php">Logout</a></li>
				<li><a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}unsubscribe.php">Unsubscribe</a></li>
				{% endif %}
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>This is Ramen-APP! Skina ramen wo, shoukai sitene!!<br />
						Responsiv nimo battiri taiou!!</h1>
					<p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
				</header>
				<section class="tiles">
					{% for key,data in dataArr %}
					<article class="style{{random(5) + 1}}">
						<span class="image">
							<img src="{{constant('ramenApp\\Bootstrap::APP_URL')}}pic/{{data.pic}}" alt="" width="360" height="270" />
						</span>
						<a href="{{constant('ramenApp\\Bootstrap::APP_URL')}}edit.php?id={{data.id}}">
							<h2>{{data.name}}</h2>
							<div class="content">
								<p>Sed nisl arcu euismod sit amet nisi lorem etiam dolor veroeros et feugiat.</p>
							</div>
						</a>
					</article>
					{% endfor %}
				</section>
			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Get in touch</h2>
					<form method="post" action="">
						<div class="fields">
							<div class="field">
								<textarea name="search" id="search" placeholder="Search"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Search" class="primary" /></li>
							<li>
								<div class="col-4 col-12-small">
									<input type="radio" id="AND" name="ANDOR" value=0 checked>
									<label for="AND">AND</label>
								</div>
							</li>
							<li>
								<div class="col-4 col-12-small">
									<input type="radio" id="OR" name="ANDOR" value=1>
									<label for="OR">OR</label>
								</div>
							</li>
						</ul>

					</form>
				</section>
				<section>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands style2 fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
						<li><a href="#" class="icon brands style2 fa-500px"><span class="label">500px</span></a></li>
						<li><a href="#" class="icon solid style2 fa-phone"><span class="label">Phone</span></a></li>
						<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="{{constant('ramenApp\\Bootstrap::APP_URL')}}/js/jquery.min.js"></script>
	<script src="{{constant('ramenApp\\Bootstrap::APP_URL')}}/js/browser.min.js"></script>
	<script src="{{constant('ramenApp\\Bootstrap::APP_URL')}}/js/breakpoints.min.js"></script>
	<script src="{{constant('ramenApp\\Bootstrap::APP_URL')}}/js/util.js"></script>
	<script src="{{constant('ramenApp\\Bootstrap::APP_URL')}}/js/main.js"></script>

</body>

</html>