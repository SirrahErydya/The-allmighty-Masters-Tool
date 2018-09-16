<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 16.09.18
 * Time: 15:47
 */

class WrongCultureException extends Exception{
    public function __construct($message = "") {
        parent::__construct("This culture is not available for the chosen species");
    }
}