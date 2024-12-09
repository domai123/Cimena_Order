<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
  <style>
    a
    {
      margin-left: 20px;
    }
    p
    {
      color: red;
      text-align: center;
      margin-top: 20px;
    }
    form
    {
      margin-top: 50px;
    }
    h2
    {
      text-align: center;
    }
    button
    {
      margin-top: 20px;
    }
  </style>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <section class="vh-100" >
      <div class="row d-flex justify-content-center align-items-center ">
          <div class="row justify-content-center">
            <div class="col-md-10 col-lg-6 col-xl-5 ">
                    
              <form action="../html/register_submit.php" method="POST" class="mx-1 mx-md-4">
                <h2>ĐĂNG KÝ</h2>
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Tên đăng nhập:</label>
                        <input type="text" id="username" name="username" class="form-control" /> 
                      </div>
                  </div>
      
                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Mật khẩu:</label>
                        <input type="password" id="password" name="password" class="form-control" /> 
                      </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-2">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                      <div data-mdb-input-init class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Nhập lại mật khẩu:</label>
                        <input type="password" id="repassword" name="repassword" class="form-control" /> 
                      </div>
                  </div>
                  <a href="../html/login.html">Tôi đã có tài khoản</a>
                      
                  <div class="d-flex justify-content-center mx-2 mb-5 mb-lg-1">
                    <button  type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Đăng ký</button>
                  </div>
                  <!-- Phần thông báo lỗi được hiển thị-->
                  <?php if (isset($_GET['error'])): ?>
                    <p class="error" id="error-message"><?= htmlspecialchars($_GET['error']); ?></p>
                  <?php endif; ?>
              </form>
              
              <script>
        // Khi người dùng bắt đầu nhập vào ô input, ẩn thông báo lỗi
        document.getElementById('username').addEventListener('focus', function() 
        {
            const errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.style.display = 'none'; // Ẩn thông báo lỗi khi người dùng nhấn vào username
            }
        });

        document.getElementById('password').addEventListener('focus', function() 
        {
            const errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.style.display = 'none'; // Ẩn thông báo lỗi khi người dùng nhấn vào password
            }
        });

        document.getElementById('repassword').addEventListener('focus', function() 
        {
            const errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                errorMessage.style.display = 'none'; // Ẩn thông báo lỗi khi người dùng nhấn vào password
            }
        });
    </script>
                    </div>
                    <div class="col-md-1 col-lg-3 col-xl-5 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="../img/mickey-mouse-top-50-nhan-vat-hoat-hinh-moi-thoi-dai.jpg"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                
                </div>
              
            </div>
          </div>
      </div>
    </section>
  </body>
</html>