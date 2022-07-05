$caminho = sc_url_library("sys", "template_login_sda_novo", "/images/templatefedafinicial.png");
$caminhoDois = sc_url_library("sys", "template_login_sda_novo", "/images/image2inicialfedaf.png");
$caminhoTres = sc_url_library("sys", "template_login_sda_novo", "/images/inicialfedaftemp.png");
?>
<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//www.w3schools.com/lib/w3.css">
<style>
html, body, .w3-content, .mySlides {
	height: 100%;
}
.mySlides {
	background-size: cover;
	width:100%;
}
body  {
 
 
 overflow: hidden;
}

@-webkit-keyframes fading
{
	0%
	{
		opacity:0;
		transform: scale(1.1);
	}
	50%
	{
		opacity:1;
		transform: scale(1);
	}
	100%
	{
		opacity:0;
		transform: scale(1.1);
	}
}

@keyframes fading
{
	0%
	{
		opacity:0;
		transform: scale(1.1);
	}
	50%
	{
		opacity:1;
		transform: scale(1);
	}
	100%
	{
		opacity:0;
		transform: scale(1.1);
	}
}

	
</style>
<body>

<div class="w3-content w3-section" style="max-width:100%; ">

<div class="mySlides w3-animate-fading" style="background-image: url('<?php echo $caminho; ?>');"></div>
<div class="mySlides w3-animate-fading" style="background-image: url('<?php echo $caminhoDois; ?>');"></div>
<div class="mySlides w3-animate-fading" style="background-image: url('<?php echo $caminhoTres; ?>');"></div>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
	for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }	 
    myIndex++; 
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 8000);
}
</script>


</html>
<?php
	
