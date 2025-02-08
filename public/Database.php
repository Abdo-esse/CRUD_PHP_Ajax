<?php

include './config.php';

class Database{

    public function insert($fname, $lname, $email, $phone) {
        if (empty($fname) || empty($lname) || empty($email) || empty($phone)) {
            throw new Exception("Tous les champs doivent être remplis.");
        }
    
        $conn = Connexion::connexion();
        $sql = 'INSERT INTO users (first_name, last_name, email, phone) VALUES (:fname, :lname, :email, :phone)';
        
        $stm = $conn->prepare($sql);
        $stm->execute([
            ':fname' => $fname,
            ':lname' => $lname,
            ':email' => $email,
            ':phone' => $phone
        ]);
    
        return true;
    }
    
    
    
}