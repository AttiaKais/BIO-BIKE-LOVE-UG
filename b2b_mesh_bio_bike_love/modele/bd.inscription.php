<?php

function addvisiteur($name, $lastname, $mail, $number, $cpname, $cpadress, $vatnumber,$password,$cpzipcode,$cpcity){
        
        try {
            
            $con= connexionPDO();

       $req = $con->prepare("INSERT INTO client (`name`, `lastname`,`mail`,`number`,`cpname`,`cpadress`,`cpzipcode`,`cpcity`,`vatnumber`,`password`) VALUES (:name, :lastname, :mail, :number, :cpname, :cpadress,:cpzipcode, :cpcity, :vatnumber, :password)");

       $req->bindValue(':name', $name, PDO::PARAM_STR);
       $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
       $req->bindValue(':mail', $mail, PDO::PARAM_STR);
       $req->bindValue(':number', $number, PDO::PARAM_STR);
       $req->bindValue(':cpname', $cpname, PDO::PARAM_STR);
       $req->bindValue(':cpadress', $cpadress, PDO::PARAM_STR);
       $req->bindValue(':vatnumber', $vatnumber, PDO::PARAM_STR);
       $req->bindValue(':password', $password, PDO::PARAM_STR);
       $req->bindValue(':cpzipcode', $cpzipcode, PDO::PARAM_STR);
       $req->bindValue(':cpcity', $cpcity, PDO::PARAM_STR);


            $resultat = $req->execute();
            
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
        return $resultat;
    }





