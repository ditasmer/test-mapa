<?php
//crear var donde guardar las etiquetas img
$img = '';
//bucle 10 veces
for($i=0; $i<10; $i++){
	//generar numero aleatorio coordenada top
	$top = rand(0, 480);
	
	//generar numero aleatorio coordenada left
	$left = rand(0, 725);

	//confeccionar una etiqueta img con las coordenadas top y left
	$img .= "<img src='goldCoin.png' style='top:$top;left:$left;'>";
}
	

?>
<html>
<head>
	<title></title>
	<style>
		div {width:725px; height:483px; background: url(img/Bluemap.jpg); margin:auto; overflow:hidden; position:relative}
		
		img {width:50px;position:absolute;}
	</style>
</head>
<body>
	<div>
		<?=$img?>
	</div>
</body>
</html>