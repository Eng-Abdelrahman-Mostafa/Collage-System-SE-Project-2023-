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
      <link rel="stylesheet" href="assets/css/multi_select.css">
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
            <div class="col-lg-3 col-sm-6 add-btn" data="">
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
          <div class="stdTableParent">
            <h5>لائحة الطلاب</h5>
            <div class="row d-flex justify-content-between mt-5">
              <div class="slco col-lg-2 col-sm-12">
                <label > المرحلة الدراسية</label>
                <select class="form-select"  aria-label=".form-select-lg example">
                  <option selected>جميع المراحل الدراسية</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="slco col-lg-2 col-sm-12">
                <label > الاقسام</label>
                <select class="form-select"  aria-label=".form-select-lg example">
                  <option selected>جميع الاقسام</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="slco col-lg-2 col-sm-12">
                <label > العام الدراسي</label>
                <select class="form-select"  aria-label=".form-select-lg example" >
                  <option selected>جميع الاعوام</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="slco col-lg-2 col-sm-12">
                <label > المستوى العام</label>
                <select class="form-select"  aria-label=".form-select-lg example">
                  <option selected>جميع الاعوام</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="col col-lg-1 col-sm-12"></div>
              <button class="btn col-lg-2 col-sm-12 align-self-end mt-3 fltr">فلترة</button>
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
                      <th scope="col">اسم الترم</th>
                      <th scope="col">بداية الترم</th>
                      <th scope="col">نهاية الترم</th>
                      <th scope="col">منشئ الترم</th>
                      <th scope="col"> حالة الترم</th>
                      <th scope="col">اجراءات</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php $i=1;  foreach($semesters as $semester): ?>
                    <tr class="table-light">

                      <th scope="row"><?=$i++?></th>
                      <td class="name"><?= $semester['title'] ?>
                      </td>
                      <td data-lable="المرحلة الدراسية :" class="table-level-parent">
                        <span class="table-level"><?= $semester['start_date'] ?></span>
                    </td>
                      <td><?= $semester['end_date'] ?></td>
                      <td><?= $semester['creator_name'] ?></td>
                      <td><?php if($semester['active_status']==1) {echo 'مفعل';}else{ echo 'غير مفعل';} ?></td>
                      <td>
                            <div class="dropdown-center">
                                <button class="btn btn-outline-secondary dropdown-toggle btn-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </button>
                                <ul class="dropdown-menu ul-drop">
                                    <li><a class="dropdown-item active-sem" data="<?=$semester['id']?>">تفعيل الترم</a></li>
                                    <li><a class="dropdown-item active-register" data="<?=$semester['id']?>" >تفعيل تسجيل المواد</a></li>
                                    <li><a class="dropdown-item add-courses" data="<?=$semester['id']?>" >اضافة مواد</a></li>
                                    <li><a class="dropdown-item update-sem" data="<?=$semester['id']?>" >تعديل الترم</a></li>
                                    <li><a class="dropdown-item delete-sem" data="<?=$semester['id']?>" >حذف الترم</a></li>
                                </ul>
                            </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row mt-5">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <div class="btns">
                    <li class="page-item"><a class="page-link" href="#">السابق</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">التالي</a></li>
                  </div>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>




    <!--    Modal Starting code-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add semester</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="addSemester" method="post" dir="rtl">
                        <div class=" ">
                            <label for="validationCustom01" class="form-label">اسم الترم :</label>
                            <input type="text" class="form-control"  placeholder="ادخل اسم الترم " required name="semesterTitle">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class=" ">
                            <label for="validationCustom01" class="form-label">يبدأ من :</label>
                            <input type="date" class="form-control"   placeholder="بداية الترم" required name="startDate">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class=" ">
                            <label for="validationCustom01" class="form-label">ينتهي في :</label>
                            <input type="date" class="form-control"   placeholder="نهاية الترم " required name="endDate">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>


                        <div class="c">
                            <label for="validationCustom04" class="form-label">بواسطة :</label>
                            <select class="form-select" id="validationCustom04" required name="creator">
                                <option selected disabled value=""> اختر المنشئ</option>
                                <?php foreach ($roles as $role):?>
                                    <option value="<?= $role['id']?>"><?=$role['full_name_ar']?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary">اضافة ترم</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->

    <!--    Modal Starting code-->
    <div class="modal fade" id="activeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Active semester</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="activeSem" method="post" dir="rtl">
                    <div class="form-check form-switch">
                        <label class="form-check-label" for="flexSwitchCheckDefault">تفعيل الترم</label>
                        <input class="form-check-input switch-cls" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="switchValue"  >
                    </div>
                        <div class="mb-3">
                            <input type="hidden" id="active_hidden_id" value="" name="id">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">حفظ</button>

                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->

    <!--    Modal Starting code-->
    <div class="modal fade" id="active_register_Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Active courses register</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="activeReg" method="post" dir="rtl">
                        <div class="form-check form-switch">
                            <label class="form-check-label" for="flexSwitchCheckDefault">تفعيل تسجيل المواد</label>
                            <input class="form-check-input switch-clas" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="switchValue"  >
                        </div>
                        <div class="mb-3">
                            <input type="hidden" id="register_hidden_id" value="" name="id">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">حفظ</button>

                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->


    <!--    Modal Starting code-->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Semester</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="deleteSem" method="post" style="text-align: right">
                        <div class="mb-3">
                            <input type="hidden" id="delete_hidden_id" value="" name="id">
                            <h6>هل تريد حذف الترم بالفعل</h6>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->

    <!--    Modal Starting code-->
    <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update semester</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="updateSemester" method="post" dir="rtl">
                        <input type="hidden" id="update_hidden_id" value="" name="id">
                        <div class=" ">
                            <label for="validationCustom01" class="form-label">اسم الترم :</label>
                            <input type="text" class="form-control"  id="semester_title" placeholder="ادخل اسم الترم " required name="semesterTitle">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class=" ">
                            <label for="validationCustom01" class="form-label">يبدأ من :</label>
                            <input type="date" class="form-control"  id="semester_startDate" placeholder="بداية الترم" required name="startDate">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class=" ">
                            <label for="validationCustom01" class="form-label">ينتهي في :</label>
                            <input type="date" class="form-control"  id="semester_endDate"  placeholder="نهاية الترم " required name="endDate">
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>


                        <div class="c">
                            <label for="validationCustom04" class="form-label">بواسطة :</label>
                            <select class="form-select" id="sem_created_by" required name="creator">
                                <option selected disabled value=""> اختر المنشئ</option>
                                <?php foreach ($roles as $role):?>
                                    <option value="<?= $role['id']?>"><?=$role['full_name_ar']?></option>
                                <?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-primary">اضافة ترم</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->


    <!--    Modal Starting code-->
    <div class="modal fade" id="coursesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add courses</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="addCourses" method="post" dir="rtl">
                        <div class="wrapper">
                            <div class="wrapper">
                                <div class="container" id="dropdownSelected">
                                    <span>Selected</span>
                                </div>
                                <div class="container">
                                    <select id="myMultiSelect" multiple search='true'>
                                        <?php foreach ($courses as $course): ?>
                                        <option value="<?= $course['id'] ?>"><?= $course['name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" id="course_hidden_id" value="" name="id">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                    <button type="button" class="btn btn-primary add_course">اضافة</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/multi-select-dropdown.js"></script>

    <script>
        $(document).ready(function() {
            $('.add-btn').click(function () {
                $('#addModal').modal('show');
            });
        });


        $(document).ready(function() {
            $('.active-sem').click(function () {
                let id = this.getAttribute('data');
                console.log(id);
                let input_id = document.querySelector('#active_hidden_id');
                input_id.setAttribute("value", id);
                $('#activeModal').modal('show');


                const formData = new FormData();
                formData.append('id',id);

                fetch('<?= site_url() ?>/get_semester_status', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                           let swicth = document.querySelector('.switch-cls')
                            if(data.sem.active_status == '1')
                            {
                                swicth.checked=true
                            }
                        else
                            {
                                swicth.checked=false
                            }

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
        });





        $(document).ready(function() {
            $('.active-register').click(function () {
                let id = this.getAttribute('data');
                console.log(id);
                let input_id = document.querySelector('#register_hidden_id');
                input_id.setAttribute("value", id);
                $('#active_register_Modal').modal('show');


                const formData = new FormData();
                formData.append('id',id);

                fetch('<?= site_url() ?>/get_register_status', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            let swicth = document.querySelector('.switch-clas')
                            if(data.sem.registration_status == '1')
                            {
                                swicth.checked=true
                            }
                            else
                            {
                                swicth.checked=false
                            }

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
        });




        $(document).ready(function() {
            $('.update-sem').click(function (){
                let id = this.getAttribute('data');
                console.log(id);
                let input_id = document.querySelector('#update_hidden_id');
                input_id.setAttribute("value",id);


                const formData = new FormData();
                formData.append('id',id);

                fetch('<?= site_url() ?>/get_semester_data', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById('semester_title').setAttribute('value',data.sem.title)
                            document.getElementById('semester_startDate').setAttribute('value',data.sem.start_date)
                            document.getElementById('semester_endDate').setAttribute('value',data.sem.end_date)
                            $("#sem_created_by").find('option').each(function (){
                                this.removeAttribute('selected')
                                if (this.getAttribute('value')== data.sem.created_by)
                                {
                                    this.setAttribute('selected' , 'selected')
                                }
                            })
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
        });




        $(document).ready(function() {
            $('.add-courses').click(function () {
                let id = this.getAttribute('data');
                console.log(id);
                let input_id = document.querySelector('#course_hidden_id');
                input_id.setAttribute("value", id);

                clearOptions()

                const formData = new FormData();
                formData.append('id',id);

                fetch('<?= site_url() ?>/get_semester_courses', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {

                            const multiSelect = document.getElementById('myMultiSelect');
                            const selectedValues = data.courses; // Example selected values to add

                            selectedValues.forEach((value) => {
                                const option = multiSelect.querySelector(`option[value="${value}"]`);
                                if (option) {
                                    option.selected = true;
                                }
                            });

// Refresh the MultiSelectDropdown to reflect the changes
                            multiSelect.loadOptions();


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


                $('#coursesModal').modal('show');




            });
            $('.add_course').click(function (){
                const selectedValues = Array.from(document.getElementById('myMultiSelect').selectedOptions).map((option) => option.value);
                let input_id = document.querySelector('#course_hidden_id');
                let semester_id = input_id.getAttribute('value')



                const formData = new FormData();
                formData.append('semester_id',semester_id);
                formData.append('selected_courses[]',selectedValues);

                fetch('<?= site_url() ?>/addCourses', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                                location.reload();
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
        });






        $(document).ready(function() {
            $('.delete-sem').click(function () {
                let id = this.getAttribute('data');
                console.log(id);
                let input_id = document.querySelector('#delete_hidden_id');
                input_id.setAttribute("value", id);
                $('#deleteModal').modal('show');
            });
        });


        function clearOptions() {
            const multiSelect = document.getElementById('myMultiSelect');
            const selectedValues = []; // Example selected values to add

            $(multiSelect).find('option').each(function() {
                this.selected = false;
            });

            // Refresh the MultiSelectDropdown to reflect the changes
            multiSelect.loadOptions(); // Assuming you have a custom loadOptions() method
        }


    </script>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>