<h4>задание 1</h4>
<?php 
function numCall($a,$b){
    if($a>0 && $b>0 ){
        var_dump("$a - $b");
    }
    elseif($a < 0 && $b <0 ){
        var_dump("$a * $b");
    }
    elseif(($a>0 && $b<0)||($a<0 && $b>0)){
        var_dump("$a+$b");
    }
}
numCall(10,15)

?><hr>
<h4>задание 2, от a до 15 через цикл For</h4>
<?php   
    function argVariable($a){
   for ($a; $a<16 ; $a++){
      var_dump($a);
   }
    };
argVariable(0)
?>
<hr>
<h4>задание 2, через оператор switch</h4>
<?php 
    $num = 15;
    var_dump($num);
    switch ($num){

        case 1:
            echo "1,2,3,4,5,6,7,8,9,10,11,12,13,14,15";
            break;
        case 2:
            echo "2,3,4,5,6,7,8,9,10,11,12,13,14,15";
            break;
        case 3:
            echo "3,4,5,6,7,8,9,10,11,12,13,14,15";
            break;
        case 4:
            echo "4,5,6,7,8,9,10,11,12,13,14,15";
            break;
        case 5:
            echo "5,6,7,8,9,10,11,12,13,14,15";
            break;
        case 6:
            echo "6,7,8,9,10,11,12,13,14,15";
            break;
        case 7:
            echo "7,8,9,10,11,12,13,14,15";
            break;
        case 8:
            echo "8,9,10,11,12,13,14,15";
            break;
        case 9:
            echo "9,10,11,12,13,14,15";
            break;
        case 10:
            echo "10,11,12,13,14,15";
            break;
        case 11:
            echo "11,12,13,14,15";
             break;
        case 12:
            echo "13,14,15";
            break;
        case 13:
            echo "14,15";
            break;
        case 14:
            echo "14,15";
             break;
        default:echo"15";break;
    }
?>
<hr>
<h3>задание 3</h3>
<?php 
    function sum($a,$b){
        var_dump ($a+$b);
        return;
    }
    function sub($a,$b){
        var_dump ($a-$b);
        return;
    }


    function div($a,$b){
        var_dump ($a/$b);
        return;
    }

    function mult($a,$b){
        var_dump ($a*$b);
        return;
    }
    sum(2,10);
 
    sub(2,10);
    
    div(2,10);

    mult(2,10);

?>
<hr>
<h3>Задание 4</h3>
<?php 
        function mathOpetation($arg1,$arg2,$operator){
            switch($operator){
                case "+":
                    echo ($arg1+$arg2);
                    break;
                case "-":
                    echo ($arg1-$arg2);
                    break;
                case "*":
                    echo ($arg1*$arg2);
                    break;
                case "/":
                    echo ($arg1/$arg2);
                    break;
            }
        }
 mathOpetation(10,15,"/")
?>

<hr>
<h3>Задание 5</h3>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<footer style="width:100%; height:300px; background:green;">
<?php 
  $t = getdate();
  print($t["year"]);
?>
</footer>
</body>
</html>

<hr>
<h3>Задание 6</h3>
<?php

?>