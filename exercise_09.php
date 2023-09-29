<!--
    Juquinha seguindo o mesmo caminho que Paulinho foi comprar uma moto nova, mas pena que ele não sabia da mesma chance que Paulinho. 
    A empresa que Juquinha foi comprar a moto utiliza juros compostos para calcular o valor das parcelas. 
    As opções de compras estudadas por ele são as mesmas de Paulinho, ou seja 24, 36, 48 e 60 vezes o juro nesta empresa inicia em 
    2% para 24 vezes e aumenta 0,3% para as opções de parcelamento seguintes. 
    
    Utilizando então a fórmula de juros composto que segue abaixo, calcule o valor da parcela para cada uma das opções a ser estudada por Juquinha.
        M = C * (1 + i)t

        M = Montante
        C = Capital Inicial
        i = Taxa de juros
        t = Tempo 
-->
<?php
    define('valor_moto', 8654);
    define('taxa_juro', 2);
    define('taxa_variacao', 0.3);
    define('planos', array(24, 36, 48, 60));

    /**
     * Realiza o cálculo dos juros que serão pagos pela modalidade financiamento
     *
     * @return string
     */
    function calcula_escreve_valor_parcelas() {
        /* Mais informações sobre tratamento de exceção no PHP: https://www.php.net/manual/en/language.exceptions.php */
        try { 
            /* Iterar todos os planos e calcular o valor das parcelas, conforme a taxa nominal + a taxa proporcional do plano */
            $taxa = taxa_juro; //Inicialmente em 2.0%
            $result = '';
            for ($plano=0; $plano < 4; $plano++) { 
                $montante = valor_moto * pow(1 + ($taxa / 100), planos[$plano]);
                $valor_parcela = $montante / planos[$plano];

                $result .= "Para o plano de ".planos[$plano]." meses será de: R$ ".number_format($valor_parcela, 2, ",", ".").".<br>";

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