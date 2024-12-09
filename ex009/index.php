<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outras Formatações</title>
    <link rel="shortcut icon" href="gemac.ico" type="image/x-icon">
    <style>
        body { background-color: #ffffff;}
        mark { background-color: limegreen;}
    </style>
</head>
<body>
<h1>Exercício 9</h1>
       <h1>Trabalhando com Listas</h1>
    <h2>Listas Ordenadas</h2>
    <ol type="i" >
        <li>Acordar</li>
        <li>Ligar para o João</li>
        <li>Tomar café</li>
        <li>Escovar os dentes</li>
        <li>Ir para a faculdade</li>
        <li>Almoçar</li>
        <li>Ir para o trabalho</li>
        <li>Voltar para casa</li>
        <li>Jantar</li>
        <li>Dormir</li>
    </ol>
    <h2>Listas NÃO Ordenadas</h2>
    <ul type="circle"  >  <!-- disc circle square -->
        <li>Pão</li>
        <li>Leite</li>
        <li>Tomate</li>
        <li>Manteiga</li>
        <li>Arroz</li>
        <li>Feijão</li>
    </ul>
    <p>O comando <strong>code</strong> <code>document.getElementById('teste')</code> é escrito em linguagem JavaScript</p>
    <pre>
        <code>
    num = int(input('Digite um número'))
    if num % 2 == 0:
        print(f'O número {num} é PAR')
    else:
        print(f'O número {num} é ÍMPAR')
    print('Fim do programa')
        </code>
    </pre>
    <h2>Citações simples</h2>
    <p>Como diria o pai de um amigo: <q>o computador é um burro muito rápido</q>.</p>
    <h2>Citações completas</h2>
    <p>USP/FMRP</p>
    <blockquote cite="https://www.fmrp.usp.br">
        USP (UNIVERSIDADE DE SÃO PAULO) E 
        FMRP (FACULDADE DE MEDICINA DE RIBEIRÃO PRETO)
    </blockquote>
    <h2>Abreviações</h2>
    <p>Estou estudando <abbr title="Hypertext Markup Language">HTML</abbr> e <abbr title="Cascading Style Sheets">CSS</abbr></p>
    <h2>Texto invertido</h2>
    <p><bdo dir="rtl">Estou aprendendo a criar coisas em HTML.</bdo></p>
</body>
</html>