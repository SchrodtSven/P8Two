<?php

declare(strict_types=1);
/**
 * Unit testing StringClass 
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Two
 * @package P8Two
 * @version 0.1
 * @since 2023-04-27
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8Two\Type\StringClass;
use SchrodtSven\P8Two\Type\ListClass;


class StringClassTest extends TestCase
{
    public function testFoo(): void
    {
        $this->assertInstanceOf(StringClass::class, new StringClass(''));
    }
}