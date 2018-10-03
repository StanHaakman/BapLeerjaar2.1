<?php
/**
 * Created by PhpStorm.
 * User: stanh
 * Date: 26-9-2018
 * Time: 10:01
 */
class Person {

    public $firstname;
    public $middlename;
    public $lastname;

    public function __construct($firstname, $lastname){

        $this->firstname = $firstname;
        $this->lastname = $lastname;

    }

    public function getFullname(){
        return $this->firstname . ' ' . $this->lastname;
    }


}