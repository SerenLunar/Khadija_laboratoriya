<?php
    $num1 = 10;
    $num2 = 5;
    $operator = "+";
   // $operator = "-";
   // $operator = "*";
   // $operator = "/"
    $result = '';
            switch ($operator) {
                case '+':
                    $result = $num1 + $num2;
                    break;
                case '-':
                    $result = $num1 - $num2;
                    break;
                case '*':
                    $result = $num1 * $num2;
                    break;
                case '/':
                    if ($num2 != 0) { 
                        $result = $num1 / $num2;
                    } else {
                        $result = '0-a bölünmür!';
                    }
                    break;
                default:
                    $result = 'belə bir operator yoxdur!!!';
                    break;
            }
            echo "Cavab: $result";
    ?>