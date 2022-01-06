<?php include('templates/header.php'); ?>

<div class="container">
        <div class ="mt-3">
            <a class="btn btn-primary" href="index.php?act=add">Thêm</a>
        </div>

        <h5 class="text-center text-primary mt-2">DANH SÁCH CÁC MÔN HỌC</h5>
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
                    <th scope="col">Chỉnh sửa</th>
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
                        <td>
                            <a href="index.php?act=edit&id=<?php echo $data['mamh']; ?>" class = "btn btn-primary">Sửa</a>
                            <a href="index.php?act=delete&id=<?php echo $data['mamh']; ?>" class = "btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
            </table>
    </div> 

<?php include('templates/footer.php'); ?>