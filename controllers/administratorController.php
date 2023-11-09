<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function table_users(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>ID</th>
				<th>Direccion</th>
				<th>Telefono</th>
				<th>Tamaño Pizza</th>
				<th>Ingredientes</th>
				<th>Nombre Pedido</th>
				<th>Paquete Pizza</th>
				<th>Forma Pago</th>
				<th>Opciones</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->idt; ?> </td>
			<td><?php echo $data->direccion; ?> </td>
			<td><?php echo $data->telefono; ?> </td>
			<td><?php echo $data->tamanop; ?> </td>
			<td><?php echo $data->ingredientes; ?> </td>
			<td><?php echo $data->nombrep; ?> </td>
			<td><?php echo $data->paquetep; ?> </td>
			<td><?php echo $data->formap; ?> </td>
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->idt; ?>','<?php echo $data->direccion; ?>','<?php echo $data->telefono; ?> ','<?php echo $data->tamanop; ?> ','<?php echo $data->ingredientes; ?>','<?php echo $data->nombrep; ?>','<?php echo $data->paquetep; ?>','<?php echo $data->formap; ?>');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->idt; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					
					'direccion2' 	=> $_REQUEST['direccion2'],
					'telefono2'				=> $_REQUEST['telefono2'],
					'tamanop2'		=> $_REQUEST['tamanop2'],
					'ingredientes2'		=> $_REQUEST['ingredientes2'],
					'nombrep2'			=> $_REQUEST['nombrep2'],
					'paquetep2'			=> $_REQUEST['paquetep2'],
					'formap2'			=> $_REQUEST['formap2']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'				=> $_REQUEST['id'],
					'direccion2'		=> $_REQUEST['direccion2'],
					'telefono2'				=> $_REQUEST['telefono2'],
					'tamanop2'		=> $_REQUEST['tamanop2'],
					'ingredientes2'		=> $_REQUEST['ingredientes2'],
					'nombrep2'			=> $_REQUEST['nombrep2'],
					'paquetep2'			=> $_REQUEST['paquetep2'],
					'formap2'			=> $_REQUEST['formap2']
					);		
			parent::set_update_user($data);		
	}    
    
}

