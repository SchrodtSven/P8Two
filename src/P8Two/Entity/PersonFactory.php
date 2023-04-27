<?php
/**
 * Trait for classes implementing interface \Iterator
 * 
 * Providing possibility of accessing objects as arrays
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-27
 */

namespace SchrodtSven\P8Two\Entity;
use SchrodtSven\P8Two\Type\ListClass;

readonly class PersonFactory 
{
    public static function  drivePerson(Nerd | Freak | Geek $person): array
    {
        return [$person, new \DateTime()];
    }

    public static function logToStore(ListClass & \Iterator  $data): void
    {
         self::log();
    }

    public static function log(): void
    {
        //Foo
    }


}