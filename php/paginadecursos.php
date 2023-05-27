<?php

require "dados.php";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="paginadecursos.css">
    <title>Página de Cursos</title>
</head>
<body>
<header class="cabecalho">
        <div class="cabecalho-logo">
        <img class="imagem-logo" src="imagens-index/imagem-logo.png" alt="">
        <h1 class="titulo-logo">WaveAcademy</h1>
        </div>
        <h4 class="cabecalho-opcoes">Categorias</h4>
        <div class="barra-pesquisa">
            <img class="search-icon" src="imagens-index/search.png" alt="">
            <input class="search-text" type="text" placeholder="Pesquise por qualquer coisa">
        </div>   
        <h4 class ="cabecalho-opcoes">Nossos professores</h4>
        <h4 class ="cabecalho-opcoes">Ensine na Udemy</h4>
        <img src="imagens-index/carrinho.png" alt="">
        <div class="botoes">
            <a href="login.php"><button  class="botao-login">Login</button></a>
            <button class="botao-cadastre-se">Cadastre-se</button>
        </div>
        <button class="botao-web"><img src="imagens-index/web.png" alt=""></button>

    </header>

<div class="container">
		 
         <?php  foreach ($cursos as $i =>$f) {
           
         ?>
         <div class="card">
             <a href="cursos.php?i=<?=$i?>">
                 <img src="<?=$f["fotoprofessor"]?>" alt="<?=$f["nome"]?>">  <!-- pega o indice nome que ta no array que agora é f e coloca o dado -->
             </a>
             <h3><a href="cursos.php?i=<?=$i?>"><?=$f["nome"]?></a></h3>
             
         </div>
       <?php }  ?>
         
     </div>

     <footer class="rodape">
        <div class="links">
        <a class="links-rodape1" href="">CodeWave Businnes</a>
        <a class="links-rodape" href="">Vire professor na CodeWave</a>
        <a class="links-rodape" href="">Quem somos</a>
        <a class="links-rodape4" href="">Fale conosco</a>
        </div>
        <div class="wave-logo">
            <img src="imagens-index/logo-rodape.png" alt="">
            <h1 class="titulo-rodape">WaveAcademy</h1>
        </div>
        <div class="copyright-logo">
            <img src="imagens-index/copyright.png" alt="">
            <h4>2023, WaveAcademy inc.</h4>
        </div>

    </footer>
    </body>
</html>