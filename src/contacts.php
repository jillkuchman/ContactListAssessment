<?php

    class Contact
    {

        private $name;
        private $phonenumber;
        private $address;

        function __construct($name, $phonenumber, $address)
        {

            $this->name = $name;
            $this->phonenumber = $phonenumber;
            $this->address = $address;

        }

    }

?>
