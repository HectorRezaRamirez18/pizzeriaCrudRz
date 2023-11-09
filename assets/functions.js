function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=table_users',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	console.log("Entrando en la función de registrar");
	direccion2 	= document.formUser.direccion2.value;
	telefono2 			= document.formUser.telefono2.value;
	tamanop2 		= document.formUser.tamanop2.value;
	ingredientes2 	= document.formUser.ingredientes2.value;
	nombrep2	 	= document.formUser.nombrep2.value;
	paquetep2	 	= document.formUser.paquetep2.value;
	formap2		 	= document.formUser.formap2.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("direccion2="+direccion2+"&telefono2="+telefono2+"&tamanop2="+tamanop2+"&ingredientes2="+ingredientes2+"&nombrep2="+nombrep2+"&paquetep2="+paquetep2+"&formap2="+formap2);
}	

function update(){
	console.log("Entrando en la función actualizar.");
	id					= document.formUserUpdate.id.value;
	direccion2 		= document.formUserUpdate.direccion2.value;
	telefono2 				= document.formUserUpdate.telefono2.value;
	tamanop2	 		= document.formUserUpdate.tamanop2.value;
	ingredientes2 		= document.formUserUpdate.ingredientes2.value;
	nombrep2 			= document.formUserUpdate.nombrep2.value;
	paquetep2	 		= document.formUserUpdate.paquetep2.value;
	formap2		 		= document.formUserUpdate.formap2.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){
			read();
			$('#updateUser').modal('hide');
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("direccion2="+direccion2+"&telefono2="+telefono2+"&tamanop2="+tamanop2+"&ingredientes2="+ingredientes2+"&nombrep2="+nombrep2+"&paquetep2="+paquetep2+"&formap2="+formap2+"&id="+id);

}

function deleteUser(id){	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id="+id);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}

function ModalUpdate(id,direccion2,telefono2,tamanop2,ingredientes2,nombrep2,paquetep2,formap2){			
	document.formUserUpdate.id.value 				= id;
	document.formUserUpdate.direccion2.value 	= direccion2;
	document.formUserUpdate.telefono2.value 				= telefono2;
	document.formUserUpdate.tamanop2.value 		= tamanop2;
	document.formUserUpdate.ingredientes2.value 		= ingredientes2;
	document.formUserUpdate.nombrep2.value 		= nombrep2;
	document.formUserUpdate.paquetep2.value 			= paquetep2;
	document.formUserUpdate.formap2.value 			= formap2;
	$('#updateUser').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/