<?php
// รับข้อมูลจากฟอร์มที่กรอก
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$us = $_POST['username'];
$em = $_POST['email'];
$phone = $_POST['phone'];
$org = $_POST['org'];
$pss = $_POST['password'];
$pss_confirm = $_POST['password-confirm'];
$agree = isset($_POST['agree']) ? 1 : 0; // ตรวจสอบว่าผู้ใช้ตกลงเงื่อนไขหรือไม่

// รวมไฟล์การเชื่อมต่อฐานข้อมูล
include('connect.php');

// ตรวจสอบว่ารหัสผ่านทั้งสองตรงกันหรือไม่
if ($pss !== $pss_confirm) {
    echo "<script>alert('รหัสผ่านไม่ตรงกัน!'); window.location.href='register.php';</script>";
    exit();
}

// เช็คว่ามี username หรือ email ซ้ำในฐานข้อมูลหรือไม่
$sql_check = "SELECT * FROM tb_user WHERE username='$us' OR email='$em'";
$result_check = mysqli_query($con, $sql_check);

if (mysqli_num_rows($result_check) > 0) {
    // ถ้ามีข้อมูลซ้ำ
    echo "<script>alert('ชื่อผู้ใช้หรืออีเมลมีอยู่ในระบบแล้ว กรุณาลองใหม่'); window.location.href='register.php';</script>";
    exit();
}
// ตั้งค่า Timezone ให้ตรงกับพื้นที่ (Asia/Bangkok)
date_default_timezone_set('Asia/Bangkok');
// รับวันที่และเวลาปัจจุบัน
$current_date = date("Y-m-d H:i:s");

// บันทึกข้อมูลผู้ใช้ใหม่ลงในฐานข้อมูล พร้อมกับวันที่และเวลา
$sql_insert = "INSERT INTO tb_user (firstname, lastname, username, email,phone,org, password, create_date,typ) 
               VALUES ('$fname', '$lname', '$us', '$em','$phone','$org', '$pss', '$current_date','1')";

if (mysqli_query($con, $sql_insert)) {
    // ถ้าบันทึกข้อมูลสำเร็จ
    echo "<script>alert('สมัครเรียบร้อยแล้ว!'); window.location.href='login.php';</script>";
} else {
    // ถ้ามีข้อผิดพลาดในการบันทึกข้อมูล
    echo "เกิดข้อผิดพลาด: " . mysqli_error($con);
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($con);
?>
