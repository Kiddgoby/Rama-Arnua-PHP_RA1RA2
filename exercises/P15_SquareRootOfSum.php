<?php

class P15_SquareRootOfSum {
    public function main(): void {
        // Define two numbers
        $numberA = 70;
        $numberB = 11;

        // Calculate the square root of their sum
        $sum = $numberA + $numberB;
        $result = sqrt($sum);

        // Output the result
        echo $result."\n";
    }
}
