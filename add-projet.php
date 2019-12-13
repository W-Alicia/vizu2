<?php require("header.php") ?>

<img src="img/arrow.svg" alt="arrow" class="arrow" width="75px">

<div class="container add-projet">
    <div class="row">
    <div class="col-12 col-lg-6 show-new-projet">
            <div class="show-img">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-center text-uppercase">Waves</h4>
                    </div>
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
                    
                    <div class="col-12">
                        <p class="text-uppercase">description de ça. description de ça. description de ça. description de ça. description de ça. description de ça. description de ça. description de ça.</p>
                    </div>
                </div><!--row-->
            </div><!--show img-->

            <svg width="450" height="550" class="rect1">
                <rect class="rect-1" width="450" height="550" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
            </svg>
        
            <svg width="400" height="500" class="rect2">
                <rect class="rect-2" width="400" height="500" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
            </svg>
            <h6 class="text-uppercase nom-auteur">Tatiana olivier</h6>
    </div><!--show new projet-->

    <div class="col-12 col-lg-6 filter-projet text-uppercase">
            <form>
                <div class="form-group row">
                    <label for="type" class="col-form-label">Projet :</label>
                    <div class="col">
                        <select class="custom-select" id="sel1" name="sellist1">
                            <option>AFFICHES</option>
                            <option>BRANDING</option>
                            <option>WEB</option>
                            <option>VIDEO</option>
                        </select>
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="artiste" class="col-form-label">Auteur:</label>
                    <div class="col">
                        <input type="text" class="form-control" id="artiste" placeholder="Tatiana Olivier">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="artiste" class="col-form-label">Titre:</label>
                    <div class="col">
                        <input type="text" class="form-control" id="titre-projet" placeholder="Waves">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="lieu" class="col-form-label">PROF:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="prof">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="web" class="col-form-label">Année:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="annee">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="titre" class="col-form-label">Cycle:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="cycle">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="tag" class="col-form-label"># :</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="tag">
                    </div>
                </div><!--form row--> 
            
                <div class="form-group row rowcomment">
                    <label for="comment">description:</label>
                    <textarea class="form-control" rows="4" id="comment"></textarea>
                </div><!--form row-->
                <div class="text-center"><button type="submit" class="btn btn-go ">GO</button></div>
                
            </form>
    </div><!--filter news-->
    </div><!--row-->
</div><!--fin container add projet-->








<?php require("footer.php") ?>
