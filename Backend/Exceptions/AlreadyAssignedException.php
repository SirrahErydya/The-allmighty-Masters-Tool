<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 14.09.18
 * Time: 15:57
 */

class AlreadyAssignedException extends Exception {
    public function __construct($attribute) {
        parent::__construct($attribute." was already assigned." );
    }
}