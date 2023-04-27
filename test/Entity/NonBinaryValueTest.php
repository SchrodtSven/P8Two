<?php

declare(strict_types=1);
/**
 * Unit testing NonBinaryValue 
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Two
 * @package P8Two
 * @version 0.1
 * @since 2023-04-27
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8Two\Entity\NonBinaryValue;


class NonBinaryValueTest extends TestCase
{
   
    public function testNonBinaryValue(): void
    {
        $value = new NonBinaryValue();
        $this->assertNull($value->IAmAlwaysNull());
        $this->assertTrue($value->IAmAlwaysTrue());
        $this->assertFalse($value->IAmAlwaysFalse());
        
    }


    
}