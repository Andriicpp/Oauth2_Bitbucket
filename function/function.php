<?php
/**
функция проверки на палиндром
 */

function checkPalindrome($string){
    $r="";
    $string = str_replace(' ', '', $string);
    $c = mb_strlen($string, 'utf-8');
    for ($i=1; $i<=$c; $i++) {
        $r .= mb_substr($string, -$i, 1, 'utf-8');
    }
    if ($string == $r){
        return true;
    } else {
        return  false;
    }}
$result = checkPalindrome('мадам');
var_dump($result);
/**
 * формула луна
 */

//function luhnAlgorithm($digit) : bool
//{
//    $number = strrev(preg_replace('/[^\d]+/', '', $digit));
//    $sum = 0;
//    for ($i = 0, $j = strlen($number); $i < $j; $i++) {
//        if (($i % 2) == 0) {
//            $val = $number[$i];
//        } else {
//            $val = $number[$i] * 2;
//            if ($val > 9)  {
//                $val -= 9;
//            }
//        }
//        $sum += $val;
//    }
//    return (($sum % 10) === 0);
//}
//
//$result = luhnAlgorithm(4111111111111111);
//var_dump($result);

/**
 * Дано фрагмент кода
 * $array = [1,2,3,4,5,6,'','','']);
 * $items = implode(',', $array);
 * Написать функцию для удаления последней запятой, т.е результат работы фунции должна быть строка вида "1,2,3,4,5,6"
 */

//$array = [1,2,3,4,5,6,'','',''];
//$items = implode(',', $array);
//echo trim($items, ",");

/**
 * Написать функцию которая будет удалять дубли и пустые значения (0, '', null) из массива
 */

//$listValues = array("one", "two", "null","three","","four","null");
//$a=array_values(array_diff($listValues,array("null","")));
//print_r($a);
//echo "</pre>";

/**
 * Разработать форму много страничной регистрации пользователя. На первой странице, будет форма в которую нужно
 * ввести логин и пароль пользователя, на второй добавит к профилю пользователя его ФИО и адрес, а на третье странице
 * вывести все данные на экран. Этот задание на практику работы с сессиями.
 */

