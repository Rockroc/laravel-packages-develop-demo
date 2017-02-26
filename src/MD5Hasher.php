<?php

namespace Rockroc\Hasher;
/**
 * Class MD5Hasher
 * @package Rockroc\Hasher
 */
class MD5Hasher
{
    /**
     * @param string $value
     * @param array $option
     * @return string
     */
    public function make($value="", array $option=[])
    {
        $salt = isset($option['salt']) ? $option['salt'] : '';

        return hash('md5',$value . $salt);
    }

    /**
     * @param $value
     * @param $hashValue
     * @param array $option
     * @return bool
     */
    public function check($value, $hashValue, array $option=[])
    {
        $salt = isset($option['salt']) ? $option['salt'] : '';
        
        return hash('md5',$value . $salt) === $hashValue;
    }
}