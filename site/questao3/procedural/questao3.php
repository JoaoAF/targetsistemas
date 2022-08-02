<?php
	
   $path = __DIR__ . '/dados1.json';
   $json = file_get_contents($path);
   $dados = json_decode($json, true);

   $fm = 0;
   // Faturamento mensal

   foreach($dados as $d){
      if ($d['valor'] != 0) {
         $fm += $d['valor'];
      }
   }

   $mediaFat = ($fm / count($dados));
   // Média mensal de faturamento

   $zeroFat = [];
   //Dias em que o faturamento foi zero

   $menorFat = [];
   //O menor valor de faturamento ocorrido em um dia do mês
   
   $maiorFat = [];
   //O maior valor de faturamento ocorrido em um dia do mês

   $grandeDia = [];
   //Dias no mês em que o valor de faturamento diário foi superior à média mensal.

   foreach($dados as $d){

   	  if(empty($menorFat)){
		$menorFat = [$d['dia'], $d['valor']];	   
   	  }

   	  if(empty($maiorFat)){
		$maiorFat = [$d['dia'], $d['valor']];	   
   	  }

   	  if($d['valor'] > $mediaFat){
   	  	array_push($grandeDia, [$d['dia'], $d['valor']]);	   
   	  }

   	  if($d['valor'] > $maiorFat[1]){
		$maiorFat = [$d['dia'], $d['valor']];	   
   	  }

   	  if($d['valor'] < $menorFat[1] and $d['valor'] != 0){
		$menorFat = [$d['dia'], $d['valor']];	   
   	  }

   	  if($d['valor'] == 0){
   	  	array_push($zeroFat, [$d['dia'], $d['valor']]);	   
   	  }

   }

   echo "<h1>Questão 3 - Procedural</h1><br>";

   echo "<p><strong>O menor valor de faturamento ocorrido em um dia do mês => </strong> Dia: " . $menorFat[0] . " - Valor: " . $menorFat[1] . "</p>";

   echo "<p><strong>O maior valor de faturamento ocorrido em um dia do mês => </strong> Dia:" . $maiorFat[0] . " - Valor: " . $maiorFat[1] . "</p>";

   echo "<p><strong>Número de dias no mês em que o valor de faturamento diário foi superior à média mensal:</strong> " . count($grandeDia) . "</p>";

   echo "<hr>";

   echo "<p><strong>Dias sem faturamento:</strong> " . count($zeroFat)."</p>";

   foreach ($zeroFat as $key => $value) {
      echo "</p>" .($key+1). " - Dia: $value[0] => Valor: $value[1] </p>";
   }

   echo "<hr>";
   echo "<p><strong>Dias no mês em que o valor de faturamento diário foi superior à média mensal</strong></p>";

   foreach ($grandeDia as $key => $value) {
      echo "</p>" .($key+1). " - Dia: $value[0] => Valor: $value[1] </p>";
   }
	
   echo "<hr>";
   
   echo "<p><strong>Número de dias:</strong> " . count($dados) . "</p>";
   
   echo "<p><strong>Faturamento do mês:</strong> " . $fm . "</p>";
   
   echo "<p><strong>Média do faturamento mensal:</strong> " . $mediaFat . "</p>";
?>