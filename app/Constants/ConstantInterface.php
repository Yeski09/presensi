<?php

namespace App\Constants;

interface ConstantInterface {

    /**
     * Get all constants as an array.
     *
     * @return array
     */
    public static function toArray();

    /**
     * Get all constants as a comma separated string.
     *
     * @param boolean $space
     * @return string
     */
    public static function toString($space = false);
    
}