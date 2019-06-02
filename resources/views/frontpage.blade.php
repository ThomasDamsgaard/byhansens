<!DOCTYPE HTML>
<html>
	<head>
		<title>Chokolade ByHansens</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('css/noscripts.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						{{-- <div class="logo">
							<img src="{{ asset('storage/img/logo.png') }}" alt="" style="width: 100%; height: auto;">
						</div> --}}
						<div class="content">
							<div class="inner">
								{{-- <h1>By Hansens</h1> --}}
								<img src="{{ asset('assets/img/logo-hvid.png') }}" alt="" class="logo-responsive" style="opacity: 0.7;">

								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#chokolade">Chokolade</a></li>
								<li><a href="#ravarer">Råvarer</a></li>
								<li><a href="#produkter">Produkter</a></li>
								<li><a href="#om">Om os</a></li>
								<li><a href="#kontakt">Kontakt</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Chokolade -->
							<article id="chokolade">
								<h2 class="major">Chokolade</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00012.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p>Aenean ornare velit lacus, ac varius enim ullamcorper eu. Proin aliquam facilisis ante interdum congue. Integer mollis, nisl amet convallis, porttitor magna ullamcorper, amet egestas mauris. Ut magna finibus nisi nec lacinia. Nam maximus erat id euismod egestas. By the way, check out my <a href="#råvarer">råvarer</a>.</p>
							</article>
						<!-- Chokolade -->

						<!-- Råvarer -->
							<article id="ravarer">
								<h2 class="major">Råvarer</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00021.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
								<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat tempus.</p>
							</article>
						<!-- Råvarer -->

						<!-- Produkter -->
							<article id="produkter">
								<h2 class="major">Produkter</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00016.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p>Adipiscing magna sed dolor elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices.</p>
								<p>Nullam et orci eu lorem consequat tincidunt vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus pharetra. Pellentesque condimentum sem. In efficitur ligula tate urna. Maecenas laoreet massa vel lacinia pellentesque lorem ipsum dolor. Nullam et orci eu lorem consequat tincidunt. Vivamus et sagittis libero. Mauris aliquet magna magna sed nunc rhoncus amet feugiat tempus.</p>
							</article>
						<!-- Produkter -->

						<!-- Om -->
							<article id="om">
								<h2 class="major">Om os</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00017.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p>Lorem ipsum dolor sit amet, consectetur et adipiscing elit. Praesent eleifend dignissim arcu, at eleifend sapien imperdiet ac. Aliquam erat volutpat. Praesent urna nisi, fringila lorem et vehicula lacinia quam. Integer sollicitudin mauris nec lorem luctus ultrices. Aliquam libero et malesuada fames ac ante ipsum primis in faucibus. Cras viverra ligula sit amet ex mollis mattis lorem ipsum dolor sit amet.</p>
							</article>
						<!-- Om -->

						<!-- Kontakt -->
							<article id="kontakt">
								<h2 class="major">Kontakt</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00017.jpeg') }}" alt="" style="max-width: 400px;"/></span>

								{{-- <div style="display:flex; justify-content: center">

									<div class="">
										<p>
											By Hansens Chokolade
											<br>
											Hansensvej 8
											<br>
											5000 Odense C
										</p>

									</div>
								</div> --}}


									<div style="display:flex; justify-content: space-evenly">
										<div>
											<p>
												Martin Hansen
												<br>
												Produktansvarlig
												<br>
												<a href="mailto:">Mail</a>
											</p>
										</div>
										<div>
											<p>
												Benjamin Hansen
												<br>
												Salgsansvarlig
												<br>
												<a href="mailto:">Mail</a>
											</p>
										</div>
									</div>




								{{-- <form method="POST" action="{{ route('contact.send') }}">
									@csrf
									<div class="fields">
										<div class="field half">
											<label for="name">Navn</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Besked</label>
											<textarea name="message" id="message" rows="4"></textarea>
											@captcha
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Besked" class="primary" /></li>
										<li><input type="reset" value="Nulstil" /></li>
									</ul>
								</form> --}}

								<ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								</ul>
							</article>
							<!-- Kontakt -->

					</div>
					<!-- Main -->

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; ByHansens. Kode af: <a href="https://thomasdamsgaard.dk">Thomas Damsgaard</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
			<script src="{{ asset('js/browser.min.js') }}"></script>
			<script src="{{ asset('js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('js/util.js') }}"></script>
			<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>
