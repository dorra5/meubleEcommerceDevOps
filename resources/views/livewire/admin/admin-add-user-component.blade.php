<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-md-6">
                                    Ajouter Un Nouveau Utilisateur
                                </div>
                                <div class="col-md-6">
                                    <a href="{{route('admin.users')}}" class="btn btn-success pull-right"> 
                                        Tous les Utilisateurs
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('message'))
                                <div class="alert alert-success" role="alert">{{Session::get('message')}} </div>
                            @endif
                            <form class="form-horizontal" enctype="multipart/form-data"  wire:submit.prevent="addUser">
                                @csrf
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Nom d'utilisateur</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Nom_Utilisateur" class="form-control input-md" wire:model="name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Email</label>
                                    <div class="col-md-4">
                                        <input type="text" placeholder="Email" class="form-control input-md" wire:model="email"/>
                                    </div>
                                </div>
                    
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Mot de Passe </label>
                                    <div class="col-md-4">
                                        <input type="password" placeholder="Mot de Passe" class="form-control input-md" wire:model="password"/>
                                    </div>
                                </div>
                               
                                <div class="form-group">
                                    <Label class="col-md-4 control-label"> Type d'utilisateur </label>
                                    <div class="col-md-4">
                                        <select class="form-control" wire:model="utype">
                                            <option value="ADM">Admin</option>
                                            <option value="USR">Utilisateur</option>
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

