<?php

class Calculator {

    public function calc($operator, $a, $b) {
        
        if (!is_string($operator) || !is_numeric($a) || !is_numeric($b)) {
            return "You must enter a string and two numbers<br>";
        }

        switch ($operator) {
            case '+':
                return "The sum of the numbers is " . ($a + $b) . "<br>";
                break;

            case '-':
                return "The difference of the numbers is " . ($a - $b) . "<br>";
                break;

            case '*':
                return "The product of the numbers is " . ($a * $b) . "<br>";
                break;

            case '/':
                if ($b == 0) {
                    return "Cannot divide by zero<br>";
                }
                return "The division of the numbers is " . ($a / $b) . "<br>";
                break;

            default:
                return "Invalid operation. Accepted operations are: +, -, *, /<br>";
        }
    }
}

?>