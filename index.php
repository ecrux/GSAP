<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/minified/TweenMax.min.js"></script>
    <title>Efectos GSAP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<img id="img1" src="img/bl.png">

<script type="text/javascript">
    var a=document.getElementById('img1');//En la variable "a" guardamos la imagen.
    TweenMax.to(a, 3, {top:'150px', left:'100px'}); //Ahora añadimos un desplazamiento en diagonal
</script>
</body>
</html>
