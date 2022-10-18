<?php

$xml = simplexml_load_file('signos.xml');

$data = $_POST['NascimentoData'];

$data = explode('-', $data);

$dataWithoutAno = $data[1]."/".$data[2];

foreach($xml->signo as $signo){
      $outsetdate = explode('/', $signo->dataInicio);
      $outsetdate = $outsetdate[1]."/".$outsetdate[0];

      $endDate = explode('/', $signo->dataFim);
      $endDate = $endDate[1]."/".$endDate[0];

      if(strtotime($dataWithoutAno) >= strtotime($outsetdate) && strtotime($dataWithoutAno) <= strtotime($endDate)){
            echo "Seu signo é: ".$signo->signoNome;
            echo "<br/><br/>Um breve resumo sobre você: ".$signo->descricao;
      }  
}
?>