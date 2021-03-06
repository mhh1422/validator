<?php

namespace ItvisionSy\Validator;

/**
 * Description of StringValidatorRule
 *
 * @author Muhannad Shelleh <muhannad.shelleh@itvision-sy.com>
 */
class StringValidatorRule extends ValidatorRule {

    protected function _validate($value) {
        return is_string($value)? : "Value should be a string";
    }

}
