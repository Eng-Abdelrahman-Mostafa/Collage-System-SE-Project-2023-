<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="assets/images/collage-logo.svg">
    <title>Dashboard</title>
   <!-- css -->
    <link rel="stylesheet" href="assets/css/dashboard.css">
<style>
    .container{
        display: flex;
    }
    main .calendar{
        background-color: var(--container-color);
        border-radius: 10px;
        height: 60%;
        margin-top: -2rem;
        margin-bottom: -25rem;
    }
    @media screen and (max-width: 760px) {
        main .calendar{
            margin-top: -8rem;
        }
    }
</style>
    <!-- matrial icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>
<body>
 <div class="bdy">
    <div class="container">
        <?php include 'layouts/aside_bar_std.view.php';?>
    <main>
        <?php include 'layouts/nav_bar.view.php';?>

<!--     start main-content   -->
        <div class="portfolio" style="background-image: url(assets/images/bg-dashboard.png);">
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

            </div>
            <div class="professor">

            </div>
            <div class="TA">

            </div>
        </div>
        <div class='calendar' id='calendar' >

        </div>
<!--        end main-content-->
    </main>
    </div>
</div>
 <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js'></script>
 <script>

     document.addEventListener('DOMContentLoaded', function() {
         var calendarEl = document.getElementById('calendar');
         var calendar = new FullCalendar.Calendar(calendarEl, {
             initialView: 'dayGridMonth',
             events: [
                 <?php foreach ( $appointment as $s): ?>
                 {
                     title: '<?php echo $s['title']; ?>',
                     start: '<?php echo $s['start_time']; ?>',
                 },
                 <?php endforeach; ?>
             ]
         });
         calendar.render();
     });

 </script>
</body>
</html>