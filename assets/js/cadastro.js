

$(document).ready(function()
{
	$("#btn-cadastrar").click(function(){
		
    if(validarCampos());
 
		$('#form-cadastro').submit();

	});

	$("#btn-alterar").click(function(){
		console.log('a');
    if(validarCampos());
 
		$('#form-alterar').submit();
	});

	$('#tableUsuarios').DataTable({
		"bPaginate": true,
		"bInfo" : true,
		"bSort" : false,
		"responsive": false,
		"searching" : true,
		"scrollX": '100%'
	});

	$('#pesquisar').click(function(){

		var status = $('#status').is(':checked') ? 1 : 0;

		$.ajax({
			dataType: "json",
			type: "POST",
			url: base_url+'get_usuarios',
			data: {

				status: status

				   },

			success: function (data) {
	
				$('#tableUsuarios').DataTable().clear().draw();

					if(data){

					$.each(data, function(index,value){

					$('#tableUsuarios').DataTable().row.add([

						value.id,
						value.email,
						value.nome,
						value.data,
						'<button onclick="alterarUsuario('+ value.id +')" type="button" class="btn btn-info" name="_status" id="pesquisar">'+'Editar'+'</button>'

						]).draw(false);

					});
				};

			}
		});


	});


});


function alterarUsuario(id){
	window.location = base_url+ 'alterar_usuario/'+id;
}

function validarCampos(){

		var nome = $("#nome").val();
		var data = $("#data").val();
		var email = $("#email").val();
		var senha = $("#senha").val();

		if(email == ""){
			alert("E-mail não informado");

			$("#email").focus();
			return false;
		}

		if(nome == ""){
			alert("Nome não informado");

			$("#nome").focus();
			return false;
		}

		if(data == ""){
			alert("Data não informada");

			$("#data").focus();
			return false;
		}

		if(senha == ""){
			alert("Senha não informada");

			$("#senha").focus();
			return false;
		}

		return true;
}