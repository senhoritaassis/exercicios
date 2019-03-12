<?php
$maior = 0; 

$vetor = array ();
$vetor [0] = $_POST["Numero1"];
$vetor [1] = $_POST["Numero2"];
$vetor [2] = $_POST["Numero3"];
$vetor [3] = $_POST["Numero4"];
$vetor [4] = $_POST["Numero5"];


for($i=0;$i<=4;$i++){
    if($maior<$vetor[$i]){
        $maior=$vetor[$i];
    }
}

echo"O maior numero é:".$maior."<br><br>";
echo"Numeros pares: <br>";

for($i=0;$i<=4;$i++){
    if($vetor[$i] % 2 == 0){
        echo $vetor[$i];
        echo"<br>";
   }
    }



