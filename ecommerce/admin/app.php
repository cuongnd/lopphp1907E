<?php
class App
{
    static function check_login(){
        //viết code kiểm tra xem login
        //tạm thời cứ để login đã
        $user= $_SESSION['user'];
        $user=json_decode($user);
        if($user->id>0){
            return true;
        }
        return false;
    }

}
