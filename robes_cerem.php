<?php

require 'header.php';

?>
<div id="base" class="row">
<ul class="base col-lg-2 col-md-12 col-sm-12 col-xs-12" id="menu-accordeon">
        <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
            <p id="menu2"><img class="phone" src="images/tel.svg"> 03 85 70 25 80</p>
        </li>
          <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a style="cursor:default;" id="menu">Mariés</a>
<!--
            <ul>
                <li><a href="robes.php">Robes</a></li>
                <li><a href="costumes.php">Costumes</a></li>
            </ul>
-->
        </li>
         <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a style="cursor:default;" id="menu">Hommes</a>
<!--
            <ul>
                <li><a href="tenues.php">Tenues</a></li>
                <li><a href="chemises.php">Chemises</a></li>
                <li><a href="cravates.php">Cravates</a></li>
                <li><a href="chaussures.php">Chaussures</a></li>
            </ul>
-->
        </li>
         <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a style="cursor:default;" id="menu">Femmes</a>
<!--
            <ul>
                <li><a href="robes_coc.php">Robes cocktails</a></li>
                <li><a href="robes_hab.php">Robes habillées</a></li>
            </ul>
-->
        </li>
         <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a style="cursor:default;" id="menu">Enfants</a>
<!--
            <ul>
                <li><a href="robes_cerem.php">Robes cérémonies</a></li>
                <li><a href="costumes_cerem.php">Costumes cérémonies</a></li>
            </ul>
-->
        </li>
          <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a id="menu" href="accessoires.php">Accessoires</a>
        </li>
          <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a id="menu" href="contact.php">Contact</a>
        </li>
          <li class="col-lg-12 col-md-6 col-sm-6 col-xs-12"><a style="cursor:default;" id="menu">Newsletter</a>
            <ul>
                <li>
                    <form>
                        <div id="bouton" class="form-group">
                            <input type="email" class="form-control" id="email" style="text-align:center;" placeholder="Entrez votre mail">
                            <div class="row">
                                <button type="submit" class="col-lg-6 col-lg-offset-3  btn btn-default">ENVOYER</button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </li>

    </ul>
    

       <div class="col-lg-8 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
        <div id="rg-gallery">
            <div class="es-carousel-wrapper">
                <div class="es-carousel"><br>
                   <h2 id="sous_titre">Les robes de cérémonies</h2><br>
                    <ul>
                        <li>
                            <img data-large="images/IMG_0867.jpg" />
                        </li>
                        <li>
                            <img  data-large="images/IMG_0885.jpg" />
                        </li>
                         <li>
                            <img data-large="images/IMG_8810.jpg" />
                        </li>
                        <li>
                            <img  data-large="images/IMG_8815.jpg" />
                        </li>
                        <li>
                            <img  data-large="images/IMG_8816.jpg" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
   </div>
</div>
</div>
<!-- placer le menu de navigation -->

<?php

require 'footer.php';