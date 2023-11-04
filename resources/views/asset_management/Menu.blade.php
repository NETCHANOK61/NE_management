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
    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <!-- Styles -->

    <style>
        .thead.tr.th {
            background-color: #00ffff
        }
    </style>

</head>

<body>
    <div class="jumbotron" style="color: #fff; background-color: rgb(23, 158, 211);height:100px;">
        <h1 align="center">รายการทะเบียนอุปกรณ์</h1>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-3 my-1">
                <label for="category">หมวดหมู่ทั้งหมด</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="font-size: 24px;"><i
                                class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <input type="text" class="form-select" id="category" placeholder="หมวดหมู่ทั้งหมด">
                </div>
            </div>

            <div class="col-sm-3 my-1">
                <label for="department">หน่วยงาน/แผนก</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="font-size: 24px;"><i
                                class="fa-solid fa-magnifying-glass"></i></div>
                    </div>
                    <input type="text" class="form-select" id="department" placeholder="หน่วยงานทั้งหมด">
                </div>
            </div>

            <div class="col-sm-2 my-1">
                <label for="status">สถานะอุปกรณ์</label>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text" style="font-size: 24px;">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                    <input type="text" class="form-select" id="status" placeholder="ใช้งานปกติ">
                </div>
            </div>

            <div class="col-sm-2 my-1 mt-4">
                <button type="button" class="btn btn-primary" style="font-size: 19px;"><i
                        class="fa-solid fa-magnifying-glass"></i>ค้นหา</button>
            </div>

            <div class="col-sm-2 my-1 mt-4">
                <button type="button" class="btn btn-light" style="font-size: 19px;"><i
                        class="fa-solid fa-print"></i>พิมพ์</button>
                <button type="button" class="btn btn-success" style="font-size: 19px;"><i
                        class="fa-solid fa-download"></i>excel</button>
            </div>


        </div>
        <br>
        <div>
            <b>แสดง 1 ถึง 20 จาก 50 ผลลัพธ์</b>
        </div>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">รหัสอุปกรณ์</th>
                    <th scope="col">ซีเรียลนัมเบอร์</th>
                    <th scope="col">ชื่ออุปกรณ์</th>
                    <th scope="col">ยี่ห้อ/รุ่น</th>
                    <th scope="col">หมวดหมู่อุปกรณ์</th>
                    <th scope="col">หน่วยงาน/แผนก</th>
                    <th scope="col">ผู้ใช้งาน/สถานที่ติดตั้ง</th>
                    <th scope="col">การรับประกัน</th>
                    <th scope="col">รายละเอียด</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td>xxx</td>
                    <td><button class="btn btn-primary"><i class="fa-solid fa-eye"></i></button></td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
