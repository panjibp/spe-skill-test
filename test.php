<?php

class SpeSkillTest
{
    public static function narcissisticNumber()
    {
        //
    }

    public static function parityOutlier()
    {
        //
    }

    public static function needleHaystack($haystack, $needle)
    {
        echo $haystack[1];
    }

    public static function blueOceanReverse()
    {
        //
    }
}

$spe = new SpeSkillTest;

$spe::needleHaystack(["red", "blue", "yellow", "black", "grey"], "blue");
