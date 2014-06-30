<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>:: 404 Page introuvable ::</title>

<style>
html { height: 100%; }
body {
background-color: #fff;
font-family: 'Tahoma', sans-serif;
font-weight: bold;
}
h1 {
color: #3F3F3F;
display: block;
position: absolute;
font-size: 30em;
margin: 0;
left: 25%;
top: -3%;
opacity: 0.7;
z-index: 2;
font-weight: normal;
}
.green { color:#A2C924;}
#text {
color: #A2C924;
z-index: 4;
position: absolute;
padding: 0 10px;
top: 29%;
left: 23%;
text-align: right;
width: 36em;
font-size: 15px;
}
#text p {
margin: 0;
background: #FFF;
padding: 0;
text-transform: uppercase;
}
.fontbig {font-size:39px;}
a {text-decoration: none;font-size:13px;color:#919191;}
#image {position: absolute;top: 43%;left: 13%;}
</style>
</head>
<body>

    <h1><?php //echo $heading; ?>40<span class="green">4</span></h1>
    <div id="text">
        <p style="text-align:left;"><span class="fontbig">O</span>ooops...</p>
        <p>
            la page que vous essayer de voir, n'existe pas !
        <?php //echo $message; ?>
        </p>
        <p><a href="<?php site_url(); ?>" title="Retour à la page d'accueil">Retour où vous êtiez.</a></p>
    </div>

    <img id="image" src="<?php echo base_url('assets/img/front/404.jpg'); ?>">

</body>
</html>