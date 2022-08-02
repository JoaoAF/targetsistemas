<?php

   include_once('Source/autoload.php');
   
   $path = __DIR__ . "/dados1.json";
   $json = file_get_contents($path);
   $data = json_decode($json, true);

   $invoicing = new \Source\App\Invoicing($data);
   
   $menorFat = $invoicing->lowerBilling($data);
   $maiorFat = $invoicing->higherBilling($data);
   $diasAcimaMedia = $invoicing->aboveAverageBillingDays($data);
   $diasSemFat = $invoicing->daysWithoutBilling($data);
   
   $numDias = $invoicing->getNumberOfDays();
   $fatMes = $invoicing->getMonthlyBilling();
   $mediaFat = $invoicing->getBillingAverage();

   echo "<h1>Questão 3 - Orientado a objetos</h1><br>";

   echo "<p><strong>O menor valor de faturamento ocorrido em um dia do mês => </strong> Dia: " . $menorFat[0] . " - Valor: " . $menorFat[1] . "</p>";

   echo "<p><strong>O maior valor de faturamento ocorrido em um dia do mês => </strong> Dia:" . $maiorFat[0] . " - Valor: " . $maiorFat[1] . "</p>";

   echo "<p><strong>Número de dias no mês em que o valor de faturamento diário foi superior à média mensal:</strong> " . count($diasAcimaMedia) . "</p>";

   echo "<hr>";

   echo "<p><strong>Dias sem faturamento:</strong> " . count($diasSemFat)."</p>";

   foreach ($diasSemFat as $key => $value) {
      echo "</p>" .($key+1). " - Dia: $value[0] => Valor: $value[1] </p>";
   }

   echo "<hr>";
   echo "<p><strong>Dias no mês em que o valor de faturamento diário foi superior à média mensal</strong></p>";

   foreach ($diasAcimaMedia as $key => $value) {
      echo "</p>" .($key+1). " - Dia: $value[0] => Valor: $value[1] </p>";
   }
   
   echo "<hr>";
   
   echo "<p><strong>Número de dias:</strong> " . count($data) . "</p>";
   
   echo "<p><strong>Faturamento do mês:</strong> " . $fatMes . "</p>";
   
   echo "<p><strong>Média do faturamento mensal:</strong> " . $mediaFat . "</p>";