<?php

use CodeIgniter\Format\Exceptions\FormatException;

$studentScores = [
    ['name' => 'Alice', 'scores'=>['math' => 85, 'english' => 90, 'science' => 88]],
    ['name' => 'Bob', 'scores'=>['math' => 78, 'english' => 82, 'science' => 88]],
    ['name' => 'Charlie', 'scores'=>['math' => 92, 'english' => 88, 'science' => 94]],
];

$subjects = ['math', 'english', 'science'];

$n = count($studentScores);
// echo $n;
//number of students

$sub_scores = 0;

foreach ($subjects as $sub)
{   
    // echo "$sub";
    foreach ($studentScores as $value)
    {
        $sub_scores +=  $value['scores'][$sub];
        // echo '<br>';
        $value = 0;
        $value++;
        if ($value==$n-1)
        {
            break;
        }
    }       
    $sub_scores /= $n;
    // echo "$sub_scores<br>";
    if ($sub_scores>90)
    {
        echo "$sub Average: $sub_scores Excellent<br>";
    }
    elseif ($sub_scores>80 && $sub_scores<90)
    {
        echo "$sub Average: $sub_scores Good<br>";
    }
    else 
    {
        echo "$sub Average: $sub_scores Failed<br>";

    }
    $sub_scores = 0;
}





// echo $studentScores[0]['scores']['math'];

// $n_students = count($studentScores);
// echo "$n_students <br>"; 



// echo ("Average math Score: ");
// echo ("Average math Score: ");
// echo ("Average math Score: ");



?>