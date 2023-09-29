<!--
    Crie um programa que calcule a área de um triângulo retângulo, cuja fórmula segue abaixo. Crie as variáveis apropriadas para o cálculo em PHP 
    e por fim exiba uma frase com o valor da operação.

    Fórmula -> Resultado = (Base * Altura) / 2
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 5</title>
</head>
<body>
    <?php
        /* Mais informações sobre o PHP DOC: https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference */                
        /**
         * Calcula área de um triângulo retângulo
         *
         * @param  numeric $base
         * @param  numeric $altura
         * @return int 
         */
        function calcula_area_triangulo_retangulo($base, $altura) {
            /* Mais informações sobre tratamento de exceção no PHP: https://www.php.net/manual/en/language.exceptions.php */
            try { 
                return ($base * $altura) / 2;
            } catch (Exception $e) {
                return "Houve erro no cálculo: " . $e->getMessage();    
            }
        } 

        /* @ Aqui deve-se validar se pode chamar a função ou não, no caso de ser a primeira execução do formulário e os lados não terem sido informados */
        if(isset($_POST['campo_base']) && ($_POST['campo_base'] > 0) && isset($_POST['campo_altura']) && ($_POST['campo_altura'] > 0)) {
            echo "<p>A área do triângulo/retângulo de base: " . $_POST['campo_base'] . " e altura: " . $_POST['campo_altura'] . " é: " . calcula_area_triangulo_retangulo($_POST['campo_base'], $_POST['campo_altura']) . "</p>"; 
        } else {
            echo "<script>alert('Informe apenas valores positivos')</script>";
        }
    ?>

    <!-- Declaração do formulário propriamente dito -->
    <form action="/exercs/05_exerc_area_triangulo_ret.php" method="post">
        <label for="campo_base">Cumprimento Base:</label>
        <input type="number" id="campo_base" name="campo_base"><br>
        
        <label for="campo_altura">Cumprimento Altura:</label>
        <input type="number" id="campo_altura" name="campo_altura"><br>

        <br><input type="submit" value="Calcular">
    </form>
</body>
</html>