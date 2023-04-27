<?php
/**
 *  Entity class example
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-25
 */

namespace SchrodtSven\P8Two\Entity;

readonly class Geek 
{
    public function __construct(
                                    public string $name,
                                    public string $email,
                     
    )
    {

    }
}