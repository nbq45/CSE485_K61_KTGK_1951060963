<?php
    require_once 'config/db.php';

    class model{
        private $mamh;
        private $ten_mh;
        private $sotinchi;
        private $sotiet_lt;
        private $sotiet_bt;
        private $sotiet_thtn;
        private $sogio_tuhoc;

        public function connectDb(){
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if (!$connection) {
                die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
            }
    
            return $connection;
        }
    
        public function closeDb($connection = null) {
            mysqli_close($connection);
        }
    
        public function getAllMh(){
            $conn = $this->connectDb();
            $sql = "SELECT * FROM monhoc";
            $result = mysqli_query($conn,$sql);
            
            $data = [];

            if(mysqli_num_rows($result) > 0){
                $arr_subj = mysqli_fetch_all($result, MYSQLI_ASSOC); 
            }
            $this->closeDb($conn);

            return $arr_subj;
        }

        public function deleteMh($mamh){
            $conn = $this->connectDb();
            $sql = "DELETE FROM monhoc WHERE mamh = '$mamh'";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }
        
        public function getMh($mamh){
            $conn = $this->connectDb();

            $sql = "SELECT * FROM monhoc WHERE mamh = '$mamh'";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result) > 0)
                $user = mysqli_fetch_assoc($result);
            $this->closeDb($conn);
        }

        public function updateMh($mamh, $ten_mh, $sotinchi, $sotiet_lt, $sotiet_bt, $sotiet_thtn, $sogio_tuhoc) {
            $conn = $this->connectDb();
            $sql = "UPDATE monhoc SET mamh = '$mamh', ten_mh = '$ten_mh', sotinchi = '$sotinchi', sotietlt = '$sotiet_lt', sotiet_bt = '$sotiet_bt', sotiet_thtn = '$sotiet_thtn', sogio_tuhoc =  '$sogio_tuhoc' ";
            $result = mysqli_query($conn,$sql);
            $this->closeDb($conn);
            return $result;
        }
    }

    
?>