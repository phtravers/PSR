<?php
/**
 * Created by JetBrains PhpStorm.
 * User: philippetraversac
 * Date: 18/11/2014
 * Time: 15:44
 * To change this template use File | Settings | File Templates.
 */

namespace OKLM\StringGenerator;

class PasswordGenerator
{
    const PASSWORD_EASY     = 0;
    const PASSWORD_MEDIUM   = 1;
    const PASSWORD_HARD     = 2;

    const PASSWORD_CHAR_STRENGTH_EASY    = 'abcdefghjkmnopqrstuvwxyz';
    const PASSWORD_CHAR_STRENGTH_MEDIUM  = 'ABCDEFGHJKLMNOPQRSTUVWXYZ0123456789';
    const PASSWORD_CHAR_STRENGTH_HARD    = '+@!$%?&$€éè';

    public function __construct()
    {
    }

    public static function generate($length = 10, $number)
    {

        if(!in_array($number, array(self::PASSWORD_EASY, self::PASSWORD_MEDIUM, self::PASSWORD_HARD)))
        {
            throw new \Exception('invalid strength');
        }


        switch($number)
        {
            case self::PASSWORD_EASY:
               $string = self::PASSWORD_CHAR_STRENGTH_EASY;
               break;

            case self::PASSWORD_MEDIUM:
               $string = self::PASSWORD_CHAR_STRENGTH_EASY.self::PASSWORD_CHAR_STRENGTH_MEDIUM;
               break;

            case self::PASSWORD_HARD:
                $string = self::PASSWORD_CHAR_STRENGTH_EASY.self::PASSWORD_CHAR_STRENGTH_MEDIUM.self::PASSWORD_CHAR_STRENGTH_HARD;
                break;
        }

        $password = '';

        for($i = 0; $i <= $length; $i++)
        {
            $password .= mb_substr($string, mt_rand(0, strlen($string)-1), 1);
        }

        return $password;

    }
}