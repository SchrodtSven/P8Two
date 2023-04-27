<?php

declare(strict_types=1);
/**
 *  Strings as object instances
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/PTwo
 * @package P8Two
 * @version 0.1
 * @since 2023-04-26
 */

namespace SchrodtSven\P8Two\Type;
use SchrodtSven\P8Two\Type\StringClass;
use SchrodtSven\P8Two\Type\ListClass;

class StringClass implements \Stringable
{
    public function __construct(private StringClass $content)
    {

    }

    public static function createFromString(string $content): self
    {
        return new self(new StringClass($content));
    }
    
    public function getBetween(string $start, string $end, bool $isolatedStringOnly = true): string | array
    {
        //die($string);
        $pattern = "/{$start}(.*){$end}/U"; // ungreedy modififer
        $start = preg_quote($start);
        $end = preg_quote($end);
        preg_match_all($pattern, $this->content, $txt);
        return ($isolatedStringOnly) 
           ? $txt[1][0]
           : $txt;    
    }



}