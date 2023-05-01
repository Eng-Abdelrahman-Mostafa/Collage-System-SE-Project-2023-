<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- BootStrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Min CSS -->
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script src="https://kit.fontawesome.com/f2178052c7.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;600&display=swap" rel="stylesheet">
</head>
<body>
<div class="container d-flex align-items-center justify-content-center">
    <div class="d-flex box">
        <!-- Start Left-Side -->
        <div class="img col-lg-5 col-md-5 col-sm-9 col-xs-8  container">
            <div>
                <img src="assets/images/logo-white.svg">
                <p class="h1">كلية الحاسبات و الذكاء الاصطناعي</p>
                <p class="h2">(بوابة تعليم الطلاب الجامعيين)</p>
            </div>
        </div>
        <!-- End Left-Side -->

        <!-- Start Right-Side -->
        <div class="form col-lg-4 col-md-4 col-sm-9 col-10 container">
            <p>تسجيل الدخول</p>
            <span></span>
            <!-- Start Form -->
            <form class="g-3 needs-validation" novalidate action="/login" method="POST">
                <div class="input-group has-validation">
                    <i class="fa-solid fa-envelope "></i>
                    <input class="form-control " id="validationCustomUsername" type="email" placeholder="ادخل بريدك الالكتروني" aria-describedby="inputGroupPrepend" name="email" required>
                </div>
                <div class="input-group has-validation">
                    <i class="fa-solid fa-lock"></i>
                    <input class="form-control"  type="password" placeholder="ادخل كلمه المرور" aria-label="default input example" name="password" required>
                </div>
                <?php if(isset($errors['email'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errors['email']; ?>
                    </div>
                <?php endif;?>
                <?php if(isset($errors['password'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errors['password']; ?>
                    </div>
                <?php endif;?>
                <div>
                    <button class="btn btn-primary" type="submit">تسجيل</button>
                </div>
            </form>
        </div>
        <!-- End Right-Side -->
    </div>
</div>


<!-- BootStrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- JS Min -->
<script src="assets/js/login.js"></script>
</body>
</html>