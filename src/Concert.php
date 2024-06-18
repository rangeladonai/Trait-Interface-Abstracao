<?php

class Concert implements PricingContract
{
    use HasMenu;

    public float $ticketPrice;

    public function __construct(array $itensMenu)
    {
        //Métodos do trait HasMenu Herdado
        $this->setMenu($itensMenu); //Método herdado da trait HasMenu na linha 5
        print_r($this->getMenu()); //Método herdado da trait HasMenu na linha 5
    }

    //metodos implementados pela interface PricingContract
    public function setTicketPrice(float $price)
    {
        $this->ticketPrice = $price;
    }
    public function getTicketPrice()
    {
        return $this->ticketPrice;
    }
}