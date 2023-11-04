<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>Service Management</title>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="template/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Icon Font Css -->
    <link rel="stylesheet" href="template/plugins/icofont/icofont.min.css">
    <!-- Slick Slider  CSS -->
    <link rel="stylesheet" href="template/plugins/slick-carousel/slick/slick.css">
    <link rel="stylesheet" href="template/plugins/slick-carousel/slick/slick-theme.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="template/css/style.css">

</head>

<body id="top">

    <header>
        <div class="header-top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <ul class="top-bar-info list-inline-item pl-0 mb-0">
                            <li class="list-inline-item"><a href="mailto:nine_mockup@gmail.com"><i
                                        class="icofont-support-faq mr-2"></i>nine_mockup@gmail.com</a></li>
                            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address 118/11,
                                Lad-Krabang, Bangkok </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
                            <a href="tel:+23-345-67890">
                                <span>Call Center : </span>
                                <span class="h4">1181</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navigation" id="navbar">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/logo.png" alt="" class="img-fluid">
                </a>

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
                    aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icofont-navigation-menu"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarmain">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('index')}}">หน้าแรก</a>
                        </li>
                        {{-- <li class="nav-item"><a class="nav-link" href="about.html">About</a></li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{route('create')}}">แจ้งงานซ่อม</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="text-md mb-2">แจ้งงานซ่อม</h2>
                        <div class="divider mx-auto my-4"></div>
                        {{-- <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit perferendis maiores ratione aliquam?</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form id="contact-form" class="contact__form " method="POST" action="">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                    Your message was sent successfully.
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <h4>&mdash; ข้อมูลผู้แจ้ง &mdash;</h4>
                                <div class="form-group">
                                    <label for="">วันที่แจ้งซ่อม</label>
                                    <input name="name" id="name" type="date" class="form-control"
                                        placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="">ชื่อผู้แจ้ง</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="admin">Administrator</option>
                                        <option value="staff">Staff</option>
                                        <option value="support">Support</option>
                                    </select>

                                    {{-- <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Your Full Name"> --}}
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <h4>&mdash; ข้อมูลผู้ดำเนินการ &mdash;</h4>
                                <div class="form-group">
                                    <label for="">วันที่ดำเนินการ</label>
                                    <input name="name" id="name" type="date" class="form-control"
                                        placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="">ผู้ดำเนินการ</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="admin">Administrator</option>
                                        <option value="staff">Staff</option>
                                        <option value="support">Support</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-6">
                                <h4>&mdash; ข้อมูลปัญหา &mdash;</h4>
                                <div class="form-group">
                                    <label for="">ประเภทงานซ่อม</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="program">แก้ไขโค้ด</option>
                                        <option value="device">ซ่อมอุปกรณ์</option>
                                        <option value="internet">ติดต่อผู้ให้เช่าสัญญาณ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">ประเภทปัญหา</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="program">ปัญหาโปรแกรม</option>
                                        <option value="device">ปัญหาอุปกรณ์</option>
                                        <option value="internet">ปัญหาสัญญาณอินเทอร์เน็ต</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">ชื่ออุปกรณ์</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="a">A</option>
                                        <option value="b">B</option>
                                        <option value="c">C</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">ความเร่งด่วน</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="1">ปกติ</option>
                                        <option value="2">มาก</option>
                                        <option value="3">พิเศษ</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">ปัญหา/งานซ่อม</label>
                                    <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">ไฟล์แนบ</label>
                                    <input name="name" id="name" type="file">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <h4>&mdash; ผลการแก้ไข &mdash;</h4>
                                <div class="form-group">
                                    <label for="">วันที่สำเร็จ</label>
                                    <input name="name" id="name" type="date" class="form-control"
                                        placeholder="Your Full Name">
                                </div>
                                <div class="form-group">
                                    <label for="">ปัญหา/งานซ่อม</label>
                                    <textarea name="message" id="message" class="form-control" rows="8" placeholder="Your Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="">ไฟล์แนบ</label>
                                    <input name="name" id="name" type="file">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-8">
                                            <p>ค่าใช้จ่าย <span>0.00</span></p>
                                        </div>
                                        <div class="col-4">
                                            <button class="btn btn-warning">บันทึกค่าใช้จ่าย</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="">สถานะ</label>
                                    <select class="form-control" aria-label="Default select example">
                                        <option value="1">กำลังดำเนินการ</option>
                                        <option value="2">สำเร็จ</option>
                                        <option value="3">ส่งต่อให้ partner</option>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="text-center">
                            <input class="btn btn-main btn-round-full" name="submit" type="submit"
                                value="Send Messege"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>


    {{-- <div class="google-map ">
    <div id="map"></div>
</div> --}}
    <!-- footer Start -->
    {{-- <footer class="footer section gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mr-auto col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <div class="logo mb-4">
                            <img src="images/logo.png" alt="" class="img-fluid">
                        </div>
                        <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur
                            veritatis eveniet distinctio possimus.</p>

                        <ul class="list-inline footer-socials mt-4">
                            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i
                                        class="icofont-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i
                                        class="icofont-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i
                                        class="icofont-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Department</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Surgery </a></li>
                            <li><a href="#">Wome's Health</a></li>
                            <li><a href="#">Radiology</a></li>
                            <li><a href="#">Cardioc</a></li>
                            <li><a href="#">Medicine</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widget mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Support</h4>
                        <div class="divider mb-4"></div>

                        <ul class="list-unstyled footer-menu lh-35">
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Company Support </a></li>
                            <li><a href="#">FAQuestions</a></li>
                            <li><a href="#">Company Licence</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="widget widget-contact mb-5 mb-lg-0">
                        <h4 class="text-capitalize mb-3">Get in Touch</h4>
                        <div class="divider mb-4"></div>

                        <div class="footer-contact-block mb-4">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-email mr-3"></i>
                                <span class="h6 mb-0">Support Available for 24/7</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
                        </div>

                        <div class="footer-contact-block">
                            <div class="icon d-flex align-items-center">
                                <i class="icofont-support mr-3"></i>
                                <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
                            </div>
                            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-btm py-4 mt-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="copyright">
                            &copy; Copyright Reserved to <span class="text-color">Novena</span> by <a
                                href="https://themefisher.com/" target="_blank">Themefisher</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
                            <form action="#" class="subscribe">
                                <input type="text" class="form-control" placeholder="Your Email address">
                                <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <a class="backtop js-scroll-trigger" href="#top">
                            <i class="icofont-long-arrow-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}


    <!--
    Essential Scripts
    =====================================-->


    <!-- Main jQuery -->
    <script src="template/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="template/plugins/bootstrap/js/popper.js"></script>
    <script src="template/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="template/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="template/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="template/plugins/counterup/jquery.waypoints.min.js"></script>

    <script src="template/plugins/shuffle/shuffle.min.js"></script>
    <script src="template/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="template/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap">
    </script>

    <script src="template/js/script.js"></script>
    <script src="template/js/contact.js"></script>

</body>

</html>
