<!DOCTYPE HTML>
<html>
	<head>
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-0XVHWKKGDM"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-0XVHWKKGDM');
		</script>

		<title>ByHansens</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('css/noscripts.css') }}" /></noscript>

		<style media="screen">
		.loader {
			width: 100px;
			height: 80px;
			position: absolute;
			top: 0; right: 0; left: 0; bottom: 0;
			margin: auto;
			}
			.loader .image {
			width: 100px;
			height: 160px;
			font-size: 40px;
			text-align: center;
			transform-origin: bottom center;
			animation: 3s rotate infinite;
			opacity: 0;
			}
			.loader span {
			display: block;
			width: 100%;
			text-align: center;
			position: absolute;
			bottom: 0;
			}

			@keyframes rotate{
			0% {
				transform: rotate(90deg);
			}
			10% {
				opacity: 0;
			}
			35% {
				transform: rotate(0deg);
				opacity: 1;
			}
			65% {
				transform: rotate(0deg);
				opacity: 1;
			}
			80% {
				opacity: 0;
			}
			100% {
				transform: rotate(-90deg);
			}
			}
		</style>

		<script type="text/javascript">
        function callbackThen(response){
            // read HTTP status
            console.log(response.status);

            // read Promise object
            response.json().then(function(data){
                console.log(data);
            });
        }
        function callbackCatch(error){
            console.error('Error:', error)
        }
    </script>

		{!!
			htmlScriptTagJsApiV3([
        'action' => 'homepage',
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch'
      ])
		!!}
	</head>
	<body class="is-preload">



		<!-- Wrapper -->
			<div id="wrapper">

				<div class="loader">
		  <div class="image">
		    <i class="fas fa-cookie-bite"></i>
		  </div>
		  {{-- <span></span> --}}
		</div>

				<!-- Header -->
					<header id="header">
						<nav>
							<ul>
								<li><a href="https://byhansens.myshopify.com" target="_blank">Webshop</a></li>
								<li><a href="#produkter">Produkter</a></li>
								<li><a href="#raavarer">Råvarer</a></li>
								<li><a href="#kontakt">Kontakt</a></li>
								<li><a href="#om-os">Om os</a></li>
								{{-- <li><a href="#forhandlere">Forhandlere</a></li> --}}
							</ul>
						</nav>
						<div class="content">
							<div class="inner">
								{{-- <h1>By Hansens</h1> --}}
								<img src="{{ asset('assets/img/logo-hvid.png') }}" alt="" class="logo-responsive" style="opacity: 0.7;">
								<p>
									Velkommen til en verden af søde og smagfulde snacks fyldt med gode og nærende råvarer.<br>
									Her er alt lavet på naturlige ingredienser, der er til at forstå.
								</p>
								<ul class="icons">
									<li><a href="https://www.facebook.com/byhansens/" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/by.hansens/" class="icon fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
								</ul>
							</div>
						</div>

					</header>

				<!-- Main -->
					<div id="main">



						<!-- Råvarer -->
							<article id="raavarer">
								<h2 class="major">Kun naturlige råvarer</h2>
								<span class="image main"><img src="{{ asset('assets/img/image21.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p><span><b><i>Vi</i></b></span> har fyldt vores produkter med de allerbedste råvarer, for at give dig det allerbedste resultat. Her kan du læse om alle vores råvarer; hvorfor vi har valgt dem, og hvorfor de er gode for dig.</p>
								<p>
									<span><b><i>Kikærter</i></b></span> er en fantastisk råvare med mange gode egenskaber – og de bliver kun bedre af at blive pakket ind i 59,5% mørk luksuschokolade! Sammen med en masse andre gode råvarer udgør kikærterne selve grundpillen i vores Chickpea Cubes. Kikærter har et højt indhold af både protein og fibre, og så er de fyldt med A, B og E-vitaminer såvel som kalium, calcium, magnesium og jern. Derfor smager vores Chickpea Cubes ikke bare fantastisk – de er faktisk også et godt supplement til din kost.
								</p>
								<p>
									<span><b><i>Peanutbutter</i></b></span> er den anden af de to bærende ingredienser i vores Chickpea Cubes, og dét er den af mange gode grunde. Først og fremmest er den fede jordnøddesmør en overset kilde til sundere fedttyper i vores hverdag. Den cremede masse har desuden også et højt indhold af protein og fibre – og så smager den selvfølgelig bare hamrende godt. Derfor har vi valgt peanutbutter som limen, der holder sammen på alle vores gode råvarer.
								</p>
								<p>
									<span><b><i>Havren</i></b></span> blev oprindeligt betragtet som en form for ukrudt på markerne blandt datidens bønder – det virker nærmest utroligt, taget i betragtning hvor meget vi bruger den herhjemme i dag! Heldigvis fik bønderne øjnene op for den hårdføre kornsort med bjælderne på allerede i bronzealderen, hvor de langsomt begyndte at undersøge dens mange muligheder. Hos By Hansens bruger vi havre i vores Chickpea Cubes for det fantastiske næringsindhold, og fordi havren trives så godt i det danske klima, så vi kan få det dyrket helt lokalt.
								</p>
								<p>
									<span><b><i>Mandler</i></b></span> har været en populær snack i årevis, så lige fra starten var det oplagt for os at bruge den lille vidundernød. Også her får vores Chickpea Cubes tilført et højt indhold af proteiner og fibre, og så er mandlerne med til at give smagen sit helt særlige særpræg.
								</p>
								<p>
									<span><b><i>Kardemomme</i></b></span> har en helt enestående smag, som med det samme lader varmen og hyggen sprede sig. Mange af os nyder smagen, når vi mæsker os i varme hveder til St. Bededag, og et år slog det os: Den smag skal vi bruge! Derfor har vi tilsat en anelse kardemomme til vores Chickpea Cubes, for at runde smagen af og give dem en aroma af velbehag.
								</p>
								<p>
									<span><b><i>Salt</i></b></span> hører til i al god madlavning, og også i vores Chickpea Cubes. Med bare en knivspids af det allestedsnærværende mineral forstærkes det samlede smagsindtryk af vores råvarer, så smagen løfter sig til et helt nyt niveau.
								</p>
								<p>
									<span><b><i>Flormelis</i></b></span> er en helt fint malet form af sukkeren, der udvindes fra de danske sukkerroer fra Lolland og Falster. Med et indhold på omkring 2% stivelse er det enormt effektivt til at forhindre massen i vores Chickpea Cubes i at klumpe – og så bidrager det naturligvis med en mild sødme til produktet!
								</p>
								<p>
									<span><b><i>Rapsolie</i></b></span> er med til at give vores Chickpea Cubes deres bløde struktur, idet den nemt fordeles og effektivt holder sammen på alle råvarerne, efterhånden som massen får lov til at sætte sig.
								</p>
								<p>
									<span><b><i>Mørk chokolade</i></b></span> må være en lille bid af himmerige! Vi bruger chokolade med 59,5% kakao – fyldt med gode egenskaber som vitaminer, mineraler og antioxidanter. Og så går smagen helt eminent sammen med resten af vores råvarer for at skabe en fuldendt nydelse fyldt med nærende indhold.
								</p>
								<p>
									<span><b><i>Glycerol</i></b></span> er en farveløs, lugtfri og sød form for alkohol – men bare rolig, du bliver ikke beruset af at spise vores Chickpea Cubes. Vi bruger blot glycerolen som en form for naturligt konserveringsmiddel i massen, så du kan stole på, at dine lækre snacks holder lige så længe, som du kan holde fingrene fra æsken!
								</p>
							</article>
						<!-- Råvarer -->

						<!-- Produkter -->
							<article id="produkter">
								<h2 class="major">
									Produkter <br>
									<span style="font-size:0.7em">- Chickpea Cubes</span>
								</h2>
								<div class="center">
									<div>
										<span class="image">
											<a 
											href="https://byhansens.myshopify.com/products/original-3-stk-chickpea-cubes?variant=32614128451646"
											target="_blank" 
											>
												<img src="{{ asset('assets/img/plain.jpg') }}" alt="" style="max-width:250px;"/>
											</a>
										</span>
										<div class="center">
											<div>
												<h3>
													<u>
														<a 
														href="https://byhansens.myshopify.com/products/original-3-stk-chickpea-cubes?variant=32614128451646"
														target="_blank"
														>
															Original
														</a>
													</u>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<div>
									<p>Som navnet antyder, er det her stykket, hvor det hele startede. Den rene Chickpea Cube med en cremet konsistens, en let smag af nødder og masser af umami. Et herligt stykke hverdagskonfekture, som du roligt kan spise en mere af.</p>
								</div>
								<hr>
								<div class="center">
									<div>
										<span class="image">
											<a 
											href="https://byhansens.myshopify.com/products/mint-3-stk-chickpea-cubes?variant=32614128451646"
											target="_blank" 
											>
												<img src="{{ asset('assets/img/mint.jpg') }}" alt="" style="max-width:250px;"/>
											</a>
										</span>
										<div class="center">
											<div>
												<h3>
													<u>
														<a 
														href="https://byhansens.myshopify.com/products/mint-3-stk-chickpea-cubes?variant=32614128451646"
														target="_blank"
														>
															Mint
														</a>
													</u>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<div>
									<p>Prøv en Chickpea Cube med den forfriskende smag af Mint sammen med den cremede konsistens og den intense smag, der kendetegner Originalen. Et herligt stykke hverdagskonfekture, som du roligt kan spise en mere af.</p>
								</div>
								<hr>
								<div class="center">
									<div>
										<span class="image">
											<a 
											href="https://byhansens.myshopify.com/products/orange-3-stk-chickpea-cubes?variant=32614128451646"
											target="_blank" 
											>
												<img src="{{ asset('assets/img/orange.jpg') }}" alt="" style="max-width:250px;"/>
											</a>
										</span>
										<div class="center">
											<div>
												<h3>
													<u>
														<a 
														href="https://byhansens.myshopify.com/products/kanel-3-stk-chickpea-cubes?variant=32614128451646"
														target="_blank"
														>
															Orange
														</a>
													</u>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<div>
									<p>Intens chokolade, cremet kikærtemasse og den søde smag af appelsiner – dét er, hvad du får, når du sætter tænderne i en Chickpea Cube med smagen af Orange. Et herligt stykke hverdagskonfekture, som du roligt kan spise en mere af.</p>
								</div>
								<hr>
								<div class="center">
									<div>
										<span class="image">
											<a 
											href="https://byhansens.myshopify.com/products/pistacie-3-stk-chickpea-cubes?variant=32614128451646"
											target="_blank" 
											>
												<img src="{{ asset('assets/img/pistachie.jpg') }}" alt="" style="max-width:250px;"/>
											</a>
										</span>
										<div class="center">
											<div>
												<h3>
													<u>
														<a 
														href="https://byhansens.myshopify.com/products/pistacie-3-stk-chickpea-cubes?variant=32502560391230"
														target="_blank">
															Pistacie
														</a>
													</u>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<div>
									<p>Når du nyder en Chickpea Cube med Pistacie er det smagen af det velkendte og det eksotiske, der mødes i skøn harmoni til glæde for dine sanser. Et herligt stykke hverdagskonfekture, som du roligt kan spise en mere af.</p>
								</div>
								<hr>
								<div class="center">
									<div>
										<span class="image">
											<a 
											href="https://byhansens.myshopify.com/products/kanel-3-stk-chickpea-cubes?variant=32614128451646"
											target="_blank" 
											>
												<img src="{{ asset('assets/img/kanel.jpg') }}" alt="" style="max-width:250px;"/>
											</a>
										</span>
										<div class="center">
											<div>
												<h3>
													<u>
														<a 
														href="https://byhansens.myshopify.com/products/kanel-3-stk-chickpea-cubes?variant=32614128451646"
														target="_blank"
														>
															Kanel
														</a>
													</u>
												</h3>
											</div>
										</div>
									</div>
								</div>
								<div>
									<p>Skynd dig at hapse en Chickpea Cube med Kanel, mens du kan, for de kommer nemlig kun i en LIMITED EDITION. Det er smagen af jul forklædt mellem kikærter og den fantastiske, cremede konsistens, der kendetegner vores Chickpea Cubes. Et herligt stykke hverdagskonfekture, som du roligt kan spise en mere af.</p>
								</div>
							</article>
						<!-- Produkter -->

						<!-- Om -->
							<article id="om-os">
								<h2 class="major">Om os</h2>
								<span class="image main"><img src="{{ asset('assets/img/image3.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p>By Hansens har en vision om at revolutionere markedet og udbrede budskabet om, at slik sagtens kan være fyldt med sunde, nærende og naturlige ingredienser, uden at de behøver at smage hverken fornuftigt eller kedeligt.</p>
								<p>Det hele startede mellem Benjamin og Martin, som begge i lang tid havde gået med en drøm om at starte egen virksomhed, hvor de havde helt frie tøjler til at føre deres drømme ud i livet. Det skulle vise sig, at de to var hinandens perfekte samarbejdspartnere, så der gik ikke længe, før By Hansens blev til. Og så tog tingene fart – troede de.</p>
								<p>For den danske fødevarebranche er en kompliceret størrelse fyldt med reguleringer og lovgivning, som det kan være svært at finde hverken hoved eller hale i. De to måtte have hjælp og indgik derfor hurtigt samarbejde med Michael Larsen. Han havde den indsigt i branchen, som de andre manglede, og på den måde blev to til tre. Og den idérige trio er nu klar til at vende hele branchen på hovedet!</p>
								<p><span><b><i>Benjamin Jack Hansen</i></b></span> er uddannet klejnsmed og har efterfølgende videreuddannet sig til produktionsteknolog inden for metalindustrien. I dag arbejder han primært med udviklingen af maskiner til fødevareproduktion.</p>
								<p><span><b><i>Martin Hansen</i></b></span> er uddannet bager og har efterfølgende videreuddannet sig til fødevareteknolog. I dag arbejder han med udvikling af fødevarer indenfor bageribranchen.</p>
							</article>
						<!-- Om -->

						<!-- Forhandlere -->
							<article id="forhandlere">
								<h2 class="major">Forhandlere</h2>
								<p>Kunne du tænke dig at forhandle vores Chickpea Cubes?<br>
									Skriv endelig en mail til : <a href="mailto:benjamin@byhansens.com">benjamin@byhansens.dk</a></p>
								<p>Du kan støde på vores Chickpea Cubes disse steder:</p>
								<h3><u>Webshops</u></h3>

								<p><span><b><i><a href="https://www.maaltidsboxen.dk">Maaltidsboxen.dk</a></i></b></span></p>
								<p><span><b><i><a href="http://www.finka-gavekurve.dk">Finka-gavekurve.dk</a></i></b></span></p>

								<h3><u>Butikker</u></h3>
								<p><span><b><i>Nelle's - Filosoffen</i></b></span><br>Filosofgangen 32Z, Odense C.</p>
								<p><span><b><i>Nelle's - Pantheonsgade</i></b></span><br>Rosenbæk Torv 1, Odense C.</p>
								<p><span><b><i>Nelle's - Overgade</i></b></span><br>Overgade 21A, Odense C.</p>
								<p><span><b><i>Analog</i></b></span><br>Albanigade 54c, Odense C.</p>
								<p><span><b><i>Café Nordfreds</i></b></span><br>Overgade 25a, Odense C.</p>
								<p><span><b><i>Marys Coffee & Sandwich</i></b></span><br>Østre Stationsvej 6, Odense C</p>
								<p><span><b><i>Mr. Torp</i></b></span><br>Vintapperstræde, Odense C</p>
								<p><span><b><i>Den Lille Smalle</i></b></span><br>Vestergade 5, Odense C</p>
								<p><span><b><i>Nivå Golf Klub</i></b></span><br>Løvbjergårdsvej 1, Kokkedal</p>
								<p><span><b><i>Royal Souvenir</i></b></span><br>Bredgade 47, København</p>
								<p><span><b><i>iBagel</i></b></span><br>Vesterbrogade 6D, København</p>
								<p><span><b><i>Café Sweet Surrender</i></b></span><br>Dybbølsgade 49, København</p>
								<p><span><b><i>Flow Living</i></b></span><br>Torvegade 10, Fåborg</p>
								<p><span><b><i>Café Aroma</i></b></span><br>Korsgade 17, Svendborg</p>
								<p><span><b><i>Byens Gårdbutik</i></b></span><br>Vestergade 25, Svendborg</p>
								<p><span><b><i>Brenderuphus</i></b></span><br>Middelfartvej 217, Brenderup</p>
								<p><span><b><i>Janne Jaaks</i></b></span><br>Klitheden Syd 30, Blokhus</p>
							</article>
						<!-- Forhandlere -->

						<!-- Kontakt -->
							<article id="kontakt">
								<h2 class="major">Kontakt</h2>
								<p>Vi arbejder hele tiden på at udvikle os og tager derfor meget gerne imod både ris og ros såvel som nye idéer.</p>
								<span class="image main"><img src="{{ asset('assets/img/image17.jpeg') }}" alt="" style="max-width: 400px;"/></span>
								<div class="center">
									<div>
										<p>
											Martin Hansen
											<br>
											Stifter
											<br>
											Produktansvarlig
										</p>
									</div>
									<div>
										<ul class="icons">
											<li><a href="mailto:martin@byhansens.com" class="icon fa-at"><span class="label">Twitter</span></a></li>
											<li><a href="https://www.facebook.com/byhansens/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/by.hansens/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</div>
								</div>

								<div class="center">
									<div>
										<p>
											Benjamin Hansen
											<br>
											Stifter
										</p>
									</div>
									<div>
										<ul class="icons">
											<li><a href="mailto:benjamin@byhansens.com" class="icon fa-at"><span class="label">Twitter</span></a></li>
											<li><a href="https://www.facebook.com/byhansens/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="https://www.instagram.com/by.hansens/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</div>
								</div>

								{{-- <ul class="icons">
									<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								</ul> --}}
							</article>
							<!-- Kontakt -->

					</div>
					<!-- Main -->

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; ByHansens. Kode af: <a href="https://thomasdamsgaard.dk" target="_blank">Thomas Damsgaard</a>.</p>

					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		{{-- Modal --}}
		{{-- <div class="modal" id="popup">
		  <div class="modal-content">
				<div class="modal-box">
					<p>Vi er i fuld gang med at udvikle produktet. Hør mere om dette ved at tilmelde dig vores mailliste.<br>Vi hader også spam og beskytter selvfølgelig dine data.</p>
					<form action="{{ route('email.subscription')}}" method="post">
						@csrf
						<div class="fields">
							<div class="field half">
								<label for="firstname">Fornavn</label>
								<input type="text" name="firstname" id="firstname" required>
							</div>
							<div class="field half">
								<label for="lastname">Efternavn</label>
								<input type="text" name="lastname" id="lastname" required>
							</div>
							<div class="field">
								<label for="email">Email</label>
								<input type="email" name="email" id="email" required>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Ja tak - Tilmeld mig" class="primary"></li>
							<li><input type="button" value="Ikke denne gang" id="close"></li>
						</ul>
					</form>
				</div>
		  </div>
		</div> --}}

		<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="{{ asset('js/browser.min.js') }}"></script>
		<script src="{{ asset('js/breakpoints.min.js') }}"></script>
		<script src="{{ asset('js/util.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		{{-- <script src="{{ asset('js/pageloader.js') }}"></script> --}}
		{{-- <script src="{{ asset('js/email-modal.js') }}"></script> --}}
	</body>
</html>
