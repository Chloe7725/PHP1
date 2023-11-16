<?php
    class DbConfig
    {
        protected $conn;

        public function connect()
        {
            try{
                $conn = new PDO("mysql:host=localhost;dbname=les1", 'root', 'root');
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                $this->conn = $conn;
            }catch(PDOException $e)
            {
                die($e->getMessage());
            }
        }
    }
?>