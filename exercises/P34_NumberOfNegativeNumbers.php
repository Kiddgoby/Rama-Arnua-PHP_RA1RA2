<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        $count = 0;

        while (true) {
            echo "Give a number:\n";
            $input = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            $number = (int)$input;

            if ($number == 0) {
                break;
            }

            if ($number < 0) {
                $count++;
            }
        }

        echo "Number of negative numbers: " . $count . "\n";
    }
}
