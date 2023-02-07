<?php

class User
{

    public $userName;

    public function __construct($name)
    {
        $this->userName = $name;
    }

    public function hello()
    {
        echo 'Hello , ' . $this->userName;
        return $this;
    }

    public function register()
    {
        echo ' >> registered';
        return $this;
    }

    public function mail()
    {
        echo ' >> email sent ';
        return $this;
    }

}


function test(){
    $user1 = new User("Anicet");
    $user1->hello()->register()->mail();
}

test();