<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">Accueil</a></li>
					<li class="item-link"><span>Checkout</span></li>
				</ul>
			</div>
			<div class=" main-content-area">
				<div class="wrap-address-billing">
					<h3 class="box-title">Adresse de livraison </h3>
					<form action="#" method="get" name="frm-billing">
						<p class="row-in-form">
							<label for="fname">Nom<span>*</span></label>
							<input id="fname" type="text" name="fname" value="" placeholder="Nom">
						</p>
						<p class="row-in-form">
							<label for="lname">Prenom<span>*</span></label>
							<input id="lname" type="text" name="lname" value="" placeholder="Prenom">
						</p>
						<p class="row-in-form">
							<label for="email">Adresse Email:</label>
							<input id="email" type="email" name="email" value="" placeholder="Adresse Email">
						</p>
						<p class="row-in-form">
							<label for="phone">Numéro de téléphone<span>*</span></label>
							<input id="phone" type="number" name="phone" value="" placeholder="Format 8 chiffres">
						</p>
						<p class="row-in-form">
							<label for="add">Adresse:</label>
							<input id="add" type="text" name="add" value="" placeholder="Adresse">
						</p>
						<p class="row-in-form">
							<label for="country">Pays<span>*</span></label>
							<input id="country" type="text" name="country" value="" placeholder="Pays">
						</p>
						<p class="row-in-form">
							<label for="zip-code">Code Postal:</label>
							<input id="zip-code" type="number" name="zip-code" value="" placeholder="Code Postal">
						</p>
						<p class="row-in-form">
							<label for="city">Ville<span>*</span></label>
							<input id="city" type="text" name="city" value="" placeholder="Ville">
						</p>
						<p class="row-in-form fill-wife">
							<label class="checkbox-field">
								<input name="create-account" id="create-account" value="forever" type="checkbox">
								<span>Créer un compte?</span>
							</label>
							<label class="checkbox-field">
								<input name="different-add" id="different-add" value="forever" type="checkbox">
								<span>Livrer à une adresse différente?</span>
							</label>
						</p>
					</form>
				</div>
				<div class="summary summary-checkout">
					<div class="summary-item payment-method">
						<h4 class="title-box">Mode de paiement</h4>
						<p class="summary-info"><span class="title">Chèque / Mandat</span></p>
						<p class="summary-info"><span class="title">Carte de crédit</span></p>
						<div class="choose-payment-methods">
							<label class="payment-method">
								<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
								<span>Virement bancaire direct</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
								<span>visa</span>
							</label>
							<label class="payment-method">
								<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
								<span>Paypal</span>
							</label>
						</div>
						<p class="summary-info grand-total"><span>Total</span> <span class="grand-total-price">100 TND</span></p>
						<a href="thankyou.html" class="btn btn-medium">Commander</a>
					</div>
					<div class="summary-item shipping-method">
						<h4 class="title-box">Code de réduction</h4>
						<p class="row-in-form">
							<label for="coupon-code">Entrez votre coupon:</label>
							<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
						</p>
						<a href="#" class="btn btn-small">Appliquer</a>
					</div>
				</div>

			</div><!--end main content area-->
		</div><!--end container-->

	</main>