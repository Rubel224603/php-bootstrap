<?php


namespace App\classes;


class FullName
{
    public $fistName;
    public $lastName;
    public $fullName;

    public function __construct($post) {

        //$fullName = $fistName.$lastName;
        $this->fistName = $post['first_Name'];
        $this->lastName = $post['last_Name'];

    }
    public function index(){
        $this->fullName = $this->fistName." ".$this->lastName;
        //echo $this->fullName;
        header("Location:web.php?page=contact&&result=$this->fullName");
    }
}