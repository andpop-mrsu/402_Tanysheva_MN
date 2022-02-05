<?php

namespace App\Test;

use App\Vector;

function runTest()
{
        $vectorOne = new Vector(15, -1, 21);
        echo $vectorOne . "\n";

        $vectorTwo = new Vector(5, 12, 6);
        echo $vectorOne . "\n";

        $vectorAddition = $vectorOne->add($vectorTwo);
        echo $vectorAddition . "\n";

        $vectorDifference = $vectorOne->sub($vectorTwo);
        echo $vectorDifference . "\n";

        $multiplyingVectorByANumber = $vectorOne->product(5);
        echo $multiplyingVectorByANumber . "\n";

        $scalarProduct = $vectorOne->scalarProduct($vectorTwo);
        echo $scalarProduct . "\n";

        $vectorProduct = $vectorOne->vectorProduct($vectorTwo);
        echo $vectorProduct . "\n";
}
