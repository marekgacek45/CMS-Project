<?php

class User
{
    public $id;
    public $username;
    public $password;

    public static function authenticate($conn, $username, $password)
    {

        $sql = "SELECT * FROM admin WHERE username=:username";

        $stmt = $conn->prepare($sql);

        $stmt->bindValue(":username", $username, PDO::PARAM_INT);

        $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');

        $stmt->execute();

        $user = $stmt->fetch();

        // if ($user) {
        //     if ($password == $user->password)
        //         return true;

        // }
        $stmt->execute();

        if($user = $stmt->fetch()){
          return password_verify($password, $user->password);
        };
       
    }

    

}

?>