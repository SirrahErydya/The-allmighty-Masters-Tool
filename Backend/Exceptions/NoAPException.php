<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 14.09.18
 * Time: 16:22
 */

class NoAPException extends Exception {

    function __construct() {
        parent::__construct("This action would lower the AP value below 0");
    }
}