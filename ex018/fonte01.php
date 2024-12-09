<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capítulo 15 - Fontes em CSS</title>
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            /***  Medidas Absolutas
            *     cm, mm, in, px, pt, pc
            *  
            *    Medidas Relativas 
            *   em, ex, rem, vw, vh, %  
            *  16px geralmente = 1em
            *   Melhor usar o em 
            ****/
            font-size: 1em;
            /**  font-weight: lighter normal bold bolder ****/
            font-weight: normal;
            font-style: normal;

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
            *****/
            font: italic bolder 3em sans-serif;
        }

        h2 {
             font: normal bold 2em serif;
        }

    </style>
</head>
<body>
    <h1>Trabalhando com fontes</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias tenetur, dolor tempore necessitatibus ab, vel beatae consequatur a alias qui, saepe nemo deserunt numquam maxime. In inventore repellat libero vitae.</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat unde commodi, ullam quisquam ducimus possimus tempora vel, a quo necessitatibus error quis totam ea! Consequatur quisquam ipsum atque vel doloremque.</p>
<h2>Subtítulo do exercício</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, ea omnis. Maiores officiis eos, eum consequuntur inventore commodi exercitationem, explicabo tenetur eligendi iusto eveniet laborum eius quos corrupti modi culpa.</p>

</body>
</html>