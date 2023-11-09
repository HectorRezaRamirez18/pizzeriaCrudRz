<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo pedido</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="direccion2" type="text" class="form-control" name="direccion2" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="telefono2" type="text" class="form-control" name="telefono2" placeholder="Telefono" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="tamanop2" type="text" class="form-control" name="tamanop2" placeholder="Tamaño Pizza" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    <input id="ingredientes2" type="text" class="form-control" name="ingredientes2" placeholder="Ingredientes" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		    <input id="nombrep2" type="text" class="form-control" name="nombrep2" placeholder="Nombre Pedido" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		    <input id="paquetep2" type="text" class="form-control" name="paquetep2" placeholder="Paquete Pizza" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="formap2" type="text" class="form-control" name="formap2" placeholder="Forma Pago" required autocomplete="off">
		  </div>			  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion pedido </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="direccion2" type="text" class="form-control" name="direccion2" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="telefono2" type="text" class="form-control" name="telefono2" placeholder="Telefono" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-font"></i></span>
		    <input id="tamanop2" type="text" class="form-control" name="tamanop2" placeholder="Tamano Pizza" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
		    <input id="ingredientes2" type="text" class="form-control" name="ingredientes2" placeholder="Ingredientes" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		    <input id="nombrep2" type="text" class="form-control" name="nombrep2" placeholder="Nombre Pedido" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		    <input id="paquetep2" type="text" class="form-control" name="paquetep2" placeholder="Paquete Pizza" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="formap2" type="text" class="form-control" name="formap2" placeholder="Forma de Pago" required autocomplete="off">
		  </div>		  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>