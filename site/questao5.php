<?php include_once(__DIR__.'/includes/header.php') ?>
<h1>Parte 5</h1>
<p>Escreva um programa que inverta os caracteres de um string.</p>
<b>IMPORTANTE:</b>
</p>a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;</p>
<p>b) Evite usar funções prontas, como, por exemplo, reverse.</p>
<hr>
<div class="row">
   <div class="col s6">
      <h4>Código</h4>
      <pre>
$string = 'Uma cadeia de caracteres alfanumericos';
echo "String normal: " . $string;

$array = str_split($string);
$ponteiro = count($array);

echo "String invertida";
for($ponteiro; $ponteiro > 0; $ponteiro--){
echo $array[$ponteiro-1];
}
</pre>
   </div>
   <div class="col s6">
      <h4>Execução</h4>
      <?php
         $string = 'Uma cadeia de caracteres alfanumericos';
         echo "<p><b>String normal:</b> " . $string . "</p>";
         
         $array = str_split($string);
         $ponteiro = count($array);
         
         echo "<p><b>String invertida:</b></p>";
         for($ponteiro; $ponteiro > 0; $ponteiro--){
         
            echo $array[$ponteiro-1];
         }
         
         ?>
   </div>
</div>
<hr>
</div>
<?php include_once(__DIR__.'/includes/footer.php') ?>