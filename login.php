<?php require("header.php") ?>

<div class="container login-page">
    <div class="row">
        <div class="col-12 col-lg visiteur">
            <h3 class="text-center text-uppercase">VISITEUR</h3>
            <div class="etu-picto-white">
                <a href="home.php"><img src="img/picto-logo-color.svg" alt="pictogramme"></a>
            </div>
        </div>
        <div class="col-12 col-lg perso">
            <h3 class="text-center text-uppercase">compte perso</h3>
            <div class="etu-picto">
                <img src="img/picto-logo.svg" alt="pictogramme">
            </div>
            <form id="form-login" action="php.php" method="post">
                <div class="formulaire">
                    <div class="form-group row">
                        <label class="col-form-label" for="login">USER :</label>
                        <div class="col">
                            <input type="text" class="form-control baseline" id="login" placeholder="" data-validetta="required" autocomplete="username">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label" for="password">PASS :</label>
                        <div class="col">
                            <input type="password" class="form-control  baseline" name="password" id="password" placeholder="" data-validetta="required" autocomplete="current-password">
                        </div>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-go ">GO</button></div>
                </div>
            </form>
        </div>
        <div class="col-12 col-lg ajouter">
            <a href="add-user.php"><h6 class="text-center text-uppercase">créér un compte</h6></a>
            <a href="add-user.php"><img src="img/picto-plus.png" alt="ajouter"></a>
        </div>
    </div>
</div>



<?php require("footer.php") ?>
