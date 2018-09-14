<?php
/**
 * Symbolizes a DSA character with all features
 * User: luna
 * Date: 13.09.18
 * Time: 16:18
 */

class Hero
{
    private $ap;

    public function setAp($ap) {
        if($ap < 0) {
            throw new NoAPException();
        }
        $this->ap = $ap;
    }

    private $experience_level;

    public function __construct($experience_level) {
        $this->experience_level = $experience_level;
        $this->ap = $this->experience_level->ap;
    }

    private $species;
    private $culture;


    public function setSpecies($species) {
        if($this->species != null) {
            throw new AlreadyAssignedException('species');
        }
        $this->species = $species;
        $this->setAp($this->ap-$species->ap_value);
    }

    public function setCulture($culture) {
        if($this->culture != null) {
            throw new AlreadyAssignedException('culture');
        }
        $this->culture = $culture;
        $this->setAp($this->ap-$culture->ap_value);
    }



}