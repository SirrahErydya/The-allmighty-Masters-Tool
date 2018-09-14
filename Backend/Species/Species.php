<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 14.09.18
 * Time: 15:43
 */

abstract class Species {

    private $ap_costs;
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
     * @return mixed
     */
    public function getApCosts() {
        return $this->ap_costs;
    }

    /**
     * @return mixed
     */
    public function getLife() {
        return $this->life;
    }

    /**
     * @return mixed
     */
    public function getSoulEnergy() {
        return $this->soul_energy;
    }

    /**
     * @return mixed
     */
    public function getToughness() {
        return $this->toughness;
    }

    /**
     * @return mixed
     */
    public function getSpeed() {
        return $this->speed;
    }




}