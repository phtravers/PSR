<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 21/11/2014
 * Time: 15:36
 * To change this template use File | Settings | File Templates.
 */

namespace Tests\OKLM\StringGenerator;

use OKLM\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest Extends \PHPUnit_Framework_TestCase
{
    //l'antislash retourne au namespace global
    //si on avait pas d'antislash, on rejoutera le namespace de notre fichier : Tests\OKLM\StringGenerato

    public function testGenerateLength()
    {
        /**
         * Generate a random number beetween 10 & 1000
         *
         * @throws Exception
         */
        $length = mt_rand(10, 1000);
        $password = PasswordGenerator::generate($length, PasswordGenerator::PASSWORD_HARD);
        $passwordLength = mb_strlen($password);

        //une insertion est un test
        $this->assertEquals($length, $passwordLength);
    }
}