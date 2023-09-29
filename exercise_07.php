<!--
    Mariazinha foi comprar um carro novo esse carro custa R$ 22.500,00 a vista, mas como ela não tem esse dinheiro para comprar a vista, 
    resolveu fazer um financiamento, que ficou em 60 parcelas de R$ 489,65. 
    
    Escreva um programa que calcule o valor gasto só dos juros que serão pagos por Mariazinha em comparação ao valor a vista do carro.
-->
<?php
    /* Mais informações sobre constantes no PHP: https://www.w3schools.com/php/php_constants.asp */
    define('valor_carro', 22500);
    define('valor_parcela', 489.65);
    define('qtd_parcelas', 60);

    /* Mais informações sobre o PHP DOC: https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference */                
    /**
     * Realiza o cálculo dos juros que serão pagos pela modalidade financiamento
     *
     * @return mixed
     */
    function calcula_valor_juros() {
        /* Mais informações sobre tratamento de exceção no PHP: https://www.php.net/manual/en/language.exceptions.php */
        try { 
            return (valor_parcela * qtd_parcelas) - valor_carro;
        } catch (Exception $e) {
            return "Houve erro no cálculo: " . $e->getMessage();    
        }
    } 

    /* Mais informações sobre a função NUMBER_FORMAT podem ser obtidas aqui: https://www.php.net/manual/en/function.number-format.php */
    echo "O valor que Mariazinha irá gastar só com juros é de: R$ " . number_format(calcula_valor_juros(), 2, ",", ".");
?>