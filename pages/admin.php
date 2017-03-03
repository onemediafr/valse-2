<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>La Valse Blanche</title>
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="../css/style2.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700" rel="stylesheet">


</head>

<body class="fond_robe">
    <div class="container-fluid">
        <header>
            <nav>
                <div class="row">
                    <div id="gris" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <p id="page">Page d'administration</p>
                    </div>
                </div>
            </nav>
        </header>
        
        
        
<div class="row">
    <form action="post">
       <div class="ligne row">
           <div class="theme col-lg-12">
               <p class="theme">Page d'Accueil</p>
           </div>
            <div style="text-align:center;"  class="col-xs-12">
               <br> <label>
                    <br><span class="ajout">Changer l'image de fond</span></label>
                <br/>
                <br>
                <input style="margin-left:35%;" type="file" name="image" />
                <br>    
            </div>
       </div><br>
       
       <div class="ligne row">
           <div class="theme col-lg-12">
               <p class="theme">Page Mariés</p>
           </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Robes</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
            <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Costumes</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
       </div><br>
       
       <div  class="ligne row">
           <div class="theme col-lg-12">
               <p class="theme">Page Hommes</p>
           </div>
            <div id="base" class="col-lg-3  col-md-3  col-sm-3  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Tenues</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
           <div id="base" class="col-lg-3  col-md-3  col-sm-3  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Chemises</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
            <div id="base" class="col-lg-3  col-md-3  col-sm-3  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Cravates</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
            <div id="base" class="col-lg-3  col-md-3  col-sm-3  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Chaussures</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
       </div><br>
       
       <div class="ligne row">
           <div class="theme col-lg-12">
               <p class="theme">Page Femmes</p>
           </div>
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Robes de Cocktails</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
            <div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Robes Habillées</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
       </div><br>
       
       <div class="ligne row">
           <div class="theme col-lg-12">
               <p class="theme">Page Enfants et Accessoires</p>
           </div>
            <div id="base" class="col-lg-4  col-md-4  col-sm-4  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Robes de Cérémonies</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
             <div id="base" class="col-lg-4  col-md-4  col-sm-4  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Costumes de Cérémonies</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
            <div id="base" class="col-lg-4  col-md-4  col-sm-4  col-xs-10 col-xs-offset-1">
               <br> <label>
                    <br><span class="ajout">Ajouter des images à la page Accessoires</span></label>
                <br/>
                <br>
                <input type="file" name="image" />
                <br>    
            </div>
       </div><br>
       
        <div class="row">
            <div class="col-lg-2 col-lg-offset-5">
                <button style="width:100%;" type="button" class="btn btn-success">APPLIQUER</button>
                <br>
                <br>
            </div>
        </div>
    </form>
</div>

    <div class="row">
       <div class="dev VFHE col-lg-12">
        <a style="text-decoration: none; color:white;"  href="https://www.facebook.com/onemediafrance/?fref=ts" target="_blank"><p>Site développé par one media</p></a>
        </div>
    </div>
    </div>
</body>


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