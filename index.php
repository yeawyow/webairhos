<?php
// ประกาศใช้คลาส AltoRouter ในชื่อ Router
use AltoRouter as Router;

require __DIR__.'/vendor/autoload.php';

$router = new Router();

// กำหนด route ในเว็บ
$router->map( "GET", "/", function() {
  require __DIR__ . "/SRC/home.php";
} );

// $router->map( "GET", "/new-note", function() {
//   require __DIR__ . "/../src/Pages/new-note.php";
// } );

// $router->map( "POST", "/new-note", function() {
//   require __DIR__ . "/../src/Pages/save-note.php";
// } );

// $router->map( "GET", "/note/[i:id]", function( $id ) {
  // ไฟล์ view-note.php จะเรียกใช้ $id ได้ทันที  เพราะอยู่ใน scope เดียวกัน
//   require __DIR__ . "/../src/Pages/view-note.php";
// } );

// ประมวลผล route
$match = $router->match();

if( is_array( $match ) && is_callable( $match['target'] ) ) {
  // เรียก callback เพื่อดึงหน้าที่ต้องการมาแสดง
  call_user_func_array( $match['target'], $match['params'] );
} else {
  // แสดงหน้า 404
//   require __DIR__ . "/../src/Pages/404.php";
}

