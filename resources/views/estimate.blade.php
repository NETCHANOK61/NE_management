<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ประเมินความพึงพอใจ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container py-2">
        <h3 class="text-center">ประเมินความพึงพอใจในการซ่อม</h3>
        <p>เลขที่แจ้งซ่อม : </p>
        <p>ผู้ดำเนินการ : </p>
        <p>วันที่แจ้งซ่อม : </p>
        <p>วันที่สำเร็จ : </p>
        <form>
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
                        <td>ความสะดวกในการติดจ่อขอใช้บริการอยู่ในระดับใด</td>
                        <td><input type="radio" name="es_id1" value="5" required /></td>
                        <td><input type="radio" name="es_id1" value="4" /></td>
                        <td><input type="radio" name="es_id1" value="3" /></td>
                        <td><input type="radio" name="es_id1" value="2" /></td>
                        <td><input type="radio" name="es_id1" value="1" /></td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>ความรวดเร็วในการใช้บริการเป็นอย่างไร</td>
                        <td><input type="radio" name="es_id2" value="5" required /></td>
                        <td><input type="radio" name="es_id2" value="4" /></td>
                        <td><input type="radio" name="es_id2" value="3" /></td>
                        <td><input type="radio" name="es_id2" value="2" /></td>
                        <td><input type="radio" name="es_id2" value="1" /></td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>การให้คำแนะนำ แจ้งอาการของเครื่องและอธิบายถึงการแก้ปัญหา ก่อนการให้บริการเป็นอย่างไร</td>
                        <td><input type="radio" name="es_id3" value="5" required /></td>
                        <td><input type="radio" name="es_id3" value="4" /></td>
                        <td><input type="radio" name="es_id3" value="3" /></td>
                        <td><input type="radio" name="es_id3" value="2" /></td>
                        <td><input type="radio" name="es_id3" value="1" /></td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>วิศวกรได้ตรวจ/ซ่อมครบถ้วนตามรายการที่แจ้งซ่อมอยู่ในระดับ</td>
                        <td><input type="radio" name="es_id4" value="5" required /></td>
                        <td><input type="radio" name="es_id4" value="4" /></td>
                        <td><input type="radio" name="es_id4" value="3" /></td>
                        <td><input type="radio" name="es_id4" value="2" /></td>
                        <td><input type="radio" name="es_id4" value="1" /></td>
                    </tr>

                </tbody>
            </table>
        </form>
        <label for="note">ข้อเสนอแนะนำเพิ่มเติม</label>
        <br />
        <textarea name="note" class="form-control" id="floatingTextarea"></textarea>
        <br />
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <button class="btn btn-success me-md-2" type="submit">บันทึก</button>
            <button class="btn btn-secondary" type="button">ยกเลิก</button>
        </div>
    </div>
</body>

</html>
