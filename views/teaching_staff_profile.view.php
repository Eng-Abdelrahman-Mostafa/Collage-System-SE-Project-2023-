<?php session_start(); ?>
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
                    <div class="col-8">
                        <div class="row">
                            <div class="col-lg-8 col-sm-12">
                                <div class="profile-panel">
                                    <div class="tab-box">
                                        <button class="tab-btn">البيانات</button>
                                        <div class="tab-line"></div>
                                    </div>
                                    <div class="content-box">
                                        <div class="content">
                                            <div class="container">
                                                <form dir="rtl" method="post" action="<?=site_url()?>/profile/update">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">الرقم القومي</label>
                                                        <input type="text" class="form-control <?= isset($_SESSION['errors']['national_id_number'])?"is-invalid":"" ?>" value="<?= $teaching_info['national_id_number'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="national_id_number" <?= $userRole!=1?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['national_id_number'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['national_id_number']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">الاسم بالعربية</label>
                                                        <input type="text" class="form-control <?= isset($_SESSION['errors']['full_name_ar'])?"is-invalid":"" ?>" value="<?= $teaching_info['full_name_ar'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="full_name_ar" <?= $userRole!=1?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['full_name_ar'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['full_name_ar']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">الاسم بالانجليزية</label>
                                                        <input type="text" class="form-control <?= isset($_SESSION['errors']['full_name_en'])?"is-invalid":"" ?>" value="<?= $teaching_info['full_name_en'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="full_name_en" <?= $userRole!=1?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['full_name_en'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['full_name_en']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">البريد الالكتروني</label>
                                                        <input type="email" class="form-control <?= isset($_SESSION['errors']['email'])?"is-invalid":"" ?>" value="<?= $teaching_info['email'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="email" <?= $userRole==4?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['email'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['email']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">كلمة المرور</label>
                                                        <input type="password" class="form-control <?= isset($_SESSION['errors']['password'])?"is-invalid":"" ?>" value="" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="password" <?= $userRole!=1?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['password'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['password']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">رقم الهاتف</label>
                                                        <input type="text" class="form-control <?= isset($_SESSION['errors']['phone_number'])?"is-invalid":"" ?>" value="<?= $teaching_info['phone_number'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="phone_number" <?= $userRole==4?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['phone_number'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['phone_number']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label" dir="rtl">اللقب الاكاديمي</label>
                                                        <input type="text" class="form-control <?= isset($_SESSION['errors']['title'])?"is-invalid":"" ?>" value="<?= $teaching_info['title'] ?>" id="exampleInputEmail1" aria-describedby="emailHelp" dir="rtl" name="title" <?= $userRole!=1?"disabled":""?> >
                                                        <?php if(isset($_SESSION['errors']['title'])):?>
                                                            <div class="invalid-feedback">
                                                                <?= $_SESSION['errors']['title']?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="disabledSelect" class="form-label" dir="rtl"></label>
                                                        <select id="disabledSelect" class="form-select" dir="rtl" name="department_id">
                                                            <?php foreach ($data['departments'] as $department):?>
                                                                <option value="<?= $department['id'] ?>" <?= $department['id']==$teaching_info['department_id']?"selected":"" ?>><?= $department['name'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="disabledSelect" class="form-label" dir="rtl"></label>
                                                        <select id="disabledSelect" class="form-select" dir="rtl" name="nationality_id" <?= $userRole==4?"disabled":""?>>
                                                            <?php foreach ($data['nationalities'] as $department):?>
                                                                <option value="<?= $department['id'] ?>" <?= $department['id']==$teaching_info['department_id']?"selected":"" ?>><?= $department['name'] ?></option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                    <input type="hidden" value="<?= $teaching_info['id'] ?>" name="id">
                                                    <button type="submit" class="btn btn-primary" dir="rtl">إرسال</button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <div class="profile-card">
                                    <div class="profileImg">
                                        <img src="https://elebdaa-academy.com/imgs/user.webp" alt="">
                                    </div>
                                    <div class="card-details">
                                        <div class="personalInformation">
                                            <h3 class="profileName"><?= $teaching_info['full_name_ar'] ?></h3>
                                            <span class="profileType"><?= $roleName ?></span>
                                        </div>
                                        <div class="someDetails">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-12 someDetailsHeader">
                                                        معلومات شخصية
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="item">
                                                            <span class="type">الاسم:</span>
                                                            <span class="info"><?= $teaching_info['full_name_ar'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="item">
                                                            <span class="type">اللقب الاكاديمي:</span>
                                                            <span class="info"><?= $teaching_info['title'] ?></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="item">
                                                            <span class="type">رقم الهاتف:</span>
                                                            <span class="info"><?= $teaching_info['phone_number'] ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <?php require_once ('layouts/aside_bar_pr.view.php')?>
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
            data: [
                <?php
                $counts="";
                foreach ($grades_count as $key => $grade_count) {
                    $counts.= $grade_count . ",";
                }
                $counts = rtrim($counts, ",");
                ?>
            ]
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
            data: [
                <?php
                $departments_names="";
                foreach ($grades_departments as $grade_department) {
                    foreach ($grade_department as $key => $value) {
                        $departments_names.= $value . ",";
                    }
                }
                $departments_names = rtrim($departments_names, ",");
                ?>
            ],
        }],
        chart: {
            height: 350,
            type: 'radar',
        },
        title: {
            text: 'مؤشر تقييم الاقسام'
        },
        xaxis: {
            categories: [
                <?php
                $departments_names="";
                foreach ($grades_departments as $grade_department) {
                    foreach ($grade_department as $key => $value) {
                        $departments_names.= $key . ",";
                    }
                }
                $departments_names = rtrim($departments_names, ",");
                ?>
            ]
        }
    };
    var options3 = {
        colors: ['#92BCB5'],
        series: [<?= $teaching_info['total_hours'] ?>],
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
