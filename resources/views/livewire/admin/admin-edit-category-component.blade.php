<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    Modifier Categorie
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.categories')}}" class="btn btn-success pull-right"> 
                                    Tous les Categories
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}} </div>
                            @endif
                            <form class="form-horizontal" wire:submit.prevent="updateCategory">
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Nom de categorie</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Nom_Categorie" class="form-control input-md" wire:model="name" wire:keyup="generateslug"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Article de Categoriee</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Article_Categorie" class="form-control input-md" wire:model="slug"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4" control-label></label>
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary"> Modifier </button>
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
