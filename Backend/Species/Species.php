<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 14.09.18
 * Time: 15:43
 */

abstract class Species {

    private $apCosts;
    private $life;
    private $soul_energy;
    private $toughness;
    private $speed;

    /**
     * Species constructor.
     * @param $ap_costs
     * @param $life
     * @param $soul_energy
     * @param $toughness
     * @param $speed
     */
    public function __construct($ap_costs, $life, $soul_energy, $toughness, $speed) {
        $this->ap_costs = $ap_costs;
        $this->life = $life;
        $this->soul_energy = $soul_energy;
        $this->toughness = $toughness;
        $this->speed = $speed;
    }

    /**
     * Set the species-dependent perks and mals
     * Implemented in sub classes
     * @param hero The hero assigned to the species
     */
    public abstract function setSpeciesAttributes($hero);

    /**
     * @return int
     */
    public function getApCosts() {
        return $this->apCosts;
    }

    /**
     * @return int
     */
    public function getLife() {
        return $this->life;
    }

    /**
     * @return int
     */
    public function getSoulEnergy() {
        return $this->soul_energy;
    }

    /**
     * @return int
     */
    public function getToughness() {
        return $this->toughness;
    }

    /**
     * @return int
     */
    public function getSpeed() {
        return $this->speed;
    }




}