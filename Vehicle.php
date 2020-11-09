<?php

    class Vehicle
    {
        private $color;
        private $currentSpeed;
        private $seatsNumber;
        private $wheelsNumber;

        public function __construct(string $color, int $seatsNumber)
        {
            $this->color = $color;
            $this->seatsNumber = $seatsNumber;
        }

        public function forward(): string
        {
            $this->currentSpeed++;
            return "Go !";
        }

        public function brake(): string
        {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake !!!";
            }

            $sentence .= "I'm stopped !";
            return $sentence;
        }


        //Setter

        public function setCurrentSpeed(int $currentSpeed)
        {
            if($currentSpeed >= 0){
                $this->currentSpeed = $currentSpeed;
            }
        }
        public function setColor(string $color)
        {
            $this->color = $color;
        }
        public function setNbSeats(int $nbSeats)
        {
            $this->nbSeats = $nbSeats;
        }
        public function setNbWheels(int $nbWheels)
        {
            $this->nbWheels = $nbWheels;
        }
        public function setSpeed(int $speed){
            $this->currentSpeed = $speed;
        }


        //Getter
        public function getCurrentSpeed(): int
        {
            return $this->currentSpeed;
        }

        public function getColor(): string
        {
            return $this->color;
        }

        public function getNbSeats(): int
        {
            return $this->nbSeats;
        }

        public function getNbWheels(): int
        {
            return $this->nbWheels;
        }
    }
