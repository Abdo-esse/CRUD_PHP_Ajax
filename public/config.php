<?php 

class Connexion
{
    private static $host = 'db';  // The service name defined in Docker Compose
    private static $db = 'mydatabase';
    private static $username = 'user';
    private static $password = 'password';
     public static $conn=null;

    static function connexion()
    {
        if(self::$conn===null)
        {
            try{
                self::$conn= new PDO("pgsql:host=".self::$host.";dbname=".self::$db,
                self::$username,
                self::$password,
            );
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOExeption $exeption)
            {
                die ( " L'error est " . $exeption->getMessage());
            }
            return self::$conn;

        }
        else
        {
            return self::$conn;
        }

    }


}

// Connexion::connexion();