<!--
    Crie um programa que calcule a área de um retângulo. Você deve configurar duas variáveis que representam os lados a e b 
    desse quadrado em metros. Após o cálculo escrever uma frase com o resultado da operação, exemplo: “A área do retângulo de lados 3 e 2 
    metros é 6 metros quadrados.” Caso a área for maior que 10 escreva a frase usando a tag h1, se não, escrever com h3.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 4</title>
</head>
<body>
    <?php
        /* Mais informações sobre o PHP DOC: https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference */        
        /**
         * Calcula a área de um retângulo
         *
         * @param  mixed $ladoa
         * @param  mixed $ladob
         * @return void
         */
        function calcula_escreve_area_retangulo($ladoa, $ladob) {
            /* Passo 1 - Calcular */
            $area = $ladoa * $ladob;

            /* Passo 2 - Escrever o resultado conforme pede o exercício */
            if($area > 10) {
                return "<h1>A área do retângulo de lados " . $_POST['campo_ladoa'] . " e " . $_POST['campo_ladob'] . " metros é " . $area . " metros quadrados.</h1>";
            } else {
                return "<h3>A área do retângulo de lados " . $_POST['campo_ladoa'] . " e " . $_POST['campo_ladob'] . " metros é " . $area . " metros quadrados.</h3>";
            };
        } 

        /* @ Aqui deve-se validar se pode chamar a função ou não, no caso de ser a primeira execução do formulário e o tamanho ainda não ter sido obtido */
        if(isset($_POST['campo_ladoa']) && ($_POST['campo_ladoa'] > 0) && isset($_POST['campo_ladob']) && ($_POST['campo_ladob'] > 0)) {
            echo calcula_escreve_area_retangulo($_POST['campo_ladoa'], $_POST['campo_ladob']); 
        } else {
            echo "<script>alert('Informe um valor positivo')</script>";
        }
    ?>

    <!-- Declaração do formulário propriamente dito -->
    <form action="/exercs/04_exerc_area_retangulo.php" method="post">
        <label for="campo_ladoa">Tamanho Lado A:</label>
        <input type="number" id="campo_ladoa" name="campo_ladoa"><br>
        
        <label for="campo_ladob">Tamanho Lado B:</label>
        <input type="number" id="campo_ladob" name="campo_ladob"><br>

        <br><input type="submit" value="Calcular">
    </form>
</body>
</html>