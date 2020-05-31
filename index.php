<?php

function string_count($str)
{
    $str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");

    $str = preg_split("/[\s!.,?]+/", $str);
    $newstr = array_fill_keys($str, 0);
    foreach ($str as $word)
    {
        $newstr[$word]++;
    }

    foreach ($newstr as $key => $value)
    {
        echo $key . ':' . $value . PHP_EOL;
    }

    echo 'Всего слов ' . count($str) . PHP_EOL;


}

$startstr = 'дождя давно не было. земля потрескалась, травы пожухли. Но вот прогремел гром. Воздух пропах грозой. Все ждали дождя. несколько капель пролилось на землю. Воздух стал влажным и приятным. 
Но ничего больше не произошло. Видимо воздух так разгорячен, что вся влага испарилась не долетая до Земли';

string_count($startstr);
