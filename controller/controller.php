<?php
    require_once 'model/model.php';

    class controller{
        function index() {
            $model = new model;
            $datas = $model->getAllMh();
            require_once('view/index.php');
        }
    }
?>