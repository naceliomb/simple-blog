<?php

require_once "../config.php";
require_once "../src/Artigo.php";
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();
?>


<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Página administrativa</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="../style.css" />
    </head>

    <body>
        <div id="container">
            <h1>Página Administrativa</h1>
            <div>
                <?php foreach ($artigos as $artigo): ?>
                <div id="artigo-admin">
                    <p><?= $artigo["titulo"] ?></p>
                    <nav>
                        <a class="botao" href="/blog/admin/editar-artigo.php?id=<?= $artigo[
                            "id"
                        ] ?>"
                            >Editar</a
                        >
                        <a class="botao" href="/blog/admin/excluir-artigo.php?id=<?= $artigo[
                            "id"
                        ] ?>"
                            >Excluir</a
                        >
                    </nav>
                </div>
                <?php endforeach; ?>
                
            </div>
            <a class="botao botao-block" href="admin/adicionar-artigo.php"
                >Adicionar Artigo</a
            >
        </div>
    </body>
</html>
