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
    }
    main  .title{
        display:flex;
        align-items: center;
        gap: 1rem;
        margin-top: 1.4rem;
    }
    main .title .date{
        font-size: var(--normal-font-size);
        color: var(--text-color);
    }
    /*end top left*/

    /*style nav top right*/
    main .right{
        margin-top: -2rem;
    }
    main .right .top{
        display: flex;
        justify-content: center;
        justify-content: end;
        gap: .5rem;

    }
    main .right .top .search input{
        border-radius: 20px;
        -webkit-border-radius: 20px;
        -moz-border-radius: 20px;
        -ms-border-radius: 20px;
        -o-border-radius: 20px;
        width: 300px;
        height: 30px;

    }
    main .right .top  span{
        background-color: var(--first-color);
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        color: var(--container-color);
        margin-right: -2.5rem;
        margin-top: .2rem;
    }
    main .right .top .profile-photo{
        background-color: var(--first-color);
        width: 3.2rem;
        height: 3.2rem;
        border-radius: 50%;
        -webkit-border-radius: 50%;
        -moz-border-radius: 50%;
        -ms-border-radius: 50%;
        -o-border-radius: 50%;
        margin-top: -.3rem;
        margin-left: 2rem;
    }
    .profile-photo img{
        width: 2.8rem;
        height: 2.8rem;
        border-radius: 50%;
        overflow: hidden;
    }
    /*end nav top right*/


    @media screen and (max-width: 760px) {
        main .right{
            margin-top: -1.4rem;
        }
        main .right .top .search input{
            width: 250px;
        }
    }
    @media screen and (max-width: 440px) {
        main  .title{
            margin-top: -1.4rem;
        }
        main .right .top{
            margin-top: 2rem;
            gap: 0rem;
        }
    }

</style>
<main>
<!--        right-top-nav bar-->
<div class="title">
    <h1>لوحة التحكم</h1>
    <div class="date">
        <span id="year"></span>-<span id="month"></span>-<span id="day"></span>
    </div>
</div>
<!--        left-top-nav bar-->
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
<!--        end nav-->
</main>
<script>

        let dateObj = new Date();
        let month = dateObj.getUTCMonth() + 1;
        document.getElementById('month').innerHTML = `${month}`;
        let day = dateObj.getUTCDate();
        document.getElementById('day').innerHTML = `${day}`;
        let year = dateObj.getUTCFullYear();
        document.getElementById('year').innerHTML = `${year}`;

</script>
