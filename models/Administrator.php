<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		

		try {
			$SQL = "SELECT * FROM pedidos";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		

		try {
			
			$SQL = 'INSERT INTO pedidos (direccion,telefono,tamanop,ingredientes,nombrep,paquetep,formap) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									
									$data['direccion2'],
									$data['telefono2'],
									$data['tamanop2'],
									$data['ingredientes2'],
									$data['nombrep2'],
									$data['paquetep2'],
									$data['formap2']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE pedidos SET  direccion = ?, telefono = ?, tamanop	 = ?, ingredientes	 = ?, nombrep = ?, paquetep = ?, formap = ? WHERE idt = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
								
									$data['direccion2'],
									$data['telefono2'],
									$data['tamanop2'],
									$data['ingredientes2'],
									$data['nombrep2'],
									$data['paquetep2'],
									$data['formap2'],
									$data['id']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($idt){
		try {
			$SQL = 'DELETE FROM pedidos WHERE idt = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($idt));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($idt){
		$this->delete_user($idt);
	}	
}
?>