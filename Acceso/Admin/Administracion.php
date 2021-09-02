<?php include '../../Libs/Header.php'; ?>

<?php 
 if (empty($_SESSION['iIdUsuario'])) {
  echo '<script>
   location.href ="/dbRestaurant/Acceso/Not-Found.php/"; 
  </script>';
 }
 else {
  $Usur=$_SESSION['iIdUsuario'];
  $sql="select sNombre from Permisos where iIdPermiso=(select iIdPermiso from Usuarios where iIdUsuario=?)";
  $cmd=preparar_select($Conexion,$sql,[$Usur]);
  $res=$cmd->fetch_assoc();

  if ($res['sNombre']!="Gerente") {
   echo '<script>
    location.href ="/dbRestaurant/Acceso/Not-Found.php/"; 
   </script>';
  }  
 }
?>

<style><?php include 'css/Administracion.css'; ?></style>

<div class="hed">
 <div class="hed-cont">
  <a id="atras" href="/dbRestaurant/"><i class="fas fa-arrow-left icb"></i></a>
  <h1 class="Title-Admin">Administracion</h1>
 </div>
 <div class="boxin">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
  <div></div>
 </div>
</div>

<div class="body">
<div class="Container-Administracion">
 <div class="Box">
  <div class="Icons">01</div>
  <div class="Content">
   <h3>Insumos</h3>
   <p>Administracion de Insumos. Crea, Modifica y Elimina Insumos dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Insumos/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">02</div>
  <div class="Content">
   <h3>Estadisticas</h3>
   <p>Visualizacion de Stats. Todo lo realizado dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Stats/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">03</div>
  <div class="Content">
   <h3>Platillos</h3>
   <p>Administracion de Platillos. Crea, Modifica y Elimina Platillos dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Platillos/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">04</div>
  <div class="Content">
   <h3>Proveedores</h3>
   <p>Administracion de Proveedores. Crea, Modifica y Elimina Proveedores dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Proveedores/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">05</div>
  <div class="Content">
   <h3>Menus</h3>
   <p>Administracion de Menús. Crea, Modifica y Elimina Menús dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Menus/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">06</div>
  <div class="Content">
   <h3>Categorias</h3>
   <p>Administracion de Categorías. Crea, Modifica y Elimina Categorías dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Categorias/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">07</div>
  <div class="Content">
   <h3>Pagos</h3>
   <p>Administracion de Formas de Pago. Crea, Modifica y Elimina Pagos dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Pagos/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">08</div>
  <div class="Content">
   <h3>Permisos</h3>
   <p>Administracion de Permisos. Crea, Modifica y Elimina Permisos dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Permisos/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">09</div>
  <div class="Content">
   <h3>Empleados</h3>
   <p>Administracion de Empleados. Crea, Modifica y Elimina Empleados dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Usuarios/Empleados/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">10</div>
  <div class="Content">
   <h3>Clientes</h3>
   <p>Administracion de Clientes. Crea, Modifica y Elimina Clientes dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Usuarios/Clientes/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">11</div>
  <div class="Content">
   <h3>Pedidos</h3>
   <p>Administracion de Pedidos. Crea, Modifica y Elimina Pedidos dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Pedidos/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">12</div>
  <div class="Content">
   <h3>Compras</h3>
   <p>Administracion de Compras. Crea, Modifica y Elimina Compras dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Compras/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">13</div>
  <div class="Content">
   <h3>Ventas</h3>
   <p>Administracion de Ventas. Crea y Elimina Ventas dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Ventas/">Ver Más</a>
  </div>
 </div>
 <div class="Box">
  <div class="Icons">14</div>
  <div class="Content">
   <h3>Caja</h3>
   <p>Administracion de Caja. Crea y Cierra Cajas dentro del Sistema de Tu Restaurante.</p>
   <a class="aAdm" href="../../Caja/">Ver Más</a>
  </div>
 </div>
</div>
</div>

<?php include '../../Libs/Footer.php'; ?>