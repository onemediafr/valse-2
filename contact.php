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
        <div class="carte">
            <h2 id="sous_titre">N'y allez pas par quatre chemins </h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2741.296629724735!2d4.059068515595887!3d46.60114057913087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f3d0a90a3baa0d%3A0xecf4cd8fc32f246f!2s9+Rue+Jean+Jaur%C3%A8s%2C+71130+Gueugnon!5e0!3m2!1sfr!2sfr!4v1486738730115" width="600" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <br>
        <br>
        <h2 id="sous_titre">Contactez nous !</h2>
        <form id="base" class="boutvert col-lg-12">
            <legend id="lik">J'aimerais</legend>
            <select class="form-control">
                <option>Poser une question</option>
                <option>Être contacté</option>
                <option>Prendre un rendez-vous</option>
                <option>Vous épouser !</option>
            </select>
            <br>
            <input type="text" class="form-control" placeholder="Votre nom">
            <br>
            <input type="text" class="form-control" placeholder="Votre mail">
            <br>
            <textarea id="textarea" class="form-control" rows="8" placeholder="Tapez votre texte ici"></textarea>
            <br>

            <button type="submit" class="btn btn-success">Envoyer</button>
        </form>
        <br>
    </div>
</div>
</div>
<?php

require 'footer.php';