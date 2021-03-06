<?php

    class Contact
    {

        private $name;
        private $number;
        private $address;

        function __construct($name, $number, $address)
        {

            $this->name = $name;
            $this->number = $number;
            $this->address = $address;

        }

        function setName($str_name)
        {
            $this->name = (string) $str_name;
        }

        function getName()
        {
            return $this->name;
        }

        function setNumber($str_number)
        {
            $this->number = (string) $str_number;
        }

        function getNumber()
        {
            return $this->number;
        }

        function setAddress($str_address)
        {
            $this->address = (string) $str_address;
        }

        function getAddress()
        {
            return $this->address;
        }

        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }

        static function getAll()
        {

            return $_SESSION['list_of_contacts'];

        }

        static function deleteAll()
        {

            $_SESSION['list_of_contacts']=array();

        }

    }

?>
