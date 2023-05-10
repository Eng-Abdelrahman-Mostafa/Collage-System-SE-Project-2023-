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
                <div class="col-lg-3 col-sm-6 add-btn" >

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
                <div class="col-lg-10 col-sm-12"></div>
                <div class="col-lg-2 col-sm-12">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="بحث" aria-label="Search" style="width: 100%;">
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <!-- On tables -->
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr >
                            <th scope="col">#</th>
                            <th scope="col">الاسم</th>
                            <th scope="col">الامتحان</th>
                            <th scope="col">الدرجه</th>
                            <th scope="col">عدد الفرص</th>
                            <th scope="col">الاجراءات</th>
                        </tr>
                        </thead>
                        <tbody><?php $counter=1; ?>
                        <?php foreach ($data as $s): ?>
                            <tr class="table-primary">
                                <th scope="row"><?= $counter++ ?></th>
                                <td class="name"><i class="fa-solid fa-id-card-clip"></i> <?php echo $s['name_student']; ?>
                                </td>
                                <td><?php echo $s['name_exam']; ?></td>
                                <td><?php echo $s['degree']; ?></td>
                                <td><?php echo $s['chance_number']; ?></td>
                                <td>
                                    <div class="dropdown-center">
                                        <button class="btn btn-outline-secondary dropdown-toggle btn-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            :
                                        </button>
                                        <ul class="dropdown-menu ul-drop" style="background-color: #FFFFFF;">
                                            <li><a class="dropdown-item update-btn"data="<?= $s['id_exam_degree'] ?>"> تعديل الامتحان  </a></li>
                                            <li><a class="dropdown-item delete-btn" data="<?= $s['id_exam_degree'] ?>">مسح  الامتحان</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ;?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--delet-->

            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="exams-degree-delete" method="post" style="text-align: right">
                                <p>هل انت متأكد انك تريد مسح الامتحان</p>
                                <input type="hidden" id="coures_id_delete" name='id' value="">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="deleteModal">الغاء</button>
                            <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--    Modal ending code-->
            <!--update-->
            <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">تعديل الامتحان</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="exams-update" method="post" style="text-align: right">
                                <input type="hidden" id="course_id_update" name="id" value="">
                                <div class="form-group">
                                    <label for="name">اسم الامتحان</label>
                                    <input type="text" class="form-control" id="exam_name" name="title" placeholder="أدخل اسم الامتحان" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">درجة الامتحان</label>
                                    <input type="text" class="form-control" id="exam_dgree" name="total_degree" placeholder="أدخل درجة الامتحان" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">مدة الامتحان</label>
                                    <input type="text" class="form-control" id="exam_time" name="total_exam_time" placeholder="أدخل مدة الامتحان" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-primary">تحديث</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!--add-->
            <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">اضافة امتحان</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="exams-add" method="post" style="text-align: right">
                                <div class="form-group">
                                    <label for="name">اسم الامتحان</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="أدخل اسم الامتحان" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">درجة الامتحان</label>
                                    <input type="text" class="form-control" id="total_degree" name="total_degree" placeholder="أدخل درجة الامتحان" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">مدة الامتحان</label>
                                    <input type="text" class="form-control" id="total_exam_time" name="total_exam_time" placeholder="أدخل مدة الامتحان" required>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                            <button type="submit" class="btn btn-primary">اضافة</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {

                    $('.delete-btn').click(function (){
                        $('#deleteModal').modal('show');
                        let id = this.getAttribute('data');
                        console.log(id)
                        let input_id = document.querySelector('#coures_id_delete');
                        input_id.setAttribute("value",id);
                    });


                    $('.update-btn').click(function (){
                        $('#updateModal').modal('show');
                        let id = this.getAttribute('data');
                        console.log(id)
                        let input_id = document.querySelector('#course_id_update');
                        input_id.setAttribute("value",id);

                        const formData = new FormData();
                        formData.append('id',id);

                        fetch('<?= site_url() ?>/get_course_data', {
                            method: 'POST',
                            body: formData
                        })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    document.getElementById('department_name').setAttribute('value',data.department[0]['name'])
                                    $('#updateModal').modal('show');
                                } else {
                                    // Login failed, show error message to user
                                    const errorMessage = document.getElementById('error-message');
                                    errorMessage.textContent = data.message;
                                }
                            })
                            .catch(error => {
                                // Handle network error or other exceptions
                                console.error(error);
                            });


                    });

                    $('.add-btn').click(function (){
                        $('#addModal').modal('show');
                        let id = this.getAttribute('data');
                        console.log(id)
                        let input_id = document.getElementById('course_id_add');
                        input_id.setAttribute("value",id);
                    });

                });


            </script>
</body>
</html>