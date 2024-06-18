<?php

class Play
{
    use HasMenu;

    public function __construct(array $itensMenu)
    {
        //Métodos do trait HasMenu Herdado
        $this->setMenu($itensMenu); //Método herdado da trait HasMenu na linha 5
        print_r($this->getMenu()); //Método herdado da trait HasMenu na linha 5
    }
}