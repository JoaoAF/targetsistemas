<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Q5</title>
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
   </head>
   <body>
      <div class="container">
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
   </body>
</html>