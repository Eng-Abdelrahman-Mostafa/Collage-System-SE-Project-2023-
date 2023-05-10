<!doctype html>
<html lang="ar">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="assets/images/collage-logo.svg">
    <link rel="stylesheet" href="assets/css/dashboard.css">
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
      <?php include 'layouts/aside_bar_std.view.php';?>
    </div>
    <div class="col-xl-10 left" style="zoom: 80%">
      <?php include 'layouts/nav_bar.view.php';?>

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
                <th scope="col"> كود الماده</th>
                <th scope="col">   عدد الساعات</th>
                <th scope="col">اجراءات</th>
              </tr>
              </thead>
              <tbody><?php $counter=1; ?>
              <?php foreach ($data as $s): ?>
              <tr class="table-primary">
                <th scope="row"><?= $counter++ ?></th>
                <td class="name"><i class="fa-solid fa-id-card-clip"></i> <?php echo $s['name_courses']; ?>
                  <div class="depType">القسم:العام</div>
                </td>
                <td><?php echo $s['code']; ?></td>
                <td><?php echo $s['course_hour']; ?></td>
                <td>
                  <div class="dropdown-center">
                    <button class="btn btn-outline-secondary dropdown-toggle btn-drop" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      :
                    </button>
                    <ul class="dropdown-menu ul-drop" style="background-color: #FFFFFF;">
                       <li><a class="dropdown-item update-btn"data="<?= $s['id_courses'] ?>">exam-dgree</a></li>
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

<div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">درجات الماده</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <table class="table">
              <thead>
              <tr >
                  <th scope="col">Final</th>
                  <th scope="col">Med-term</th>
                  <th scope="col">Quiz</th>
              </tr>
              </thead>
              <tbody>
              <?php foreach ($data2 as $s): ?>
                  <tr class="table-primary">
                      <?php if($s['course_id']==1){ ?>
                      <td ><?php echo $s['degree']; ?></td>
                      <td><?php echo 23?></td>
                      <td><?php echo 10 ?></td><?php }?>
                  </tr>
              <?php endforeach ;?>
              </tbody>
          </table>
      </div>
    </div>
  </div>
</div>

</main>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/df48339200.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('.update-btn').click(function (){
      $('#updateModal').modal('show');
      let id = this.getAttribute('data');
      console.log(id)
      let input_id = document.querySelector('#course_id_update');
      input_id.setAttribute("value",id);
    });
  });

</script>
</body>
</html>