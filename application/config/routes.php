
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['default_controller'] = 'login';
$route['login'] = 'homepage';

$route['efetuar_login'] = 'Login/validar_cadastro';
$route['cadastrar_usuario'] = 'Login/cadastrar_usuario';

$route['pInicio'] = 'Inicio';

$route['quemSomos'] = 'Menu';
$route['equipe'] = 'Menu/equipe';

$route['efetuar_cadastro'] = 'Usuario/efetuarCadastro';
$route['mensagem_cadastro'] = 'Usuario/mensagem';

$route['usuarios_cadastrados'] = 'Usuario/usuariosCadastrados';

$route['get_usuarios'] = 'Usuario/getUsuarios';

$route['alterar_usuario/(:any)'] = 'Usuario/alterarUsuario/$1'; 
$route['atualizar_usuario'] = 'Usuario/atualizarUsuario/'; 

$route['mensagem_atualizacao'] = 'Usuario/mensagemAtualizacao';

$route['pdf_dados'] = 'Dados/pdfDados';

