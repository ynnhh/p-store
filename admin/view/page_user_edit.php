<div class="p-3 vh-100">
<form method="post" action=""enctype="multipart/form-data" class="form p-3 ">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Họ Tên người dùng</label>
                    <input type="text" name="name" value="<?=$user['HoTen'] ?>" class="form-control">
                </div>
                <div>
                    <label for="">Mật khẩu</label>
                    <input type="password" name="pass" value="<?=$user['MatKhau'] ?>" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input  type="file" name="image" class="form-control">
                </div>  
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="status" >
                    <option value="Đang hoạt động" >Đang hoạt động</option>
                    <option value="Khóa">Khóa</option>
                    </select>
                </div><div>
                    <label for="">Quyền Admin</label>
                    <select class="form-select" name="power" >
                    <option value="0">Người dùng</option>
                    <option value="1" >Admin</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="editUser_submit" value="Sửa">
                </div>
            </div>
            <div class="col-md-6 ">
            <img class="my-3" src="../content/img/<?=$user['Anh'] ?>" width="400" height="400" alt="">
            </div>
        </div>
        
    </form>
</div>