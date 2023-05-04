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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Admin</title>
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="assets/css/all_students.css">
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
                      <th scope="col">اسم الدكتور</th>
                      <th scope="col">القسم</th>
                      <th scope="col">اجراءات</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?= $i = 1; ?>
                      <?php foreach ($professors as $professor) : ?>
                        <tr class="table-light">
                          <th scope="row"><?= $i++ ?></th>
                          <td class="name"><i class="fa-sharp fa-solid fa-user-tie"></i> <?= $professor['full_name_ar'] ?>
                          </td>
                          <td data-lable="المرحلة الدراسية :" class="table-level-parent">
                            <span class="table-level"><?= $professor['d_name'] ?></span>
                          </td>
                          <td>
                            <div class="dropdown-center">
                              <button class="btn btn-outline-secondary dropdown-toggle btn-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                              </button>
                              <ul class="dropdown-menu ul-drop" style="background-color: #FFFFFF;">
                                <li><a class="dropdown-item" data="<?=$professor['id']?>">الصفحة الشخصية</a></li>
                                <li id="createBtn"><a class="dropdown-item update-btn" data="<?=$professor['id']?>" >تعديل البيانات</a></li>
                                <li><a class="dropdown-item delete-btn" data="<?=$professor['id']?>" >حذف المستخدم</a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
<!--    Modal Starting code-->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Update user</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="Manage_Professors" method="post" dir="rtl">
                <input type="hidden" id="update_hidden_id" value="" name="id">
                <div class=" ">
                    <label for="validationCustom01" class="form-label">البريد الالكتروني  :</label>
                    <input type="text" class="form-control"  id="profEmail" required name="email" placeholder="اضف البريد الالكتروني">
                    <div class="invalid-feedback">
                        Please choose a email.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label"> كلمة المرور :</label>
                    <input type="password" class="form-control" id="prof_password"  placeholder=" ادخل كلمةالمرور للطالب" required name="password" minlength="8" maxlength="20" >
                    <div class="invalid-feedback">
                        Please choose a password.
                    </div>
                </div>



                <div class="">
                    <label for="validationCustom01" class="form-label mt-3">الاسم الرباعي باللغه العربية :</label>
                    <input type="text" class="form-control"  id="profNameAr" placeholder="ادخل الاسم باللغة العربية  " required name="ar_name">
                    <div class="invalid-feedback">
                        Please enter your name in arabic.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label">الاسم الرباعي باللغه الانجليزية :</label>
                    <input type="text" class="form-control"  id="profNameEn" placeholder="ادخل الاسم باللغة الانجليزية " required name="en_name">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label">رقم الهاتف :</label>
                    <input type="text" class="form-control" id="prof_phone_number"   value="" placeholder="رقم الهاتف" required name="phone_number">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label">الرقم القومي :</label>
                    <input type="text" class="form-control"  id="prof_national_id" placeholder="الرقم القومي " required name="National_ID">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label">اللقب :</label>
                    <input type="text" class="form-control"  id="prof_title" placeholder=" ادخل وصف الطالب " required name="title">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label">عنوان :</label>
                    <input type="text" class="form-control" id="prof_address"  placeholder=" ادخل عنوان الطالب " required name="address">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class=" ">
                    <label for="validationCustom01" class="form-label">الوصف :</label>
                    <input type="text" class="form-control"  id="prof_description" placeholder=" ادخل عنوان الطالب " required name="description">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

                <div class="c">
                    <label for="validationCustom04" class="form-label">القسم :</label>
                    <select class="form-select"  id="prof_department_id" required name="department" name="department">
                        <option selected disabled > اختر قسم الطالب</option>
                        <?php foreach ($departments as $department ):?>
                            <option value="<?= $department['id']?>"><?=$department['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid ya Dawly.
                    </div>
                </div>



                <div class="c">
                    <label for="validationCustom04" class="form-label">الجنسية :</label>
                    <select class="form-select" id="prof_nationality_id" required name="nationality">
                        <option selected disabled > اختر جنسية الطالب</option>
                        <?php foreach ($nationalities as $nationality): ?>
                            <option value="<?= $nationality['id']?>"><?=$nationality['name']?></option>
                        <?php endforeach; ?>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid ya Dawly.
                    </div>
                </div>



                <div class=" ">
                    <label for="validationCustom01" class="form-label">صورة الطالب :</label>
                    <input type="file" class="form-control"  placeholder=" ادخل صورة الطالب " name="image">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
            <button type="submit" class="btn btn-primary">حفظ التغيرات</button>
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete user</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form style="text-align: right">
                        <div class="mb-3">
                            <h6>هل تريد حذف المستخدم بالفعل</h6>
                            <input type="hidden" class="form-control"  value="" required name="name">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Save changes</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--    Modal ending code-->
<!--    <script>-->
<!--    $(document).ready(function(){-->
<!--    $('.sub-btn').click(function(){-->
<!--    $(this).next('.sub-menu').slideToggle();-->
<!--    $(this).find('.drop').toggleClass('rotate');-->
<!--    });-->
<!--    $('.menu-btn').click(function(){-->
<!--    $('.side-bar').addClass('active');-->
<!--    $('.menu-btn').css("visibility", "hidden");-->
<!--    });-->
<!---->
<!--    $('.close-btn').click(function(){-->
<!--    $('.side-bar').removeClass('active');-->
<!--    $('.menu-btn').css("visibility", "visible");-->
<!--    });-->
<!--    });-->
<!--    </script>-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      $(document).ready(function() {
        $('.update-btn').click(function (){
            let id = this.getAttribute('data');
            console.log(id);
            let input_id = document.querySelector('#update_hidden_id');
            input_id.setAttribute("value",id);


            const formData = new FormData();
            formData.append('id',id);

            fetch('<?= site_url() ?>/get_professor_data', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        document.getElementById('profNameAr').setAttribute('value',data.prof[0]['full_name_ar'])
                        document.getElementById('profNameEn').setAttribute('value',data.prof[0]['full_name_en'])
                        document.getElementById('profEmail').setAttribute('value',data.prof[0]['email'])
                        document.getElementById('prof_national_id').setAttribute('value',data.prof[0]['national_id_number'])
                        $("#prof_nationality_id").find('option').each(function (){
                            this.removeAttribute('selected')
                            if (this.getAttribute('value')== data.prof[0]['nationality_id'])
                            {
                                this.setAttribute('selected' , 'selected')
                            }
                        })
                        document.getElementById('prof_password').setAttribute('value',data.prof[0]['password'])
                        document.getElementById('prof_phone_number').setAttribute('value',data.prof[0]['phone_number'])
                        document.getElementById('prof_title').setAttribute('value',data.prof[0]['title'])
                        document.getElementById('prof_description').setAttribute('value',data.prof[0]['description'])
                        document.getElementById('prof_address').setAttribute('value',data.prof[0]['address'])
                        $("#prof_department_id").find('option').each(function (){
                            this.removeAttribute('selected')
                            if (this.getAttribute('value')== data.prof[0]['department_id'])
                            {
                                this.setAttribute('selected' , 'selected')
                            }
                        })
                        $('#createModal').modal('show');
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
          $('.delete-btn').click(function (){
              $('#deleteModal').modal('show');
          });
      });


    </script>
  </body>
</html>