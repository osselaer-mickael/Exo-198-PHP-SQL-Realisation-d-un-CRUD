<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
    $servername = "localhost";
    $username = "id11271913_moi";
    $password = "123456789";
    $dbname = "id11271913_newtest";

    $conn = new Mysqli($servername, $username, $password);

    if($conn->connect_error){
        echo $conn->connect_error;
    }else {
        $conn->select_db($dbname);

        function newPers($prenom,$nom, $age){
            $sql = "INSERT INTO eleves VALUES (NULL, $prenom, $nom, $age)";
            return $sql;
        }

        $sql = newPers('Jacques', 'polnareff', 90);

        $conn->query($sql);

        function afficheAllEleves(){
            $sql = "SELECT * FROM eleves";
            return $sql;
        }
        $sql = afficheAllEleves();
        $res = $conn->query($sql);

        while($test = $res->fetch_assoc()){
            echo $test['id']." ".$test['nom']." ".$test['prenom']." ".$test['age']."<br>";
        }
        $sql = "UPDATE eleves SET prenom = 'XX' WHERE id = 1";
        $conn->query($sql);
    }



