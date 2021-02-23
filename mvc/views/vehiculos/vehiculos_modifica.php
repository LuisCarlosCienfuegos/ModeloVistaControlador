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

<form  id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=actualizar" autocomplete="off">
	<input type="hidden" id="id" name="id" value="<?php echo $data["id"]; ?>">
	Placa: <input type="text" name="placa" id="placa" value=" <?php echo $data["vehiculos"] ["placa"] ?>"><br>
	Marca: <input type="text" name="marca" id="marca" value=" <?php echo $data["vehiculos"] ["marca"] ?>"><br>
	Modelo: <input type="text" name="modelo" id="modelo" value=" <?php echo $data["vehiculos"] ["modelo"] ?>"><br>
	Año: <input type="text" name="anio" id="anio" value=" <?php echo $data["vehiculos"] ["anio"] ?>"><br>
	Color: <input type="text" name="color" id="color" value=" <?php echo $data["vehiculos"] ["color"] ?>"><br>
	<button id="guardar" name="guardar" type="submit">Guardar</button>
	
</form>

	

 </body>
 </html>