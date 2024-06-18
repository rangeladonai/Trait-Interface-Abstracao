<?php

///Interface de preço contém apenas assinaturas de metodos, sem codigo, pois define um padrao para as classes que implementarem a classe
// e serão obrigadas há implementar os métodos assinados na interface.
interface PricingContract
{
    public function setTicketPrice(float $price);
    public function getTicketPrice();
}