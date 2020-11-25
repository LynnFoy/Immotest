<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ImmoEliza</title>
</head>

<body>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1z" data-slide-to="1"></li>
            <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/architecture-1867187_1920.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/farm-1649146_1920.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/hampstead-4910147_1920.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption">
                <img src="assets/images/Logo Bis.png">
                <h2>Evaluate <span style="color: rgb(0, 89, 255);">your project</span></h2>
            </div>
        </div>
        <div class="item">
            <div class="carousel-item">
                <img src="assets/images/house-4498947_1920.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
    <button id="register" data-toggle="modal" data-target="#modalRegister">Register</button>
    <div class="container-fluid">
        <div class="row">
            <!-- form -->
            <div class="modal" id="modalRegister">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Register</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label for="registerloaclity">Localité :</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                        placeholder="Flandre Occ">
                                </div>
                                <div class="form-group">
                                    <label for="registerspécification">Préférance :</label>
                                    <input type="checkbox" id="house" name="maison" value="house">
                                    <label for="house1"> maison</label>
                                    <input type="checkbox" id="apartment" name="apartement" value="apart">
                                    <label for="house2"> apartement</label>
                                    <!--<label for="registertype">type de propriété</label>
                                        <select class="form-control" id="registertype" placeholder="Maison">
                                            <option>Maison</option>
                                            <option>apartement</option>
                                          </select>-->
                                </div>
                                <div class="form-group">
                                    <label for="Form_sous_type">Sous type de propriété</label>
                                    <select class="form-control" id="Form_sous_type_m" placeholder="Maison">
                                        <option>bastide</option>
                                        <option>bungalow</option>
                                        <option>chalet</option>
                                        <option>château</option>
                                        <option>hôtel particulier</option>
                                        <option>immeuble mixte</option>
                                        <option>maison</option>
                                        <option>maison de ville</option>
                                        <option>manoir</option>
                                        <option>mas</option>
                                        <option>pavillon</option>
                                        <option>pavillon</option>
                                        <option>propriété d'exception</option>
                                        <option>résidence</option>
                                        <option>villa</option>
                                        <option>autre bien</option>
                                    </select>
                                    <select class="form-control" id="Form_sous_type_a" placeholder="apartement">
                                        <option>appartement</option>
                                        <option>appartement studio</option>
                                        <option>appartement de service/location meublé</option>
                                        <option>atique</option>
                                        <option>duplex</option>
                                        <option>kot</option>
                                        <option>loft</option>
                                        <option>rez-de-chaussée</option>
                                        <option>triplex</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="n_pièce">Nombre de pièces</label>
                                    <select class="form-control" id="form_pièce" placeholder="">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>plus</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="surface_maison_m2">surface Maison m2 :</label>
                                    <input type="number" id="sm2" name="sm2" min="30" max="500">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">cuisine équipé</label>
                                    <input type="checkbox" id="cuisine_yes" name="cuisine_yes" value="cuisine_yes">
                                    <label for="cuisine1"> oui</label>
                                    <input type="checkbox" id="cuisine_no" name="cuisine_no" value="cuisine_no">
                                    <label for="cuisine2"> non</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Cheminée</label>
                                    <input type="checkbox" id="cheminée_yes" name="cheminée_yes" value="cheminée_yes">
                                    <label for="cheminée1"> oui</label>
                                    <input type="checkbox" id="cheminée_no" name="cheminée_no" value="cheminée_no">
                                    <label for="cheminée2"> non</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Terasse</label>
                                    <input type="checkbox" id="terasse_yes" name="terasse_yes" value="terasse_yes">
                                    <label for="terasse1"> oui</label>
                                    <input type="checkbox" id="terasse_no" name="terasse_no" value="terasse_no">
                                    <label for="terasse2"> non</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Terrasse surface m2 :</label>
                                    <input type="number" id="quantity" name="quantity" min="30" max="500">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">surface Terrain m2 :</label>
                                    <input type="number" id="quantity" name="quantity" min="30" max="500">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Nombre de facades :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Piscine</label>
                                    <input type="checkbox" id="piscine_yes" name="piscine_yes" value="piscine_yes">
                                    <label for="house1"> oui</label>
                                    <input type="checkbox" id="piscine_no" name="piscine_no" value="piscine_no">
                                    <label for="house2"> non</label>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Stade de construction :</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>à aménager</option>
                                        <option>comme neuf</option>
                                        <option>bon</option>
                                        <option>à rénover</option>
                                        <option>juste rénové</option>
                                        <option>à restaurer</option>
                                    </select>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="RegisterTOS">
                                    <label class="form-check-label" for="RegisterTOS">Terms of Service</label>
                                </div>
                                <button type="submit" class="btn btn-primary" onclick="register()">Register</button>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">


                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- LOCATION GOOGLE MAP -->
            <div class="col-12 col-sm-12 col-lg-6 mb-6" id="cardMap">
                MAP
            </div>
            <!-- SPACE -->
            <div class="col-lg-2 mb-2">

            </div>
            <!-- LOCATION INFOS -->
            <div class="col-12 col-sm-12 col-lg-4 mb-4" id="cardInfos">
                INFOS
            </div>
        </div>
        <div class="row">
            <!-- LOCATION 3D HOUSE -->
            <div class="col-12 col-sm-12 col-lg-12 mb-12" id="card3D">
                3D
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    <footer>
        <div class="container-fluid">
            <!-- FIRST LINE -->
            <div class="row" id="rowFooter">
                <!-- FIRST column / LOGO-->
                <div class="col-12 col-sm-12 col-lg-4 mb-3">
                    <img id="logoFooter" src="assets/images/logo2.png" alt="logo ImmoEliza"><br>
                    <p class="pContact">
                        +32 99 98 97 96<br>
                        infobe@immo-eliza.be
                    </p>
                </div>
                <!-- SECOND column / SUBSCRIBE-->
                <div class="col-12 col-sm-12 col-lg-4 mb-3">
                    <h4 id="titleSubscribe">SUBSCRIBE TO US</h4>
                    <form class="form-inline my-2 my-lg-0" id="formSubscribe">
                        <input class="form-control mr-sm-2" type="search" placeholder="Enter your email..."
                            aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"
                            id="btnSubscribe">Subscribe</button>
                    </form>
                    <!-- THIRD column -->
                </div>
                <div class="col-12 col-sm-12 col-lg-4 mb-3">
                    <p class="pCentral">
                        CENTRAL<br>
                        Rue des Volutes, 18<br>
                        6030 Charleroi<br>
                        +32 99 98 97 96<br>
                        infobe@immo-eliza.be
                    </p>
                </div>
            </div>
            <hr>
            <!-- SECOND LINE -->
            <div class="row">
                <!-- TABLE -->
                <table class="socialNetworks">
                    <tr>
                        <td>
                            <!-- TWITTER -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://twitter.com" target="_blank">
                                    <i class="fa fa-twitter fa-lg" id="twitter"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <!-- FACEBOOK -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://facebook.com" target="_blank">
                                    <i class="fa fa-facebook fa-lg" id="facebook"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <!-- INSTAGRAM -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://instagram.com" target="_blank">
                                    <i class="fa fa-instagram fa-lg" id="instagram"></i>
                                </a>
                            </div>
                        </td>
                        <td>
                            <!-- LINKEDIN -->
                            <div class="col-12 col-sm-12 col-lg-12 mb-12">
                                <a href="https://linkedin.com" target="_blank">
                                    <i class="fa fa-linkedin fa-lg" id="linkedin"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </footer>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
        </script>
    <script src="https://kit.fontawesome.com/e106887b45.js" crossorigin="anonymous"></script>
</body>

</html>