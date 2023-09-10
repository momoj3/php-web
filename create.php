<!DOCTYPE html>
<html>
<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>เพิ่มข้อมูล ลงในฐานข้อมูล</title>

<body  class="d-flex flex-column h-100">

<div class ="container">
    <h1 class="mt-5">เพิ่มข้อมูล</h1>
  <div>
        <a class="btn btn-danger" href="index.php" role="button">กลับไปหน้าแสดงข้อมูล</a>
  </div>
</div>
        <!-- ฟอร์มเพิ่มข้อมูล -->
        <div class ="container">
        <form action="action_create.php" method="post" class="row g-3 needs-validation" novalidate>
            <div class="col-md-3"> 
                 <label for="prefix" class="form-label">คำนำหน้าชื่อ</label>
                <input type="text" class="form-control" name="prefix" id="prefix" required>
            <div class="invalid-feedback">
                กรณากรอกข้อมูลของท่าน
            </div>               
            <div class="valid-feedback">
                Looks good!
            </div>  
            </div>
            <div class="col-md-3">
                <label for="fristname" class="form-label">ชื่อ</label>
                <input type="text" class="form-control" name="fristname" id="fristname" required>
                <div class="invalid-feedback">
                กรณากรอกข้อมูลของท่าน
            </div>  
            </div>
            <div class="col-md-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" class="form-control" name="lastname" id="lastname" required>
                <div class="valid-feedback">
                Looks good!
            </div>  
            </div>
            <div class="col-md-3">
                <label for="gender" class="form-label">เพศ</label>
                <select name="gender" id="gender" class="form-select" required>
                <option value="">กรุณาเลือก...</option>
                <option>ชาย</option>
                <option>หญิง</option>
                </select>
                <div class="valid-feedback">
                Looks good!
            </div>  
            </div>

            <div class="col-md-3">
                <label for="idcard" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                <input type="text" class="form-control" name="idcard" id="idcard" required>
                <div class="valid-feedback">
                Looks good!
            </div>  
            </div>
            <div class="col-md-3">
                <label for="birthdate" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" name="birthdate" id="birthdate" required>
                <div class="valid-feedback">
                Looks good!
                </div>  
            </div>
            <div class="col-md-3">
                <label for="mobile" class="form-label">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" name="mobile" id="mobile" required>
                <div class="valid-feedback">
                Looks good!
            </div>  
            </div>

            <!-- ปุ่มบันทึกข้อมูล -->
            <div  class="col-md-12 mt-3">
                <button type="submit" class="btn btn-primary btn-lg">บันทึก</button>
                <button type="reset" class="btn btn-light btn-lg">รีเซ็ท</button>
            </div>
        </form>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</head>
</html>