<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แจ้งซ่อมออนไลน์</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ระบบแจ้งซ่อมออนไลน์</a>
        </div>
    </nav>
    <div class="container w-50 mt-5">
        <div class="card" style="width: 50rem;">
            <div class="card-header">แจ้งซ่อมปัญหา/งานซ่อม</div>
            <ul class="list-group list-group-flush">
                <form method="POST" action="/insert">
                    <div class="form-group">
                        <label class="form-labal" for="title ">ประเภทงานซ่อม</label>
                        <br><input type="text" id="inputWithDropdown" name="inputWithDropdown"
                            list="dropdownOptions">
                        <datalist id="dropdownOptions">
                            <option value="ปัญหาโปรแกรม">
                            <option value="ปัญหาอุปกรณ์">
                        </datalist>
                        <div class="form-group">
                            <label class="form-labal" for="title ">ประเภทปัญหา</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-labal" for="title ">ชื่ออุปรณ์</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-labal" for="title ">ความเร่งด่วน</label>
                            <br><input type="text" id="inputWithDropdown" name="inputWithDropdown"
                                list="dropdownOptions2">
                            <datalist id="dropdownOptions2">
                                <option value="ปกติ">
                                <option value="ปานกลาง">
                                <option value="ด่วน">
                            </datalist>
                            <div class="form-group">
                                <label class="form-labal" for="content">ปัญหา/งานซ่อม</label>
                                <textarea name="content" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <label class="form-labal" for="fileInput">ไฟล์แนบ:</label>
                            <input type="file" id="fileInput" name="fileInput">

                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input type="submit" value="บันทึก" class="btn btn-primary my-3">
                                <a href="" class="btn btn-secondary my-3">ยกเลิก</a>
                            </div>
                        </div>
                    </div>
                </form>
            </ul>
        </div>
    </div>

</body>

</html>
