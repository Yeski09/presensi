<?php

namespace App\Constants;

/**
 * Loan status constants.
 */
class StatusConstant implements ConstantInterface {

    const CREATED = 'CREATED';
    const PAID = 'PAID';
    
    public static function toArray() {
        return [
            self::CREATED,
            self::PAID,
        ];
    }

    public static function toString($space = false) {
        return implode($space ? ', ' : ',', self::toArray());
    }

}