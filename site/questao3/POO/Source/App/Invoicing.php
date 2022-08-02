<?php

namespace Source\App;

class Invoicing
{
   private $lowerBilling; // Menor faturamento
   private $higherBilling; // Maior Faturamento
   private $aboveAverageBillingDays = []; //fat. acima da média
   private $monthlyBilling; // Faturamento mensal
   private $billingAverage; // Faturamento médio
   private $daysWithoutBilling = []; // Dias sem faturamento
   private $numberOfDays; // Qtd. De dias

   public function __construct( Array $data)
   {
      $this->numberOfDays = count($data);
      
      foreach($data as $d){
         if ($d['valor'] != 0) {
            $this->monthlyBilling += $d['valor'];
         }
      }
      
      $this->billingAverage = ($this->monthlyBilling / $this->numberOfDays);
   }

   public function lowerBilling( Array $data)
   {
      foreach($data as $d){

   	     if(empty($this->lowerBilling)){
		   $this->lowerBilling = [$d['dia'], $d['valor']];	   
   	     }

         if($d['valor'] < $this->lowerBilling[1] and $d['valor'] != 0){
            $this->lowerBilling = [$d['dia'], $d['valor']];	   
         }
      }

      return $this->lowerBilling;
   }

   public function higherBilling( Array $data)
   {
      foreach($data as $d){

   	     if(empty($this->higherBilling)){
		   $this->higherBilling = [$d['dia'], $d['valor']];	   
   	     }

         if($d['valor'] > $this->higherBilling[1] and $d['valor'] != 0){
            $this->higherBilling = [$d['dia'], $d['valor']];	   
         }
      }

      return $this->higherBilling;
   }

   public function aboveAverageBillingDays( Array $data)
   {
      if(empty($this->aboveAverageBillingDays)) {
         foreach($data as $d){
            if($d['valor'] > $this->billingAverage){
               array_push($this->aboveAverageBillingDays, [$d['dia'], $d['valor']]);	 
            }  
         }
      }
      
      return $this->aboveAverageBillingDays;
   } 

   public function daysWithoutBilling( Array $data)
   {
      foreach($data as $d){
         if($d['valor'] == 0){
            array_push($this->daysWithoutBilling, [$d['dia'], $d['valor']]);	   
         }

      }
      
      return $this->daysWithoutBilling;
   }  

   public function getNumberOfDays()
   {
      return $this->numberOfDays;
   }

   public function getMonthlyBilling()
   {
      return $this->monthlyBilling;
   }

   public function getBillingAverage()
   {
      return $this->billingAverage;
   }

}

?>