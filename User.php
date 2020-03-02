<?php
/**
 * Created by PhpStorm.
 * User: 16495
 * Date: 29.01.2020
 * Time: 14:36
 */

class User
{


    public function getOneUser($id)
    {
        $stmt=$this->pdo->prepare("SELECT * FROM users where id=:id");
        if($stmt->execute(["id"=>$id])){
            return $stmt->fetch();
        };
        return null;
    }
}