<?php

namespace App;


class User
{
    public $id;
    public $firstName;
    public $lastName;

    function __construct($id, $firstName, $lastName)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function toArray()
    {
        return [
            'id' => $this->id,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
        ];
    }

    function __toString()
    {
        return json_encode($this->toArray());
    }
}
