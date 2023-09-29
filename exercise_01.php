<!--
    Criar um programa que execute a soma de três valores.
    Se a primeira variável for maior que 10, escrever o resultado da operação em azul
    Se a segunda variável for menor que a terceira, escrever o resultado em verde
    Se a terceira variável for menor que a primeira e a segunda variável escrever o resultado em vermelho
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 1</title>
</head>
<body>
    <?php
        /* A Função tem que ser declarada acima, pois o PHP deverá ter carregado ela para poder invocar */
        function calcula_soma($v1, $v2, $v3) {
            $soma = intval($v1)+intval($v2)+intval($v3);
            if($v1 > 10) {
                return '<span style="color:blue">' . $soma . '</span>';
            } 
            if($v2 < $v3) {
                return '<span style="color:green">' . $soma . '</span>';
            }
            if($v3 < $v1) {
                return '<span style="color:red">' . $soma . '</span>';
            }
        } 

        /* Aqui deve-se validar se é para calcular a soma ou ainda não, no caso da primeira vez para apenas obter os valores */
        if(isset($_POST['campo_v1']) && isset($_POST['campo_v2']) && isset($_POST['campo_v3'])) {
            echo "<p>A soma dos valores foi: " . calcula_soma($_POST['campo_v1'], $_POST['campo_v2'], $_POST['campo_v3']) . "</p>";    
        } else {
            echo "<script>alert('Informe ao menos um valor')</script>";
        }
    ?>

    <!-- Declaração do formulário propriamente dito -->
    <form action="/exercs/01_exerc_valor_maior.php" method="post" target="_self">
        <label for="campo_v1">Valor 1:</label>
        <input type="number" id="campo_v1" name="campo_v1"><br>
        
        <label for="campo_v2">Valor 2:</label>
        <input type="number" id="campo_v2" name="campo_v2"><br>
        
        <label for="campo_v3">Valor 3:</label>
        <input type="number" id="campo_v3" name="campo_v3"><br>

        <br><input type="submit" value="Enviar">
    </form>
</body>
</html>