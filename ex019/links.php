<?php
/************
*  Capítulo 15 Aula 01 – Usando o id com CSS
*
*   Site: https://www.cursoemvideo.com/
*    v20241126
* 
***************************************************************/
///  Caso sseion_start desativado - Ativar 
if( ! isset($_SESSION)) {
    session_start();
} 
///
///  Limpar Cache 
header("Cache-Control: no-cache, no-store, must-revalidate"); // Para HTTP 1.1
header("Pragma: no-cache"); // Para HTTP 1.0
header("Expires: 0"); // Para browsers que obedecem
///
/// IMPORTANTE: para acentuacao php
header("Content-type: text/html; charset=utf-8");
///
/****  header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0")  ****/
///   Colocar as datas do Cadastro do Usuario e a validade
date_default_timezone_set('America/Sao_Paulo');
///
ini_set('default_charset','UTF-8');
///
/****
*     Modo de habilitar/exibir os erros no PHP 
****/
ini_set('display_errors', 1);
error_reporting(E_ALL);
///
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
    <title>Links</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
<style>
/**  Seletores Personalizados  
   # = id
   . = class
   : = pseudo-class
   :: = pseudo-element
   > = children
*/


body {
   font-family: Arial, Helvetica, sans-serif;
}

a {
    color: red;
    text-decoration: none;
    font-weight: bold;
}
a:visited {
    color:darkblue;
}
a:hover {
    color:black;
    text-decoration: underline;
}
 
/** Pseudo classe - :   */
a:active {
    color:yellow;
}

/** Pseudo elemento - ::    */
a::before {
    content: '⇒ ';
    text-decoration: none;
    font-weight: normal;
    color: darkgray;
}


a::after {
    content: ' ⇐';
    text-decoration: none;
    font-weight: normal;
    color: darkgray;
}

.especial {
    background-color: rgb(255, 140, 140);
}

.especil::before {
    content: '⇒ ';
}

.especil::after {
    content: ' ⇐';
}



   </style>
</head>
<body style="background-color: lightskyblue;" >
<h1>Personalizando Links</h1>
<ul>
    <li><a href="http://gustavoguanabara.github.io" target="_blank" >Repositório GitHub</a></li>
    <li><a href="http://youtube.com/cursoemvideo" target="_blank">Canal do YouTube</a></li>
    <li><a href="http://www.cursoemvideo.com" target="_blank">Site do CursoemVideo</a></li>
</ul>

</body>
</html>