<?php

/**
 * This file is part of web3.php package.
 * 
 * @author Peter Lai <alk03073135@gmail.com>
 * @license MIT
 */

namespace Web3\Validators;

use Web3\Validators\IValidator;

class BooleanValidator
{
    /**
     * validate
     *
     * @param mixed $value
     * @return bool
     */
    public static function validate($value)
    {
        return is_bool($value);
    }
}