<?php

//classe abstrata permite definir metodos abstratos sem codigo para que sejam escritos na classe filha
// permite definir metodos com codigo ja definido
// permite definir propriedades
abstract class Event
{
    public int $amountPeoples;
    public int $maxAmountPeoples;

    function setMaxAmountPeoples(int $max)
    {
        $this->maxAmountPeoples = $max;
    }

    function getAmountPeoples()
    {
        return $this->amountPeoples;
    }

    abstract public function addPeoples(int $amount);
}