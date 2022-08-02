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

   