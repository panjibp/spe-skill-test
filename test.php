<?php

class SpeSkillTest
{
    public static function narcissisticNumber()
    {
        //
    }

    public static function parityOutlier($number)
    {
        foreach ($number as $numb) {
            if ($numb % 2 !== 0) {
                echo "the only odd number is $numb";
            }
        };
    }

    public static function needleHaystack($haystack, $needle)
    {
        echo $haystack[1];
    }

    public static function blueOceanReverse($array, $single)
    {
        $result = array_diff($array, $single);
        var_dump($result);
    }
}

$spe = new SpeSkillTest;

echo "Needle in the Haystack:<br>";
$spe::needleHaystack(["red", "blue", "yellow", "black", "grey"], "blue");

echo "<br><br>";

echo "The Blue Ocean Reverse:<br>";
$spe::blueOceanReverse([1, 2, 3, 4, 6, 10], [1]);

echo "<br><br>";

echo "Parity Outlier:<br>";
$spe::parityOutlier([2, 4, 5, 6]);
