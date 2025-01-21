<?php


$us = $_POST['username'];
$pss = $_POST['password'];
// // ปุ่ม remember me
$remember = isset($_POST['remember']) ? $_POST['remember'] : null; 

include('connect.php');



$sql = "SELECT * FROM tb_user
Where username='$us' AND password ='$pss'" ;

// Execute the query
$result = mysqli_query($con, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    // Loop through each row and display data
    while ($row = mysqli_fetch_assoc($result)) {
        // echo "ID: " . $row['id'] . " - Name: " . $row['firstname'] . " - Email: " . $row['email'] . "<br>"; ปิดการ echo แล้วเก็บ session
        // session_start();
        // $_SESSION['Fname'] = $row['firstname'];
        // $_SESSION['Lname'] = $row['lastname'];
        // $_SESSION['user_id'] = $row['id'];
        // $_SESSION['typ'] = $row['typ']; 



        // ตรวจสอบว่ามีการเลือก Remember Me หรือไม่
        if ($remember) {
            // ถ้ามีการเลือก Remember Me ให้บันทึกข้อมูลในคุกกี้เป็นเวลา 1 ปี
        setcookie('remember_user', $row['firstname'], time() + (86400 * 365), "/"); // เก็บ username
                    // เก็บข้อมูลในคุกกี้ (เช่น ชื่อ, นามสกุล, user_id)
        setcookie('firstname', $row['firstname'], time() + (86400 * 365), "/"); // เก็บชื่อจริง
        setcookie('lastname', $row['lastname'], time() + (86400 * 365), "/"); // เก็บนามสกุล
        setcookie('user_id', $row['id'], time() + (86400 * 365), "/"); // เก็บ user id
        setcookie('typ', $row['typ'], time() + (86400 * 365), "/");

            // echo "The 'บันทึกการเข้าสู่ระบบเป็นเวลา 1 ปีเรียบร้อยแล้ว: " . $_COOKIE['remember_user'];
        } else {
            // ถ้าไม่ได้เลือก Remember Me ให้บันทึกข้อมูลในคุกกี้เป็นเวลา 3 วัน
        setcookie('remember_user', $row['firstname'], time() + (86400 * 3), "/"); // เก็บ username
        // เก็บข้อมูลในคุกกี้ (เช่น ชื่อ, นามสกุล, user_id)
        setcookie('firstname', $row['firstname'], time() + (86400 * 3), "/"); // เก็บชื่อจริง
        setcookie('lastname', $row['lastname'], time() + (86400 * 3), "/"); // เก็บนามสกุล
        setcookie('user_id', $row['id'], time() + (86400 * 3), "/"); // เก็บ user id
        setcookie('typ', $row['typ'], time() + (86400 * 3), "/");

            // echo "The 'บันทึกการเข้าสู่ระบบเป็นเวลา 3 วันเรียบร้อยแล้ว: " . $_COOKIE['remember_user'];
            
        }
        if ($row['typ'] == 0) {
            // Admin
            header("Location: admin-index.php");
            exit();
        } else {
            // User
            header("Location: index.php");
            exit();
        }
    }
} else {
    // แจ้งเตือนเมื่อกรอกข้อมูลผิด
    echo "<script>alert('Invalid username or password.'); window.location.href = 'login.php';</script>";
}

// ปิดการเชื่อมต่อฐานข้อมูล
$con->close();
?>


