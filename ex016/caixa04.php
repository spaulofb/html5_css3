<?php
/************
*  Capítulo 15 Aula 01 – Borda personalizada
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
    <title>Borda personalizada</title>
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
     margin: 0px 10px;
}

header > h1 {
    /**  box-shadow: 5px 5px 3px 1px cadetblue;    */
    box-shadow: 5px 5px 3px 1px rgba(0,0,0,0.5);
    margin: 9px 2px;
}

nav {
    background-color: rgb(102, 102, 102);
    padding: 3px;
  /**  box-shadow: 5px 4px 3px 1px cadetblue;  
      border-radius: 4px 2px 20px 1px;
  */ 
      border-radius: 10px 0;
      box-shadow: 4px 4px 9px 0px rgba(0,0,0,0.384);  
      margin: 0px 10px;
}
nav > a { 
    text-decoration: none;
    color: #FFFFFF;
    font-weight: 3px;
    margin-left: 4px;
    margin-right: 8px;
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
    margin: 0px;
}

span#bola {
        height: 2px;
        width: 2px;
        padding: 0px 20px 0px 0px;
        background-color: yellow;
        border-radius: 50%;
        margin-right: 8px;
}


a:hover {
    color: black;
    text-decoration: underline;
}
 
/** Pseudo classe - :   */
a:active {
    color:yellow;
}


.especial {
   /** content: '⇒ '; 
       background-color: lightgreen;
   */ 
   background-color: rgb(102, 102, 102);
   margin: 1px;
   border: 10px double black;
   height: auto;
   width: 100%;
}

.especial:hover {
    /**  content: ' ⇐';   */
    background-color: brown;
}

h1 {
    /** */ border: 10px solid #000;  */
    border: 10px solid transparent;
    padding: 10px;
    /** border-image: url("imagens/borda.png") 26 repeat; */
    border-image-source: url("imagens/borda.png");
    border-image-slice: 26;
     /** border-image-repeat: repeat;  */  
    border-image-repeat: stretch;




}

</style>
</head>
<body style="background-color: lightskyblue;" >
<header>
<h1>Teste de Borda</h1>
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
    <p><span id="bola"></span>Desenvolvido pelo CursoemVideo</p>
</footer>
</body>
</html>