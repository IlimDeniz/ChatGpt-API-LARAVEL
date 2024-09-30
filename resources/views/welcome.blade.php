<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->


<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 10:55:32 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="TechWave">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Home - TechWave</title>


<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'dark';
	}
	if (!localStorage.frenify_panel) {
		localStorage.frenify_panel = '';
	}
	document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
	if(localStorage.frenify_panel !== ''){
		document.documentElement.classList.add(localStorage.frenify_panel);
	}

</script>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- !Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/plugins8a54.css?ver=1.0.0" />
<link type="text/css" rel="stylesheet" href="css/style8a54.css?ver=1.0.0" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- !Styles -->

</head>

<body>


<!-- Moving Submenu -->
<div class="techwave_fn_fixedsub">
	<ul></ul>
</div>
<!-- !Moving Submenu -->

<!-- Preloader -->
<div class="techwave_fn_preloader enabled">
	<svg>
		<circle class="first_circle" cx="50%" cy="50%" r="110"></circle>
		<circle class="second_circle" cx="50%" cy="50%" r="110"></circle>
	</svg>
</div>
<!-- !Preloader -->


<!-- MAIN WRAPPER -->
<div class="techwave_fn_wrapper">
	<div class="techwave_fn_wrap">


		<!-- Searchbar -->
		<div class="techwave_fn_searchbar">
			<div class="search__bar">
				<input class="search__input" type="text" placeholder="Search here...">
				<img src="svg/search.svg" alt="" class="fn__svg search__icon">
				<a class="search__closer" href="#"><img src="svg/close.svg" alt="" class="fn__svg"></a>
			</div>
			<div class="search__results">
				<!-- Results will come here (via ajax after the integration you made after purchase as it doesn't work in HTML) -->
				<div class="results__title">Results</div>
				<div class="results__list">
					<ul>
						<li><a href="#">Artificial Intelligence</a></li>
						<li><a href="#">Learn about the impact of AI on the financial industry</a></li>
						<li><a href="#">Delve into the realm of AI-driven manufacturing</a></li>
						<li><a href="#">Understand the ethical implications surrounding AI</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- !Searchbar -->

		<!-- HEADER -->
		@include('layouts.header')
		<!-- !HEADER -->


		<!-- LEFT PANEL -->
		@include('layouts.left')
		<!-- !LEFT PANEL -->


		<!-- CONTENT -->
		<div class="techwave_fn_content">

			<!-- PAGE (all pages go inside this div) -->
			<div class="techwave_fn_page">

				<!-- Home Page -->
				<div class="techwave_fn_home">
					<div class="section_home">
						<div class="section_left">

							<!-- Title Shortcode -->
							<div class="techwave_fn_title_holder">
								<h1 class="title">İlim Deniz Toprak</h1>
								<p class="desc">Metin, Fotoğraf, Ses Üretme Yazılımı (CHAT GPT API)</p>
							</div>
							<!-- !Title Shortcode -->

							<!-- Interactive List Shortcode -->
							<div class="techwave_fn_interactive_list">
								<ul>
									<li>
										<div class="item">
											<a href="{{route('ai.image.bot')}}">
												<span class="icon">
													<img src="svg/image.svg" alt="" class="fn__svg">
												</span>
												<h2 class="title">Fotoğraf Üret</h2>
												<p class="desc">Bu alanda yazdığınız metni fotoğrafa çevirebilirsiniz.</p>
												<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
											</a>
										</div>
									</li>
									<li>
										<div class="item">
											<a href="{{route('ai.chat.bot')}}">
												<span class="icon">
													<img src="svg/chat.svg" alt="" class="fn__svg">
												</span>
												<h2 class="title">Yazışma Botu</h2>
												<p class="desc">Bu alanda yapay zeka botuna sorular sorabilirsiniz.</p>
												<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
											</a>
										</div>
									</li>
                                    <li>
										<div class="item">
											<a href="{{route('ai.chat.bot')}}">
												<span class="icon">
													<img src="svg/bell.svg" alt="" class="fn__svg">
												</span>
												<h2 class="title">Ses Dosyası Üret</h2>
												<p class="desc">Bu alanda yazdığınız metni ses dosyasına çevirebilirsiniz.</p>
												<span class="arrow"><img src="svg/arrow.svg" alt="" class="fn__svg"></span>
											</a>
										</div>
									</li>
								</ul>
							</div>
							<!-- !Interactive List Shortcode -->

						</div>

					</div>
				</div>
				<!-- !Home Page -->

			</div>
			<!-- !PAGE (all pages go inside this div) -->


			<!-- FOOTER (inside the content) -->
			@include('layouts.footer')
			<!-- !FOOTER (inside the content) -->

		</div>
		<!-- !CONTENT -->


	</div>
</div>
<!-- !MAIN WRAPPER -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Sep 2024 10:55:52 GMT -->
</html>
