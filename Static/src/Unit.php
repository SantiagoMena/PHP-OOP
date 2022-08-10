<?php
namespace Source;

use Source\Log;
use Source\Armors\Armor;
use Source\Weapons\Weapon;
use Source\Armors\BronzeArmor;
use Source\Weapons\BasicSword;
use Source\Armors\MissingArmor;

/**
 * Clase unidad de batalla
 */
class Unit
{
    const MAX_DAMAGE = 1200;
    protected float $health = 40;
    protected string $name;
    protected ?Armor $armor = null;
    protected Weapon $weapon;

    public function __construct(string $name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor();
    }

    /**
     * Obtener el valor del atributo `name`
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Mover la unidad a una dirección
     *
     * @param string $direction
     * @return void
     */
    public function move(string $direction): void
    {
        Log::info("{$this->name} avanza hacia {$direction}");
    }

    /**
     * Método de muerte de la unidad
     *
     * @return void
     */
    public function die(): void
    {
        Log::info("{$this->name} muere");
        exit();
    }

    /**
     * Obtener el valor de `health`
     *
     * @return float
     */
    public function getHealth(): float
    {
        return $this->health;
    }

    /**
     * Asignar el valor de `health`
     *
     * @param float $health
     * @return self
     */
    public function setHealth(float $damage): self
    {
        if($damage > static::MAX_DAMAGE) {
            $damage = static::MAX_DAMAGE;
        }

        $this->health = $this->health - $damage;

        Log::info("{$this->getName()} ahora tiene {$this->getHealth()} de vida");

        return $this;
    }

    /**
     * Método de infringir daño a una unidad
     *
     * @param float $damage
     * @return void
     */
    public function takeDamage(Attack $attack): void
    {

        $this->setHealth($this->armor->absorbDamage($attack));
        
        if($this->health <= 0) {
            $this->die();
        }
    }

    /**
     * Asignar valor del atributo `armor`
     *
     * @param [type] $armor
     * @return void
     */
    public function setArmor(?Armor $armor): self
    {
        Log::info($this->getName() . " ahora tiene una armadura.");
        $this->armor = $armor;

        return $this;
    }

    /**
     * Implementación de la función attack
     *
     * @param Unit $opponent
     * @return void
     */
    public function attack(Unit $opponent): void
    {
        $attack = $this->weapon->createAttack();
        Log::info($attack->getDescription($this, $opponent));
        $opponent->takeDamage($attack);
    }

    /**
     * Set the value of weapon
     */
    public function setWeapon(Weapon $weapon): self
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get the value of weapon
     */
    public function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    public static function createSoldier(): self
    {
        $soldier = new Unit("Silence", new BasicSword);
        $soldier->setArmor(new BronzeArmor);

        return $soldier;
    }
}