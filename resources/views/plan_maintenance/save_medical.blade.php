{{-- @extends('layouts.xxxx')

@section('title')
    บันทึกการบำรุงรักษา
@endsection --}}


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

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            padding: 8px;
        }
        .center-table {
            display: flex;
            justify-content: center;
        }
        th {
            color: #fff;
        }
    </style>

</head>

<body>
    <br><br>

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <b>บันทึกการบำรุงรักษา</b>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            เลขที่ PM : PM20210006
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            วันที่กำหนด PM : 01/08/2021
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            ประเภทการตรวจเช็ค : ตรวจเช็คอุปกรณ์ประจำปี 2565
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            ผู้ดำเนินการ : Administrator
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            ชื่ออุปกรณ์ : 11040027 : A570ZD
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            สถานะ : ตรวจเช็คแล้ว
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <label>
                                            สถานที่ติดตั้ง : BRANCH
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-end">
                                    <div class="mb-3 mt-3">
                                        <button type="button" class="btn btn-secondary">
                                            <i class="fa-solid fa-print" style="color: #000;"></i>
                                            พิมพ์
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-2">
                                    <div class="mb-3 mt-3">
                                        <label class="form-label">
                                            วันที่ตรวจเช็ค
                                        </label>
                                        <input type="text" class="form-control" placeholder="2021-07-31">
                                    </div>
                                </div>

                                <div class="col-2">
                                    <div class="mb-3 mt-3">
                                        <label class="form-label">
                                            เวลา
                                        </label>
                                        <input type="text" class="form-control" placeholder="15:00">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3 mt-3">
                                        <label class="form-label">
                                            วันที่สำเร็จ
                                        </label>
                                        <input type="text" class="form-control" placeholder="2021-07-31">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="mb-3 mt-3">
                                        <label class="form-label">
                                            เวลา
                                        </label>
                                        <input type="text" class="form-control" placeholder="20:22">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3 mt-3">
                                        <table>
                                            <tr align="center" style="background-color:#000 ;">
                                                <th style="width: 20px;">ลำดับ</th>
                                                <th>รายละเอียดการตรวจเช็ค</th>
                                                <th style="width: 150px;">ผ่าน</th>
                                                <th style="width: 150px;">ไม่ผ่าน</th>
                                                <th style="width: 600px;">หมายเหตุ</th>
                                            </tr>
                                            <tr>
                                                <td align="center">1</td>
                                                <td>ความสะอาด</td>
                                                <td align="center"><input type="radio" name="contact" id="contact_email" value="ssss" /></td>
                                                <td align="center"><input type="radio" name="contact" id="contact_email" value="nnnn" /></td>
                                                <td align="center"><input type="text" style="width: 600px;"></td>
                                            </tr>
                                            <tr>
                                                <td align="center">2</td>
                                                <td>อื่นๆ</td>
                                                <td align="center"><input type="radio" name="contact" id="contact_email" value="ssss" /></td>
                                                <td align="center"><input type="radio" name="contact" id="contact_email" value="nnnn" /></td>
                                                <td align="center"><input type="text" style="width: 600px;"></td>
                                            </tr>
                                        </table>

                                    </div>
                                </div>
                            </div>


                            <hr>


                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3 mt-3">
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa-regular fa-trash-can" style="color: #fff;"></i>
                                            ลบ
                                        </button>
                                    </div>
                                </div>
                                <div class="col-6 text-end">
                                    <div class="mb-3 mt-3">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa-solid fa-floppy-disk" style="color: #fff;"></i>
                                            บันทึก
                                        </button>
                                        <button type="close" class="btn btn-secondary">
                                            <i class="fa-solid fa-xmark" style="color: #000;"></i>
                                            ปิด
                                        </button>
                                    </div>
                                </div>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>


</body>




</html>
