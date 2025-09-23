<?php

class P13_SimpleCalculator {
    public function main(): void {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        // Perform and output the calculations
        // Write the program here
        
        $resultsuma = $numA + $numB;
        $resultresta = $numA - $numB;
        $resultmulti = $numA * $numB;
        $resultdiv = $numA / $numB;
        
        echo "$numA + $numB = $resultsuma" . "\n";
        echo "$numA - $numB = $resultresta" . "\n";
        echo "$numA * $numB = $resultmulti" . "\n";
        echo "$numA / $numB = " . number_format($resultdiv, 1) . "\n";
        
    }
}
