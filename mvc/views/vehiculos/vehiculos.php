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

 <a href="index.php?c=vehiculos&a=nuevo">Agregar</a><br><br>

	 <table border="1" width="80%">
		<!--  cabeceraz de tabla -->
	 	<thead>
	 	<tr>
	 		<th>placa</th>
	 		<th>marca</th>
	 		<th>modelo</th>
	 		<th>año</th>
	 		<th>color</th>
	 		<th>editar</th>
	 		<th>eliminar</th>
	 	</tr>
	 	</thead>
	 	<!--  cuerpo de tabla -->
		<tbody>
			<?php 
			foreach ($data["vehiculos"] as $dato ) { 
				echo "<tr>";
				echo "<td>".$dato["placa"]."</td>";
				echo "<td>".$dato["marca"]."</td>";
				echo "<td>".$dato["modelo"]."</td>";
				echo "<td>".$dato["anio"]."</td>";
				echo "<td>".$dato["color"]."</td>";
				echo "<td><a href='index.php?c=vehiculos&a=modificar&id=".$dato["id"]."'>Modificar</a></td>";
				echo "<td><a href='index.php?c=vehiculos&a=eliminar&id=".$dato["id"]."'>Eliminar</a></td>";
				echo "</tr>";
			}
			 ?>
		</tbody>


	 </table>

 </body>
 </html>