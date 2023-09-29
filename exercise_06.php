<!--
    Joãozinho recebeu R$ 50,00 reais de seu pai para ir à feira comprar frutas e verduras.
    Ele comprou maçã, melancia, laranja, repolho, cenoura, batatinha. 
    
    Crie um programa que calcule o valor gasto com cada produto comprado, sendo o resultado do valor individual do produto em Kg multiplicado pela 
    quantidade em Kg comprada por Joãozinho. 
    Ao final escrever uma frase com o valor da compra, e uma previsão se o dinheiro será o suficiente para pagar a conta, caso falte dinheiro escrever 
    uma frase em vermelho com o valor que ficou acima do disponível por Joãozinho, e não, escrever uma fase em azul e o valor que Joãozinho ainda 
    poderia gastar.
    
    Caso o valor da compra seja exatamente igual ao R$ 50,00 disponível, escreva uma frase em verde afirmando que o saldo para compras foi esgotado.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Exercício 6</title>
</head>
<body>
    <?php
        /* Mais informações sobre constantes no PHP: https://www.w3schools.com/php/php_constants.asp */
        define('valor_unitario_produtos', array(9.55, 3.45, 8.64, 2.34, 5.67, 4.99));
        define('valor_joaozinho', 50);

        /* Mais informações sobre o PHP DOC: https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference */                
        /**
         * Função que calcula e escreve o resultado conforme se pede no exercício
         *
         * @param  mixed $aqtd_comprada
         * @return string
         */
        function calcula_escreve_valor_compra($aqtd_comprada) {
            /* Mais informações sobre tratamento de exceção no PHP: https://www.php.net/manual/en/language.exceptions.php */
            try { 
                /* Percorrer todos os itens do array de quantidade comprada (entrada da função) e multiplicar pelo valor unitário,
                   somando tudo junto para retornar o valor da compra */
                $valor = 0;
                for ($item=0; $item < 6; $item++) { 
                    $valor = $valor + ($aqtd_comprada[$item] * valor_unitario_produtos[$item]);
                }
                /* Calcular o saldo que ficou após as compras */
                $troco = valor_joaozinho - $valor;

                /* Demonstrar o resultado conforme pede o exercício */
                if($troco > 0) {
                    return '<p style="color:blue">O valor da compra foi: '.$valor.', sendo suficiente para pagar. Joãozinho ainda tem '.$troco.' para gastar.</p>';
                }
                if($troco < 0) {
                    return '<p style="color:red">O valor da compra foi: '.$valor.', sendo insuficiente para pagar, faltou'.$troco.'.</p>';
                }
                if($troco == 0) {
                    return '<p style="color:green">O valor da compra foi: '.$valor.', sendo exatamente igual ao que Joãozinho tinha para pagar.</p>';
                }
            } catch (Exception $e) {
                return "Houve erro no cálculo: " . $e->getMessage();    
            }
        } 

        /* @ Aqui deve-se validar se pode chamar a função ou não, no caso de ser a primeira execução do formulário e os lados não terem sido informados */
        if(isset($_POST['campo_qtd_maca']) && 
           isset($_POST['campo_qtd_melancia']) && 
           isset($_POST['campo_qtd_laranja']) && 
           isset($_POST['campo_qtd_repolho']) &&
           isset($_POST['campo_qtd_cenoura']) &&
           isset($_POST['campo_qtd_batatinha'])) {
            echo "<p>" . calcula_escreve_valor_compra(array($_POST['campo_qtd_maca'], 
                                                            $_POST['campo_qtd_melancia'],
                                                            $_POST['campo_qtd_laranja'],
                                                            $_POST['campo_qtd_repolho'],
                                                            $_POST['campo_qtd_cenoura'],
                                                            $_POST['campo_qtd_batatinha'])) . "</p>"; 
        } else {
            echo "<script>alert('Informe as quantidades nos campos conforme solicitado.')</script>";
        }
    ?>

    <!-- Declaração do formulário propriamente dito -->
    <form action="/exercs/06_exerc_calculo_gasto.php" method="post">
        <label for="campo_qtd_maca">Quantidade Maçã:</label>
        <!-- Informações adicionais sobre o atributo STEP podem ser obtidas no link: https://html.spec.whatwg.org/multipage/forms.html#the-step-attribute -->
        <input type="number" id="campo_qtd_maca" name="campo_qtd_maca" step=".001"><br>
        
        <label for="campo_qtd_melancia">Quantidade Melancia:</label>
        <input type="number" id="campo_qtd_melancia" name="campo_qtd_melancia" step=".001"><br>

        <label for="campo_qtd_laranja">Quantidade Laranja:</label>
        <input type="number" id="campo_qtd_laranja" name="campo_qtd_laranja" step=".001"><br>

        <label for="campo_qtd_repolho">Quantidade Repolho:</label>
        <input type="number" id="campo_qtd_repolho" name="campo_qtd_repolho" step=".001"><br>

        <label for="campo_qtd_cenoura">Quantidade Cenoura:</label>
        <input type="number" id="campo_qtd_cenoura" name="campo_qtd_cenoura" step=".001"><br>

        <label for="campo_qtd_batatinha">Quantidade Batatinha:</label>
        <input type="number" id="campo_qtd_batatinha" name="campo_qtd_batatinha" step=".001"><br>

        <br><input type="submit" value="Calcular">
    </form>
</body>
</html>