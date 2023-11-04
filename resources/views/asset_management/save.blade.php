<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Styles -->

</head>

<body>
    <div class="jumbotron" style="color: #fff; background-color: #0080FF;height:100px;">
        <h1 align="center">บันทึกข้อมูลทะเบียนอุปกรณ์</h1>
    </div>

    <div class="container mt-5">
        <div style="background-color: #0080FF">
            <p style="font-size: 20px; color: #fff">ระบบแจ้งซ่อมออนไลน์</p>
        </div>
        <div class="row">
            <div>
                <div ><i class="fa-solid fa-folder-open mt-2"></i>ข้อมูลอุปกรณ์</div>
            </div>

            <form>
                <div class="form-group mt-4">
                    <div>
                        <label for="picture">รูปภาพ</label>
                    </div>
                    <input type="file" class="form-control-file" id="files">
                </div>
            </form>

            <div class="col-6">

                <div class="form-group mt-3">
                    <div>
                        <label for="accessorie_id">รหัสอุปกรณ์</label>
                    </div>
                    <input type="text" class="form-control" id="access_id" placeholder="EL64ACC25630226">
                </div>

                <div class="form-group mt-3">
                    <div>
                        <label for="serial_number">ซีเรียลนัมเบอร์</label>
                    </div>
                    <input type="text" class="form-control" id="serial_id" placeholder="ซีเรียลนัมเบอร์">
                </div>

                <div class="form-group mt-3">
                    <div>
                        <label for="cate_id">หมวดหมู่อุปกรณ์</label>
                    </div>
                    <input type="text" class="form-control" id="cate_id"
                        placeholder="อุปกรณ์อิเล็กทรอนิกส์(EL)-PC">
                </div>

                <div class="form-group mt-3">
                    <div>
                        <label for="user">ผู้ใช้งาน</label>
                    </div>
                    <input type="text" class="form-control" id="user" placeholder="ผู้ใช้งาน">
                </div>


            </div>

            <div class="col-6">

                <div class="form-group mt-3">
                    <div>
                        <label for="access_name">ชื่ออุปกรณ์</label>
                    </div>
                    <input type="text" class="form-control" id="access_name" placeholder="PC-name">
                </div>

                <div class="form-group mt-3">
                    <div>
                        <label for="price">ราคา</label>
                    </div>
                    <input type="text" class="form-control" id="price" placeholder="PC-name">
                </div>

                <div class="form-group mt-3">
                    <div>
                        <label for="department">หน่วยงาน/แผนก</label>
                    </div>
                    <input type="text" class="form-control" id="department" placeholder="บัญชี(Acc)">
                </div>

                <div class="form-group mt-3">
                    <div>
                        <label for="date">วันเริ่มใช้งาน</label>
                    </div>
                    <input type="date" class="form-control" id="date" placeholder="บัญชี(Acc)">
                </div>

            </div>

            <div class="form-group mt-3">
                <div>
                    <label for="place">สถานที่ติดตั้ง</label>
                </div>
                <input type="text" class="form-control" id="place" placeholder="บัญชี(Acc)">
            </div>


            <div class="status mt-3">
                <label for="access_status">สถานะอุปกรณ์</label>
            </div>
            <div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio1" value="option1">
                    <label class="form-check-label" for="inlineRadio1">ใช้งานปกติ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">เลิกใช้งาน</label>
                </div>
            </div>

            <div class="form-group mt-3">
                <div>
                    <label for="place">รายละเอียดเพิ่มมเติม</label>
                </div>
                <textarea type="text" class="form-control" id="detail_oth"></textarea>
            </div>

        </div>
    </div>




</body>

</html>
