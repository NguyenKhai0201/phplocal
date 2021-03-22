<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ex2</title>
        <meta charset="utf-8">
        <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="w-50 mt-3 float-right bg-light">
            <div class="container">
                <form action="ex1.1/index.php" method="post">
                    <fieldset class="mt-3">
                        <legend class="text-center">Đăng Nhập Với</legend>
                        <div class="row text-center mt-2">
                            <div class="col-sm-4">
                                <div class="btn-group">
                                    <button type="button" href="#" class="btn btn-primary"><i class="fa fa-facebook"></i>Facebook
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="btn-group">
                                    <button type="button" href="#" class="btn btn-danger"><i class="fa fa-google-plus"></i>Google+
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="btn-group">
                                    <button type="button" href="#" class="btn btn-success"><i class="fa fa-phone"></i>Phone
                                    </button>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="mt-3">
                        <legend class="text-center mt-3">Hoặc</legend>
                        <input class="form-control" type="text" name="username" id="username" placeholder="admin"><br>
                        <input class="form-control" type="password" name="pass" id="pass" placeholder="*************"><br>
                        <label for="checkbox"><input class="text-dark" type="checkbox" name="checkbox" id="checkbox" value="Nhớ mật khẩu">Nhớ mật khẩu</label>
                        <p type="button" href="#" class="text-primary float-right mr-2" value="Quên mật khẩu?">Quên mật khẩu?</p>
                        <p class="mt-3 mb-3">Cần email xác minh mới?<span type="button" class="text-primary" href="#">Gửi lại</span></p>
                        <button class="form-control bg-primary mb-2" value="Đăng Nhập">Đăng Nhập</button>
                    </fieldset>
                    <fieldset class="mt-3">
                        <legend class="text-center">Bạn Chưa Có Tài Khoản </legend>
                        <button href="#" class="bg-primary mt-2 mb-2 form-control" value="Đăng Ký">Đăng Ký</button>
                    </fieldset>
                </form>
            </div>
            </div>
        </div>
    </body>
</html>
