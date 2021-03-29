<?php

use Doctrine\ORM\Mapping as ORM;

//Anotate the classes and properts, metadata

/**
 * @ORM\Entity
 * @ORM\Table(name="persons")
 * 
 */

class Person
{
    //Anotations classes
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */    
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $email; 
    /**
     * @ORM\Column(type="integer")
    */
    protected $phone;


    //getters/setters
    public function getId()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }

    
    public function setName($name)
    {
        $this->name = $name;
    }


    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email = $email;
    }    

    public function getPhone()
    {
        return $this->phone;
    }
    
    public function setPhone($phone)
    {
        $this->phone = $phone;
    } 


}
