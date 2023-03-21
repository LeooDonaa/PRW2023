<?php
    // Seta fusp horário de São Paulo
    date_default_timezone_get('America/Sao_Paulo');

    echo "Data atual: ". data('d/m/y')."<br>";
    echo "Data atual: ". data('d/m/y')."<br>";
    echo "Data e hora atual: ". data('d/m/y H:i:s')."<br>";

    $data_hoje = date('d/m/Y');
    echo $data_hoje;
?>