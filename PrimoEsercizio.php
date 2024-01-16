<?php

class Company {
    public $name;
    public $location;
    public $tot_employees = 0;
    public static $avg_wag = 1500;
    public static $tot_wag = 0;
    public contatore = 0 ;
    
    public function __construct($name, $location, $tot_employees=0){
        
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        
    }

    public function Hello(){
        
       
       if($this->tot_employees > 0){
        echo 'l ufficio ' . $this->name . ' si trova a ' . $this->location . ' e ha ' . $this->tot_employees . ' dipendenti';
       }
        else if($this->tot_employees == 0 || $this->tot_employees == null){
            
            echo 'l ufficio ' . $this->name . ' si trova a ' . $this->location . ' e non ha dipendenti';
            
        }
    }

    public function AvgWag(){

        
        $annual_expense = $this->tot_employees * self::$avg_wag;
        self::$tot_wag += $annual_expense;
        echo "La spesa annuale per {$this->name} è di {$annual_expense} euro.\n";
    
    }
    public static function calculateTotals(){
        

    }
    echo "Totale dipendenti di tutte le aziende: {$tot_employees}\n";
    echo "Totale spese annuali di tutte le aziende: {$tot_wag} euro\n";
   
}}
$Azienda1 = new Company('Google', 'Dublino', 1000 );
$Azienda2 = new Company('Facebook','Francoforte',2000 );
$Azienda3 = new Company('Netflix', 'Milano', 3000 );
$Azienda4= new Company('Apple', 'Roma', 4000 );
$Azienda5 = new Company('Amazon', 'Torino', 5000 );


Company::calculateTotals();

//$Azienda1->Hello();
//$Azienda1->AvgWag();