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

        function edit(){
            $model = new model;
            $id = $_GET['id'];
            $data = $model->getMh($id);
            require_once('view/edit.php');
            if(isset($_POST['submit'])){   
                $ten_mh = $_POST['txtTenMh'];
                $sotinchi = $_POST['txtTC'];
                $sotiet_lt = $_POST['txtTLT'];
                $sotiet_bt = $_POST['txtTBT'];
                $sotiet_thtn = $_POST['txtTTN'];
                $sogio_tuhoc = $_POST['txtTenHH'];
                $result = $model->updateMh($mamh, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt, $sotiet_thtn, $sogio_tuhoc);
                    if($result)
                    header("location:index.php");
                    else
                    header("error.php");
            }
        }
    }
?>