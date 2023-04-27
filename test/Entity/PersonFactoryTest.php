<?php

declare(strict_types=1);
/**
 * Unit testing PersonFactory 
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Two
 * @package P8Two
 * @version 0.1
 * @since 2023-04-27
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8Two\Entity\PersonFactory;
use SchrodtSven\P8Two\Entity\Nerd;
use SchrodtSven\P8Two\Entity\Geek;
use SchrodtSven\P8Two\Entity\Freak;
use SchrodtSven\P8Two\Type\ListClass;


class PersonFactoryTest extends TestCase
{
   
    public function testDfnORed(): void
    {
        $nerd = PersonFactory::drivePerson(new Nerd('Nerdy Nick', 'nn@example.com'));
        $geek = PersonFactory::drivePerson(new Geek('Geeky Gaby', 'gg@example.com'));
        $freak = PersonFactory::drivePerson(new Freak('Freaky Frollein Frauke Fraud', 'F4@example.com'));
        $factory = new PersonFactory();
        $this->assertInstanceOf(PersonFactory::class, $factory);
        
        $this->expectError('TypeError');
        $freakTwo = PersonFactory::drivePerson(new \stdClass());
        //

        $article->author = 'Peter Pan';
    }


    public function testDfnANDed(): void
    {
        $foo = PersonFactory::logToStore(new ListClass([1, 2, 5]));
        $this->assertNull($foo);
        $this->expectError('TypeError');
        $bar = PersonFactory::logToStore([1, 2, 5]);
    }

    
}