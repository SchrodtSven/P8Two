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


 trait UserLandDeclaration 
 {
    public const OS = 'Darwin Kernel Version 22.4.0'; 
 }
 class User
 {  
    use UserLandDeclaration;
     
 }
 // echo UserLandDeclaration::OS;
 // Fatal error: Uncaught Error: Cannot access trait constant UserLandDeclaration::OS directly
 $user = new User();
 echo $user::OS;
 

 