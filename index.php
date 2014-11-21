<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 18/11/2014
 * Time: 15:21
 * To change this template use File | Settings | File Templates.
 */

require __DIR__.'/vendor/autoload.php';

// $slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('Mé rès huhi');


// exo1 : echo \OKLM\StringGenerator\PasswordGenerator::generate(18, \OKLM\StringGenerator\PasswordGenerator::PASSWORD_EASY);

echo \OKLM\StringGenerator\LoremIpsum::generate(\OKLM\StringGenerator\LoremIpsum::ALPHABET);

