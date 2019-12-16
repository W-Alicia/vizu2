<?php require("header.php") ?>


<div class="container add-news">
    <div class="row">
        <div class="col-12 col-lg-6 show-news text-uppercase">
            <div class="show-img">
                <img src="img/huit.jpg" alt="image">
                <div class="info-news">
                    <h4>BOZAR</h4>
                    <h5>Fride 03/19</h5>
                    <p>l'expo sur l'expo est une expo tellement expo.<br>l'espo est hostée par ça.</p>
                </div><!--info-news-->
            </div><!--show img-->
            
            
            <svg width="550" height="570" class="rect1">
                <rect class="rect-1" width="550" height="570" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
            </svg>
            <div class="row description-event ">
                <div class="col-6 tag-event">
                    <h5>#bozar</h5>
                    <h5>#expo</h5>
                </div><!--tag event-->
                <div class="col-6 date-event">
                    <h5>20/06/2020</h5>
                </div><!--date event-->
            </div><!--description event-->
            <svg width="500" height="510" class="rect2">
                <rect class="rect-2" width="500" height="510" style="fill:rgba(0, 0, 0, 0); stroke-width:3;stroke:rgb(255, 255, 255)" />
            </svg>
            <div class="lien-event">
                <h5><a href="https://www.bozar.be/">https://www.bozar.be/</a></h5>
            </div><!--lien event-->
        </div><!--show news-->



        <div class="col-12 col-lg-6 filter-news text-uppercase">
            <form>
                <div class="form-group row">
                    <label for="type" class="col-form-label">TYPE:</label>
                    <div class="col">
                        <select class="custom-select" id="sel1" name="sellist1">
                            <option>EXPO</option>
                            <option>EVENEMENT</option>
                            <option>Concert</option>
                            <option>Vernissage</option>
                        </select>
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="artiste" class="col-form-label">ARTISTE:</label>
                    <div class="col">
                        <input type="text" class="form-control" id="artiste" placeholder="FRIDA">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="lieu" class="col-form-label">LIEU:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="lieu">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="web" class="col-form-label">SITE WEB:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="web">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="titre" class="col-form-label">TITRE/SUJET:</label>
                    <div class="col">
                        <input type="text" class="form-control baseline" id="titre">
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="genre" class="col-form-label">DATE:</label>
                    <div class="col">
                        <select class="custom-select" id="sel2" name="sellist2">
                            <option>EXPO</option>
                            <option>EVENEMENT</option>
                            <option>Concert</option>
                            <option>Vernissage</option>
                        </select>
                    </div>
                </div><!--form row-->
                <div class="form-group row">
                    <label for="categorie" class="col-form-label">CATEGORIE:</label>
                    <div class="col">
                        <select class="custom-select" id="sel3" name="sellist3">
                            <option>PEINTURE</option>
                            <option>PHOTO</option>
                            <option>SCULPTUPE</option>
                            <option>ART</option>
                        </select>
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
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                </div><!--form row-->
                <div class="text-center"><button type="submit" class="btn btn-go ">GO</button></div>
                
            </form>
        </div><!--filter news-->



    </div><!--row-->
</div><!--container add news-->


<?php require("footer.php") ?>