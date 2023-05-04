<style>
    /*========== VARIABLES CSS ==========*/
    :root {
        --header-height: 3.5rem;
        --nav-width: 219px;

        /*========== Colors ==========*/
        --first-color: #92BCB5;
        --first-color-light: #FEF1CF;
        --title-color: #19181B;
        --text-color: #5a5b62;
        --text-color-light: #B5B5B8;
        --body-color: #F7F6FD;
        --container-color: #FFFFFF;
        --shadow: rgba(0,0,0,0.15) 0px 2px 8px;

        /*========== Font and typography ==========*/
        --body-font: 'Cairo', sans-serif;
        --normal-font-size: .938rem;
        --small-font-size: .75rem;
        --smaller-font-size: .75rem;

        /*========== Font weight ==========*/
        --font-medium: 500;
        --font-semi-bold: 600;

        /*========== z index ==========*/
        --z-fixed: 100;
    }
    aside{
        margin-top: 1rem;
        width: 16rem;
        background-color:var(--container-color);
        border-radius: 2%;
        -webkit-border-radius: 2%;
        -moz-border-radius: 2%;
        -ms-border-radius: 2%;
        -o-border-radius: 2%;
    }

    aside .top{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 1.4rem;
    }
    aside .logo{
        display: flex;
        gap: 0.8rem;
    }
    aside .logo img{
        width: 3rem;
        height: 3rem;
    }
    aside .logo .danger{
        color: var(--first-color);
    }
    aside .logo .close-btn{
        margin-top: -1rem;
        margin-left: 1rem;
        color: #92BCB5;
        display: none;
    }
    aside .sidebar{
        display: flex;
        flex-direction: column;
        height: 70vh;
        position: relative;
        top: 1rem;
    }
    aside .sidebar li a{
        display: flex;
        gap: 1rem;
        align-items: center;
        position: relative;
        height: 3.2rem;
        transition:all 300ms ease ;
        -webkit-transition:all 300ms ease ;
        -moz-transition:all 300ms ease ;
        -ms-transition:all 300ms ease ;
        -o-transition:all 300ms ease ;
    }
    aside .sidebar  li:last-child{
        position: absolute;
        bottom: 6rem;
        width: 100%;
    }
    aside hr{
        border-top: 1px solid var(--text-color);
        margin-top: 1rem;
    }
    aside .sidebar a.active{
        color:var(--first-color) ;
        margin-left: 0;
    }
    aside .sidebar a.active::before{
        content: "";
        width: 4px;
        height: 60%;
        background: var(--first-color);
    }
    aside .sidebar a:hover {
        color: var(--first-color);
    }
    aside .sidebar a:hover span{
        margin-left: 1rem;
    }
    aside .sidebar li a .drop{
        position: absolute;
        left: 0;
        margin: 20px;
        transition: all 0.3s ease;
        -webkit-transition: all 0.3s ease;
        -moz-transition: all 0.3s ease;
        -ms-transition: all 0.3s ease;
        -o-transition: all 0.3s ease;
    }
    aside .sidebar li .sub-menu{
        display: none;
    }
    aside .sidebar li .sub-menu a{
        display: flex;
        gap: 4rem;
        align-items: center;
        position: relative;
        height: 1.5rem;
        transition:all 300ms ease ;
        -webkit-transition:all 300ms ease ;
        -moz-transition:all 300ms ease ;
        -ms-transition:all 300ms ease ;
        -o-transition:all 300ms ease ;
        margin-right: 2rem;
    }
    aside .sidebar li .sub-menu .show{
        display: block;
    }
    .rotate{
        transform: rotate(90deg);
    }
    .menu-btn{
        margin-right: -11%;
        color: var(--first-color);
        margin-top: 1.4rem;
        display: none;
    }
    @media screen and (max-width: 1200px) {

        aside{
            width: 5rem;
            border-radius: 20px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            -ms-border-radius: 20px;
            -o-border-radius: 20px;
        }
        aside .logo h2{
            display: none;
        }
        aside .sidebar h3{
            display: none;
        }
        aside .sidebar li .sub-menu a{
            display: flex;
            gap: 2rem;
            margin-right: .5rem;
        }
    }

    @media screen and (max-width: 760px) {
        aside{
            right: 0;
            width: 18rem;
            z-index: 3;
            box-shadow: 1rem 3rem 4rem #92BCB5;
            height: 100vh;
        }
        aside .logo h2{
            display: block;
        }
        aside .sidebar h3{
            display: block;
        }
        aside .sidebar li .sub-menu a{
            display: flex;
            gap: 4rem;
            margin-right: 2rem;
        }
        aside .logo .close-btn{
            display:block;
        }
        aside{
            width: 0;
        }
        aside .sidebar{
            display: none;
        }
        aside .top{
            display: none;
        }
        .menu-btn{
            display: block;
            color: #92BCB5;

        }
        .active{
            width: 18rem;
        }
        .active .sidebar{
            display: block;
        }
        .active .top{
            display: block;
        }
        aside .menu-btn{
            margin-right: 40px;
        }
    }
    @media screen and (max-width: 440px) {
        aside .menu-btn{
            margin-right: 25px;
        }
        .menu-btn{
            margin-top: -.3rem;
        }
    }
</style>
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
                        <span class="material-symbols-outlined">book</span>
                        <h3>تسجيل المواد</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">menu_book</span>
                        <h3>المواد المسجله والدرجات</h3>
                    </a>
                </li>
                <li>
                    <a href="#" class="sub-btn">
                        <span class="material-symbols-outlined">overview</span>
                        <h3>ادارة الجداول</h3>
                    </a>
                </li>
                <li>
                    <a href="#" >
                        <span class="material-symbols-outlined">logout</span>
                        <h3>تسجيل الخروج</h3>
                    </a>
                </li>
            </ul>
          </div>
    <div class="menu"><a href="#" class="menu-btn"><span class="material-symbols-outlined">menu</span></a></div>
</aside>

<script>
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
</script>
