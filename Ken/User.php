<?php

namespace Utilisateurs;

class User
{
    public int $id;
    public string $email;
    public string $password;

    public function __construct(int $id, string $email, string $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;

    }

    public function __ToString(): string
    {
        return "User $this->id: email => $this->email password => $this->password";
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getId():int 
    {
        return $this->id;
    }

    public function getEmail():string 
    {
        return $this->email;
    }
    
    public function getPassword():string 
    {
        return $this->password;
    }

}