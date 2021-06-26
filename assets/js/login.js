

	$(document).ready(function()
	{
		
		$("#acessar").click(function(){

			var login = $("#login").val();
			var senha = $("#senha").val();

			if(login == "" || login.lenght < 3) {

   				 alert("Por favor, indique o seu acesso.");

   				 $("#login").focus();

   				 return false;

			}

			window.location = base_url +'efetuar_login'

		});

    });



