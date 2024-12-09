<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capítulo 15 - Fontes Externas - CSS</title>
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
    <style>
         @font-face {
            font-family: "Love";
            src: url("fontes/Lovely_Valentine.otf") format("opentype"),
            url("fontes/Lovely_Valentine.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
            /***********   
            *    Tipos de format()
            *      - opentype (otf)
            *      - trutype (ttf)
            *      - embedded-opentype 
            *      - truetype-eat (Apple Advanced Typography)
            *      - svg 
            *****/
         }

        body {
            /***  Medidas Absolutas
            *     cm, mm, in, px, pt, pc
            *  
            *    Medidas Relativas 
            *   em, ex, rem, vw, vh, %  
            *  16px geralmente = 1em
            *   Melhor usar o em 
            ****/
          /**** font-family: "Work Sans", Arial, Helvetica, sans-serif;  *****/  
          /**** font: font-style -> font-weight -> font-size -> font-family  ****/
            font: normal normal 1em Arial, Helvetica, sans-serif;
            /**  font-weight: lighter normal bold bolder **
            *        font-weight: normal;
            *       font-style: normal;
            *       color: black;
            **/

        }

        h1 {
            /****
            font-family: sans-serif;
            font-weight: boder;
            font-size: 3em;
            font-style: italic;
             ***********************/
            /****    
            *    shorthand font
            *  - font: font-style -> font-weight -> font-size -> font-family
            *    font: italic bolder 3em sans-serif;  
            *****/
            font: normal 400 3em "Love", "Times New Roman", Times, serif;
        }

        h2 {
            font: normal 400 2em "Kaushan Script", serif;
        }

    </style>
</head>
<body>
    <h1>Título - Trabalhando com Fontes Externas - CSS</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur, dolor tempore necessitatibus ab, vel beatae consequatur a alias qui, saepe nemo deserunt numquam maxime. In inventore repellat libero vitae.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat unde commodi, ullam quisquam ducimus possimus tempora vel, a quo necessitatibus error quis totam ea! Consequatur quisquam ipsum atque vel doloremque.</p>
<h2>Subtítulo</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus similique asperiores dolorum ad sint omnis fugit quibusdam temporibus. Natus nemo at vitae minima laborum quia excepturi reprehenderit sint ea harum.</p>

</body>
</html>