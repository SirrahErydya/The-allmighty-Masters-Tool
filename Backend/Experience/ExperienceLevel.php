<?php
/**
 * Created by PhpStorm.
 * User: luna
 * Date: 14.09.18
 * Time: 15:27
 */

abstract class ExperienceLevel
{
    private $level;
    private $ap;
    private $attribute_value;
    private $skill_value;
    private $fightskill_value;
    private $attribute_points;
    private $spells;
    private $foreign_spells;

    function __construct($level, $ap, $attribute_value, $attribute_points, $skill_value, $fightskill_value, $spells, $foreign_spells) {
        $this->ap = $ap;
        $this->attribute_points = $attribute_points;
        $this->level = $level;
        $this->attribute_value = $attribute_value;
        $this->skill_value = $skill_value;
        $this->fightskill_value = $fightskill_value;
        $this->spells = $spells;
        $this->foreign_spells = $foreign_spells;
    }

    /**
     * @return int
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * @return int
     */
    public function getAp() {
        return $this->ap;
    }

    /**
     * @return int
     */
    public function getAttributeValue() {
        return $this->attribute_value;
    }

    /**
     * @return int
     */
    public function getSkillValue() {
        return $this->skill_value;
    }

    /**
     * @return int
     */
    public function getFightskillValue() {
        return $this->fightskill_value;
    }

    /**
     * @return int
     */
    public function getAttributePoints() {
        return $this->attribute_points;
    }

    /**
     * @return int
     */
    public function getSpells() {
        return $this->spells;
    }

    /**
     * @return int
     */
    public function getForeignSpells() {
        return $this->foreign_spells;
    }


}