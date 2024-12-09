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
//
//  Limpar Cache 
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
    <title>Grouping Tags</title>
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
   background-color: dimgray;
   margin: 0px;
}

header {
     background-color: white;
     padding: 10px;
     margin: 10px;
}

header > h1 {
    text-align: center;
}

nav {
    background-color: rgb(102, 102, 102);
    padding: 3px;
    
}
nav > a { 
    text-decoration: none;
    color: white;
    font-weight: 3px;
    margin-right: 10px;
}
nav > a:hover { 
    text-decoration: underline;
}

main {
      background-color: white;
      padding: 10px;
      margin: 10px;
}

section#noticias { display: flex;
    flex-direction:row;
    justify-content: center;
    justify-content: space-between;
  /**  align-items: center;   alinha verticalmente  */  
}


article {
    background-color: lightgray;
    padding: 5px;
}

article > aside {
    background-color: rgb(165, 165, 165);
}

footer {
    background-color: black;
    color: white;
    text-align: center;
    padding: 1px;
    margin:0px;
}

footer > p {
    text-align: center;
}



a {
    color: red;
    text-decoration: none;
    font-weight: bold;
    border: 1px solid red;
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
   /** content: '⇒ '; 
       background-color: lightgreen;
   */ 
   background-color: rgb(255, 140, 140);
   margin: 1px;
   border: 10px double black;
   height: auto;
   width: 100%;
}

.especial:hover {
    /**  content: ' ⇐';   */
    background-color: lightgoldenrodyellow;
}


</style>
</head>
<body style="background-color: lightskyblue;" >
<header>
<h1>Meu Site</h1>
</header>
<nav>
    <a href="#">link</a>
    <a href="#">link</a>
    <a href="#">link</a>
    <a href="#">link</a>
    <a href="#">link</a>
    <a href="#">link</a>
</nav>
<main>
    <section id="assuntos" >
        <p>Esportes Política Tecnologia</p>
    </section>
    <section id="noticias" >
        <article>
            <h2>Notícia sobre o Brasil</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, harum repudiandae pariatur doloremque delectus ab aliquid nihil maxime commodi optio ducimus ipsam debitis facere nobis necessitatibus? Aliquid optio ullam eos.</p>
            <aside>
                <p>Artigo escrito por José da Silva</p>
            </aside>

        </article>
        <article class="especial">
            
        </article>
    </section>
</main>
<footer>
    <p>Desenvolvido pelo CursoemVideo</p>
</footer>
</body>
</html>