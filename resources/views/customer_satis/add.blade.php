<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประเมินความพึงพอใจ</title>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        /* Styles for the message box container */
        .message-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            text-align: center;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            /* Ensure it appears on top of other elements */
            display: none;
            /* Initially hidden */
        }

        /* Styles for the star rating */
        .stars {
            display: inline-block;
            font-size: 24px;
        }

        .star {
            color: #57e478;
            /* Yellow color for stars */
            cursor: pointer;
        }

        /* Styles for the close button */
        .close-button {
            background-color: #57e478;
            /* Green color for the button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>

<body>

    <div class="container py-2">
        <h3 class="text-center">ประเมินความพึงพอใจในการซ่อม</h3>
        <form method="POST" enctype="multipart/form-data" action={{ route('customer_satis.store', $id) }}>
            @csrf
            <table class="table
            table-bordered text-center my-3">
                <thead>
                    <tr class="table-active">
                        <th scope="col">ลำดับ</th>
                        <th scope="col">หัวข้อการประเมิน</th>
                        <th scope="col">มากที่สุด(5)</th>
                        <th scope="col">มาก(4)</th>
                        <th scope="col">ปานกลาง(3)</th>
                        <th scope="col">น้อย(2)</th>
                        <th scope="col">น้อยที่สุด(1)</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <td>1</td>
                        {{-- <td>ความสะดวกในการติดจ่อขอใช้บริการอยู่ในระดับใด</td> --}}
                        <td><input type="text" name="topic1" class="form-control"
                                value="ความสะดวกในการติดต่อขอใช้บริการอยู่ในระดับใด" readonly></td>
                        <td><input type="radio" name="score1" value="5" /></td>
                        <td><input type="radio" name="score1" value="4" /></td>
                        <td><input type="radio" name="score1" value="3" /></td>
                        <td><input type="radio" name="score1" value="2" /></td>
                        <td><input type="radio" name="score1" value="1" /></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        {{-- <td>ความรวดเร็วในการใช้บริการเป็นอย่างไร</td> --}}
                        <td><input type="text" name="topic2" class="form-control"
                                value="ความรวดเร็วในการใช้บริการเป็นอย่างไร"readonly></td>
                        <td><input type="radio" name="score2" value="5" /></td>
                        <td><input type="radio" name="score2" value="4" /></td>
                        <td><input type="radio" name="score2" value="3" /></td>
                        <td><input type="radio" name="score2" value="2" /></td>
                        <td><input type="radio" name="score2" value="1" /></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        {{-- <td>การให้คำแนะนำ แจ้งอาการของเครื่องและอธิบายถึงการแก้ปัญหา ก่อนการให้บริการเป็นอย่างไร
                        </td> --}}
                        <td><input type="text" name="topic3" class="form-control"
                                value="การให้คำแนะนำ แจ้งอาการของเครื่องและอธิบายถึงการแก้ปัญหา ก่อนการให้บริการเป็นอย่างไร"readonly>
                        </td>
                        <td><input type="radio" name="score3" value="5" /></td>
                        <td><input type="radio" name="score3" value="4" /></td>
                        <td><input type="radio" name="score3" value="3" /></td>
                        <td><input type="radio" name="score3" value="2" /></td>
                        <td><input type="radio" name="score3" value="1" /></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        {{-- <td>วิศวกรได้ตรวจ/ซ่อมครบถ้วนตามรายการที่แจ้งซ่อมอยู่ในระดับ</td> --}}
                        <td><input type="text" name="topic4" class="form-control"
                                value="วิศวกรได้ตรวจ/ซ่อมครบถ้วนตามรายการที่แจ้งซ่อมอยู่ในระดับ"readonly></td>
                        <td><input type="radio" name="score4" value="5" /></td>
                        <td><input type="radio" name="score4" value="4" /></td>
                        <td><input type="radio" name="score4" value="3" /></td>
                        <td><input type="radio" name="score4" value="2" /></td>
                        <td><input type="radio" name="score4" value="1" /></td>
                    </tr>

                </tbody>
            </table>
            <br>
            <td><input type="text" name="topic5" class="form-control" value="ข้อเสนอแนะนำเพิ่มเติม"readonly>
            </td>
            {{-- <label for="note">ข้อเสนอแนะนำเพิ่มเติม</label> --}}
            <textarea name="note" class="form-control" id="floatingTextarea"></textarea>
            <br />
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-success me-md-2" type="submit">บันทึก</button>
                <button class="btn btn-secondary" type="button">ยกเลิก</button>
            </div>
        </form>
    </div>
</body>

</html>
