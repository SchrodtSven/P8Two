<?php

namespace SchrodtSven\P8Two\Entity;

readonly class BlogArticle
{
    public function __construct(
                                    public string $author,
                                    public string $headline,
                                    public \DateTime $created
    )
    {

    }
}