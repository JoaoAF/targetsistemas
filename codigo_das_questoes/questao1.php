<?php

   $indice = 13;
   $soma = 0;
   $k = 0;

   while($k < $indice){

      $k = $k + 1;
      $soma = $soma + $k;

      echo "<p>Laço:$k => K = $k e SOMA = $soma</p>";
   }
	
   echo "<br> Resposta => ".$soma;
?>