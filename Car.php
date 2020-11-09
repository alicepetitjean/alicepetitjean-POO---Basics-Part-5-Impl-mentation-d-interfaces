<?php
    require_once 'Vehicle.php';
    require_once 'LightableInterface.php';

    class Car extends Vehicle implements LightableInterface
    {
        const ALLOWED_ENERGIES = [
            'fuel',
            'electric',
        ];

        private string $energy;
        private int $energyLevel;

        public function __construct( string $color , int $seatsNumber, string $energy){

            parent::__construct($color, $seatsNumber);
            $this->setEnergy($energy);
        }

        public function switchOn()
        {
            return true;
        }
        public function switchOff()
        {
            return false;
        }
        
        public function start(){
            return "Engine Started";
        }

        //Setter

        public function setEnergy(string $energy){
            if (in_array($energy, self::ALLOWED_ENERGIES)) {
                $this->energy = $energy;
            }
            return $this;
        }
        public function setEnergyLevel(string $energyLevel){
            $this->energyLevel = $energyLevel;
        }
        //Getter

        public function getEnergy(){
            return $this->energy;
        }
        public function getEnergyLevel(){
            return $this->energyLevel;
        }

    }
