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
                <th scope="col">الاسم</th>
                <th scope="col"> القسم  </th>
                <th scope="col"> كود الماده</th>
                <th scope="col">   عدد الساعات</th>
                <th scope="col">اجراءات</th>
              </tr>
              </thead>
              <tbody><?php $counter=0; ?>
              <?php foreach ($data as $s): ?>
              <tr class="table-primary">
                <th scope="row"><?php echo $counter++ ; ?></th>
                <td class="name"><i class="fa-solid fa-id-card-clip"></i> <?php echo $s['name_courses']; ?>
                  <div class="depType">القسم:العام</div>
                </td>
                <td data-lable="  القسم :" class="table-level-parent">
                  <span class="table-level"><?php echo $s['name_departments']; ?></span>
                </td>
                <td><?php echo $s['code']; ?></td>
                <td><?php echo $s['course_hour']; ?></td>
                <td>
                  <div class="dropdown-center">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      :
                    </button>
                    <ul class="dropdown-menu ul-drop" style="background-color: #FFFFFF;">
                      <li id="createBtn"><a class="dropdown-item" href="#"> اضافه الكورس</a></li>
                      <li><a class="dropdown-item updata-btn"data="<?= $s['id_courses'] ?>"> تعديل الكورس  </a></li>
                      <li><a class="dropdown-item delete-btn" data="<?= $s['id_courses'] ?>">مسح  الكورس</a></li>
                    </ul>
                  </div>
                </td>
              </tr>
              <?php endforeach ;?>
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


<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" style="text-align: right">
          <p>هل انت متأكد انك تريد مسح المادة</p>
          <input type="hidden" id="coures_id_delete" name='course_id'value="">
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



<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post" style="text-align: right">
          <p>هل انت متأكد انك تريد مسح المادة</p>
          <input type="hidden" id="coures_id_delete" name='course_id'value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="deleteModal">الغاء</button>
        <button type="submit" class="btn btn-danger">حذف</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
  // $(document).ready(function(){
  //   $('.sub-btn').click(function(){
  //     $(this).next('.sub-menu').slideToggle();
  //     $(this).find('.drop').toggleClass('rotate');
  //   });
  //   $('.menu-btn').click(function(){
  //     $('.side-bar').addClass('active');
  //     $('.menu-btn').css("visibility", "hidden");
  //   });
  //
  //   $('.close-btn').click(function(){
  //     $('.side-bar').removeClass('active');
  //     $('.menu-btn').css("visibility", "visible");
  //   });
  // });
  //
  //
  //
  // $(document).ready(function() {
  //   $('#delete-item').click(function (){
  //     $('#createModal').modal('delete');
  //   });
  // });
  // const createBtn = document.querySelector("#delete-item");
  // const createModal = document.querySelector("#createModal");
  //
  // createBtn.addEventListener("click", function() {
  //   createModal.modal('delete');
  // });

</script>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
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
  });
</script>
</body>
</html>