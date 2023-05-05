<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>

    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css"
          integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/add.css">
</head>
<body>
<div class="photo" > <img src="assets/images/bg-dashboard.png" alt="">
</div>
<div class="container col-md-8 form" >

    <form class="row g-3 needs-validation justify-content-center  " novalidate  action="add_TA" method="post">

        <div class=" ">
            <label for="validationCustom01" class="form-label">البريد الالكتروني  :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['email']) ? 'is-invalid':''?>" value="@fci.helwan.com" required name="email" placeholder="اضف البريد الالكتروني">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['email']) ? $_POST['errors']['email']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label"> كلمة المرور :</label>
            <input type="password" class="form-control <?php isset($_POST['errors']['password']) ? 'is-invalid':''?>"  placeholder=" ادخل كلمةالمرور للطالب" required name="password" minlength="8" maxlength="20" >
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['password']) ? $_POST['errors']['password']:''?>
            </div>
        </div>



        <div class="">
            <label for="validationCustom01" class="form-label mt-3">الاسم الرباعي باللغه العربية :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['ar_name']) ? 'is-invalid':''?>"  placeholder="ادخل الاسم باللغة العربية  " required name="ar_name">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['ar_name']) ? $_POST['errors']['ar_name']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">الاسم الرباعي باللغه الانجليزية :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['en_name']) ? 'is-invalid':''?>"  placeholder="ادخل الاسم باللغة الانجليزية " required="" name="en_name">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['en_name']) ? $_POST['errors']['en_name']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">رقم الهاتف :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['phone_number']) ? 'is-invalid':''?>"  placeholder="رقم الهاتف" required name="phone_number">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['phone_number']) ? $_POST['errors']['phone_number']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">الرقم القومي :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['National_ID']) ? 'is-invalid':''?>"  placeholder="الرقم القومي " required name="National_ID">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['National_ID']) ? $_POST['errors']['National_ID']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">اللقب :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['title']) ? 'is-invalid':''?>"  placeholder=" ادخل وصف الطالب " required name="title">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['title']) ? $_POST['errors']['title']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">عنوان :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['address']) ? 'is-invalid':''?>"  placeholder=" ادخل عنوان الطالب " required name="address">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['address']) ? $_POST['errors']['address']:''?>
            </div>
        </div>

        <div class=" ">
            <label for="validationCustom01" class="form-label">الوصف :</label>
            <input type="text" class="form-control <?php isset($_POST['errors']['description']) ? 'is-invalid':''?>"  placeholder=" ادخل عنوان الطالب " required name="description">
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['description']) ? $_POST['errors']['description']:''?>
            </div>
        </div>

        <div class="c">
            <label for="validationCustom04" class="form-label">القسم :</label>
            <select class="form-select <?php isset($_POST['errors']['department']) ? 'is-invalid':''?>" id="validationCustom04" required name="department" name="department">
                <option selected disabled > اختر قسم الطالب</option>
                <?php foreach ($departments as $department ):?>
                    <option value="<?= $department['id']?>"><?=$department['name']?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['department']) ? $_POST['errors']['department']:''?>
            </div>
        </div>

        <div class="c">
            <label for="validationCustom04" class="form-label">الدور :</label>
            <select class="form-select <?php isset($_POST['errors']['role']) ? 'is-invalid':''?>" id="validationCustom04" required name="role">
                <option selected disabled > اختر قسم الطالب</option>
                <?php foreach ($roles  as $role ):?>
                    <option value="<?= $role['id']?>"><?=$role['name']?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['role']) ? $_POST['errors']['role']:''?>
            </div>
        </div>



        <div class="c">
            <label for="validationCustom04" class="form-label">الجنسية :</label>
            <select class="form-select <?php isset($_POST['errors']['nationality']) ? 'is-invalid':''?>" id="validationCustom04" required name="nationality">
                <option selected disabled > اختر قسم الطالب</option>
                <?php foreach ($nationalities as $nationality): ?>
                <option value="<?= $nationality['id']?>"><?=$nationality['name']?></option>
                <?php endforeach; ?>
            </select>
            <div class="invalid-feedback">
                <?php isset($_POST['errors']['nationality']) ? $_POST['errors']['nationality']:''?>
            </div>
        </div>



        <div class=" ">
            <label for="validationCustom01" class="form-label">صورة الطالب :</label>
            <input type="file" class="form-control"  placeholder=" ادخل صورة الطالب " name="image">
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>




        <div class="col-12 mt-3  " >
            <button class=" btn-primary btn1" type="submit" >اضافه</button>
        </div>


    </form>

    <div class="mt-3 "></div>



</div>


<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>