<?php
/**
 * Represents a culture
 * User: luna
 * Date: 13.09.18
 * Time: 16:29
 */

abstract class Culture
{
    private $apCosts;
    private $species;
    private $skills;

    function __construct($apCosts, $skills, $species) {
        $this->apCosts = $apCosts;
        $this->skills = $skills;
        $this->species = $species;
    }

    /**
     * Sets the different skills and specia_valuel abilities that belong to this culture
     * Overwritten in subclass
     * @param hero The hero belonging to this culture
     */
    public abstract function setCulturePerks(Hero $hero);

    /**
     * @return int
     */
    public function getApCosts() {
        return $this->apCosts;
    }

    /**
     * @return Species
     */
    public function getSpecies() {
        return $this->species;
    }

    /**
     * @return array
     */
    public function getSkills() {
        return $this->skills;
    }



}