<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body style=" background-image: url('https://www.iscarnet.com/wp-content/uploads/2017/11/Background-2.png')">
    <?php
    include "header.php";
    ?>



<?php


if (!isset($_POST['titulo'])) {

      $titulo=0;
    }else{
      $titulo=$_POST['titulo'];
    }


    if (!isset($_POST['fecha'])) {

      $fecha=0;
    }else{
      $fecha=$_POST['fecha'];
    }

   

// Conexion a la base de datos

$db = mysqli_connect('localhost','root','qweQWE123','bd_cine')
    or die('Error connecting to MySQL server.');


// Comprobamos si ha ocurrido un error al pasar la imagen
if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0)
{
    echo "<br>";

    echo "<h3 style='text-align:center;font-family:verdana;'>Ha ocurrido un error.</h3>";
}
else
{
    // Verificamos el tipo de imagen
    // y que el tamaño de la imagen no supere los 70MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 80;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
    {






        // Archivo de imagen temporal
        $imagen_temporal = $_FILES['imagen']['tmp_name'];

        // Detectamos el tipo de la imagen
        $tipo = $_FILES['imagen']['type'];

        // Leemos el contenido del archivo de imagen temporal en binario.
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        
        



        // Escapamos los caracteres para que se puedan almacenar en la base de datos correctamente.
        $data = mysqli_real_escape_string($db,$data);



 
        $nom=$_SESSION['nombre'];

        $conn="SELECT id_usuario FROM usuarios WHERE usuario='$nom'";

        $result2=mysqli_query($db,$conn);

        $row2=mysqli_fetch_array($result2);

        $id=$row2['id_usuario'];    





        // Insertamos los valores introducidos en el formulario en la base de datos.
        $sql = "INSERT INTO peliculas (nom_peli,fecha_peli,img_peli,tipo_imagen,id_usuario) VALUES ('$titulo','$fecha','$data','$tipo','$id')";

        if (mysqli_query($db,$sql))
        {
            echo "<br>";

            echo "<h3 style='text-align:center;font-family:verdana;'>El archivo ha sido copiado exitosamente.</h3>";
            
            echo "<br>";

        }
        else
        {
            echo "<br>";

            echo "<h3 style='text-align:center;font-family:verdana;'>Ocurrió algun error al copiar el archivo.</h3>";

            echo "<br>";
        }
      

        
  
}


    else
    {
        echo "<br>";

        echo "<h3 style='text-align:center;font-family:verdana;'>Formato de archivo no permitido o excede el tamaño límite de $limite_kb KB.</h3>";

        echo "<br>";
    }
}





//Mostramos por pantalla los elementos deseados 


$query ="SELECT * FROM peliculas WHERE id_usuario='$id'"; 

     mysqli_query($db, $query) or die('Error querying database.');


    $result = mysqli_query($db, $query);

//Este bucle mostrara todas las filas de la base de datos hasta que no queden, si se introduce una fila nueva, tambien la mostrara.
    
while ($row=mysqli_fetch_assoc($result)) {

    $imagen=$row['img_peli'];
    $tipo=$row['tipo_imagen'];

    echo "<div style='float:left;margin-top:15px;border: 2px solid BLACK;margin-right:10px;border-radius:5px;'>";

//este echo muestra la imagen pero al estar en blob hay que darle nuevamente formato para que el navegador pueda mostrarla

    echo '<div><img src="data:'.$tipo.';base64,'.base64_encode($imagen).'" style="width:150px;height:230px;float:left">';

   

    echo "<ul style='width:300px;float:left;margin-left:-5px;margin-top:50px;'>
      <li><b style='font-family:verdana;font-size:14;'>Titulo: </b><b style='font-family:verdana;font-size:14;'>".$row['nom_peli']."</b></li>
      <li><b style='font-family:verdana;font-size:14;'>Fecha Subida: </b><b style='font-family:verdana;font-size:14;'>".$row['fecha_peli']."</b></li>
      <li><b style='font-family:verdana;font-size:14;'>Tipo Imagen: </b><b style='font-family:verdana;font-size:14;'>".$row['tipo_imagen']."</b></li>
      </ul></div>";

    echo "</div>";
}
   

?>


</body>
</html>