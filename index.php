<?php

function string_count($str){
   $str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");

    $str = preg_split("/[\s!.,?]+/", $str);
    $newstr = array_fill_keys($str,0);
    $sumall =0; // Переменная подсчёта слов
foreach ($newstr as $key => $value){


    for($j=0 ; $j < count($str); $j++)
    {
        if ($key===$str[$j])
        {
            $value++;
        }
    }
    echo $key.':'.$value.PHP_EOL;
    $sumall +=$value;
}

echo 'Всего слов '.$sumall.PHP_EOL;


}
$startstr = 'дождя давно не было. земля потрескалась, травы пожухли. Но вот прогремел гром. Воздух пропах грозой. Все ждали дождя. несколько капель пролилось на землю. Воздух стал влажным и приятным. 
Но ничего больше не произошло. Видимо воздух так разгорячен, что вся влага испарилась не долетая до Земли';

string_count($startstr);
