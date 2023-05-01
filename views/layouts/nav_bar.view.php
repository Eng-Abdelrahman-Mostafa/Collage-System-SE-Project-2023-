
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
<script>
       $(document).ready(function(){
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.drop').toggleClass('rotate');
      });
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
