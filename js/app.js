$(document).ready(function(){
	user = false;
	$("#save").click(saveData);
	saveData();
	$("#add").click(function(){
		mode = "insert";
		$("#save").attr("value", "Añadir");
	})
	$("body").on("click", ".edit", function(){
		mode = "update";
		$("#save").attr("value", "Edit");
		idTarget = $(this).attr("data-id");
		getData(idTarget);
	});
	$("body").on("click", ".delete", function(){
		idTarget = $(this).attr("data-id");
		var temp = confirm("¿Deseas borrarlo?");
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
	var username;
	var password;
	var category;
	var productImg;

	function getValue(){
		data = new FormData();

		username = $("#username").val();
		password = $("#password").val();
		category = $("[name='kategori']").val();
		productImg = $("[name='product_img']").prop("files")[0];

		if(productImg==undefined){
			productImg = null;
		}

		data.append("mode", mode);
		data.append("id", idTarget);
		data.append("username", username);
		data.append("password", password);
		data.append("category", category);
		data.append("productImg", productImg);
	}

	function saveData(){
		getValue();
		if(username == ""){
			alert("nama wajib diisi");
		}else if(password == ""){
			alert("deskripsi wajib diisi");
		}else if(category==-1){
			alert("pilih kategori!");
		}else{
			if(mode=="insert"){
				insertData();
			}else if(mode=="update"){
				updateData();
			}
		}
	};


	function insertData(){
		$('#loading').show();
		getValue();
		$.post({
			url : "rest/usuarios.php",
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
			url : "rest/usuarios.php",
			data : {mode:'loadOne', id:idTarget},
			success : function(data){
				var temp = JSON.parse(data);
				$("#username").val(temp.username);
				$("#password").val(temp.password);
			}
		});

		$.get({
			url : "rest/administrador.php",
			data : {mode:"loadOne", id:idTarget},
			success : function(data){
				$("[name='kategori']").html(data);
			}
		});
	}

	function updateData(){
		$('#loading').show();
		getValue();
		$.post({
			url : "rest/usuarios.php",
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
			url : "rest/usuarios.php",
			data : {mode:'load'},
			success : function(data){
				$("body table tbody").html(data);
			}
		});

		$.get({
			url : "rest/administrador.php",
			data : {mode:"loadAll"},
			success : function(data){
				$("[name='kategori']").html(data);
			}
		});

		clearForm();
	};

	function deleteData(id){
		$('#loading').show();
		$.get({
			url : "rest/usuarios.php",
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
		$("#username").val("");
		$("#password").val("");
		$("[name='kategori']").val("");
		$("[name='product_img']").val("");

		data = new FormData();

		mode = "insert";
		$("#save").attr("value", "Añadir");
		idTarget = -1;
	}
})

