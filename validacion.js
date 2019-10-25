function Validacion(){

	var user=document.getElementById('user').value;
	var password=document.getElementById('password').value;

	if (user == '' || password == '') {
		if (user == '') {
			document.getElementById('user').style.border = '1px solid red';
		}else{
			document.getElementById('user').style.border = '1px solid #ccc';
		}
		if (password == '') {
			document.getElementById('password').style.border = '1px solid red';
		}else{
			document.getElementById('password').style.border = '1px solid #ccc';
		}

		if (user == '' && password == '') {
		document.getElementById('mensaje').innerHTML='El campo Usuario y Contraseña son obligatorios!!!';
		document.getElementById('mensaje').style.display = 'block';
		return false;
	}else if(user == ''){
		document.getElementById('mensaje').innerHTML='El campo Usuario es obligatorio!!!';
		document.getElementById('mensaje').style.display = 'block';
		return false;

	}else if(password == ''){
		document.getElementById('mensaje').innerHTML='El campo Contraseña es obligatorio!!!';
		document.getElementById('mensaje').style.display = 'block';
		return false;
	}
		
	}else{
		return true;
	}
}


function Validacion2(){

	var titulo=document.getElementById('titulo').value;
	var fecha=document.getElementById('fecha').value;
	var imagen=document.getElementById('imagen').value;


	if (titulo == '' || fecha == '' || imagen == '') {
		if (titulo == '') {
			document.getElementById('titulo').style.border = '1px solid red';
		}else{
			document.getElementById('titulo').style.border = '1px solid #ccc';
		}
		if (fecha == '') {
			document.getElementById('fecha').style.border = '1px solid red';
		}else{
			document.getElementById('fecha').style.border = '1px solid #ccc';
		}
		if (imagen == '') {
			document.getElementById('imagen').style.border = '1px solid red';
		}else{
			document.getElementById('imagen').style.border = '1px solid #ccc';
		}
		
		if (titulo == '' && fecha == '' && imagen == '') {
		document.getElementById('mensaje2').innerHTML='Los campos Titulo, Fecha e Imagen son Obligatorios!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}else if (titulo == '' && fecha == '') {
		document.getElementById('mensaje2').innerHTML='Los campos Tiutlo y Fecha son Obligatorios!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}else if (titulo == '' && imagen == '') {
		document.getElementById('mensaje2').innerHTML='Los campos Tiutlo e Imagen son Obligatorios!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}else if (fecha == '' && imagen == '') {
		document.getElementById('mensaje2').innerHTML='Los campos Fecha e Imagen son Obligatorios!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}else if(titulo == ''){
		document.getElementById('mensaje2').innerHTML='El campo Tiutlo es obligatorio!!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}else if(fecha == ''){
		document.getElementById('mensaje2').innerHTML='El campo Fecha es obligatorio!!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}else if(imagen == ''){
		document.getElementById('mensaje2').innerHTML='El campo Imagen es obligatorio!!!';
		document.getElementById('mensaje2').style.display = 'block';
		return false;
	}

	}else{
		return true;
	}
}



