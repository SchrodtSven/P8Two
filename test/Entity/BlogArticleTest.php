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


class BlogArticleTest extends TestCase
{
   
    public function testreadOnlyArticle(): void
    {
        $article  = new BlogArticle(
                                        'Freddie N.',
                                        'Thus spake Z. - part 666',
                                        new \DateTime()
        );
        
        $this->assertInstanceOf(BlogArticle::class, $article);
        $this->expectError('TypeError');

        $article->author = 'Peter Pan';
    }


    
}