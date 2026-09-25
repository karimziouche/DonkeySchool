<?php

class Personne
{
    public $lastName;
    public $firstName;
    public $adresse;
    public $dateOfBirth;

    public function displayInfo()
    {
        echo $this->lastName;
        echo $this->firstName;
        echo $this->adresse;
        echo $this->dateOfBirth;
    }
    public function setAdresse(string $adresse): void
    {
        $this->adresse = $adresse;
    }
    public function getAge(): int
    {
        $birthDate = new DateTime($this->dateOfBirth);
        $today = new DateTime();
        $difference = $birthDate->diff($today);
        return $difference->y;
    }
}

$personne = new Personne();

$personne->lastName = "Dupond" ."<br>";
$personne->firstName = "Jean" ."<br>";
$personne->adresse = "10 rue saint denis" ."<br>";
$personne->dateOfBirth= "2000-05-10" ."<br>";

$personne->displayInfo();

echo"<br>";
echo "Age : " . $personne->getAge() . "ans";