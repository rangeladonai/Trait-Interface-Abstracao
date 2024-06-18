<?php

//Trait HasMenu criado pois tenho 2 classes que representam objetos de teram Menu.
//para nao precisar escrever o mesmo codigo com mesma funcao, eu apenos crio o Trait e defino ele na classe filha
trait HasMenu
{
    public $menu = [];

    public function setMenu(array $itens)
    {
        $this->menu = $itens;
    }

    public function getMenu()
    {
        return $this->menu;
    }
}