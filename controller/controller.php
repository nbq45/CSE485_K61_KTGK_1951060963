<?php
    require_once 'model/model.php';

    class controller{
        function index(){
            $model = new model;
            $datas = $model->getAllMh();
            require_once('view/index.php');
        }

        function delete(){
            $model = new model;
            $id = $_GET['id'];
            $result = $model->deleteMh($id);
            if($result)
                header("location:index.php");
                else
                header("error.php");
        }
    }
?>