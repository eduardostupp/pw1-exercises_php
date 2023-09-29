<!--
    Paulinho foi comprar uma moto nova. A empresa vende motos muito baratas pois utiliza Juros Simples para o cálculo das parcelas.
    Sabendo então que o valor a vista do moto é R$ 8.654,00.
    
    Crie um programa que calcule o valor das parcelas para as opções abaixo, sabendo que a taxa de juros aumenta 0,5% em cada nível e inicia em 1,5% para 24 vezes:
        24 vezes
        36 vezes
        48 vezes
        60 vezes    
-->
<?php
    /* Mais informações sobre constantes no PHP: https://www.w3schools.com/php/php_constants.asp */
    define('valor_moto', 8654);
    define('taxa_juro', 1.5);
    define('taxa_variacao', 0.5);
    define('planos', array(24, 36, 48, 60));

    /* Mais informações sobre o PHP DOC: https://docs.phpdoc.org/3.0/guide/references/phpdoc/index.html#phpdoc-reference */                
    /**
     * Realiza o cálculo dos juros que serão pagos pela modalidade financiamento
     *
     * @return numeric
     */
    function calcula_escreve_valor_parcelas() {
        /* Mais informações sobre tratamento de exceção no PHP: https://www.php.net/manual/en/language.exceptions.php */
        try { 
            /* Iterar todos os planos e calcular o valor das parcelas, conforme a taxa nominal + a taxa proporcional do plano */
            $taxa = taxa_juro; //Inicialmente em 1.5%
            $result = '';
            for ($plano=0; $plano < 4; $plano++) { 
                $valor_parcela = (valor_moto / planos[$plano]);
                $juros = $valor_parcela * ($taxa / 100);

                $result .= "Para o plano de ".planos[$plano]." meses será de: R$ ".number_format($valor_parcela+$juros, 2, ",", ".").".<br>";

                /* Acrescenter a variação para o próximo plano */
                $taxa = $taxa + taxa_variacao;
            }
            return $result;
        } catch (Exception $e) {
            return "Houve erro no cálculo: " . $e->getMessage();    
        }
    } 

    /* Mais informações sobre a função NUMBER_FORMAT podem ser obtidas aqui: https://www.php.net/manual/en/function.number-format.php */
    echo "Os seguintes valores de parcelas poderão ser pagos nos planos:<br><br>".calcula_escreve_valor_parcelas()
?>