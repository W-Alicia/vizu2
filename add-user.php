<?php require("header.php") ?>

<div class="container add-user">
    <div class="row">
        <div class="col-12 col-lg-6 text-uppercase">
            <div class="etu-picto">
                <img src="img/picto-logo.svg" alt="image">
            </div>
            <div class="add-img">
                <input type="file" class="custom-file-input" id="inputGroupFile02">
                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                    <span><img src="img/picto-down.png"></span>
                        CHARGER
                </label>
            </div>
        
            
            <div class="row description-event ">
                <div class="col-6 tag-event">
                    <h5>#bozar</h5>
                    <h5>#expo</h5>
                </div><!--tag event-->
                <div class="col-6 date-event">
                    <h5>20/06/2020</h5>
                </div><!--date event-->
            </div><!--description event-->
            
        </div><!--show news-->



        <div class="col-12 col-lg-6 filter-news text-uppercase">
            <form>
                <div class="form-group row">
                    <label for="cycle" class="col-form-label">CYCLE:</label>
                    <div class="col">
                        <select class="custom-select" id="cycle" name="sellist1">
                            <option>BAC 2</option>
                            <option>BAC 1</option>
                        </select>
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="nom" class="col-form-label">Nom:</label>
                    <div class="col">
                        <input type="text" class="form-control" id="nom" placeholder="OLIVIER">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="prenom" class="col-form-label">Prénom:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="prenom">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="email" class="col-form-label">EMAIL:</label>
                    <div class="col">
                        <input type="email" class="form-control baseline" id="email">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="pass" class="col-form-label">PASS:</label>
                    <div class="col">
                        <input type="password" class="form-control baseline" id="pass">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="tag" class="col-form-label">TAGS:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="tag">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="tag" class="col-form-label">THEME:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="tag">
                    </div>
                </div><!--form row-->
                <div class="form-group row rowcomment">
                    <label for="comment">un mot perso:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div><!--form row-->
                <div class="text-center"><button type="submit" class="btn btn-go ">GO</button></div>
                
            </form>
        </div><!--filter news-->

    </div><!--row-->
</div><!--add user-->


<?php require("footer.php") ?>
