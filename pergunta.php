<?php include_once "mensagens.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css">
    <title>Pergunta</title>

</head>
<body>
    <main>
    <?php
        include "conexao.php";
        $sqlBusca = "select * from t_quiz";
        $todosOsQuiz = mysqli_query($conexao, $sqlBusca);

        $total = "SELECT COUNT(*) as total FROM t_quiz";
        $resultado = mysqli_query($conexao, $total);
        $row = mysqli_fetch_assoc($resultado);
        $total = $row['total'];

        
        if (mysqli_num_rows($todosOsQuiz) > 0) {
            // Inicializa a posição do registro
            $posicao = 1;
            $umQuiz = mysqli_fetch_assoc($todosOsQuiz);
        }
        if($msg == "proximo"){
            $posicao = $posicao + 1;
            mysqli_data_seek($todosOsQuiz, $posicao);
            $todosOsQuiz = mysqli_fetch_assoc($todosOsQuiz);

            
           /* if ($todosOsQuiz->num_rows > 1) {
                // Pula o primeiro registro, que já foi retornado
                mysqli_data_seek($todosOsQuiz, $posicao);
              
                // Obtém o próximo registro
                $todosOsQuiz = mysqli_fetch_assoc($todosOsQuiz);
              }*/
          $umQuiz = $todosOsQuiz;
            }
          

            ?>
        <header class="titulo">
            <h1 class="quisp">Quis do Poder</h1>
            <h2 class="numero"> <?php echo $posicao; ?>/<?php echo $total; ?></h2>
        </header>
        <form action="respQuiz.php" method="POST">
        <div class="corpo">
            <br>
            <p class="pergunta"><?php echo $umQuiz['pergunta']; ?></p>
            <br>
            <img src="<?php echo $umQuiz['imagem']; ?>" class="imagem-capa">
            <br>
            <div class="alternativas">
                <button type="submit" name="resposta">
                <?php echo $umQuiz['alternativa1']; ?>

                </button>
                <button type="submit" name="resposta">
                <?php echo $umQuiz['alternativa2']; ?>
                
                </button>
                <button type="submit" name="resposta">
                <?php echo $umQuiz['alternativa3']; ?>
                </button>
                <button type="submit" name="resposta">
                <?php echo $umQuiz['alternativa4']; ?>
                </button>
            </div>
        </div>
        
    </form>
        
        <div class="rodapePrincipal">
            
        </div>

    </main>
    
</body>
</html>