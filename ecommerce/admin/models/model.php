<?php
class model{
    function get($task,$arg=null){

        if(method_exists($this,"get$task")){
            return call_user_func_array(array($this, "get$task"), array($arg));

        }
        return null;

    }
    function getConnection(){
        $connection= mysqli_connect("localhost","root","mysql","php1907e_db_1") or die("can not connect database");
        return $connection;
    }
    function action($action,$arg){

        if(method_exists($this,"action_$action")){
            return call_user_func_array(array($this, "action_$action"), array($arg));

        }
        return null;
    }


}