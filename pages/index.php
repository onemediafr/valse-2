<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Les robes</title>
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="../css/style2.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">

    <script id="img-wrapper-tmpl" type="text/x-jquery-tmpl">
        <div class="rg-image-wrapper">
            {{if itemsCount > 1}}
            <div class="rg-image-nav">
                <a href="#" class="rg-image-nav-prev">Previous Image</a>
                <a href="#" class="rg-image-nav-next">Next Image</a>
            </div>
            {{/if}}
            <div class="rg-image"></div>
        </div>
    </script>
</head>

<body class="fond_robe">

    <!-- ceci est l'image de fond de la page d'accueil -->

    <div id="reglages" class="row fix">
        <img id="reglages" src="../images/accueil2.jpg" alt="fond mariés" title="jeunes mariés" class="fond col-lg-12 img-responsive">
    </div>


    <div id="reglages" class="container-fluid">
        <div id="base" class="row">
            <div style="margin:0; padding:0;" class="col-lg-2 hidden-md hidden-sm hidden-xs">
                <a id="reglages" href="#base_line">
                    <img id="picto" class="col-lg-12 img-responsive" src="../images/logo.svg" alt="logo" title="base_line">
                </a>
            </div>
            <div id="gris" class="col-lg-10 col-md-12">
                <h1 style="margin:0; font-size:8vw;">La Valse Blanche</h1>
            </div>
        </div>



        <div id="base" class="row">
            <ul class="col-lg-2 col-md-12 col-sm-12 col-xs-12" id="menu-accordeon">
                <li>
                    <p id="menu"><img src="../images/tel.svg"> <span id="te">03 85 70 25 80</span></p>
                </li>
                <li><a id="menu" href="#">Mariés</a>
                    <ul>
                        <li><a href="robes.php">Robes</a></li>
                        <li><a href="costumes.php">Costumes</a></li>
                    </ul>
                </li>
                <li><a id="menu" href="#">Hommes</a>
                    <ul>
                        <li><a href="tenues.php">Tenues</a></li>
                        <li><a href="chemises.php">Chemises</a></li>
                        <li><a href="cravates.php">Cravates</a></li>
                        <li><a href="chaussures.php">Chaussures</a></li>
                    </ul>
                </li>
                <li><a id="menu" href="#">Femmes</a>
                    <ul>
                        <li><a href="robes_coc.php">Robes cocktails</a></li>
                        <li><a href="robes_hab.php">Robes habillées</a></li>
                    </ul>
                </li>
                <li><a id="menu" href="#">Enfants</a>
                    <ul>
                        <li><a href="robes_cerem.php">Robes cérémonies</a></li>
                        <li><a href="costumes_cerem.php">Costumes cérémonies</a></li>
                    </ul>
                </li>
                <li><a id="menu" href="accessoires.php">Accessoires</a>
                </li>
                <li><a id="menu" href="contact.php">Contact</a>
                </li>
                <li><a id="menu" href="#">Newsletter</a>
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
        </div>
    </div>
   
       
      <footer>
   
    <div id="base" class="col-lg-12 col-md-12 col-sm-12 col-xs-12 VFHE row">
<div class="row">
            <a target="_blank" style="text-decoration: none; text-align:center;" class="col-lg-12" href="https://www.facebook.com/onemediafrance/">
                <p id="onemedia">Site développé par ONE MEDIA</p>
            </a>
        </div>
        <div id="base" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <p title="retour_accueil" id="base_line">Vêtements femmes, hommes et enfants</p>
        </div>
        <div class="col-lg-8 col-lg-offset-4 col-md-12 col-sm-12 col-xs-12">
            <a href="index.php">
                <p id="jsp" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">Retour accueil</p>
            </a>
            <a href="valse.php">
                <p id="jsp" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">Valse Blanche</p>
            </a>
            <a href="contact.php">
                <p id="jsp" class="col-lg-3 col-md-3 col-sm-6 col-xs-12">Contact</p>
            </a>
            <a id="jsp" target="_blank" class="col-lg-3 col-md-3 hidden-sm hidden-xs" href="https://www.facebook.com/didierlopesdelima/?fref=ts"><img style="float:right; padding-right:6%;" src="../images/facebook.svg" class="img-responsive"></a>
            <a href="#">
                <p id="jsp" class="hidden-lg hidden-md col-sm-6 col-xs-12">Facebook</p>
            </a>
        </div>
    </div>
</footer>


<!-- jQuery  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="../js/style.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.tmpl.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="../js/jquery.elastislide.js"></script>
<script type="text/javascript" src="../js/gallery.js"></script>
</body>

</html>