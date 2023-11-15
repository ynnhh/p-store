<div class="p-3 vh-100">
<form method="post" action=""enctype="multipart/form-data" class="form p-3 ">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <label for="">Tên danh mục</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div>
                    <label for="">Hình ảnh</label>
                    <input  type="file" name="image" class="form-control">
                </div>  
                <div>
                    <label for="">Trạng thái</label>
                    <select class="form-select" name="status" >
                    <option value="Đang hoạt động" >Đang hoạt động</option>
                    <option value="Tạm ngưng">Tạm ngưng</option>
                    </select>
                </div>
                <div class="text-center">
                    <input class="btn btn-danger m-5" type="submit" name="editCategory_submit" value="Sửa">
                </div>
            </div>
            <div class="col-md-6 ">
            <img class="my-3" src="../content/img/" width="400" height="200" alt="">
            </div>
        </div>
        
    </form>
</div>