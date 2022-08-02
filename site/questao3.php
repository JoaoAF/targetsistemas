<?php include_once(__DIR__.'/includes/header.php') ?>
<?php include_once( __DIR__.'/questao3/POO/Source/autoload.php') ?>
<?php include_once( __DIR__.'/questao3/POO/Source/App/Invoicing.php') ?>
<h1>Parte 3</h1>
<p> Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:</p>
<br>
</p>a) O menor valor de faturamento ocorrido em um dia do mês.</p>
<p>b) O maior valor de faturamento ocorrido em um dia do mês.</p>
<p>c) Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.</p>
<hr>
<div class="row">
   <div class="col 12">
      <h4>Execução</h4>
      <?php
         $path = __DIR__ . "/questao3/POO/dados1.json";
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
         ?>
   </div>
   <div class="col s12">
      <h4>Código</h4>
      <pre>
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

echo "O menor valor de faturamento ocorrido em um dia do mês =>  Dia: " . $menorFat[0] . " - Valor: " . $menorFat[1];

echo "O maior valor de faturamento ocorrido em um dia do mês => Dia:" . $maiorFat[0] . " - Valor: " . $maiorFat[1];

echo "Número de dias no mês em que o valor de faturamento diário foi superior à média mensal:" . count($diasAcimaMedia);

echo "Dias sem faturamento: " . count($diasSemFat);

foreach ($diasSemFat as $key => $value) {
   echo "($key+1). " - Dia: $value[0] => Valor: $value[1]";
}

echo "Dias no mês em que o valor de faturamento diário foi superior à média mensal";

foreach ($diasAcimaMedia as $key => $value) {
   echo ($key+1). " - Dia: $value[0] => Valor: $value[1] ";
}

echo "Número de dias: " . count($data);

echo "Faturamento do mês: " . $fatMes;

echo "Média do faturamento mensal: " . $mediaFat;
</pre>
   </div>
</div>
</div>
<?php include_once(__DIR__.'/includes/footer.php') ?>