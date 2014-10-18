
function registrarse(){
	window.location="formulario.php";
}

function registrarse2(){
	window.location="../formulario.php";
}

function insertNoticia(){
	window.location="insertarNoticia.php";
}

function modif(){
	window.location="modificar.php";
}

function mostrar(){
	document.getElementById("ventana-flotante").style.visibility="visible";
}


function validar(f){
		
	
	document.getElementById("mensaje1").style.visibility="hidden";	

	if (f.nombre.value == '') { 
		document.getElementById("mensaje1").style.visibility="visible";
		f.nombre.focus();
		return false; 
	} 

	document.getElementById("mensaje2").style.visibility="hidden";
	if(f.apellido1.value==''){
		document.getElementById("mensaje2").style.visibility="visible";
		f.apellido1.focus();
		return false;
	}
	
	document.getElementById("mensaje3").style.visibility="hidden";
	if(f.apellido2.value==''){
		document.getElementById("mensaje3").style.visibility="visible";
		f.apellido2.focus();
		return false;
	}

	document.getElementById("mensaje4").style.visibility="hidden";
	if(f.usuario.value==''){
		document.getElementById("mensaje4").style.visibility="visible";
		f.usuario.focus();
		return false;
	}

	document.getElementById("mensaje5").style.visibility="hidden";
	if(f.clave.value==''){
		document.getElementById("mensaje5").style.visibility="visible";
		f.clave.focus();
		return false;
	}

	document.getElementById("mensaje6").style.visibility="hidden";
	document.getElementById("mensaje7").style.visibility="hidden";
	if(f.claveRepe.value==''){
		document.getElementById("mensaje6").style.visibility="visible";
		f.claveRepe.focus();
		return false;
	}else{
		if(f.claveRepe.value!=f.clave.value){
			document.getElementById("mensaje7").style.visibility="visible";
			f.claveRepe.focus();
			return false;
		}
	}

	document.getElementById("mensaje8").style.visibility="hidden";
	document.getElementById("mensaje9").style.visibility="hidden";
	if(f.email.value==''){
		document.getElementById("mensaje8").style.visibility="visible";
		f.email.focus();
		return false;
	}

	if (f.acepto.checked==0){
		document.getElementById("mensaje10").style.visibility="visible";
		f.acepto.focus()
		return false;
	}
	
 	return true; 
}

function validarUsuario(f){

	document.getElementById("mensaje20").style.visibility="hidden";	

	if (f.usuario.value == '') { 
		document.getElementById("mensaje20").style.visibility="visible";
		f.usuario.focus();
		return false; 
	} 

	document.getElementById("mensaje21").style.visibility="hidden";
	if(f.contrasenia.value==''){
		document.getElementById("mensaje21").style.visibility="visible";
		f.contrasenia.focus();
		return false;
	}
	
	return true;
}

function validarInsertar(f){
		
	
	document.getElementById("mensaje30").style.visibility="hidden";	

	if (f.tipo.value == '') { 
		document.getElementById("mensaje30").style.visibility="visible";
		f.tipo.focus();
		return false; 
	} 

	document.getElementById("mensaje31").style.visibility="hidden";
	if(f.autor.value==''){
		document.getElementById("mensaje31").style.visibility="visible";
		f.autor.focus();
		return false;
	}

	document.getElementById("mensaje32").style.visibility="hidden";
	if(f.titular.value==''){
		document.getElementById("mensaje32").style.visibility="visible";
		f.titular.focus();
		return false;
	}
	return true;
}

function validarModificar(f){
		
	
	document.getElementById("mensaje40").style.visibility="hidden";	

	if (f.tipo.value == '') { 
		document.getElementById("mensaje40").style.visibility="visible";
		f.tipo.focus();
		return false; 
	} 

	document.getElementById("mensaje41").style.visibility="hidden";
	if(f.autor.value==''){
		document.getElementById("mensaje41").style.visibility="visible";
		f.autor.focus();
		return false;
	}

	document.getElementById("mensaje42").style.visibility="hidden";
	if(f.titular.value==''){
		document.getElementById("mensaje42").style.visibility="visible";
		f.titular.focus();
		return false;
	}
	return true;
}


function muestra_caja(){
	document.getElementById('caja').style.visibility = 'visible'
}



