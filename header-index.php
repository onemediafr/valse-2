<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Cache-control" content="public">
    <title>La Valse Blanche</title>
    <meta name="description" content="Responsive Image Gallery with jQuery" />
    <meta name="keywords" content="jquery, carousel, image gallery, slider, responsive, flexible, fluid, resize, css3" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
    <script>
    	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    	ga('create', 'UA-93097720-1', 'auto');
    	ga('send', 'pageview');
	</script>
</head>
<body class="fond_robe">
<div id="reglages" class="container-fluid">
   <!-- ceci est l'image de fond de la page d'accueil -->
    <div id="reglages" class="fix">
        <img id="reglages" src="images/accueil2.jpg" alt="fond mariés" class="fond col-lg-12 img-responsive">
        <?php include 'footer.php'; ?>
    </div>
    <div id="base" class="row">
        <div style="margin:0; padding:0;" class="col-lg-2 hidden-md hidden-sm hidden-xs">
            <a id="reglages" href="#base_line">
                <img id="picto" class="col-lg-12 img-responsive" src="images/logo.svg" alt="logo" title="base_line">
            </a>
        </div>
        <div id="gris" class="col-lg-10 col-md-12">
            <h1 style="margin:0; font-size:5.5vw;">La Valse Blanche</h1>
        </div>
    </div>
</div>