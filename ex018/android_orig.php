<?php
/************
*  Capítulo 17  - Aula 10 – Mascote do Android
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
    <title>Como surgiu o mascote do Android</title>
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: lightskyblue;" >
<header>
<h1>Curiosidades de Tecnologia</h1>
<p>Tudo aquilo que você quis saber sobre o mundo Tech, em um único lugar</p>
</header>
<nav>
    <a href="#">Home</a>
    <a href="#">Notícias</a>
    <a href="#">Curiosidades</a>
    <a href="#">Fale Conosco</a>
</nav>
<main>
    <article>
        <h1>História do Mascote do Android</h1>

        <p>Provavelmente você sabe que o sistema operacional <strong>Android</strong>, mantido pelo <strong>Google</strong> é um dos mais utilizados para dispositivos móveis em todo o mundo. Mas tavez você não saiba que o seu simpático mascote tem um nome e uma história muito curiosa? Pois acompanhe esse artigo para aprender muita coisa sobre esse robozinho.</p>

        <h2>A primeira versão</h2>

        <p>A primeira tentativa de criar um mascote surgiu em 2007 e veio de um desenvolvedor chamado <a href="https://androidcommunity.com/dan-morrill-shows-us-the-android-mascot-that-almost-was-20130103/" target="_blank" >Dan Morrill</a>. Ele conta que abriu o <a href="https://inkscape.org/pt-br/"  target="_blank"  >Inkscape</a> (software livre para vetorização de imagens) e criou sua própria versão de robô. O objetivo era apenas personificar o sistema apenas para a a sua equipe, não existia nenhuma solicitação da empresa para a criação de um mascote.</p>

        <img src="imagens/dan-droids.png" alt="Primeiro mascote do Android">

        <p>Essa primeira versão bizarra até foi batizada em homenagem ao seu criador: seriam os <strong>Dandroids</strong>.</p>

        <h2>Surge um novo mascote</h2>

        <p>A ideia de ter um mascote foi amadurecendo e a missão foi passada para uma profissional da área. A ilustradora Russa <a href="https://www.irinablok.com/android" target="_blank" >Irina Blok</a>, também funcionária do Google, ficou com a missão de representar o pequeno robô de uma maneira mais agradável.</p>

        <img src="imagens/irina-blok.jpg" alt="Irina Block, criadora do Bugdroid">

        <p>A ideia principal da Irina era representar tudo graficamente com poucos traços e de forma mais chapada. O desenho também deveria gerar identificação rápida com quem o olha. Surgiu então o <strong>Bugdroid</strong>, o novo mascote do Android.</p>

        <img src="imagens/bugdroid.png" alt="Bugdroid">

        <p>A principal inspiração para os traços do novo <strong>Bugdroid</strong> veio daqueles bonequinhos que ilustram portas de banheiro para indicar o gênero de cada porta. Conta a lenda que a artista estava criando em sua mesa no escritório do <strong>Google</strong> e olhou para o lado dos banheiros e a identificação foi imediata: simples, limpo, objetivo.</p>

        <iframe width="560" height="315" src="https://www.youtube.com/embed/l2UDgpLz20M?si=eOisX2F2LkoY38jQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        <aside>
            <h3>Quer aprender mais?</h3>
            <p>Outro assunto curioso em relação ao Android é que cada versão sempre foi nomeada em homenagem a um doce, em ordem alfabética a partir da versão 1.5 até a 9.0.</p>
            <ul>
                <li>1.5 - <abbr title="Bolo de Copo">Cupcake</abbr></li>
                <li>1.6 - <abbr title="Rosquinha">Donut</abbr></li>
                <li>3.0 - <abbr title="Bomba">Eclair</abbr></li>
                <li>2.2 - <abbr title="Iogurte Congelado">Froyo</abbr></li>
                <li>2.3 - <abbr title="Biscoito de Gengibre">Gingerbread</abbr></li>
                <li>3.0 - <abbr title="Favo de Mel">Honeycomb</abbr></li>
                <li>4.0 - <abbr title="Sanduíche de Sorvete">Ice Cream Sandwich</abbr></li>
                <li>4.1 - <abbr title="Jujuba">Jelly Bean</abbr></li>
                <li>4.4 - <abbr title="KitKat">KitKat</abbr></li>
                <li>5.0 - <abbr title="Pirulito">Lolipop</abbr></li>
                <li>6.0 - <abbr title="Marshmallow">Marshmallow</abbr></li>
                <li>7.0 - <abbr title="Torrone">Nougat</abbr></li>
                <li>8.0 - <abbr title="Oreo">Oreo</abbr></li>
                <li>9.0 - <abbr title="Torta">Pie</abbr></li>
            </ul>
            <p>Infelizmente, o <strong>Android Q</strong> não existiu, pois o Google resolveu pôr fim a essa divertida prática e começou a usar numerações, o que deu origem ao Android 10.</p>
        

        <p>Acesse aqui o site <a href="https://www.android.com/intl/en_uk/history/#/donut"  target="_blank">Android History</a> para conhecer a sequência das versões "adocicadas" e o que cada uma trouxe para o sistema Android.</p>
        </aside>

        <p>Então é isso! Espero que você tenha gostado do nosso artigo com essa curiosidade sobre o sistema <strong>Android</strong> e seu simpático mascote.</p>
   </article>
</main>
<footer>
    <p><span id="bola"></span>Site criado por <a href="https://gustavoguanabara.github.io/" target="_blank" >Gustavo Guanabara</a> para o <a href="https://www.youtube.com/cursoemvideo" target="_blank" >CursoemVideo</a></p>
</footer>
</body>
</html>