<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/collage-logo.svg">
    <title>Dashboard</title>
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- css -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
 <div class="bdy">
    <div class="container">
        <aside class="side-bar">
          <div class="top">
            <div class="logo">
                <img src="assets/images/collage-logo.svg" alt="">
                <h2>كلية الحاسبات والذكاء الاصطناعي <span class="danger">حلوان</span></h2>
                <a href="#" class="close-btn"><span class="material-symbols-sharp">close</span></a>            
            </div>
          </div>
          <hr>  
          <div class="sidebar">
            <ul>
                <li>
                    <a href="index.html" class="active">
                        <span class="material-symbols-sharp">dashboard</span>
                        <h3>لوحة التحكم</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">person</span>                   
                         <h3>الطالب</h3> <span class="material-symbols-outlined drop">expand_more</span>
                    </a>
                    <div class="sub-menu">
                        <a href="#" class="sub-item01">- اضافة طالب</a>
                        <a href="#" class="sub-item02">- كل الطلاب</a>
                    </div>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">school</span>         
                         <h3>هيئة التدريس</h3><span class="material-symbols-outlined drop">expand_more</span>
                    </a>
                    <div class="sub-menu">
                        <a href="#" class="sub-item">Sub Item 01</a>
                        <a href="#" class="sub-item">Sub Item 02</a>
                        <a href="#" class="sub-item">Sub Item 03</a>
                      </div>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">menu_book</span>
                        <h3>المناهج التعليميه</h3><span class="material-symbols-outlined drop">expand_more</span>
                    </a>
                    <div class="sub-menu">
                        <a href="#" class="sub-item">Sub Item 01</a>
                        <a href="#" class="sub-item">Sub Item 02</a>
                        <a href="#" class="sub-item">Sub Item 03</a>
                      </div>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">overview</span>
                        <h3>ادارة الجداول</h3><span class="material-symbols-outlined drop">expand_more</span>
                    </a>
                    <div class="sub-menu">
                        <a href="#" class="sub-item">Sub Item 01</a>
                        <a href="#" class="sub-item">Sub Item 02</a>
                        <a href="#" class="sub-item">Sub Item 03</a>
                      </div>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">unknown_document</span>
                        <h3>ادارة الامتحانات</h3><span class="material-symbols-outlined drop">expand_more</span>
                    </a>
                    <div class="sub-menu">
                        <a href="#" class="sub-item">Sub Item 01</a>
                        <a href="#" class="sub-item">Sub Item 02</a>
                        <a href="#" class="sub-item">Sub Item 03</a>
                      </div>
                </li>
                <li>
                    <a href="#" >
                        <span class="material-symbols-outlined">logout</span>
                        <h3>تسجيل الخروج</h3>
                    </a>
                </li>
            </ul>
          </div>
        </aside>
         <!-- end aside -->
    <main>
        <div class="menu"><a href="#" class="menu-btn"><span class="material-symbols-outlined">menu</span></a></div>
        <div class="title">
            <h1>لوحة التحكم</h1>
            <div class="date">
                <span id="year">2023</span>-<span id="month">4</span>-<span id="day">13</span>
            </div>
        </div>
        <div class="right">
            <div class="top">
                <div class="search">
                    <input type="search">
                </div>
                <div class="span">
                    <span class="material-symbols-outlined">search</span>
                </div>   
                <div class="profile-photo">
                    <img src="assets/images/me.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="portfolio" style="background-image: url('assets/images/bg-dashboard.png');">
            <div class="right">
                <h2>اهلا <span class="name">عبدالرحمن</span></h2>
                <p>اهلا بكم في لوحة تحكم مدير نظام كلية الحاسبات والذكاء الاصطناعي بجامعة حلوان</p>
            </div>
            <div class="left">
                <img src="assets/images/Cartoon.svg" alt="">
            </div>
    </div>
        <div class="insights">
            <div class="student">
                <div class="right">
                    <h3>الطلاب الحاليين</h3>
                    <h1>14325 طالب</h1>
                </div>
                <div class="left">
                    <span class="material-symbols-outlined">person</span>                   
                </div>
            </div>
            <div class="professor">
                <div class="right">
                    <h3>الاساتذه الحاليين</h3>
                    <h1>52 استاذ</h1>
                </div>
                <div class="left">
                    <span class="material-symbols-outlined">school</span>         
                </div>
            </div>
            <div class="TA">
                <div class="right">
                    <h3>المعيدين الحاليين</h3>
                    <h1>156 معيد</h1>
                </div>
                <div class="left">
                    <span class="material-symbols-outlined">person</span>                   
                </div>
            </div>
        </div>
    </main>
    </div>
<script>
       $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.drop').toggleClass('rotate');
      });

    //   jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
</script>
</div>   
</body>
</html>