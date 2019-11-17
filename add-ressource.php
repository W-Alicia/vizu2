<?php require("header.php") ?>

<img src="img/arrow.svg" alt="arrow" class="arrow" width="75px">

<div class="container add-ressource">
    <div class="row">
    <div class="col-12 col-lg-6 show-new-ressource">
            <div class="show-img">
                <div class="row">
                    <div class="col-12 new-img">
                        <div class="add-img">
                            <input type="file" class="custom-file-input" id="inputGroupFile02">
                            <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">
                                <span><img src="img/picto-down.png"></span>
                                CHARGER
                            </label>
                        </div>
                        <img src="img/huit.jpg" alt="image">
                    </div>
                    <div class=" col-12 d-inline-flex icon-color">
                        <div class="color1"></div>
                        <div class="color2"></div>
                        <div class="color3"></div>
                    </div>
                </div><!--row-->
            </div><!--show img-->

            <svg width="450" height="550" class="rect1">
                <rect class="rect-1" width="450" height="550" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
            </svg>
    </div><!--show new projet-->

    <div class="col-12 col-lg-6 filter-ressource text-uppercase">
            <form>
                <div class="form-group row">
                    <label for="type" class="col-form-label">Type :</label>
                    <div class="col">
                        <select class="custom-select" id="sel1" name="sellist1">
                            <option>IMAGE</option>
                            <option>VIDEO</option>
                            <option>SON</option>
                            <option>AUTRE</option>
                        </select>
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="auteur" class="col-form-label">Auteur:</label>
                    <div class="col">
                        <input type="text" class="form-control" id="auteur" placeholder="Tatiana Olivier">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="web" class="col-form-label">SITE WEB:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="web">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="titre" class="col-form-label">Titre:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="titre">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="annee" class="col-form-label">Année:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="annee">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="categorie" class="col-form-label">Catégorie :</label>
                    <div class="col">
                        <select class="custom-select" id="categorie" name="sellist1">
                            <option>CHARACTER 3D</option>
                            <option>ILLU 2D</option>
                            <option>PHOTOGRAPHIE</option>
                            <option>AUTRE</option>
                        </select>
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="tag" class="col-form-label"># :</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="tag">
                    </div>
                </div><!--form row--> 
                <div class="form-group row">
                    <label for="tag" class="col-form-label">Gamme de couleurs :</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="couleurs">
                    </div>
                </div><!--form row-->
                <div class="form-group row rowcomment">
                    <label for="comment">description:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div><!--form row-->
                <div class="text-center"><button type="submit" class="btn btn-go ">GO</button></div>
                
            </form>
    </div><!--filter ressource-->
    </div><!--row-->
</div><!--fin container add ressource-->








<?php require("footer.php") ?>
