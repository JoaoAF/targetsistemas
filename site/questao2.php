<?php include_once(__DIR__.'/includes/header.php') ?>
<h1>Parte 2</h1>
<p>Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.</p>
<p><b>IMPORTANTE:</b></p>
<p>Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código.</p>
<hr>
<div class="row">
   <div class="col s6">
      <h4>Código</h4>
      <pre>
//$numero = $_GET['number'];
$numero = 8;

$ultimo = 1;
$penultimo = 0; 
$fibonacci = [0, 1];

for($count = -2; $count <= $numero-2; $count++){
   $atual = $ultimo + $penultimo;
   array_push($fibonacci, $atual);

   $penultimo = $ultimo;
   $ultimo = $atual;
}

foreach($fibonacci as $f):
   echo "$f ";
endforeach;

if (in_array($numero, $fibonacci)) {
   echo "Tem na sequencia fibonacci!";
}else{
   echo "Não tem na sequencia fibonacci!";
}
</pre>
   </div>
   <div class="col s6">
      <h4>Execução</h4>
      <?php
         //$numero = $_GET['number'];
         $numero = 8;
         
         $ultimo = 1;
         $penultimo = 0; 
         $fibonacci = [0, 1];
         
         //A variavel $count inicia com -2 para que o '1' e o '2' sejam verificaveis na sequencia
         for($count = -2; $count <= $numero-2; $count++){
            $atual = $ultimo + $penultimo;
            array_push($fibonacci, $atual);
         
            $penultimo = $ultimo;
            $ultimo = $atual;
         }
         
         foreach($fibonacci as $f):
            echo "$f ";
         endforeach;
         
         if (in_array($numero, $fibonacci)) {
            echo "<p>Tem na sequencia fibonacci!</p>";
         }else{
            echo "<p>Não tem na sequencia fibonacci!</p>";
         }
         ?>
   </div>
</div>
</div>
<?php include_once(__DIR__.'/includes/footer.php') ?>