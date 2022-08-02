<?php include_once(__DIR__.'/includes/header.php') ?>
<h1>Parte 4</h1>
<p>Dado o valor de faturamento mensal de uma distribuidora, detalhado por estado.</p>
<p>SP – R$67.836,43</p>
<p>RJ – R$36.678,66</p>
<p>MG – R$29.229,88</p>
<p>ES – R$27.165,48</p>
<p>Outros – R$19.849,53</p>
</p>Escreva um programa na linguagem que desejar onde calcule o percentual de representação que cada estado teve dentro do valor total mensal da distribuidora.</p>
<hr>
<div class="row">
   <div class="col s6">
      <h4>Código</h4>
      <pre>
$uf_SP = 67836.43;
$uf_RJ = 36678.66;
$uf_MG = 29229.88;
$uf_ES = 27165.48;
$outros = 19849.53;
$total = ($uf_SP + $uf_RJ + $uf_MG + $uf_ES + $outros);

function calculaPercentual($valor, $total)
{
   $percentual = $valor / ($total/100);
   return $percentual;
}

echo "Percentual de SP: ".calculaPercentual($uf_SP, $total);

echo "Percentual de RJ: ".calculaPercentual($uf_RJ, $total);

echo "Percentual de MG: ".calculaPercentual($uf_MG, $total);

echo "Percentual de ES: ".calculaPercentual($uf_ES, $total);

echo "Percentual de Outros: ".calculaPercentual($outros, $total);
</pre>
   </div>
   <div class="col s6">
      <h4>Execução</h4>
      <?php
         $uf_SP = 67836.43;
         $uf_RJ = 36678.66;
         $uf_MG = 29229.88;
         $uf_ES = 27165.48;
         $outros = 19849.53;
         $total = ($uf_SP + $uf_RJ + $uf_MG + $uf_ES + $outros);
         
         function calculaPercentual($valor, $total)
         {
            $percentual = $valor / ($total/100);
            return $percentual;
         }
         
         echo "<p><strong>Percentual de SP:</strong> ".calculaPercentual($uf_SP, $total)."</p>";
         
         echo "<p><strong>Percentual de RJ:</strong> ".calculaPercentual($uf_RJ, $total)."</p>";
         
         echo "<p><strong>Percentual de MG:</strong> ".calculaPercentual($uf_MG, $total)."</p>";
         
         echo "<p><strong>Percentual de ES:</strong> ".calculaPercentual($uf_ES, $total)."</p>";
         
         echo "<p><strong>Percentual de Outros:</strong> ".calculaPercentual($outros, $total)."</p>";
         ?>
   </div>
</div>
</div>
<?php include_once(__DIR__.'/includes/footer.php') ?>