<?php
require_once "model.php";
class ModelUser extends model {
    function getListing(){
        $connection=self::getConnection();
        $query="SELECT * FROM users";
        $kq=mysqli_query($connection,$query);
        $list=array();
        while ($row=mysqli_fetch_array($kq)){
            $list[]=$row;
        }
        return $list;

    }
    function getItem($id){

        $connection=self::getConnection();
        $query="SELECT * FROM users WHERE id=".$id;
        $kq=mysqli_query($connection,$query);
        $item=$kq->fetch_assoc();
        return $item;

    }
    /*
     * Listing
     */
    function action_add(){
        //se lam sau
        $connection=self::getConnection();


        $full_name=$_POST['full_name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $type=$_POST['type'];
        $block=$_POST['block'];
        $note=$_POST['note'];
        $query="INSERT INTO `users` 
            (`id`, `full_name`, `username`, `email`, `password`, `type`, `block`, `note`) 
    VALUES (NULL, '$full_name', '$username', '$email', '$password', '$type', '$block', '$note');";
        mysqli_query($connection,$query);
        $new_branch_insert_id=mysqli_insert_id($connection);
        return $new_branch_insert_id;
    }
    function action_edit($id){

        $connection=self::getConnection();
        $title=$_POST['title'];
        $description=$_POST['description'];
        $ordering=$_POST['ordering'];
        $query="UPDATE `branch` SET `title` = '$title', `description` = '$description',`ordering` = '$ordering' WHERE `branch`.`id` = $id;";
        mysqli_query($connection,$query);
        mysqli_insert_id($connection);
        return true;
    }

}
?>