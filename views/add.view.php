<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/collage-logo.svg">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Add</title>

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
<div class="bdy">
    <div class="container">
        <?php include 'layouts/aside_bar.view.php';?>
        <main>
            <?php include 'layouts/nav_bar.view.php';?>


<div class="photo" > <img src="bg-dashboard.png" alt=""> </div>
<div class="container col-md-8 form" >

    <form class="row g-3 needs-validation justify-content-center  " novalidate  action="a.php">

        <div class="">
            <label for="validationCustom01" class="form-label mt-3">الاسم الرباعي باللغه العربية :</label>
            <input type="text" class="form-control"  placeholder="ادخل اسم الطالب " required name="name" autofocus>
            <div class="invalid-feedback">
                Please choose a username.
            </div>

        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">الاسم الرباعي باللغه الانجليزيه :</label>
            <input type="text" class="form-control"  placeholder="ادخل اسم الطالب" required="" name="name">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class=" ">
            <label for="validationCustom01" class="form-label">الرقم القومي للطالب :</label>
            <input type="text" class="form-control"  placeholder="الرقم القومي " required name="National_ID">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>


        <div class="c">
            <label for="validationCustom04" class="form-label">قسم الطالب :</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled > اختر قسم الطالب</option>
                <option value="cs">CS</option>
                <option value="is">is</option>
                <option value="it">it</option>

            </select>
            <div class="invalid-feedback">
                Please select a valid ya sharmat.
            </div>
        </div>

        <div class="c">
            <label for="validationCustom04" class="form-label">مرحلة الطالب :</label>
            <select class="form-select" id="validationCustom04" required>
                <option selected disabled value=""> اختر مرحلةالطالب</option>
                <option value="">الاول</option>
                <option value="">الثاني</option>
                <option value="">الثالث</option>
                <option value="">الرابع</option>
            </select>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>



        <div class=" ">
            <label for="validationCustom01" class="form-label">رقم هاتف الطالب :</label>
            <input type="text" class="form-control"  placeholder=" ادخل رقم الهاتف " required name="">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>
        <div class=" ">
            <label for="validationCustom01" class="form-label">عنوان الطالب :</label>
            <input type="text" class="form-control"  placeholder=" ادخل عنوان الطالب " required name="">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">وصف الطالب :</label>
            <input type="text" class="form-control"  placeholder=" ادخل وصف الطالب " required>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">صورة الطالب :</label>
            <input type="file" class="form-control"  placeholder=" ادخل صورة الطالب " required name="image">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">البريد الالكتروني  :</label>
            <input type="email" class="form-control"  value="@fci.helwan.com" required name="email">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label"> كلمة المرور :</label>
            <input type="password" class="form-control"  placeholder=" ادخل كلمةالمرور للطالب" required name="password" minlength="8" maxlength="20" >
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label"> كود الطالب  :</label>
            <input type="text" class="form-control"  placeholder=" ادخل كود للطالب" required name="password"  >
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class="col-12 mt-3  " >
            <button class=" btn-primary btn1" type="submit" >اضافه</button>
            <button class=" btn-primary btn2" type="submit" style="margin-right: 20px;"> طباعة</button>
        </div>


    </form>

    <div class="mt-3 "></div>



</div>

        </main>
    </div>
</div>
<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>