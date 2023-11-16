<?php
    require_once 'DbConfig.php';
    
    class User extends DbConfig
    {
        private $voornaam;
        private $tussenvoegsel;
        private $achternaam;
        private $adres;
        private $postcode;
        private $telefoon;

        public function addUser($data)
        {
            try{
                $this->voornaam = $data['voornaam'];
                $this->tussenvoegsel = $data['tussenvoegsel'];
                $this->achternaam = $data['achternaam'];
                $this->adres = $data['adres'];
                $this->postcode = $data['postcode'];
                $this->telefoon = $data['telefoon'];

                $sql = "INSERT INTO user (voornaam, tussenvoegsel, achternaam, adres, postcode, telefoon) VALUES (:voornaam, :tussenvoegsel, :achternaam, :adres, :postcode, :telefoon)";

                $this->connect();
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(':voornaam', $this->voornaam);
                $stmt->bindParam(':tussenvoegsel', $this->tussenvoegsel);
                $stmt->bindParam(':achternaam', $this->achternaam);
                $stmt->bindParam(':adres', $this->adres);
                $stmt->bindParam(':postcode', $this->postcode);
                $stmt->bindParam(':telefoon', $this->telefoon);

                if(!$stmt->execute()){
                    throw new Exception("Het toevoegen van de user is mis gegaan.");
                }
                return "{$this->voornaam} is toegevoegd";
               
            }catch(Exception $e){
                return $e->getMessage();
            }
        }

        public function changeUser()
        {

        }

        public function deleteUser()
        {

        }

        public function showUsers()
        {
            
        }
    }
?>