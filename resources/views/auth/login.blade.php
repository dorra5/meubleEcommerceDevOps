<x-guest-layout>
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="/" class="link">Accueil</a></li>
            <li class="item-link"><span>Connexion</span></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
            <div class=" main-content-area">
                <div class="wrap-login-item ">						
                    <div class="login-form form-item form-stl">
                    <x-jet-validation-errors class="mb-4" />
                        <form name="frm-login" method="POST" method="POST" action="{{route('login')}}">
                        @csrf    
                        <fieldset class="wrap-title">
                                <h3 class="form-title">Connectez-vous à votre compte</h3>										
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-uname">Adresse Email:</label>
                                <input type="email" id="frm-login-uname" name="email" placeholder="Adresse Email" :value="old('email')"  required autofocus>
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label for="frm-login-pass">Mot de passe:</label>
                                <input type="password" id="frm-login-pass" name="password" placeholder="************" required autocomplete="current-password">
                            </fieldset>
                            <fieldset class="wrap-input">
                                <label class="remember-field">
                                    <input class="frm-input " name="remember" id="rememberme" value="forever" type="checkbox"><span>Se souvenir de moi</span>
                                </label>
                                <a class="link-function left-position" href="{{route('password.request')}}" title="Forgotten password?">Mot de passe oublié ?</a>
                            </fieldset>
                            <input type="submit" class="btn btn-submit" value="Connexion" name="submit">
                        </form>
                    </div>												
                </div>
            </div><!--end main products area-->		
        </div>
    </div><!--end row-->

</div><!--end container-->

</main>
</x-guest-layout>
