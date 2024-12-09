<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capítulo 13 - Estilos Inline</title>
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
    <style>
        body { background-color: #ffffff;}
        mark { background-color: limegreen;}
    </style>
</head>
<body style="background-color: lightskyblue;" >
<h1 style="color: mediumblue;">Capítulo 1</h1>
<h2>Capítulo 1.1</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur, dolor tempore necessitatibus ab, vel beatae consequatur a alias qui, saepe nemo deserunt numquam maxime. In inventore repellat libero vitae.</p>
<h2 style="font-size: 1.5em;">Capítulo 1.2</h2>
<p style="text-align:justify; font-size: 1.2em;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat unde commodi, ullam quisquam ducimus possimus tempora vel, a quo necessitatibus error quis totam ea! Consequatur quisquam ipsum atque vel doloremque.</p>
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