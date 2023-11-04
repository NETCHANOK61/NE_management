<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> --}}

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <script type='importmap'>
      {
        "imports": {
          "@fullcalendar/core": "https://cdn.skypack.dev/@fullcalendar/core@6.1.9",
          "@fullcalendar/daygrid": "https://cdn.skypack.dev/@fullcalendar/daygrid@6.1.9"
        }
      }
    </script>
    <script type='module'>
        import {
            Calendar
        } from '@fullcalendar/core'
        import dayGridPlugin from '@fullcalendar/daygrid'

        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar')
            const calendar = new Calendar(calendarEl, {
                plugins: [dayGridPlugin],
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
                }
            })
            calendar.render()
        })
    </script>
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
            font-size: 14px;
        }

        #calendar {
            max-width: 1100px;
            margin: 40px auto;
        }
    </style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
            <h3 style="color: #fff">ระบบแจ้งซ่อมออนไลน์</h3>
            <form class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="navbar-brand" href="#" style="color: #fff">
                    <i class="fa-regular fa-clock" style="color: #ffffff;"></i>
                    หน้าหลัก
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #fff">
                    <i class="fa-solid fa-toolbox" style="color: #ffffff;"></i>
                    ข้อมูลงานซ่อม
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #fff">
                    <i class="fa-solid fa-calendar-days" style="color: #ffffff;"></i>
                    แผนบำรุงรักษา
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #fff">
                    <i class="fa-solid fa-mobile-screen-button" style="color: #ffffff;"></i>
                    อุปกรณ์
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #fff">
                    <i class="fa-solid fa-chart-simple" style="color: #ffffff;"></i>
                    รายงาน
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#" style="color: #fff">
                    <i class="fa-solid fa-gear" style="color: #ffffff;"></i>
                    ตั้งค่า
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <i class="fa-solid fa-circle-info" style="color: #ffffff;"></i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </form>
        </div>
    </nav>

    <nav class="navbar">
        <div class="container-fluid">
            <h3>
                <i class="fa-regular fa-calendar-days" style="color: #000000;"></i>
                แผนบำรุงรักษา
            </h3>
        </div>
    </nav>

    <div class="container-fluid">

        <button type="button" class="btn btn-secondary ">

            วางแผนการบำรุงรักษา
        </button>
        <button type="button" class="btn btn-secondary ">

            PM รอดำเนินการ
        </button>
        <button type="button" class="btn btn-secondary ">

            ปฏิทิน PM
        </button>
        <button type="button" class="btn btn-secondary ">

            ประวัติ PM
        </button>
        <button type="button" class="btn btn-secondary ">

            ตั้งค่า ประเภทการตรวจเช็ค
        </button>

    </div>
    <br><br><br>

    <div class="container-fluid">

        <div id='calendar'></div>
        <!-- Cloudflare Pages Analytics -->
        <script defer src='https://static.cloudflareinsights.com/beacon.min.js'
            data-cf-beacon='{"token": "dc4641f860664c6e824b093274f50291"}'></script><!-- Cloudflare Pages Analytics -->
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');

                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    initialDate: '2023-09-07',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    events: [{
                            title: 'All Day Event',
                            start: '2023-09-01'
                        },
                        {
                            title: 'Long Event',
                            start: '2023-09-07',
                            end: '2023-09-10'
                        },
                        {
                            groupId: '999',
                            title: 'Repeating Event',
                            start: '2023-09-09T16:00:00'
                        },
                        {
                            groupId: '999',
                            title: 'Repeating Event',
                            start: '2023-09-16T16:00:00'
                        },
                        {
                            title: 'Conference',
                            start: '2023-09-11',
                            end: '2023-09-13'
                        },
                        {
                            title: 'Meeting',
                            start: '2023-09-12T10:30:00',
                            end: '2023-09-12T12:30:00'
                        },
                        {
                            title: 'Lunch',
                            start: '2023-09-12T12:00:00'
                        },
                        {
                            title: 'Meeting',
                            start: '2023-09-12T14:30:00'
                        },
                        {
                            title: 'Birthday Party',
                            start: '2023-09-13T07:00:00'
                        },
                        {
                            title: 'Click for Google',
                            url: 'https://google.com/',
                            start: '2023-09-28'
                        }
                    ]
                });

                calendar.render();
            });
        </script>
    </div>




</body>

</html>
