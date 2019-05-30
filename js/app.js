$(document).ready(function(){
	$("#save").click(saveData);
	$("[name='agregar']").click(function(){
		mode = "insert";
		$("#save").attr("value", "Agregar");
	})
	$("body").on("click", ".edit", function(){
		mode = "update";
		$("#save").attr("value", "Edit");
		idTarget = $(this).attr("data-id");
		getData(idTarget);
	});
	$("body").on("click", ".delete", function(){
		idTarget = $(this).attr("data-id");
		var temp = confirm("¿Deseas borrar?");
		if(!temp){
			return false;
		}else{
			deleteData(idTarget);
		}
	});
	loadData();

	var mode = "insert";
	var idTarget = -1;

	var data;
	var nombre;
	var apellido;
	var s_apellido;
	var DNI;
	var telefono;
	var piso;
	var habitacion;
	var administrador;
	var img;

	function getValue(){
		data = new FormData();

		nombre = $("[name='nombre']").val();
		apellido = $("[name='apellido']").val();
		s_apellido = $("[name='s_apellido']").val();
		DNI = $("[name='DNI']").val();
		telefono = $("[name='telefono']").val();
		piso = $("[name='piso']").val();
		habitacion = $("[name='habitacion']").val();
		administrador = $("[name='administrador']").val();
		img = $("[name='img']").prop("files")[0];

		if(img == undefined){
			img = null;
		}

		data.append("mode", mode);
		data.append("id", idTarget);
		data.append("nombre", nombre);
		data.append("apellido", apellido);
		data.append("s_apellido", s_apellido);
		data.append("DNI", DNI);
		data.append("telefono", telefono);
		data.append("piso", piso);
		data.append("habitacion", habitacion);
		data.append("administrador", administrador);
		data.append("img", img);
	}

	function saveData(){
		getValue();
		if(nombre == ""){
			alert("El nombre es requerido");
		}
		else if(apellido == ""){
			alert("El apellido es requerido");
		}
		else if(s_apellido == ""){
			alert("El segundo apellido es requerido");
		}
		else if(DNI == ""){
			alert("El DNI es requerido");
		}
		else if(isNaN(piso)){
			alert("El piso es requerido");
		}
		else if(isNaN(habitacion)){
			alert("La habitacion es requerida");
		}
		else if(isNaN(administrador)){
			alert("El administrador es requerido");
		}
		else{
			if(mode == "insert"){
				insertData();
			}
			else if(mode == "update"){
				updateData();
			}
		}
	};

	function insertData(){
		$('#loading').show();
		getValue();
		$.post({
			url : "rest/huespedes.php",
			data : data,
			contentType : false, 
			processData: false, 
			success : function(){
				loadData();
			},
			complete : function(){
				$('#loading').hide();
			}
		});
	}

	function getData($id){
		$.get({
			url : "rest/huespedes.php",
			data : {mode:'loadOne', id:idTarget},
			success : function(data){
				var temp = JSON.parse(data);
				$("[name='nombre']").val(temp.nombre);
				$("[name='apellido']").val(temp.apellido);
				$("[name='s_apellido']").val(temp.s_apellido);
				$("[name='DNI']").val(temp.DNI);
				$("[name='telefono']").val(temp.telefono);
				$("[name='piso']").val(temp.piso);
				$("[name='habitacion']").val(temp.habitacion);
				$("[name='administrador']").val(temp.administrador);
				$("[name='img']").val(temp.img);
			}
		});
	}

	function updateData(){
		$('#loading').show();
		getValue();
		$.post({
			url : "rest/huespedes.php",
			data : data,
			contentType : false, 
			processData: false, 
			success : function(){
				loadData();
				clearForm();
			},
			complete : function(){
				$('#loading').hide();
			}
		});
	}

	function loadData(){
		$.get({
			url : "rest/huespedes.php",
			data : {mode:'load'},
			success : function(data){
				$("body table tbody").html(data);
			}
		});
		clearForm();
	};

	function deleteData(id){
		$('#loading').show();
		$.get({
			url : "rest/huespedes.php",
			data : {mode:"delete", id:idTarget},
			success : function(){
				loadData();
				clearForm();
			},
			complete : function(){
				$('#loading').hide();
			}
		});
	}

	function clearForm(){
		$("[name='nombre']").val('');
		$("[name='apellido']").val('');
		$("[name='s_apellido']").val('');
		$("[name='DNI']").val('');
		$("[name='telefono']").val('');
		$("[name='piso']").val('');
		$("[name='habitacion']").val('');
		$("[name='administrador']").val('');
		$("[name='img']").val('');

		data = new FormData();

		mode = "insert";
		$("#save").attr("value", "Agregar");
		idTarget = -1;
	}
})