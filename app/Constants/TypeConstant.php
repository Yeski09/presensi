<?php

namespace App\Constants;

/**
 * Loan status constants.
 */
class TypeConstant implements ConstantInterface {

    const POTONGAN = 'POTONGAN';
    const LEMBURAN = 'LEMBURAN';
    
    public static function toArray() {
        return [
            self::POTONGAN,
            self::LEMBURAN,
        ];
    }

    public static function toString($space = false) {
        return implode($space ? ', ' : ',', self::toArray());
    }

}