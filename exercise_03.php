<!--
    Crie um programa que calcule a área de um quadrado. Você deve configurar uma variável que representa o comprimento 
    dos lados de um quadrado em metros. Após o cálculo escrever uma frase com o resultado da operação, 
    exemplo: “A área do quadrado de lado 3 metros é 9 metros quadrados”
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 3</title>
</head>
<body>
    <?php
        /* A Função tem que ser declarada acima, pois o PHP deverá ter carregado ela para poder invocar */
        function calcula_area_quadrado($tamanho) {
            return $tamanho * $tamanho;
        } 

        /* Aqui deve-se validar se é para calcular a soma ou ainda não, no caso da primeira vez para apenas obter os valores */
        if(isset($_POST['campo_tamanho']) && isset($_POST['campo_tamanho']) > 0) {
            echo "<p>A área do quadrado de lado " . $_POST['campo_tamanho'] . " metros é " . calcula_area_quadrado($_POST['campo_tamanho']) . " metros quadrados" . "</p>";    
        } else {
            echo "<script>alert('Informe um número positivo')</script>";
        }
    ?>

    <!-- Declaração do formulário propriamente dito -->
    <form action="/exercs/03_exerc_area_quadrado.php" method="post">
        <label for="campo_tamanho">Tamanho Lado:</label>
        <input type="number" id="campo_tamanho" name="campo_tamanho"><br>
        
        <br><input type="submit" value="Calcular">
    </form>
</body>
</html>