<?php
include 'connect.php';
$connect = getDatabaseConnection();
    function createUser($name, $email, $password){
        global $connect;
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $createQuery = "INSERT INTO users (name,email,password) VALUES (?,?,?)";

        $createStatement = $connect->prepare($createQuery);
        $createStatement->bind_param("sss",$name, $email, $hashedPassword);

        if ($createStatement->execute()){
            echo "Added User!";
        } else {
            echo "Unsuccessful";
        }
    }

    function validateUser($email, $password){
        global $connect;

        $findQuery = "SELECT email, password FROM users WHERE email = ?";
        $findStatement = $connect->prepare($findQuery);
        $findStatement->bind_param("s", $email);
        $findStatement->execute();
        $result = $findStatement->get_result(); 

        while ($row = $result->fetch_assoc()){
            if ($row['email'] == $email){
                if (password_verify($password, $row['password'])){
                    return true;
                }
            }
        }
        return false;
    }
?>