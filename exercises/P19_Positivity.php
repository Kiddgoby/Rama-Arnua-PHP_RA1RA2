<?php

class P19_Positivity
{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a number: ";

        // Get input from the user
        $num = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        // Convertir a entero
        // $num = (int)$num;

        // Check number value
        if ((int)$num > 0) {
            echo "The number is positive.\n";
        } else {
            echo "The number is not positive.\n";
        }
    }
}
?>