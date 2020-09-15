<?php
 $destino="albertobeto123y@gmail.com";
 $Nombre=$_POST["nombre"];
 $Correo=$_POST["correo"];
 $Mensaje=$_POST["mensaje"];
 $Contenido="Nombre:" .$_POST['nombre']; . $Nombre . "\nCorreo": .$_POST['correo']; . $Correo . "\nMensaje": .$_POST['mensaje'];. $Mensaje;
 mail($destino,"Contacto", $Contenido);

?>