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