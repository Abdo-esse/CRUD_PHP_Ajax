<?php

include './config.php';

class Database{

    public function insert($fname,$lname,$email,$phone){
        $conn= Connexion::connexion();
        $sql= 'INSERT into users(first_name,last_name,email,phone) value(:fname,:lname,:email,:phone)';
        $stm= $conn->prepare($sql);
        $stm->execute([
            'first_name'=>$fname,
            'last_name'=>$lname,
            'email'=>$email,
            'phone'=>$phone
        ]);
        return true;
    }
}