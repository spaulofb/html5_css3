<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capítulo 11 - Mídias em HTML5</title>
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
    <style>
        body { background-color: #ffffff;}
        mark { background-color: limegreen;}
    </style>
</head>
<body>
<h1>Imagem dinâmica</h1>
   <p>Tente abrir esse dite em vários dispositivos diferentes ou simplesmente aumente e diminua o tamanho do sue navegador.</p>

   <picture>
      <source media="(max-width: 750px)" srcset="imagens/foto-p.png" type="image/png">
      <source media="(max-width: 1050px)" srcset="imagens/foto-m.png" type="image/png">
       <img src="imagens/foto-g.png" alt="Imagem flexível">
   </picture>

   <h1>Reproduzindo Áudio</h1>
   <p>Vamos aprender a reproduzio áudios em HTML5</p>
   <audio src="midia/happy-mistake.mp3" controls autoplay ></audio>
   <!--  MP3  WAV  OGG  -->


   <h2>Abreviações</h2>
    <p>Estou estudando <abbr title="Hypertext Markup Language">HTML</abbr> e <abbr title="Cascading Style Sheets">CSS</abbr></p>
    <h2>Texto invertido</h2>
    <p><bdo dir="rtl">Estou aprendendo a criar coisas em HTML.</bdo></p>
</body>
</html>