<?php
/*wealth*/

function getWealth ($choice)
{
    $twoD6 = rand(1, 6) + rand(1, 6);
    $threeD6 = rand(1, 6) + rand(1, 6) + rand(1, 6);
    $fourD6 = rand(1, 6) + rand(1, 6) + rand(1, 6) + rand(1, 6);
    $threeD8 = rand(1, 8) + rand(1, 8) + rand(1, 8);
    $fourD8 = rand(1, 8) + rand(1, 8) + rand(1, 8) + rand(1, 8);
    $threeD20 = rand(1, 20) + rand(1, 20) + rand(1, 20);

    $wealth = '';

    if($choice == "0")
    {
        $wealth = $fourD8. ' silver smerduks, ' . $threeD8 . ' copper pennies & ' . $threeD6 . ' bronze agols.';
    }

    if($choice == "1")
    {
        $wealth = $fourD8 . ' bronze agols & ' . $threeD20 . ' iron tiks.';
    }

    if($choice == "2")
    {
        $wealth = $twoD6. ' gold rilks, ' . $threeD6 . ' silver smerduks & ' . $fourD6 . ' copper pennies.';
    }

    if($choice == "3")
    {
        $wealth = $threeD20. ' gold rilks, ' . $fourD8 . ' silver smerduks & ' . $fourD6 . ' copper pennies.';
    }

    if($choice == "4")
    {
        $wealth = '1 Diamond-In-Amber Glulditch, ' . $threeD20 . ' gold rilks & ' . $fourD8 . ' silver smerduks.';
    }

    return $wealth;
}




?>