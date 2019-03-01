<?php
/**
 * Created by PhpStorm.
 * User: aymen
 * Date: 01/03/2019
 * Time: 08:52
 */

class Personne
{
    private $name;
    private $firstName;

    /**
     * Personne constructor.
     * @param $name
     * @param $firstName
     */
    public function __construct($name = "", $firstName = "")
    {
        $this->name = $name;
        $this->firstName = $firstName;
    }
    public function sayMyName() {
       echo $this->name.' '.$this->firstName;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName): void
    {
        $this->firstName = $firstName;
    }


}