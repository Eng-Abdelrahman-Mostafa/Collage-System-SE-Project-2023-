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
    main .charts {

    }
    main .charts .donut{
        background-color: var(--container-color);
        border-radius: 10px;
        margin-left: 10px;
    }
    main .charts .bar{
        background-color: var(--container-color);
        border-radius: 10px;
        margin-right: 10px;
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
        <?php include 'layouts/aside_bar.view.php';?>
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
        <div class="charts" style="margin-top: 2rem;display: flex">
            <div class="donut" id="donut" style="width: 40%">
            </div>
            <div class="bar" id="bar" style="width: 60%">
            </div>
        </div>
<!--        end main-content-->
    </main>
    </div>
</div>
 <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
   <script>
       var options1 = {
           series: [55, 44, 41, 17, 15,23],
           chart: {
               type: 'donut',
           },
           colors: ['#92BCB5', '#FEF1CF', '#B5B5B8', '#F7F6FD', '#c6beef','#20B2AA'],
           labels: ['CS', 'IS', 'AI', 'IT', 'MI','SW'],
           responsive: [{
               breakpoint: 480,
               options: {
                   chart: {
                       width: 200
                   },
                   legend: {
                       position: 'bottom'
                   }
               }
           }]
       };

       var chart2 = new ApexCharts(document.getElementById('donut'), options1);
       chart2.render();

       var options = {
           series: [{
               name: 'المستوي العام',
               data: [44, 55, 57, 56, 61, 58]
           },  {
               name: 'مستوي الطلاب',
               data: [35, 41, 36, 26, 45, 48]
           }],
           colors: ['#FEF1CF','#92BCB5'],
           chart: {
               type: 'bar',
               height: 350
           },
           plotOptions: {
               bar: {
                   horizontal: false,
                   columnWidth: '55%',
                   endingShape: 'rounded'
               },
           },
           dataLabels: {
               enabled: false
           },
           stroke: {
               show: true,
               width: 2,
               colors: ['transparent']
           },
           xaxis: {
               categories: ['CS', 'IS', 'AI', 'IT', 'MI', 'SW'],
           },
           yaxis: {
               title: {
                   text: '$ (thousands)'
               }
           },
           fill: {
               opacity: 1
           },
           tooltip: {
               y: {
                   formatter: function (val) {
                       return "$ " + val + " thousands"
                   }
               }
           }
       };

       var chart = new ApexCharts(document.getElementById('bar'), options);
       chart.render();
   </script>
</body>
</html>