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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
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
                <h4><?=$f["formacao"]?></h4>
                <img class="foto-professor" src="<?=$f["fotoprofessor"]?>" alt="">
                <h5 class="especificacoes-professor"><img src="imagens-curso/estrela.png" alt="">Classificação</h5>
                <h5 class="especificacoes-professor"><img src="imagens-curso/medalha.png" alt="">Avaliação</h5>
                <h5 class="especificacoes-professor"><img src="imagens-curso/play.png" alt="">Qtd Aulas</h5>
            </div>
            <div class="descricao-professor">
                <h2>LOREM</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis corporis vitae eligendi esse ea, voluptatibus totam dolore dolores? Itaque quasi eum odit quisquam aliquam in suscipit quod error natus ullam.</p>

            </div>
            <?php }else{
                echo "<h3> Funcionário não encontrado </h3>";
            } ?>
        </section>
        <section class="conteudo-direita">
            <div class="propaganda-curso">
                <img class="imagem-curso" src="imagens-curso/imagem-curso.png" alt=""  >
                <div class="precos">
                <h2 class="preco">R$17,00</h2>
                <h4 class="preco-antigo">R$34,00</h2>
                </div>
                <h6 class="desconto">50% de desconto</h6>
                <button class="botoes">Adicionar ao Carrinho</button>
                <button class="botoes">Compre Agora</button>
                <h5>Garantia de devolução do dinheiro em 30 dias</h5>
                <div class="descricao-cuso">
                    <h2>Este curso inclui:</h2>
                    <h5><img src="imagens-curso/imagem10.png" alt="">1,5 horas de vídeo sob demanda</h5>
                    <h5><img src="imagens-curso/imagem11.png" alt="">Dicas práticas para momentos inesperados</h5>
                    <h5><img src="imagens-curso/imagem12.png" alt="">Mais de 10 massagens cardíacas</h5>
                    </div>
                 
                </div>

        </section>

    </main>




    <footer class="rodape">
        <div class="links">
        <a class="links-rodape" href="">CodeWave Businnes</a>
        <a class="links-rodape" href="">Vire professor na CodeWave</a>
        <a class="links-rodape" href="">Quem somos</a>
        <a class="links-rodape"href="">Fale conosco</a>
        </div>
        <div class="logo-rodape">
            <img src="imagens-index/logo-rodape.png" alt="">
            <h4><img src="imagens-index/copyright.png" alt="">2023, WaveAcademy inc.</h4>
        </div>


    </footer>
    
</body>
</html>