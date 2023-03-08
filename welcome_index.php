<h1 id="welcome-large">Noorem tarkvaraarendaja</h1>
<h3 id="welcome-small">SISSEASTUMISKATSED</h3>
<div class="welcome-text">
</div>
<div class="center">
    <a id="start" href="#" class="btn btn-info btn-lg" data-toggle="modal"
       data-target="#login-modal">Registreeri testile</a>
</div>

<!-- LOG IN MODAL -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog"
     aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Sisesta oma andmed</h1><br>
            <form name="register" action="actions/validate_user.php" autocomplete="off">
                <input autocomplete="off" name="hidden" type="text" style="display:none;">
                <input type="text" class="validate-new-user" name="firstName" id="firstName" placeholder="Eesnimi"/>
                <input type="text" class="validate-new-user" name="lastName" id="lastName" placeholder="Perenimi"/>
                <input type="text" value="" style="display:none;"/>
                <input type="text" class="validate-new-user" name="social_id" id="social_id" placeholder="Isikukood"/>
                <input type="text" value="" style="display:none;"/>
                <input type="password" class="validate-new-user" id="password" placeholder="PIN-kood"/>
                <input type="submit" class="btn btn-primary btn-load btn-lg loginmodal-submit" id="btnLogin"
                       data-loading-text="Changing Password..." value="Alusta">
            </form>
        </div>
    </div>
</div>
