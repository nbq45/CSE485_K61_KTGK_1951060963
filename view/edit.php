<?php include('templates/header.php'); ?>
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên môn học</label>
            <input type="text" class = "form-control" placeholder="Nhập tên môn học" name="txtTenMh" value="<?php echo $data['ten_mh']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số tín chỉ</label>
            <input type="text" class = "form-control" placeholder="Nhập số tín chỉ" name="txtTC" value="<?php echo $data['sotinchi']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số tiết lý thuyết</label>
            <input type="text" class = "form-control" placeholder="Nhập số tiết" name="txtTLT" value="<?php echo $data['sotiet_lt']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số tiết bài tập</label>
            <input type="text" class = "form-control" placeholder="Nhập số tiết" name="txtTBT" value="<?php echo $data['sotiet_bt']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số tiết thí nghiệm </label>
            <input type="text" class = "form-control" placeholder="Nhập số tiết" name="txtTTN" value="<?php echo $data['sotiet_thtn']; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" class = "form-control" placeholder="Nhập số giờ" name="txtTenHH" value="<?php echo $data['sogio_tuhoc']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php include('templates/footer.php'); ?>