<?php

declare(strict_types=1);
/**
 *  Testing stand alone return types null, false, true
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Two
 * @package P8Two
 * @version 0.1
 * @since 2023-04-27
 */

namespace SchrodtSven\P8Two\Entity;

class NonBinaryValue
{
    public function IAmAlwaysFalse(): false 
    { 
        // fooo
        return false;
    }

    public function IAmAlwaysTrue(): true 
    {
        // barrrrrr
        return true;
    }

    public function IAmAlwaysNull(): null 
    { 
        // bazzzzzzzz
        return null;
    }
} 
