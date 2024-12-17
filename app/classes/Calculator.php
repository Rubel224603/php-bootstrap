<?php


namespace App\classes;


class calculator
{
    public $fristNumber, $secondNumber, $result,$choice;

    public function  __construct($post)
    {
        $this->fristNumber=$post['first_number'];
        $this->secondNumber=$post["second_number"];
        $this->choice =$post["choice"];
    }

    public function index(){
        switch ($this->choice){
            case "+":
                $this->result = $this->adddition();
                break;
            case "-":
                $this->result = $this->subtraction();
                break;
            case "*":
                $this->result = $this->multiplaction();
                break;
            case "/":
                $this->result =$this->division();
                break;
            case "%":
                $this->result = $this->remainder();
                break;
        }
        header("Location:web.php?page=about&&result=$this->result");
    }


    public function adddition()
    {
        $this->result= $this->fristNumber + $this->secondNumber;
        return $this->result;
    }
    public function subtraction()
    {
        $this->result= $this->fristNumber - $this->secondNumber;
        return $this->result;
    }
    public function multiplaction()
    {
        $this->result= $this->fristNumber * $this->secondNumber;
        return $this->result;
    }
    public function division()
    {
        $this->result= $this->fristNumber / $this->secondNumber;
        return $this->result;
    }
    public function remainder()
    {
        $this->result= $this->fristNumber % $this->secondNumber;
        return $this->result;
    }

}