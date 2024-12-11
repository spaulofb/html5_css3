<?php
/************
*  Capítulo 17  - Aula 10 – Responsividade para Sites
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
    <title>Teste de Responsividade</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
<style>
    * {
        margin: 0px;
        padding: 0px;
    }
    body {
        background-color: gray;
    }
    main {
        background-color: #fff;
        padding: 20;
        border-radius: 10px;
        min-width: 280px;
        max-width: 800px;
        margin: auto;
    }
    img{ width: 100%;}
</style>
</head>
<body style="background-color: lightskyblue;" >
<main>
    <h1>Testando Responsividade</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis vitae quaerat impedit velit labore nulla non! Ab laudantium, autem accusantium recusandae velit cupiditate, temporibus laboriosam vero quis cum qui corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, accusantium. At veritatis nemo dolorem harum quaerat, minima sunt vero pariatur. Iste voluptatem similique tempora earum dolorum? Non quae officia magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur aut error dolor, unde porro mollitia dignissimos sint fugit vitae rem enim maxime possimus distinctio qui modi. Nesciunt reprehenderit perspiciatis commodi.</p>
    <picture>
        <source media="(max-width:600px)" srcset="imagens/irina-blok-pq.jpg">
        <img src="imagens/irina-blok.jpg" alt="Irina Block, criadora do Bugdroid">
    </picture>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis vitae quaerat impedit velit labore nulla non! Ab laudantium, autem accusantium recusandae velit cupiditate, temporibus laboriosam vero quis cum qui corrupti! Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, accusantium. At veritatis nemo dolorem harum quaerat, minima sunt vero pariatur. Iste voluptatem similique tempora earum dolorum? Non quae officia magni! Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur aut error dolor, unde porro mollitia dignissimos sint fugit vitae rem enim maxime possimus distinctio qui modi. Nesciunt reprehenderit perspiciatis commodi.</p>



</main>
<footer>
    <p><span id="bola"></span>Site criado por <a href="https://gustavoguanabara.github.io/" target="_blank" >Gustavo Guanabara</a> para o <a href="https://www.youtube.com/cursoemvideo" target="_blank" >CursoemVideo</a></p>
</footer>
</body>
</html>