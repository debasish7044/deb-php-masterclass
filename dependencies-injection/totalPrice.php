<?php


class TotalPrice{

  private $carPrices = [
    "honda" => 1000,
    'civic' => 2000
  ];

  public function calculatePrice($brand,$qty){
     $totalPrice = $this->carPrices[$brand] * $qty;
     return "Your total price is {$totalPrice} <br>";
  }

}