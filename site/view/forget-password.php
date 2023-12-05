<?php
    require_once "controller/resetpassword.php";
?>
<div class=" d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 ">
                <h3 class="text-center mb-4 text-dark">Quên Mật Khẩu</h3>
                <form method="post" action="" >
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Vui lòng nhập email</label>
                        <input type="email" class="form-control border border-primary" name="email" aria-describedby="emailHelp">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-danger" type="submit" name="resetpass_submit">Quên Mật Khẩu</button>
                    </div>
                </form>
            </div>
</div>