<!--
    Crie um programa para testar se um número é divisível por 2.
    Caso for verdade escrever a frase “Valor divisível por 2”
    Caso for falso escrever a frase “O valor não é divisível por 2”
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 2</title>
</head>
<body>
    <?php
        /* A Função tem que ser declarada acima, pois o PHP deverá ter carregado ela para poder invocar */
        function verifica_divisivel($numero) {

            /* Sobre a função FMOD: https://www.w3schools.com/php/func_math_fmod.asp 
               Também é possível com o operador % (módulo): https://www.w3schools.com/php/php_operators.asp#:~:text=Conditional%20assignment%20operators-,PHP%20Arithmetic%20Operators,-The%20PHP%20arithmetic 
            */
            if(fmod($numero, 2) == 0) {
                return 'Valor divisível por 2';
            } else {
                return 'Valor não é divisível por 2';
            }

        } 

        /* Aqui deve-se validar se é para calcular a soma ou ainda não, no caso da primeira vez para apenas obter os valores */
        if(isset($_POST['campo_numero']) && isset($_POST['campo_numero']) > 0) {
            echo "<p>" . verifica_divisivel($_POST['campo_numero']) . "</p>";    
        } else {
            echo "<script>alert('Informe um número positivo')</script>";
        }
    ?>

    <!-- Declaração do formulário propriamente dito -->
    <form action="/exercs/02_exerc_div_2.php" method="post">
        <label for="campo_numero">Número:</label>
        <input type="number" id="campo_numero" name="campo_numero"><br>
        
        <br><input type="submit" value="Verificar">
    </form>
</body>
</html>