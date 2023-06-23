<?php

    // ตรวจสอบการกดปุ่ม Logout
    if (isset($_POST['logout'])) {
        // ล้างค่า session
        session_unset();
        // ทำลาย session
        session_destroy();
        
        // เปลี่ยนเส้นทางไปยังหน้าที่ต้องการหลังจากออกจากระบบ
        header("Location: index.php");
        exit();
    }

?>