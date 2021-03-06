<?php

namespace ItvisionSy\Validator;

/**
 * Description of EmailValidatorRule
 *
 * @author Muhannad Shelleh <muhannad.shelleh@itvision-sy.com>
 */
class EmailValidatorRule extends ValidatorRule {

    protected function _validate($value) {
        return !!filter_var($value, \FILTER_VALIDATE_EMAIL)?:"Value is not a valid email address";
    }

}
