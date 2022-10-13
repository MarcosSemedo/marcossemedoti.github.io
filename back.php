<?php
    $dia = addslashes($_POST['campo1']);
    $mes = addslashes($_POST['mes']);
    echo "<br/>Dia: " . $dia . ", ";
	echo "do mês: " . $_POST["mes"];

    // recebe o xml e o transforma em objeto
    $xml = simplexml_load_file('signo.xml');



    switch ($mes) {
        case 01:
            if ($dia >= 21){
                echo '<br>Seu signo é:  ' . $xml->signo11->signoNome;
                echo '<br>Descrição:  ' . $xml->signo11->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo12->signoNome;
                echo '<br>Descrição:  ' . $xml->signo12->descricao;
            }
            break;
        case 02:
            if ($dia >= 19){
                echo '<br>Seu signo é:  ' . $xml->signo12->signoNome;
                echo '<br>Descrição:  ' . $xml->signo12->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo11->signoNome;
                echo '<br>Descrição:  ' . $xml->signo11->descricao;
            }
            break;
        case 03:
            if ($dia >= 21){
                echo '<br>Seu signo é:  ' . $xml->signo01->signoNome;
                echo '<br>Descrição:  ' . $xml->signo01->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo12->signoNome;
                echo '<br>Descrição:  ' . $xml->signo12->descricao;
            }
            break;
        case 04:
            if ($dia >= 21){
                echo '<br>Seu signo é:  ' . $xml->signo02->signoNome;
                echo '<br>Descrição:  ' . $xml->signo02->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo01->signoNome;
                echo '<br>Descrição:  ' . $xml->signo01->descricao;
            }
            break;
        case 05:
            if ($dia >= 21){
                echo '<br>Seu signo é:  ' . $xml->signo03->signoNome;
                echo '<br>Descrição:  ' . $xml->signo03->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo02->signoNome;
                echo '<br>Descrição:  ' . $xml->signo02->descricao;
            }
            break;
        case 06:
            if ($dia >= 21){
                echo '<br>Seu signo é:  ' . $xml->signo04->signoNome;
                echo '<br>Descrição:  ' . $xml->signo04->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo03->signoNome;
                echo '<br>Descrição:  ' . $xml->signo03->descricao;
            }
            break;
        case 07:
            if ($dia >= 23){
                echo '<br>Seu signo é:  ' . $xml->signo05->signoNome;
                echo '<br>Descrição:  ' . $xml->signo05->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo04->signoNome;
                echo '<br>Descrição:  ' . $xml->signo04->descricao;
            }
            break;
        case 8:
            if ($dia >= 23){
                echo '<br>Seu signo é:  ' . $xml->signo06->signoNome;
                echo '<br>Descrição:  ' . $xml->signo06->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo05->signoNome;
                echo '<br>Descrição:  ' . $xml->signo05->descricao;
            }
            break;
        case 9:
            if ($dia >= 23){
                echo '<br>Seu signo é:  ' . $xml->signo07->signoNome;
                echo '<br>Descrição:  ' . $xml->signo07->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo06->signoNome;
                echo '<br>Descrição:  ' . $xml->signo06->descricao;
            }
            break;
        case 10:
            if ($dia >= 23){
                echo '<br>Seu signo é:  ' . $xml->signo08->signoNome;
                echo '<br>Descrição:  ' . $xml->signo08->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo07->signoNome;
                echo '<br>Descrição:  ' . $xml->signo07->descricao;
            }
            break;
        case 11:
            if ($dia >= 22){
                echo '<br>Seu signo é:  ' . $xml->signo09->signoNome;
                echo '<br>Descrição:  ' . $xml->signo09->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo08->signoNome;
                echo '<br>Descrição:  ' . $xml->signo08->descricao;
            }
            break;
        case 12:
            if ($dia >= 22){
                echo '<br>Seu signo é:  ' . $xml->signo10->signoNome;
                echo '<br>Descrição:  ' . $xml->signo10->descricao;
            }
            else{
                echo '<br>Seu signo é:  ' . $xml->signo09->signoNome;
                echo '<br>Descrição:  ' . $xml->signo09->descricao;
            }
            break;
        default:
            echo 'falha ao procurar o signo.';
    }
?>