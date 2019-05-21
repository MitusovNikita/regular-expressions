<?
$string = "АбвAabcdefghig123456789Amitusov333@gmail.com22";

//простая строка
$replace1 = preg_replace("/123/","",$string);

//все цифры
$replace2 = preg_replace("/[0-9]+/","",$string);

//все буквы
$replace3 = preg_replace("/[a-zA-Zа-яёА-ЯЁ]+/","",$string);

//от знака до конца строки
$replace4 = preg_replace("/1.*/","",$string);

//от начала строки до знака
$replace5 = preg_replace("/.*1/","",$string);

//email
$replace6 = preg_replace("/[a-z0-9]+@[a-z0-9]+\.[a-z0-9]+/","",$string);

//две цифры
$replace6 = preg_replace("/[0-9]{2}/","",$string);

echo $replace6;
