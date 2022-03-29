<?php

class Car
  {
    private int $nbWheels;
    
    private string $color;

    private int $currentSpeed;

    private int $nbSeats;

    private string $energy;

    private int $energyLevel;

    public function start(): string
{
    $this->currentSpeed > 0;

    return "Start!";
}
    public function forward(): string
{
    $this->currentSpeed = 15;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->currentSpeed > 10) {
       $this->currentSpeed--;
       $sentence .= "Brake !!!";
   }
   $sentence .= "I'm stopped !";
   return $sentence;
}
  
public function __construct (string $color, int $nbSeats , string $energy)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->energy = $energy;

}


    /**
     * Get the value of color
     */ 
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */ 
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get the value of nbWheels
     */ 
    public function getNbWheels()
    {
        return $this->nbWheels;
    }

    /**
     * Set the value of nbWheels
     *
     * @return  self
     */ 
    public function setNbWheels(int $nbWheels)
    {
        $this->nbWheels = $nbWheels;

        return $this;
    }

    /**
     * Get the value of currentSpeed
     */ 
    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    /**
     * Set the value of currentSpeed
     *
     * @return  self
     */ 
    public function setCurrentSpeed(int $currentSpeed)
    {
        $this->currentSpeed = $currentSpeed;

        return $this;
    }

    /**
     * Get the value of nbSeats
     */ 
    public function getNbSeats()
    {
        return $this->nbSeats;
    }

    /**
     * Set the value of nbSeats
     *
     * @return  self
     */ 
    public function setNbSeats(int $nbSeats)
    {
        $this->nbSeats = $nbSeats;

        return $this;
    }

    /**
     * Get the value of energy
     */ 
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * Set the value of energy
     *
     * @return  self
     */ 
    public function setEnergy(string $energy)
    {
        $this->energy = $energy;

        return $this;
    }

    /**
     * Get the value of energyLevel
     */ 
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    /**
     * Set the value of energyLevel
     *
     * @return  self
     */ 
    public function setEnergyLevel(int $energyLevel)
    {
        $this->energyLevel = $energyLevel;

        return $this;
    }
  }