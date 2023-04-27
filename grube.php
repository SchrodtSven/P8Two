<?php
 $t = file ('author_book.txt');
 function stringsBetween(string $string, string $start, string $end, bool $isolatedStringOnly = true): string | array
 {
     //die($string);
     $pattern = "/{$start}(.*){$end}/U"; // ungreedy modififer
     $start = preg_quote($start);
     $end = preg_quote($end);
     preg_match_all($pattern, $string, $txt);
     return ($isolatedStringOnly) 
        ? $txt[1][0]
        : $txt;    
 }

$bar = new ListClass;
 foreach($t as $i)
 {
    if(str_starts_with($i, '<h3 class="wp-block-heading"><span class="ez-toc-section" id="')) {
        $foo = new StringClass(stringsBetween($i, 'id="', '"'));
        $tmp =  $foo->splitBy(' _');
        $tmp->shift();
        $bar->push($tmp->join(' ')->quote());

        //die;
    }
    //shuffle($bar);
    echo $bar->join(',')->prepend('[')->append(']');
 }
