<?php // вывод от 0-100 чисел деляшихся на 3 без остатка 

    $i = 3;
while($i<=100){
    echo $i;
    $i+=3;
    echo '<br>';

}    
?>
<hr>
<?php 
    $a = 0;
        do{
            $a++;
            if($a==0){//Костыль
                $a==0;
                echo"$a- Ноль<br>";
            }
            if($a==1){// Костыль
                echo"$a- число не чётное<br>";
            }
            elseif(($a%2)==0){
                echo"$a- число чётное <br>";
            }
            elseif(($a%3)==0){
                echo"$a- число не чётное<br>";
            }
        }
        while($a<=10);
        echo("");
?>
<hr>
<?php 
    $array= ['Московская область'=>['Москва','Зеленоград','Клин'],'Ленинградская область'=>['Санкт-Петербург','Всеволожск','Колпино'],'Удмуртская Республика'=>['Ижевск','Игра','Воткинск']];

    foreach($array as $key =>$value){
        echo "<hr>", "<br>",$key,":";
        foreach($value as $key=>$value){
            echo  $value,", ";
        }

    }
?>

<hr>
<?php 
 function translit($str){
    $string = [
        'a'=>'a', 'б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'yo','ж'=>'zh','з'=>'z','и'=>'i','й'=>'j','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ъ'=>'"','ы'=>'y','ь'=>'','э'=>'e','ю'=>'yu','я'=>'ya'];
        return strtr($str,$string);
        }
$inputWord = "Зачем меня ты создал, больной ты человек?";
$trans = translit("$inputWord");
echo $trans;
?>
<hr>
<?php 
    function deleteSpace($shmyak){
        $kuks = [' '=> '_'];
        return strtr($shmyak,$kuks);
    }
$inputString = "Зачем меня создали?";
$_tzink = deleteSpace($inputString);
echo $_tzink ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num =1;
    $list = "<ul>";
    while($num <=5){
        $list .="<li> Строка $num </li>";
        $list .="<select>
                    <option>Зачем</option>
                    <option>сюда</option>
                    <option>залез</option>
                    <option>шалун</option>
                    <option>?</option>
        </select>";
        $num++;
    }
    $list .='</ul>';
    echo $list;
    ?>
</body>
</html>
<hr>
<?php 
 for($k=0;$k<9;print $k, $k++){}// cперва думал как то через эхо после тела цикла выводить, потом нашел в сети возможность добавлять  к  функции принт
?>
