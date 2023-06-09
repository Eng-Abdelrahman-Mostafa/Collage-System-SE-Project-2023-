<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='stylesheet' href='assets/css/student_register.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/collage-logo.svg">
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body dir="rtl">
<div class="bdy">
    <div class="container">
        <?php include 'layouts/aside_bar_std.view.php';?>
        <main>
            <?php include 'layouts/nav_bar.view.php';?>

<div class="div1">
    <img src="assets/images/bg-dashboard.png">
</div>
<div class="container d-flex justify-content-center align-content-center">
    <div class="div2">
        <h6>المقررات المفتوحة المسموح بتسجيلها</h6>

        <?php
        if(isset($active_semester['registration_status'])) {
            if ($active_semester['registration_status'] == 0) {
                echo '<div class="alert alert-warning" role="alert">
                 تم انتهاء التسجيل فى الفصل الدراسى الحالى  
              </div>';
            }

        }
        ?>


        <div class="message"></div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">المقررات باللغة العربية</th>
                <th scope="col">المقررات باللغة الانجليزية</th>
                <th scope="col">اسم الفصل الدراسي</th>
            </tr>
            </thead>
            <tbody>
            <?php if(count($active_courses)):  ?>
            <?php foreach ($active_courses as $active_course) : ?>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input select-btn" data-id="<?= $active_course['id'] ?>" type="checkbox" value="" id="flexCheckDefault" <?php if($active_semester['registration_status']==0) { echo 'disabled';} ?>   <?php  if(found_in_array($active_course['id'],$student_courses)){echo 'checked';}?> >
                        <input type="hidden" class="select_hidden_id" value="<?php  if(found_in_array($active_course['id'],$student_courses)){echo $active_course['id'];}?>" name="id">
                        <label class="form-check-label" for="flexCheckDefault"></label>
                    </div>
                </th>
                <td><?= $active_course['name'] ?></td>
                <td><?= $active_course['code'] ?></td>
                <td><?= $active_semester['title'] ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success submit-btn" style="background:#80ab976e;" <?php  if(isset($active_semester['registration_status'])){   if($active_semester['registration_status']==0) { echo 'disabled';} } ?>>تسجيل</button>
    </div>
</div>








</main>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.select-btn').change(function() {
            if ($(this).is(':checked')) {
                let id = $(this).data('id');
                console.log(id);
                let input_id = $(this).closest('tr').find('.select_hidden_id');
                input_id.val(id);
            } else {
                let input_id = $(this).closest('tr').find('.select_hidden_id');
                input_id.val('');
            }
        });

        $('.submit-btn').click(function () {

            let selected_courses = []
            const formData = new FormData();
            $('.select_hidden_id').each(function ()
            {
                if(parseInt(this.getAttribute('value'))>0)
                {
                    selected_courses.push(this.getAttribute('value'))
                }
            });
            formData.append('selected_courses[]', selected_courses);

            fetch('<?= site_url() ?>/get_registerCourse_data', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        console.log('done');
                        $('.message').html('<div class="alert alert-success" role="alert">'+data.message+'</div>');
                    } else {
                        // Login failed, show error message to user
                        $('.message').html('<div class="alert alert-danger" role="alert">'+data.message+'</div>');
                    }
                })
                .catch(error => {
                    // Handle network error or other exceptions
                    console.error(error);
                });
        });

    });



</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
