<!DOCTYPE HTML>
<html>
	<head>
		<title>Chokolade ByHansens</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
		<noscript><link rel="stylesheet" href="{{ asset('css/noscripts.css') }}" /></noscript>

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

				<!-- Header -->
					<header id="header">
						<div class="content">
							<div class="inner">
								{{-- <h1>By Hansens</h1> --}}
								<img src="{{ asset('assets/img/logo-hvid.png') }}" alt="" class="logo-responsive" style="opacity: 0.7;">
								<p>
									Velkommen til en verden af søde og smagfulde snacks fyldt med gode og nærende råvarer.<br>
									Her er alt lavet på naturlige ingredienser, der er til at forstå.
								</p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="#raavarer">Råvarer</a></li>
								<li><a href="#om-os">Om os</a></li>
								<li><a href="#kontakt">Kontakt</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">

						<!-- Råvarer -->
							<article id="raavarer">
								<h2 class="major">Kun naturlige råvarer</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00021.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p><span><b><i>Vi</i></b></span> har fyldt vores produkter med de allerbedste råvarer, for at give dig det allerbedste resultat. Her kan du læse om alle vores råvarer; hvorfor vi har valgt dem, og hvorfor de er gode for dig.</p>
								<p>
									<span><b><i>Kikærter</i></b></span> er en fantastisk råvare med mange gode egenskaber – og de bliver kun bedre af at blive pakket ind i 70% mørk luksuschokolade! Sammen med en masse andre gode råvarer udgør kikærterne selve grundpillen i vores Chickpea Cubes. Kikærter har et højt indhold af både protein og fibre, og så er de fyldt med A, B og E-vitaminer såvel som kalium, calcium, magnesium og jern. Derfor smager vores Chickpea Cubes ikke bare fantastisk – de er faktisk også et godt supplement til din kost.
								</p>
								<p>
									<span><b><i>Peanutbutter</i></b></span> er den anden af de to bærende ingredienser i vores Chickpea Cubes, og dét er den af mange gode grunde. Først og fremmest er den fede jordnøddesmør en overset kilde til sundere fedttyper i vores hverdag. Den cremede masse har desuden også et højt indhold af protein og fibre – og så smager den selvfølgelig bare hamrende godt. Derfor har vi valgt peanutbutter som limen, der holder sammen på alle vores gode råvarer.
								</p>
								<p>
									<span><b><i>Spelt</i></b></span> er populært som aldrig før, og med god grund. For selvom den klassiske hvedesort har mere end 7.000 år på bagen og dermed er én af de ældste, der findes, så har den stadig enormt gavnlige egenskaber i forhold til vores moderne livsstil. Speltflagerne i vores Chickpea Cubes bidrager med et højt indhold af fibre og proteiner, og så giver de stykkerne et dejligt bid.
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
									<span><b><i>Ahornsirup</i></b></span> er et lille vidundermiddel fra den canadiske natur. Det naturlige sødemiddel bliver kogt ind til en lind sirup, som delvist giver en velafbalanceret sødme til vores masse og samtidig virker konserverende, så vi ikke behøver tilsætte kunstige konserveringsmidler.
								</p>
								<p>
									<span><b><i>Kokosolie</i></b></span> er med til at give vores Chickpea Cubes deres bløde struktur, idet den smeltede olie nemt fordeles og effektivt holder sammen på alle råvarerne, efterhånden som massen får lov til at køle af.
								</p>
								<p>
									<span><b><i>Mørk chokolade</i></b></span> må være en lille bid af himmerige! Vi bruger chokolade med 70,5% kakao – fyldt med gode egenskaber som vitaminer, mineraler og antioxidanter. Og så går smagen helt eminent sammen med resten af vores råvarer for at skabe en fuldendt nydelse fyldt med nærende indhold.
								</p>
							</article>
						<!-- Råvarer -->

						<!-- Om -->
							<article id="om-os">
								<h2 class="major">Om os</h2>
								<span class="image main"><img src="{{ asset('assets/img/image00003.jpeg') }}" alt="" style="max-width: 300px;"/></span>
								<p>By Hansens har en vision om at revolutionere markedet og udbrede budskabet om, at slik sagtens kan være fyldt med sunde, nærende og naturlige ingredienser, uden at de behøver at smage hverken fornuftigt eller kedeligt.</p>
								<p>Det hele startede mellem Benjamin og Martin, som begge i lang tid havde gået med en drøm om at starte egen virksomhed, hvor de havde helt frie tøjler til at føre deres drømme ud i livet. Det skulle vise sig, at de to var hinandens perfekte samarbejdspartnere, så der gik ikke længe, før By Hansens blev til. Og så tog tingene fart – troede de.</p>
								<p>For den danske fødevarebranche er en kompliceret størrelse fyldt med reguleringer og lovgivning, som det kan være svært at finde hverken hoved eller hale i. De to måtte have hjælp og indgik derfor hurtigt samarbejde med Michael Larsen, som står bag flødebollerne fra ”Ærlig”. Han havde den indsigt i branchen, som de andre manglede, og på den måde blev to til tre. Og den idérige trio er nu klar til at vende hele branchen på hovedet!</p>
								<p><span><b><i>Benjamin Jack Hansen</i></b></span> er uddannet klejnsmed og har efterfølgende videreuddannet sig til produktionsteknolog inden for metalindustrien. I dag arbejder han primært med udviklingen af maskiner til fødevareproduktion.</p>
								<p><span><b><i>Martin Hansen</i></b></span> er uddannet bager og har efterfølgende videreuddannet sig til fødevareteknolog. I dag arbejder han med udvikling af fødevarer indenfor bageribranchen.</p>
							</article>
						<!-- Om -->

						<!-- Kontakt -->
							<article id="kontakt">
								<h2 class="major">Kontakt</h2>
								<p>Vi arbejder hele tiden på at udvikle os og tager derfor meget gerne imod både ris og ros såvel som nye idéer.</p>
								<span class="image main"><img src="{{ asset('assets/img/image00017.jpeg') }}" alt="" style="max-width: 400px;"/></span>
								<div class="staff">
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
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</div>
								</div>

								<div class="staff">
									<div>
										<p>
											Benjamin Hansen
											<br>
											Stifter
											<br>
											Salgsansvarlig
										</p>
									</div>
									<div>
										<ul class="icons">
											<li><a href="mailto:benjamin@byhansens.com" class="icon fa-at"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										</ul>
									</div>
								</div>

								<div class="staff">
									<div>
										<p>
											Michael Larsen
											<br>
											Produktansvarlig
										</p>
									</div>
									<div>
										<ul class="icons">
											<li><a href="mailto:michael@byhansens.com" class="icon fa-at"><span class="label">Twitter</span></a></li>
											<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
											<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
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
						<p class="copyright">&copy; ByHansens. Kode af: <a href="https://thomasdamsgaard.dk">Thomas Damsgaard</a>.</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

			<div class="modal" id="popup">
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
			</div>


		<!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
		<script src="{{ asset('js/browser.min.js') }}"></script>
		<script src="{{ asset('js/breakpoints.min.js') }}"></script>
		<script src="{{ asset('js/util.js') }}"></script>
		<script src="{{ asset('js/main.js') }}"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			'use strict'

			if (localStorage.getItem('state') == null) {
				let state = setTimeout(function () {
					$('#popup').addClass('is-active');
					localStorage.setItem('state', 'true');
				}, 10000);
			}


				$('#close').click(function(event) {
					event.preventDefault;
					$('#popup').fadeOut()
				});
			});
		</script>

	</body>
</html>
