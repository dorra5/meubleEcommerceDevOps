<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    Ajouter Un Nouveau Produit
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.products')}}" class="btn btn-success pull-right"> 
                                    Tous les Produits
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}} </div>
                            @endif
                            <form class="form-horizontal" enctype="multipart/form-data"  wire:submit.prevent="addProduct">
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Nom de Produit</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Nom_Produit" class="form-control input-md" wire:model="name" wire:keyup="generateSlug"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Produit</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Article_Produit" class="form-control input-md" wire:model="slug"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Description </label>
                                    <div class="col-md-4">
                                        <textarea class="form-control input-md" placeholder="Description" wire:model="short_description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Description Détaillée </label>
                                    <div class="col-md-4">
                                        <textarea class="form-control input-md" placeholder="Description Détaillée " wire:model="description"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Prix </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Prix" class="form-control input-md" wire:model="regular_price"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Prix Soldé </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Prix" class="form-control input-md" wire:model="sale_price"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> SKU </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="SKU" class="form-control input-md" wire:model="SKU"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Stock </label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="stock_status">
                                            <option value="EnStock">EnStock</option>
                                            <option value="Epuisé">Epuisé</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> featured </label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="featured">
                                            <option value="non"> Non</option>
                                            <option value="oui"> Oui </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Quantité </label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Quantité" class="form-control input-md" wire:model="quantity"/>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Image </label>
                                    <div class="col-md-4">
                                        <input type="file" class="input-file" wire:model="image"/>
                                        @if($image)
                                            <img src="{{$image->temporaryUrl()}}" width="120" />
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Catégories </label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="category_id">
                                            <option value=""> choisir une catégorie </option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <Label class="col-md-4" control-label></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"> Ajouter </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
