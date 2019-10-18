<?php
require_once "controller.php";
class ControllerUser extends Controller{
    function listing(){
        //kiêm tra xem với user này có quyền xem danh sách branch hay không
        $user=App::get_user();
        if($user->type!="admin"){
            $msg="you cannot access branch";
            header("Location:".ADMIN_ROOT_SITE."/index.php?msg=$msg");
        }
        $model=$this->getModel('user');
        //function getListing()
        $listing_branch=$model->get('Listing');
        $this->display("user",'listing',"listing",$listing_branch);

    }
    function add(){
        //kiêm tra xem với user này có quyền xem danh sách branch hay không
        $user=App::get_user();
        if($user->type!="admin"){
            $msg="you cannot access user";
            header("Location:".ADMIN_ROOT_SITE."/index.php?msg=$msg");
        }
        $this->display("user",'add',"add",null);

    }
    function edit(){
        //kiêm tra xem với user này có quyền xem danh sách branch hay không
        $user=App::get_user();
        if($user->type!="admin"){
            $msg="you cannot access branch";
            header("Location:".ADMIN_ROOT_SITE."/index.php?msg=$msg");
        }
        $id=$_GET['id'];
        $model=$this->getModel('user');
        $item=$model->get('item',$id);
        $this->display("user",'edit',"edit",$item);

    }
    function postadd(){
        //kiêm tra xem với user này có quyền xem danh sách branch hay không
        $user=App::get_user();
        if($user->type!="admin"){
            $msg="you cannot access branch";
            header("Location:".ADMIN_ROOT_SITE."/index.php?msg=$msg");
        }
        $model=$this->getModel('user');
        $new_id=$model->action('add',null);
        if($new_id)
        {
            if(isset($_POST['save_close'])){
                $msg="add item user success";
                header("Location:".ADMIN_ROOT_SITE."/index2.php?controller=user&task=listing&msg=$msg");
            }
            if(isset($_POST['save'])){
                $msg="add item user success";
                header("Location:".ADMIN_ROOT_SITE."/index2.php?controller=user&task=edit&id=$new_id&msg=$msg");
            }


        }

    }
    function postedit(){

        //kiêm tra xem với user này có quyền xem danh sách branch hay không
        $user=App::get_user();
        if($user->type!="admin"){
            $msg="you cannot access branch";
            header("Location:".ADMIN_ROOT_SITE."/index.php?msg=$msg");
        }
        $id=$_GET['id'];
        $model=$this->getModel('branch');
        if($model->action('edit',$id))
        {
            if(isset($_POST['save_close'])){
                $msg="edit item success";
                header("Location:".ADMIN_ROOT_SITE."/index2.php?controller=user&task=listing&msg=$msg");
            }
            if(isset($_POST['save'])){
                $msg="edit item success";
                header("Location:".ADMIN_ROOT_SITE."/index2.php?controller=user&task=edit&id=$id&msg=$msg");
            }


        }

    }
}
?>