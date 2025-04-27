<?php
/*
Crie uma função que receba um array associativo contendo nota e
peso, realize a média das notas considerando o peso. Exemplos:
Lista com 2 notas: (N1*P1) + (N2*P2) / 2 = Resultado
Lista com 3 notas: (N1*P1) + (N2*P2) + (N3*P3) / 3 = Resultado
*/


// $array1 = ["Nota" => 5, "Peso" => 2];


// function average($array){
//     $average = $array["Nota"] * $array["Peso"]; 
//     $weight = $array["Peso"];

//     echo "Média ponderada: ". $average / $weight;


// }

// average($array1);

function weightedAverage($gradesWeight){
    $sumGrades = 0;
    $sumWeight = 0;

    foreach($gradesWeight as $grade => $weight){
        $sumGrades += $grade * $weight;
        $sumWeight += $weight;
    }

    $weightedAverage = number_format(($sumGrades / $sumWeight), 2);

    return $weightedAverage;


}


$student1 = array(10 => 1, 9=> 2);
$student2 = array(8 => 1, 9=> 2, 4 => 3);

print_r("Weighted average student 1: ". weightedAverage($student1));
echo "<br>";
print_r("Weighted average student 2: ". weightedAverage($student2));
?>