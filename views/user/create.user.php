<?php include_once 'views/header.php'; ?>
    <h3>TẠO THÊM NHÂN VIÊN</h3>
    <form action="<?=route('POST_USER_STORE') ?>" method="post">
        <input type="hidden" name="page" value="user" />
        <input type="hidden" name="action" value="store" />
        <p><label for="ma_nhan_vien">Mã nhân viên:</label>
        <input id="ma_nhan_vien" name="ma_nhan_vien" placeholder="nhập mã nhân viên" required /></p>
        <p><label for="ho_ten">Tên nhân viên:</label>
        <input id="ho_ten" name="ho_ten" placeholder="nhập tên nhân viên" required /></p>
        <p><label for="ban_id">Ban:</label>
            <select id="ban_id" name="ban_id" >
                <?php
                if (!empty($dataBan)) {
                    foreach ($dataBan as $ban) {
                        echo '<option value="'.$ban['id'].'">'.$ban['ten_ban'].'</option>';
                    }
                }
                ?>
            </select></p>
        <p><label for="so_dien_thoai">Số điện thoại:</label>
        <input id="so_dien_thoai" name="so_dien_thoai" placeholder="nhập số điện thoại" /></p>
        <p><label for="nam_sinh">Năm sinh:</label>
            <input id="nam_sinh" name="nam_sinh" placeholder="nhập năm sinh" /></p>
        <p><label for="email">Email:</label>
            <input id="email" name="email" placeholder="nhập email" /></p>
        <button type="submit">Thêm</button>
    </form>
<?php include_once 'views/footer.php'; ?>