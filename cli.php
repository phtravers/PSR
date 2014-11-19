#!/usr/bin/env php
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 18/11/2014
 * Time: 18:21
 * To change this template use File | Settings | File Templates.
 */

$string = 'abcdefghjkmnopqrstuvwxyz';

$length = (isset($argv[1] && (int)$argv[1] > 0) ? (int) $argv[1] : mt_rand(20,30);

$password = '';

for($i = 0; $i <= $length; $i++)
{
    $password .= mb_substr($string, mt_rand(0, strlen($string)-1), 1);
}

echo $password.PHP_EOL;