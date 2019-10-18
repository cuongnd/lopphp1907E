<?php
class controller{
    function display($view,$task,$layout,$data){
        $file_view=ADMIN_ROOT_PATH."/views/$view/$layout.php";
        if(file_exists($file_view)){
            require_once $file_view;
        }

    }
    function getModel($model_name){
        $file_model=ADMIN_ROOT_PATH."/models/$model_name.php";
        if(file_exists($file_model)){
            require_once $file_model;
            $model_class_name= "Model$model_name";
            $model_class=new $model_class_name();
            return $model_class;
        }
        return null;
    }

}