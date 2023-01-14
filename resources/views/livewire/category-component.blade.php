<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Accueil</a></li>
            <li class="item-link"><span> Produits</span></li>
            <li class="item-link"><span>{{$category_name}}</span></li>
        </ul>
    </div>
    <div class="row" >
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
           

            <div class="wrap-shop-control" style="margin-top: 0px">
                <h1 class="shop-title">{{$category_name}}</h1>
                <div class="wrap-right">

                    <div class="sort-item orderby ">
                        <select name="orderby" class="use-chosen" wire:model="sorting" >
                            <option value="default" selected="selected">Triage par défaut</option>
                            <option value="date">Trier par nouveauté</option>
                            <option value="price">Trier par prix : faible à élevé</option>
                            <option value="price-desc">Trier par prix: élevé à faible</option>
                        </select>
                    </div>

                    <div class="sort-item product-per-page">
                        <select name="post-per-page" class="use-chosen" wire:model="pagesize" >
                            <option value="12" selected="selected">12 par page</option>
                            <option value="16">16 par page</option>
                            <option value="18">18 par page</option>
                            <option value="21">21 par page</option>
                            <option value="24">24 par page</option>
                            <option value="30">30 par page</option>
                            <option value="32">32 par page</option>
                        </select>
                    </div>

                </div>

            </div><!--end wrap shop control-->
            <!----------------------------les meubles------------------------------->

            <div class="row">

                <ul class="product-list grid-products equal-container">
                    @foreach ($products as $product)
                    <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                        <div class="product product-style-3 equal-elem "  >

                            <div class="product-thumnail"  >
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                                    <figure ><img src=" {{ asset ('assets/images/produits/')}}/{{$product->image}}" alt="{{$product->name}}"></figure>
                                </a>
                            </div>
                            <div class="product-info" >
                                <a href="{{route('product.details',['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                <div class="wrap-price"><span class="product-price">TND {{$product->regular_price}}</span></div>
                                <a href="#" class="btn add-to-cart" wire:click.prevent="store({{$product->id}},'{{$product->name}}',{{$product->regular_price}})">ACHETER</a>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    </ul>

            </div>

            <div class="wrap-pagination-info">
                {{$products->links()}}
            <!--   <ul class="page-numbers">
                    <li><span class="page-number-item current" >1</span></li>
                    <li><a class="page-number-item" href="#" >2</a></li>
                    <li><a class="page-number-item" href="#" >3</a></li>
                    <li><a class="page-number-item next-link" href="#" >Suivants</a></li>
                </ul> 
                <p class="result-count">Affichage 1-8 de 12 résultats</p> -->
            </div>
        </div><!--end main products area-->

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
            <div class="widget mercado-widget categories-widget">
                <h2 class="widget-title">Categories</h2>
                <div class="widget-content">
                    <ul class="list-category">
                    @foreach($categories as $category)
                        <li class="category-item has-child-cate">
                            <a href="{{route('product.category',['category_slug'=>$category->slug])}}" class="cate-link">{{$category->name}}</a>
                        </li>
                    @endforeach
                    </ul>
                </div>
            </div><!-- fin_Categories-->

        

            <div class="widget mercado-widget filter-widget price-filter">
                <h2 class="widget-title">Prix</h2>
                <div class="widget-content">
                    <div id="slider-range"></div>
                    <p>
                        <label for="amount">Prix:</label>
                        <input type="text" id="amount" readonly>
                        <button class="filter-submit">Flitrer</button>
                    </p>
                </div>
            </div><!-- Prix-->

            
            
            <!----------------------------------les produits------------------->
            <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">Produits Populaire</h2>
                <div class="widget-content">
                    <ul class="products">
                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="meuble_populaire">
                                        <figure><img src="{{ asset ('assets/images/produits/Populaire/populaire1.jpg')}}" alt="meuble_populaire"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>FAUTEUIL SCANDINAVE Rouge</span></a>
                                    <div class="wrap-price"><span class="product-price">150 TND</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="meuble_populaire">
                                        <figure><img src="{{ asset ('assets/images/produits/Populaire/populaire2.jpg')}}" alt="meuble_populaire"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Canapé Lit</span></a>
                                    <div class="wrap-price"><span class="product-price">600 TND</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="meuble_populaire">
                                        <figure><img src="{{ asset ('assets/images/produits/Populaire/populaire3.jpg')}}" alt="meuble_populaire"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span> ETAGERE </span></a>
                                    <div class="wrap-price"><span class="product-price">350 TND</span></div>
                                </div>
                            </div>
                        </li>

                        <li class="product-item">
                            <div class="product product-widget-style">
                                <div class="thumbnnail">
                                    <a href="detail.html" title="meuble_populaire">
                                        <figure><img src="{{ asset ('assets/images/produits/Populaire/populaire4.jpg')}}" alt="meuble_populaire"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="#" class="product-name"><span>Table base ALICE -  RONDE </span></a>
                                    <div class="wrap-price"><span class="product-price">168 TND</span></div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div><!-- brand widget-->

        </div><!--end sitebar-->

    </div><!--end row-->
</div><!--end container-->

</main>

