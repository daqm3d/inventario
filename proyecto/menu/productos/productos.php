<html>
      <head>  <title>#/#PRODUCTOS#/#</title>
<!--logo--><link rel="shortcut icon" href="C:\wamp\www\Proyecto\logo.jpg" />
	  <body img background=productos.jpg >
	    <br><td><table width="45%" border="10" cellspacing="10" cellpadding="" align="center">
		   <tr bgcolor="" align="center">
		   <td><H1><i><font color=#FFFFFF> PRODUCTOS</font></i></H1></td>
		   </tr></table></td><br>
		   <center>
<!--cuadro-->
<table border="4" cellspacing="7" cellpadding="1" width="45%" >
<tr>
<form  action="http://localhost/Proyecto/menu/productos/insertar/productos_insertar.php" method="post" name="form" >
<td><center><input type="submit"  value="Nuevo Producto"/></form></center></td>

<form  action="http://localhost/Proyecto/menu/productos/editar/productos_editar.php" method="post" name="form" >
<td><center><input type="submit"  value="Editar Datos"/></form></center></td>

<form  action="http://localhost/Proyecto/menu/productos/eliminar/productos_eliminar.php" method="post" name="form" >
<td><center><input type="submit"  value="Eliminar Producto"/></form></center></td>
</tr>
   </table>
   </center>
   <!--menu-->
   <table border="4" cellspacing="7" cellpadding="1" width="15%" style="position:absolute;top:199px;left:85px;">
<tr>
<td><font ><center><b><font color=#FFFFFF>MENU PRINCIMPAL</font></b></center></font></td>
<tr>
<td> <a href="http://localhost/Proyecto/menu/proveedores/proveedor.php"><center><b><font color=#FFFFFF>Proveedores</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/clientes/clientes.php"><center><b><font color=#FFFFFF>Clientes</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/productos/productos.php"><center><b><font color=#FFFFFF>Productos</font></b></center>
<br>
<a href="http://localhost/Proyecto/menu/facturas/factura.php"><center><b><font color=#FFFFFF>Factura</font></b></center>
</table>
<!--tablaMostrar-->
<table bgcolor="#C0C0C0" border="4" cellspacing="7" cellpadding="1" width="55%" style="position:absolute;top:199px;left:294px;">
<tr>
<td><b><font color=#000000>Codigo Producto</font></b></font></td>
<td><b><font color=#000000>Descriccion</font></b></td>
<td><b><font color=#000000>Precio</font></b></td>
<td><b><font color=#000000>En Existencia</font></b></td>
<td><b><font color=#000000>Codigo Proveedor</font></b></td>
</tr>
<?php
		require ("C:\wamp\www\Proyecto\TABLA.php");
		$resultado=mysql_query("SELECT * FROM productos",$link);
		while($row=mysql_fetch_array($resultado)){
			?>
<tr>
<td><b><font color=#000000><?php echo $row['Cod_Producto'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Des_Producto'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Precio'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Existencia'];?></font></b></td>
<td><b><font color=#000000><?php echo $row['Cod_proveedor'];?></font></b></td>
</tr>
<?php
}
?>
</table>
	  	   </body>
      </head>
</html>