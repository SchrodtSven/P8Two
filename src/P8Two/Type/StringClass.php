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

class StringClass implements \Stringable
{
    public function __construct(private string $content)
    {

    }

    public function prepend(string $begin): self
    {
        $this->content = $this->content . $begin;
        return $this;
    }

    public function append(string $end): self
    {
        $this->content .= $end;
        return $this;
    }

    public function quote(string $mark = "'"): self
    {
        return $this->append($mark)->prepend($mark);
    }

    public function splitBy(string $separator): ListClass
    {
        return new ListClass(explode($separator, $this->content));
    }

    public function __toString(): string
    {
        return $this->content;
    }



}