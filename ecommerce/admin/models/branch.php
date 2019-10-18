<?php
require_once "model.php";
class ModelBranch extends model {
    function getListing(){
        $connection=mysqli_connect("localhost","root","mysql","php1907e_db_1") or die("can not connect database");
        $query="SELECT * FROM branch";
        $kq=mysqli_query($connection,$query);
        $list=array();
        while ($row=mysqli_fetch_array($kq)){
            $list[]=$row;
        }
        return $list;

    }
    function getItem($id){

        $connection=mysqli_connect("localhost","root","mysql","php1907e_db_1") or die("can not connect database");
        $query="SELECT * FROM branch WHERE id=".$id;
        $kq=mysqli_query($connection,$query);
        $item=$kq->fetch_assoc();
        return $item;

    }
    /*
     * Listing
     */
    function action_add(){

        $connection=mysqli_connect("localhost","root","mysql","php1907e_db_1") or die("can not connect database");
        $title=$_POST['title'];
        $description=$_POST['description'];
        $ordering=$_POST['ordering'];
        $query="INSERT INTO `branch` 
            (`id`, `title`, `description`, `ordering`)
     VALUES (NULL, '$title', '$description', '$ordering');";
        mysqli_query($connection,$query);
        $new_branch_insert_id=mysqli_insert_id($connection);
        return $new_branch_insert_id;
    }
    function action_edit($id){
        $connection=mysqli_connect("localhost","root","mysql","php1907e_db_1") or die("can not connect database");
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