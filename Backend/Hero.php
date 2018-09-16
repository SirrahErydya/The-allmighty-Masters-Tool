<?php
/**
 * Symbolizes a DSA character with all features
 * User: luna
 * Date: 13.09.18
 * Time: 16:18
 */


define('ATTRIBUTES', ['courage', 'smarts', 'intuition', 'charisma', 'dexterity', 'address', 'constitution', 'strength']);
class Hero
{
    private $ap;


    public function addAp(int $ap) {
        if($this->ap + $ap < 0) {
            throw new NoAPException();
        }
        $this->ap += $ap;
    }

    private $experience_level;
    private $attribute_points = 64;
    private $noOfSpells = 0;
    private $noOfForeignSpells = 0;


    public function __construct(ExperienceLevel $experience_level) {
        $this->experience_level = $experience_level;
        $this->ap = $this->experience_level->getAp();
    }

    private $species;
    private $culture;


    public function setSpecies(Species $species)  {
        if($this->species != null) {
            throw new AlreadyAssignedException('species');
        }
        $this->addAp(-$this->ap-$species->getApCosts());
        $this->species = $species;
        $species->setSpeciesAttributes($this);
    }

    public function setCulture(Culture $culture) {
        if($this->culture != null) {
            throw new AlreadyAssignedException('culture');
        }
        if($this->species != $culture->getSpecies()) {
            throw new WrongCultureException();
        }
        $this->addAp(-$culture->getApCosts());
        $this->culture = $culture;
        $culture->setCulturePerks($this);
    }

    // Attributes
    private $courage = 8;
    private $smarts = 8;
    private $intuition = 8;
    private $charisma = 8;
    private $dexterity = 8;
    private $address = 8;
    private $constitution = 8;
    private $strength = 8;

    public function skillAttribute(string $attribute) {
        if( !in_array($attribute, array(ATTRIBUTES) )) {
            throw new InvalidArgumentException("Not an attribute");
        }
        $value = $this->$attribute;
        if($this->attribute_points >= $this->experience_level->getAttributePoints()) {
            throw new NoPointsException("attribute");
        }
        if($value >= $this->experience_level->getAttributeValue()) {
            throw new MaxValueException($attribute, $this->experience_level->getAttributeValue());
        }
        if($value <= 14) {
            $this->addAp(-15);
        } else {
            $this->addAp(-15*($value-13));
        }
        $this->$attribute += 1;
        $this->attribute_points += 1;
    }

    private $profession;

}