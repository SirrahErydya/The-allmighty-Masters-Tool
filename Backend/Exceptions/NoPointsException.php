<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 16.09.18
 * Time: 16:50
 */

class NoPointsException extends Exception{
    public function __construct($cat = "") {
        parent::__construct("There are no ".$cat." points left.");
    }
}