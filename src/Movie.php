<?php

class Movie extends Event
{
    public function __construct($maxPeoples)
    {
        $this->setMaxAmountPeoples($maxPeoples);
    }

    public function addPeoples(int $amount)
    {
        $amountTest = $this->getAmountPeoples() + $amount;
        if ($this->getAmountPeoples() == $this->maxAmountPeoples || $amountTest > $this->maxAmountPeoples){
            throw new Exception("Numero maximo de pessoas atingido");
            return;
        }
        $this->amountPeoples += $amount;
    }
}