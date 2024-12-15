<?php

abstract class Product {
    abstract function getPrice();
    abstract function getDetails();
    abstract function calculateDisc();
    
    function toStr(){
        return "idk what im doing";
    }
}

interface Taxable {
    function calcTax();
}

interface Discount{
    function applyDisc();

}

interface Returnable{
 function saleRetuen();
}

class PhPro extends Product implements Taxable, Discount , Returnable{
    function getPrice() {}
    function getDetails(){}
     function calculateDisc(){}
     function calcTax(){}
    function applyDisc(){}
    function saleRetuen(){}    
}


class DigiPro extends Product implements Taxable , Discount{
    function getPrice(){}
    function getDetails(){}
    function calculateDisc(){}
    function calcTax(){}
    function applyDisc(){}
} ?>