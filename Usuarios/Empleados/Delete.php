<?php
    include "../../Libs/Header.php";
?>

<?php
    if (!empty($_GET["iId"]))
        {
          $iIdUsuario=$_GET["iId"];
          $sqlb="DELETE FROM USUARIOS WHERE iIdUsuario=?";
          $cmdb=preparar_query($Conexion,$sqlb,[$iIdUsuario]);
          if ($cmdb==true) {
           echo '<script>
            location.href ="/dbRestaurant/Usuarios/Empleados/"; 
           </script>';
          }
        }

    else {
         echo "Error";
       }
?>

<?php
      include "../../Libs/Footer.php"; 
?>