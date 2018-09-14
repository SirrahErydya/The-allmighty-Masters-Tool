<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 14.09.18
 * Time: 16:24
 */

class MaxValueException extends Exception {
    function __construct($attribute, $value) {
        parent::__construct("The ".$attribute." value can't be higher than ".$value.".");
    }
}