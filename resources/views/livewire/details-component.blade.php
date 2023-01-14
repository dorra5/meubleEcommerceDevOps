<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Accueil</a></li>
					<li class="item-link"><span>détail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
                            <img src=" {{ asset ('assets/images/produits')}}/{{$product->image}}" alt="{{$product->name}}">
							
							</div>
						</div>
						<div class="detail-info">
                            <h1 class="product-name">{{$product->name}}</h1>
                            <div class="short-desc">
                                {{$product->short_description}}
                            </div>
                            <div class="wrap-price"><span class="product-price">{{$product->regular_price}} TND</span></div>
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>{{$product->stock_status}}</b></p>
                            </div>
                            <div class="quantity">
                            	<span>Quantity:</span>
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*" >
									
									<a class="btn btn-reduce" href="#"></a>
									<a class="btn btn-increase" href="#"></a>
								</div>
							</div>
							<div class="wrap-butons">
								<a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">ACHETER</a>
							</div>
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">description</a>
							</div>
							<div class="tab-contents">
								<div class="tab-content-item active" id="description">
									<p>{{$product->description}}</p>
								
								</div>
								<div class="tab-content-item " id="add_infomation">
									<table class="shop_attributes">
										<tbody>
											<tr>
												<th>Weight</th><td class="product_weight">1 kg</td>
											</tr>
											<tr>
												<th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>
											</tr>
											<tr>
												<th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div><!--end main products area-->
                            
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                   
					<div class="widget widget-our-services ">
                    
						<div class="widget-content">
                            
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-question-circle" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">SERVICE CLIENTS</b>
											<span class="subtitle">le meilleur rapport qualité / prix de mobilier en Tunisie.</span>
											<p class="desc">Les meubles Intermeuble sont avant tout très bon et accessibles à tous. En commandant nos produits, vous êtes assuré d’obtenir le meilleur rapport qualité / prix de mobilier en Tunisie.</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" href="#">
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">SERVICE APRÈS VENTE</b>
											<span class="subtitle">Une garantie sure à 100% pour vos achats.</span>
											<p class="desc">Pour toutes vos commandes passées en ligne ou à travers nos Show Room, vous aurez la privilège de contacter notre service clientèle ou celui d’après vente 7 jours sur 7.</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->
				</div><!--end sitebar-->

			</div><!--end row-->

		</div><!--end container-->

	</main>
