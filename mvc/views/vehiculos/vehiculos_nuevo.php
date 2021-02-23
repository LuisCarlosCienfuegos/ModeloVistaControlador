<?php 


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $data["titulo"]; ?></title>
 </head>
 <body>
 <!--<h2>Vehiculos</h2> -->
 <h2><?php echo $data["titulo"]; ?></h2>

<form  id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
	Placa: <input type="text" name="placa" id="placa"><br>
	Marca: <input type="text" name="marca" id="marca"><br>
	Modelo: <input type="text" name="modelo" id="modelo"><br>
	Año: <input type="text" name="anio" id="anio"><br>
	Color: <input type="text" name="color" id="color"><br>
	<button id="guardar" name="guardar" type="submit">Guardar</button>
	
</form>

	

 </body>
 </html>