<?php include_once(__DIR__.'/includes/header.php') ?>
<h1>Parte 1</h1>
<p>Nessa questão é apresentado um código e é pedido para demonstrar qual será o valor da variável SOMA ao final do processamento.</p>
<hr>
<div class="row">
   <div class="col s6">
      <h4>Código</h4>
      <pre>
$indice = 13;
$soma = 0;
$k = 0;

while($k < $indice){

   $k = $k + 1;
   $soma = $soma + $k;

   echo "<p>Laço:$k => K = $k e SOMA = $soma</p>";
}

echo "<br> Resposta => ".$soma;

</pre>
   </div>
   <div class="col s6">
      <h4>Execução</h4>
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
   </div>
</div>
</div>
<?php include_once(__DIR__.'/includes/footer.php') ?>