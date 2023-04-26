<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>الملف الشخصي</title>

    <!--CDN Links-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!--Stylesheet Files-->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/student_profile.css">
</head>
<body>
    <div class="main" style="margin-top: 100px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <div class="profile-card">
                            <div class="profileImg">
                                <img src="https://elebdaa-academy.com/imgs/user.webp" alt="">
                            </div>
                            <div class="card-details">
                                <div class="personalInformation">
                                    <h3 class="profileName">م.عبدالرحمن مصطفى</h3>
                                    <span class="profileType">سوبر ادمن</span>
                                </div>
                                <div class="someDetails">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12 someDetailsHeader">
                                                معلومات الطالب
                                            </div>
                                            <div class="col-12">
                                                <div class="item">
                                                    <span class="type">الاسم:</span>
                                                    <span class="info">م.عبدالرحمن مصطفى</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="item">
                                                    <span class="type">الاسم:</span>
                                                    <span class="info">م.عبدالرحمن مصطفى</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="item">
                                                    <span class="type">الاسم:</span>
                                                    <span class="info">م.عبدالرحمن مصطفى</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="item">
                                                    <span class="type">الاسم:</span>
                                                    <span class="info">م.عبدالرحمن مصطفى</span>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="item">
                                                    <span class="type">الاسم:</span>
                                                    <span class="info">م.عبدالرحمن مصطفى</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <div class="profile-panel">
                            <div class="tab-box">
                                <button class="tab-btn">البيانات</button>
                                <button class="tab-btn">التقييمات</button>
                                <button class="tab-btn">الاقسام</button>
                                <button class="tab-btn">الساعات</button>
                                <div class="tab-line"></div>
                            </div>
                            <div class="content-box">
                                <div class="content">
                                    <div class="container">
                                        <form dir="rtl">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label" dir="rtl">البريد الإلكتروني</label>
                                                <input type="email" class="form-control is-invalid" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl">
                                                <div class="invalid-feedback">
                                                    تجربة التحقق
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputPassword1" class="form-label" dir="rtl">كلمة السر</label>
                                                <input type="password" class="form-control" id="exampleInputPassword1" dir="rtl">
                                            </div>
                                            <button type="submit" class="btn btn-primary" dir="rtl">إرسال</button>
                                        </form>

                                    </div>
                                </div>
                                <div class="content">
                                    <div id="chart"></div>
                                </div>
                                <div class="content">
                                    <div id="chart2"></div>
                                </div>
                                <div class="content">
                                    <div id="chart3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
<!--CDN Links-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/student_profile.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<!--Charts Script-->
<script>
    var options = {
        colors: ['#92BCB5'],
        series: [{
            name: 'عدد التقييم',
            data: [2.3, 3.1, 4.0, 10.1, 4.0, 3.6, 3.2, 2.3, 1.4]
        }],
        chart: {
            height: 350,
            type: 'bar',
        },
        plotOptions: {
            bar: {
                borderRadius: 10,
                dataLabels: {
                    position: 'top', // top, center, bottom
                },
            }
        },
        dataLabels: {
            enabled: true,
            formatter: function (val) {
                return val + "%";
            },
            offsetY: -20,
            style: {
                fontSize: '12px',
                colors: ["#510d76"]
            }
        },

        xaxis: {
            categories: ["A+","A","B+","B","C+","C","D+","D","F"],
            position: 'top',
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false
            },
            crosshairs: {
                fill: {
                    type: 'gradient',
                    gradient: {
                        colorFrom: '#D8E3F0',
                        colorTo: '#BED1E6',
                        stops: [0, 100],
                        opacityFrom: 0.4,
                        opacityTo: 0.5,
                    }
                }
            },
            tooltip: {
                enabled: true,
            }
        },
        yaxis: {
            axisBorder: {
                show: false
            },
            axisTicks: {
                show: false,
            },
            labels: {
                show: false,
                formatter: function (val) {
                    return val + "%";
                }
            }

        },
        title: {
            text: 'التقييم العام للطالب',
            floating: true,
            offsetY: 330,
            align: 'center',
            style: {
                color: '#444'
            }
        }
    };
    var options2 = {
        colors: ['#92BCB5'],
        series: [{
            name: 'Series 1',
            data: [80, 50, 30, 40, 100, 20],
        }],
        chart: {
            height: 350,
            type: 'radar',
        },
        title: {
            text: 'مؤشر تقييم الاقسام'
        },
        xaxis: {
            categories: ['CS', 'AI', 'IT', 'IS', 'SW', 'MI']
        }
    };
    var options3 = {
        colors: ['#92BCB5'],
        series: [67],
        chart: {
            height: 350,
            type: 'radialBar',
            offsetY: -10
        },
        plotOptions: {
            radialBar: {
                startAngle: -135,
                endAngle: 135,
                dataLabels: {
                    name: {
                        fontSize: '16px',
                        color: undefined,
                        offsetY: 120
                    },
                    value: {
                        offsetY: 76,
                        fontSize: '22px',
                        color: undefined,
                        formatter: function (val) {
                            return val + "%";
                        }
                    }
                }
            }
        },
        fill: {
            type: 'gradient',
            gradient: {
                shade: 'dark',
                shadeIntensity: 0.15,
                inverseColors: false,
                opacityFrom: 1,
                opacityTo: 1,
                stops: [0, 50, 65, 91]
            },
        },
        stroke: {
            dashArray: 4
        },
        labels: ['مؤشر اكتمال الساعات'],
    };

    var chart3 = new ApexCharts(document.querySelector("#chart3"), options3);
    chart3.render();
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
    var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
    chart2.render();
</script>
</body>
</html>
