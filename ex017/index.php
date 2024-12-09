<?php
/************
*  Capítulo 14 Aula 10 – Alinhamento de textos com CSS
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
    <title>Alinhamento de textos com CSS</title>
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
    <style>
        body { background-color: #ffffff;
            font: normal 1em Arial, Verdana, serif;
        }
        mark { background-color: limegreen;}
        h1 {
            text-align: center;
        }
        h2 {text-align:right;} 
        p {   text-align:justify;
             text-indent: 30px;
        }


    </style>
</head>
<body style="background-color: lightskyblue;" >
<h1>Tipos de Alinhamento</h1>
<h2>Subtítulo</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur, dolor tempore necessitatibus ab, vel beatae consequatur a alias qui, saepe nemo deserunt numquam maxime. In inventore repellat libero vitae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta officia porro cumque vel? Quod sunt non ex obcaecati doloribus, explicabo consectetur inventore possimus illum debitis officiis maiores tempore, eligendi voluptatum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quae molestias voluptatibus inventore nobis dolores magni odit minima hic at ad ea cum totam quisquam nulla assumenda, quo nisi temporibus. </p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nesciunt esse odio ullam pariatur! In, dolorem! Assumenda quis natus, rerum, vero debitis maxime laborum esse necessitatibus repudiandae numquam, eius nobis!</p>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quisquam nesciunt esse odio ullam pariatur! In, dolorem! Assumenda quis natus, rerum, vero debitis maxime laborum esse necessitatibus repudiandae numquam, eius nobis!</p>
<h2 style="font-size: 1.5em;">Capítulo 1.2</h2>
<p style="text-align:justify; font-size: 1.2em;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat unde commodi, ullam quisquam ducimus possimus tempora vel, a quo necessitatibus error quis totam ea! Consequatur quisquam ipsum atque vel doloremque.  </p>
<h1>Capítulo 2</h1>
<h2>Capítulo 2.1</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ea omnis. Maiores officiis eos, eum consequuntur inventore commodi exercitationem, explicabo tenetur eligendi iusto eveniet laborum eius quos corrupti modi culpa.</p>

<h1>Inserindo vídeos hospedados localmente</h1>
<p>Este vídeo está hospedado no meu próprio servidor</p>

<video style="max-width: 560px;"  poster="midia/foto-p.png"  controls autoplay loop >  <!-- Capa do Video -->
    <source src="midia/energia_eolica_orig.m4v" type="video/mp4" title="m4v"  >
    <source src="midia/energia_eolica_orig.webm" type="video/webm" title="webm" >
    <source src="midia/energia_eolica_orig.ogv" type="video/ogg" title="ogv" >
    <source src="midia/energia_eolica_orig.mp4" type="video/mp4" title="mp4">
    <p>Seu navegador não tem compatibilidade com reprodução de vídeos</p>
</video>
<h1>Inserindo vídeos do YouTube</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/LW0bhKitRBk?si=eIpICr7qEuCwUmWg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


<h1>Imagem dinâmica</h1>
   <p>Tente abrir esse dite em vários dispositivos diferentes ou simplesmente aumente e diminua o tamanho do sue navegador.</p>

   <picture>
      <source media="(max-width: 750px)" srcset="imagens/foto-p.png" type="image/png">
      <source media="(max-width: 1050px)" srcset="imagens/foto-m.png" type="image/png">
       <img src="imagens/foto-g.png" alt="Imagem flexível">
   </picture>

   <h1>Reproduzindo Áudio</h1>
   <p>Vamos aprender a reproduzio áudios em HTML5</p>
   
   <!--  MP3  WAV (Grande)  OGG  -->
   <audio preload="metadata"  autoplay controls loop >
    <source src="midia/For_The_Win-Everet_Almond.mp3" type="audio/mpeg" >
    <source src="midia/For_The_Win-Everet_Almond.ogg" type="audio/ogg" >
    <source src="midia/For_The_Win-Everet_Almond.wav" type="audio/wav" >
    <p>Infelizmente seu navegador não consegue reproduzir áudio. <a href="midia/For_The_Win-Everet_Almond.mp3" >Clique aqui para baixar o arquivo MP3</a></p>
   </audio>
   


   <h2>Abreviações</h2>
    <p>Estou estudando <abbr title="Hypertext Markup Language">HTML</abbr> e <abbr title="Cascading Style Sheets">CSS</abbr></p>
    <h2>Texto invertido</h2>
    <p><bdo dir="rtl">Estou aprendendo a criar coisas em HTML.</bdo></p>
</body>
</html>