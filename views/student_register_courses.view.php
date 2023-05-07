<!DOCTYPE html>
<html lang="en">

<head>
    <link rel='stylesheet' href='assets/css/student_register.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body dir="rtl">

<div class="div1">
    <img src="assets/images/bg-dashboard.png">
</div>
<div class="container d-flex justify-content-center align-content-center">
    <div class="div2">
        <h6>المقررات المفتوحة المسموح بتسجيلها</h6>

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
            <?php foreach ($active_courses as $active_course) : ?>
            <tr>
                <th scope="row">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" <?php if($active_semester['registration_status']==0) { echo 'disabled';} ?> >
                        <label class="form-check-label" for="flexCheckDefault"></label>
                    </div>
                </th>
                <td><?= $active_course['name'] ?></td>
                <td><?= $active_course['code'] ?></td>
                <td><?= $active_semester['title'] ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <button type="submit" class="btn btn-success" style="background:#80ab976e;">تسجيل</button>
    </div>
</div>




</body>

</html>
