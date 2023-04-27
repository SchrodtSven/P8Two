<?php

declare(strict_types=1);
/**
 * 
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/P8Two
 * @package P8Two
 * @version 0.1
 * @since 2023-04-26
 */


 require_once 'src/P8Two/Autoload.php';
 use SchrodtSven\P8Two\Type\StringClass;
 use SchrodtSven\P8Two\Type\ListClass;

 class User
 {
     public $name;
 }
 
 $user = new User();
 $user->last_name = 'Doe';

 