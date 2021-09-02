<?php 
$sql="SELECT iIdInsumo,sNombre FROM INSUMOS";
$cmd=preparar_select($Conexion,$sql);
?>

<style><?php include 'css/Modales.css'; ?></style>

<!-- Agregar Insumo-->
<div class="modal fade mc" id="CInsumos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title mot" id="exampleModalLabel"><b class="text-white">Agregar Insumos</b></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formProductos"> 
      <div class="modal-body my-3">   
        <div class="form-row">
         <div class="col-sm-12 text-center">
          <label for="insumos" style><b>Insumos</b></label><br><br>
          <select class="sel_insumos" name="insumo_id" id="insumos" class="form-control hmg" required>
          <option class="hmg" value="a" selected>Selecciona un Producto</option>
          
          <?php
          foreach($cmd as $insumos)
             { 
          ?>
          <option class="hmg" value="<?php echo $insumos['iIdInsumo'];?>"><?php echo $insumos['sNombre'];?></option>
          <?php 
             }
          ?>
          </select>

       </div>
      </div>
        <br><br><br>
      <div class="form-row text-center">
           <div class="col-sm-4">
            <label><b>Cantidad</b></label>
            <input type="number" name="cantidad" id="cantidad" class="form-control text-center hmg" min="1" style="border-radius:5px;" required/>
           </div>      
           <div class="col-sm-4">
            <label><b>Precio Unitario</b></label>
            <input type="text" id="precio" name="precio" class="form-control text-center hmg" style="border-radius:5px" readonly/>
           </div>
           <div class="col-sm-4">
            <label><b><i>Subtotal</i></b></label>
            <input type="text" name="subtotal" id="subtotal_modal" class="form-control text-center hmg" style="border-radius:5px" readonly required/>
           </div>
       </div>
        <br>
         
      </div>
      <div class="modal-footer justify-content-center">
        <button type="submit" id="btnGuardar2" class="btn btn-primary py-2 px-3">Guardar</button>
        <button type="button" id="btnCerrar" class="btn btn-danger py-2 px-3" data-dismiss="modal">Cerrar</button>
      </div>
       <input type="hidden" id="insumo" name="insumo" value="">
      </form>
    </div>
  </div>
</div>

