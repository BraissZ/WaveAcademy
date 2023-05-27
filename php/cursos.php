<?php
require "dados.php";

    if (!isset($_GET["i"])) {
       header("location: index.php");
       die;
    }
$indice = $_GET ["i"];
if (isset($cursos[$indice])) {
   // a variavel f só será criada caso o indice passado exista.
    $f = $cursos[$indice];
}else{

}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cursos.css">
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
    <main class="conteudo">
    <section class="conteudo-esquerda">
        <?php if (isset ($f)) { ?>

            <div class="titulo-curso">
            <h1 class="titulo-conteudo-esquerda">

               <?=$f["nome"]?>
            </h1>
            <h4 class="subtitulo-conteudo-esquerda">
           <?= $f ["descricao"] ?>
            </h4>
            </div>
            <div class="informacoes-professor">
                <h2><?=$f["prof"]?></h2>
                <img class="foto-professor" src="<?=$f["foto"]?>" alt="">
            </div>
            <div class="descricao-professor">
                <h2><?=$f["nome"]?></h2>
                <p><?=$f["descricao"]?></p>

            </div>
            <?php }else{
                echo "<h3> Funcionário não encontrado </h3>";
            } ?>
        </section>

    </main>




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