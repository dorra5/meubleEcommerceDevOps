<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Accueil</title>	
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/chosen.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset ('assets/css/color-01.css') }}">
    @livewireStyles
</head>
    
    
<!--*********************** body *************************************-->
<body class="home-page home-01 ">

	<!-----------------------------mobile menu ---------------------------------->
    <div class="mercado-clone-wrap">
        <div class="mercado-panels-actions-wrap">
            <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
        </div>
        <div class="mercado-panels"></div>
    </div>

	<!---------------------------header------------------------------------------->
	<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Téléphone: (+216) 56 247 200 " href="#" ><span class="icon label-before fa fa-mobile"></span>Téléphone: (+216)56247200</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
							@if(Route::has('login'))
									@auth
   										@if(Auth::user()->utype === 'ADM')
										    <li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">{{Auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{route('admin.dashboard')}}">Dashboard</a>
													</li>
													<li class="menu-item" >
														<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
													</li>
													<form id="logout-form" method="POST" action="{{route('logout')}}">
														@csrf
													</form>
												</ul>
											</li>
   										@else 
										   <li class="menu-item menu-item-has-children parent" >
												<a title="My Account" href="#">{{Auth::user()->name}} <i class="fa fa-angle-down" aria-hidden="true"></i></a>
												<ul class="submenu curency" >
													<li class="menu-item" >
														<a title="Dashboard" href="{{route('user.dashboard')}}">Dashboard</a>
													</li>
													<li class="menu-item" >
														<a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
													</li>
													<form id="logout-form" method="POST" action="{{route('logout')}}">
														@csrf
													</form>
													
												</ul>
											</li>
   										@endif
									@else
									<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Connexion</a></li>
									<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Créer un compte</a></li>
									@endif
								@endif
													
								
							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="/" style="font-size: 20px;font-weight: bold ;text-decoration:none;color: black">MyHomeDeco</a>
						</div>

						@livewire('header-search-component')

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									
									<div class="left-info">
									   <i class="fa fa-hearte" aria-hidden="true"></i>	
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="#" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
									@if(Cart::count() > 0)
										<span class="index">{{Cart::count()}} produit(s)</span>
									@endif
										<span class="title">Panier</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="/" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="/presentation" class="link-term mercado-item-title">Présentation</a>
								</li>
								<li class="menu-item">
									<a href="/shop" class="link-term mercado-item-title">Produits</a>
								</li>
								<li class="menu-item">
									<a href="/cart" class="link-term mercado-item-title">Panier</a>
								</li>
								<li class="menu-item">
									<a href="/checkout" class="link-term mercado-item-title">Checkout</a>
								</li>
								<li class="menu-item">
									<a href="#" class="link-term mercado-item-title">Contact</a>
								</li>																	
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        
    </header>
    <!---------------------------///header----------------------------------------->
    
    <!---------------------------MAIN---------------------------------------------->
    {{$slot}}
    <!---------------------------/// contenu --------------------------------->
    
    <!--------------------------- FOOTER ------------------------------------->
	<footer id="footer">
		<div class="wrap-footer-content footer-style-1">

			<div class="wrap-function-info">
				<div class="container">
					<ul>
						<li class="fc-info-item">
							<i class="fa fa-truck" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">    Livraison gratuit</h4>
								<p class="fc-desc">	Frais de livraison non inclus</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-recycle" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Garantie</h4>
								<p class="fc-desc">30 jours de remboursement</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-credit-card-alt" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Paiement Sécurisé</h4>
								<p class="fc-desc">Sécurisez votre paiement en ligne</p>
							</div>

						</li>
						<li class="fc-info-item">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<div class="wrap-left-info">
								<h4 class="fc-name">Expéditions & Retours</h4>
								<p class="fc-desc"> Expédition sous 24H/72H</p>
							</div>

						</li>
					</ul>
				</div>
			</div>
			<!-- fin partie info-->

			<div class="main-footer-content" style="margin-bottom: 40px">

				<div class="container">

					<div class="row">

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
							<div class="wrap-footer-item">
								<h3 class="item-header">Contactez-Nous</h3>
								<div class="item-content">
									<div class="wrap-contact-detail">
										<ul>
											<li>
												<i class="fa fa-map-marker" aria-hidden="true"></i>
												<p class="contact-txt">Tunis,lac 1</p>
											</li>
											<li>
												<i class="fa fa-phone" aria-hidden="true"></i>
												<p class="contact-txt">(+216)56247200 - (+216)50011985</p>
											</li>
											<li>
												<i class="fa fa-envelope" aria-hidden="true"></i>
												<p class="contact-txt">Myhomedeco@gmail.com</p>
                                                
											</li>											
										</ul>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">

							<div class="wrap-footer-item">
								<h3 class="item-header">Téléphone</h3>
								<div class="item-content">
									<div class="wrap-hotline-footer">
										<span class="desc">Appelez-nous Gratuitement</span>
										<b class="phone-number">(+216)56247200 - (+216)50011985</b>
                                        
                                       
									</div>
								</div>
							</div>
                            <div class="wrap-footer-item">
								<h3 class="item-header">Suivez-Nous</h3>
								<div class="item-content">
									<div class="wrap-list-item social-network">
										<ul>
											<li><a href="#" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#" class="link-to-item" title="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li>
                                                <a href="#" class="link-to-item" title="gmail">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i>

                                                </a>
                                            </li>
										</ul>
									</div>
								</div>
							</div>

						</div>

						<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12 box-twin-content ">
							<div class="row">
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">À propos</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="/presentation" class="link-term">Qui sommes nous?</a></li>
												<li class="menu-item"><a href="{{ route('register') }}" class="link-term">Inscrivez-vous!</a></li>
												<li class="menu-item"><a href="{{ route('login') }}" class="link-term">Espace client </a></li>
												<li class="menu-item"><a href="#" class="link-term">Contactez-nous!</a></li>
												<li class="menu-item"><a href="/shop" class="link-term">Nos Produits</a></li>
                                              
											</ul>
										</div>
									</div>
								</div>
								<div class="wrap-footer-item twin-item">
									<h3 class="item-header">Pages</h3>
									<div class="item-content">
										<div class="wrap-vertical-nav">
											<ul>
												<li class="menu-item"><a href="/" class="link-term">Accueil</a></li>
												<li class="menu-item"><a href="/preentation" class="link-term">Présentation</a></li>
												<li class="menu-item"><a href="/shop" class="link-term">Produits</a></li>
												<li class="menu-item"><a href="/cart" class="link-term">Panier</a></li>
                                                <li class="menu-item"><a href="#" class="link-term">Contact</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>


				</div>

				

			</div>

			<div class="coppy-right-box" style="text-align: center;">
				<div class="container" style="text-align: center; height: 40px">
					<div style="text-align: center; margin-top: 10px" >
						<p class="coppy-right-text" style="font-weight:bolder">Copyright © 2022 - MyHomeDeco
					</div>
					
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>
	<!--------------------------/// FOOTER ------------------------------------->
	<script src="{{ asset ('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}  "></script>
	<script src="{{ asset ('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }} "></script>
	<script src="{{ asset ('assets/js/bootstrap.min.js') }} "></script>
	<script src="{{ asset ('assets/js/jquery.flexslider.js') }} "></script>
	<script src="{{ asset ('assets/js/chosen.jquery.min.js') }} "></script>
	<script src="{{ asset ('assets/js/owl.carousel.min.js') }} "></script>
	<script src="{{ asset ('assets/js/jquery.countdown.min.js') }} "></script>
	<script src="{{ asset ('assets/js/jquery.sticky.js') }} "></script>
	<script src="{{ asset ('assets/js/functions.js') }} "></script>
    @livewireScripts
</body>
</html>