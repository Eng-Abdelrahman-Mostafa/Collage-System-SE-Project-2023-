<!doctype html>
<html lang="ar">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/all_students.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Admin</title>
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
<div class="container-fulid" dir="rtl">
    <div class="row">
        <div class="col-xl-2 side">
            <?php include 'layouts/aside_bar.view.php';?>
        </div>
        <div class="col-xl-10 left" style="zoom: 80%">
            <?php include 'layouts/nav_bar.view.php';?>
            <!-- Your main content goes here -->
            <div class="stds-stat row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#" class="add-new-std" style="width: 90%;">
                        <div class="stc-box">
                            <div class="stc-val-parent">
                    <span class="stc-value">
                        <svg class="svg-inline--fa fa-plus" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M432 256c0 17.69-14.33 32.01-32 32.01H256v144c0 17.69-14.33 31.99-32 31.99s-32-14.3-32-31.99v-144H48c-17.67 0-32-14.32-32-32.01s14.33-31.99 32-31.99H192v-144c0-17.69 14.33-32.01 32-32.01s32 14.32 32 32.01v144h144C417.7 224 432 238.3 432 256z"></path></svg><!-- <i class="fa-solid fa-plus"></i> Font Awesome fontawesome.com -->
                    </span>
                                <span class="stc-name">اضافة طالب جديد
                    </span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a class="real-stc" style="width: 90%;">
                        <div class="stc-box sec-stc">
                            <div class="stc-val-parent">
                                <span class="stc-value"> 3.2 </span>
                                <span class="stc-name">متوسط المعدل التراكمي</span>
                            </div>
                            <div class="stc-icon">
                                <span class=""><i class="fa-solid fa-graduation-cap"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a class="real-stc" style="width: 90%;">
                        <div class="stc-box sec-stc">
                            <div class="stc-val-parent">
                                <span class="stc-value"> 80% </span>
                                <span class="stc-name">متوسط المستوى العام</span>
                            </div>
                            <div class="stc-icon">
                                <span class=""><i class="fa-solid fa-person-circle-question"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <a class="real-stc" style="width: 90%;">
                        <div class="stc-box sec-stc">
                            <div class="stc-val-parent">
                                <span class="stc-value"> 3205 </span>
                                <span class="stc-name">طالب</span>
                            </div>
                            <div class="stc-icon">
                                <span class=""><i class="fa-solid fa-user-graduate"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

                <div class="row mt-5">
                    <!-- On tables -->
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                 <th scope="col">اسم الطالب</th>
                                <th scope="col">تاريخ الإنشاء</th>
                                <th scope="col">خيارات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $counter = 1; ?>
                            <?php foreach ($appointments as $d): ?>
                                <tr>
                                    <th scope="row"><?= $counter++ ?></th>
                                     <td><?= $d['full_name_ar'] ?></td>

                                    <td><?= $d['created_at'] ?></td>
                                    <td>

                                        <button class="dropdown-item delete-btn" data="<?= $s['appointment_id'] ?>">حذف</button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>












<!--    Modal Starting code-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="Manage_enrolled_students_appointments_delete" method="post" style="text-align: right">
                    <p>هل انت متأكد انك تريد  المسح  </p>
                    <input type="hidden" id="id_delete" name='id' value="">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="deleteModal">الغاء</button>
                <button type="submit" class="btn btn-danger">حذف</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->

<script>
    $(document).ready(function(){
        $('.delete-btn').click(function (){
            $('#deleteModal').modal('show');
            let id = this.getAttribute('data');
            console.log(id)
            let input_id = document.querySelector('#id_delete');
            input_id.setAttribute("value",id);
        });
    });
</script>
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>
