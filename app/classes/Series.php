<?php

namespace App\classes;
class Series
{
    public $startTingNumber, $endingNumber, $result, $i;

    public function __construct($post)
    {
        $this->startTingNumber  = $post['startin_number'];
        $this->endingNumber     = $post['ending_number'];
    }

    public function index()
    {
        for($this->i = $this->startTingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            //echo $this->i." ";
            $this->result .= $this->i .' ';

        }
        header("Location: web.php?page=gallary&&result=$this->result");
    }

}