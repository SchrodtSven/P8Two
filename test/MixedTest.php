<?php

declare(strict_types=1);
/**
 * Unit testing StringClass 
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8
 * @package P8
 * @version 0.1
 * @since 2023-04-27
 */

use PHPUnit\Framework\TestCase;
use SchrodtSven\P8Two\Entity\BlogArticle;


class MixedTest extends TestCase
{
   
    public function testDynamicCreationOfPropertiesDeprecation(): void
    {
        $article = new BlogArticle('Scroogy Steve', 's.s@example.org', \DateTime::createFromFormat('Y-m-d', '1949-05-23'));
        $this->expectError('Error'); // Error: Cannot create dynamic property SchrodtSven\P8Two\Entity\BlogArticle::$foo_bar
        $article->bar_foo = 'Lorem Ipsum';    
    }

}