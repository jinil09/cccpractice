<?php

class BankAccount{
    private $Acc_Number;
    private $Acc_Hname;
    private $balanec;


    public function __construct($Acc_Number, $Acc_Hname, $balanec){
        $this->Acc_Number = $Acc_Number;
        $this->Acc_Hname = $Acc_Hname;
        $this->balanec = $balanec;
    }

    public function deposite($amount){
        $this->balanec += $amount;
        echo "Deposite Succsessfully Done<br>";
    }

    public function withdraw($amount){
        if($this->balanec >= $amount){
            $this->balanec -= $amount;
            echo "Withdraw Succsessfully Done<br>";
        }else{
            echo "Not Enougth balace to withdraw this amount(".$amount.")";
        }
    }

    public function displayBalance(){
        echo "[Your current Balance is : ".$this->balanec."]<br>";
    }

    public function displayAccInfo(){
        echo "[Account No: ".$this->Acc_Number.", Account Holder Name: ".$this->Acc_Hname.", Current Balance: ".$this->balanec."]<br>";
    }
}

$user1 = new BankAccount("123456","Jinil","5000");

$user1->displayAccInfo();
$user1->deposite(500);
$user1->displayAccInfo();
$user1->withdraw(5000);
$user1->displayAccInfo();


?>