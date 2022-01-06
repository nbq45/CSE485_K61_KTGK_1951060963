<?php include('templates/header.php'); ?>

<div class="container">
        <h5 class="text-center text-primary mt-5">DANH BẠ ĐIỆN THOẠI CÁN BỘ/GIẢNG VIÊN TRƯỜNG ĐH THỦY LỢI</h5>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã môn học</th>
                    <th scope="col">Tên môn học</th>
                    <th scope="col">Số tín chỉ</th>
                    <th scope="col">Số tiết lý thuyết</th>
                    <th scope="col">Số tiết bài tập</th>
                    <th scope="col">Số tiết thực hành - thí nghiệm</th>
                    <th scope="col">Số giờ tự học</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datas as $data){
                ?>
                    <tr>
                        <th scope="row"><?php echo $data['mamh']; ?></th>
                        <td><?php echo $data['ten_mh']; ?></td>
                        <td><?php echo $data['sotinchi']; ?></td>
                        <td><?php echo $data['sotiet_lt']; ?></td>
                        <td><?php echo $data['sotiet_bt']; ?></td>
                        <td><?php echo $data['sotiet_thtn']; ?></td>
                        <td><?php echo $data['sogio_tuhoc']; ?></td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
    </div> 

<?php include('templates/footer.php'); ?>