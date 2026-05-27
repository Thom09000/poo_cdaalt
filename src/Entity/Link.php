<?php

namespace App\Entity;

use DateTime;

class Link
{
    //Attributes
    private int $id;
    private string $url;
    private string $icon;
    private string $name;
    private string $description;
    private DateTime $created_at;
    private string $account_id;


    //Constructor (valeur obligatoire)
    public function __construct(string $url, string $icon, string $name, string $description, DateTime $created_at, string $account_id)
    {
        $this->url = $url;
        $this->icon = $icon;  
        $this->name = $name;
        $this->description = $description;
        $this->created_at = $created_at;
        $this->account_id = $account_id;
    }
    

    //Getters and Setters
    public function getId(): int
    {
        return $this->id;
    }

 
    public function getUrl(): string 
    {
        return $this->url;
    }
    public function getIcon(): string
    {
        return $this->icon;
    }
    public function getName(): string 
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getCreatedAt(): DateTime
    {
        return $this->created_at;
    }
    public function getAccountId(): string 
    {
        return $this->account_id;
    }

    /*--------------------------------------------------------*/
    /*-------------------------------------------------------*/
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }
    public function setIcon(string $icon): void
    {
        $this->icon = $icon;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
    public function setAccountId(string $account_id): void
    {
        $this->account_id = $account_id;
    }


    //toString
    public function __toString(): string
    {
        return $this->name;
    }
}