<?php
/**
 * Represents a culture
 * User: luna
 * Date: 13.09.18
 * Time: 16:29
 */

abstract class Culture
{
    private $ap_value;
    private $skills;
    private $language;

    function __construct($ap_value, $skills, $language) {
        $this->ap_value = $ap_value;
        $this->skills = $skills;
        $this->language = $language;
    }

    public function __get($name) {
        switch ($name) {
            case 'ap_value':
                return $this->ap_value;
            case 'skills':
                return $this->skills;
            case 'language':
                return $this->language;
        }
    }

}