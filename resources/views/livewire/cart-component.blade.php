<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Accueil</a></li>
					<li class="item-link"><span>Panier</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				
				<div class="wrap-iten-in-cart">
				@if(Session::has('success_message'))
					<div class="alert alert-success">
						<strong> Success </strong> {{Session::get('success_message')}}
					</div>

				@endif
					@if(Cart::count() > 0)
					<h3 class="box-title">Produit(s)</h3>
					<ul class="products-cart">
					@foreach (Cart::content() as $item)
						<li class="pr-cart-item">
							<div class="product-image">
								<figure><img src=" {{ asset ('assets/images/produits/')}}/{{$item->model->image}}" alt="{{$item->model->name}}"></figure>
							</div>
                            
							<div class="product-name">
								<a class="link-to-product" href="{{route('product.details',['slug'=>$item->model->slug])}}">{{$item->model->name}}</a>
							</div>
                            
							<div class="price-field produtc-price"><p class="price">{{$item->model->regular_price}}TND</p></div>
							<div class="quantity">
								<div class="quantity-input">
									<input type="text" name="product-quatity" value="{{$item->qty}}" data-max="120" pattern="[0-9]*" >									
									<a class="btn btn-increase" href="#"  wire:click.prevent="increaseQuantity('{{$item->rowId}}')"></a>
									<a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"></a>
								</div>
							</div>
							<div class="price-field sub-total"><p class="price">{{$item->subtotal}}TND</p></div>
							<div class="delete">
								<a href="#" wire:click.prevent="destroy('{{$item->rowId}}')" class="btn btn-delete" title="">
									<span>Supprimer de votre panier</span>
									<i class="fa fa-times-circle" aria-hidden="true"></i>
								</a>
							</div>
						</li>
						@endforeach												
					</ul>
					@else
						<p>Aucun article dans le panier</p>
					@endif
				</div>

				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Liste d'achat</h4>
						<p class="summary-info"><span class="title">Total Prix</span><b class="index">{{Cart::subtotal()}}TND</b></p>
						<p class="summary-info"><span class="title">Tax</span><b class="index">{{Cart::tax()}}TND</b></p>
						<p class="summary-info"><span class="title">Livraison</span><b class="index">Frais de livraison non inclus</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">{{Cart::total()}}TND</b></p>
					</div>
					<div class="checkout-info">
						<label class="checkbox-field">
							<input class="frm-input " name="have-code" id="have-code" value="" type="checkbox"><span>J'ai un coupon</span>
						</label>
						<a class="btn btn-checkout" href="/checkout">Commander</a>
						<a class="link-to-shop" href="/shop">Continuez Mes achats<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#" wire:click.prevent="destroyAll()">Videz Panier</a>
						<a class="btn btn-update" href="#">Mise à jour Panier</a>
					</div>
				</div>

				

			</div><!--end main content area-->
		</div><!--end container-->

	</main>