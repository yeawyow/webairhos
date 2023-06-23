<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!-- CSS Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!--END CSS Bootstrap 5 -->

  <!-- style.css -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- END style.css -->

  <!-- carousel.css -->
  <link rel="stylesheet" href="CSS/carousel.css">
  <!-- END carousel.css -->

  <!-- CSS BOOTSTRAP 5 ICON -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!-- END CSS BOOTSTRAP 5 ICON -->

  <!-- CDN Form Login -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- END CDN Form Login -->



  <title>Akathospital</title>
</head>

<body class="mb">
  <!-- test -->
  
  <!-- END test -->
  
  <header class="mb-5">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-success">
      <div class="container-fluid">
        <div class="icon">
          <i class="ms-3 me-3">
            <img src="https://co-vaccine.moph.go.th/assets/images/moph-logo.gif" alt="">
          </i>
          <a class="navbar-brand" href="#">Akathospital</a>
        </div>

        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarCollapse">
          <ul class="navbar-nav ms-auto me-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">หน้าหลัก</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">เกี่ยวกับองค์กร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ข่าวสาร</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ผลการดำเนินงาน_ITA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ผลงานวิชาการ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Web Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#loginModal">
                จัดการหน้าเว็บ
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- END NAVBAR -->
  </header>

  <!-- Modal -->
  <div class="modal fade login-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content ">
        <div class="modal-header bg-success text-light ">
          <h5 class="modal-title text-center " id="loginModalLabel">เข้าสู่ระบบ BackOffice</h5>
          <button type="button" class="btn btn-close btn-outline-danger" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <form action="connect/login_db.php" method="POST">
            <div class="mb-2">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password">
            </div>
            <div class="mt-2 text-end">
              <button type="submit" name="login" class="btn btn-outline-success border border-success">Login</button>
              <button type="submit" class="btn btn-outline-danger border border-danger" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
        <div class="modal-footer text-end bg-success">

        </div>
      </div>
    </div>
  </div>
  <!-- END Modal -->


  <div id="jssor_1" class="mb-3 shadow p-3 mb-5 bg-body" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:480px;overflow:hidden;visibility:hidden;">
    <!-- Loading Screen -->
    <div data-u="loading" class="jssorl-009-spin " style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
      <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
    </div>
    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
      <div>
        <img data-u="image" src="IMG/side_show/03.jpg" />
        <img data-u="thumb" src="IMG/side_show/03.jpg" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/43.jpg" />
        <img data-u="thumb" src="IMG/side_show/43.jpg" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/6511.jpg" />
        <img data-u="thumb" src="IMG/side_show/6511.jpg" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/6512.png" />
        <img data-u="thumb" src="IMG/side_show/6512.png" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/6513.png" />
        <img data-u="thumb" src="IMG/side_show/6513.png" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/6514.jpg" />
        <img data-u="thumb" src="IMG/side_show/6514.jpg" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/66.jpg" />
        <img data-u="thumb" src="IMG/side_show/66.jpg" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/77.jpg" />
        <img data-u="thumb" src="IMG/side_show/77.jpg" />
      </div>
      <div>
        <img data-u="image" src="IMG/side_show/nogift3.jpg" />
        <img data-u="thumb" src="IMG/side_show/nogift3.jpg" />
      </div>
    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web animation</a>
    <!-- Thumbnail Navigator -->
    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
      <div data-u="slides">
        <div data-u="prototype" class="p" style="width:190px;height:90px;">
          <div data-u="thumbnailtemplate" class="t"></div>
        </div>
      </div>
    </div>
    <!-- Arrow Navigator -->
    <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:162px;left:30px;" data-scale="0.75">
      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
        <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
        <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
      </svg>
    </div>
    <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:162px;right:30px;" data-scale="0.75">
      <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
        <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
        <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
        <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
      </svg>
    </div>
  </div>
  <!-- #endregion Jssor Slider End -->


  <!-- เส้นคั้นหน้า -->
  <!-- <hr class="featurette-divider mt"> -->
  <!-- END เส้นคั้นหน้า -->

  <!-- ACCORDION -->

  <div class="containe-fluid row mb-2 ms-3 me-3 mb-5 ">
    <div class="accordion accordion-flush text-start col border border-1 rounded shadow p-3 mb-5 bg-body" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            weblink
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <ul class="list-unstyled ms-5 ">
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>SMART
                REFER</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>IS
                ONLINE</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ก้าวท้าใจ</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ระบบสารบัญ'สาสุข</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>HDC
                43แฟ้ม(จังหวัด)</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>โปรแกรม
                iclamer</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>สปสช</a>
            </li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>กรมบัญชีกลาง</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ระบบจัดซื้อจัดจ้างภาครัฐ</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>สหกรณ์ออมทรัพย์สาธารสุขสกลนคร</a></li>
          </ul>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            นโยบายและยุทธศาสตร์
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <ul class="list-unstyled ms-5">
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>หน้าที่และอำนาจหน่วยงานตามกฏกระทรวงสาธารณสุข</a>
            </li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ยุทธศาสตร์ กระทรวงสาธารณสุข</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ยุทธศาสตร์ของประเทศ ยุทธศาสตร์ชาติ 20
                ปี</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>แผนการใช้จ่ายงบประมาณประจำปี</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ข้อบังคับสำนักงานปลัดกระทรวงสาธารณสุขว่าด้วยจรรยาข้าราชการ
                สำนักงานปลัดกระทรวง พ.ศ.2560</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>คณะกรรมการจริยธรรม
                ประจำสำนักงานปลัดกระทรวงสาธารณสุข</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>กฏกระทรวง 2560</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ยุทธศาสตร์ในระดับประเทศ
                ที่เกี่ยวเนื่อง</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>พระราชบัญญัติมาตรฐานทางจริยธรรม
                พ.ศ.2562</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ประมวลจริยธรรมข้าราชการพลเรือน
                พระราชบัญญัติมาตรฐานทางจริยธรรม พ.ศ.2552</a></li>
          </ul>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
            งาน ITA
          </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
          <ul class="list-unstyled ms-5">
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ITA
                2564</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ITA
                2565</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ITA
                2566</a></li>
          </ul>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFour">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
            ศูนย์ดำรงธรรม
          </button>
        </h2>
        <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
          <ul class="list-unstyled ms-5">
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ช่องทางการร้องเรียน/ร้องทุกข์</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>หลักเกณฑ์การแก้ไขปัญหา
                ในกรณีที่มีการร้องเรียน</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>รายงานผลดำเนินงานเกี่ยวกับเรื่องร้องเรียน</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
            คู่มือ
          </button>
        </h2>
        <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
          <ul class="list-unstyled ms-5 text-dark">
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>อัตราค่าบริการของหน่วยบริการสาธารณสุข
                รพ.อากาศอำนวย ปี2562</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>การให้บริการห้องปฏิบัติการเทคนิคการแพทย์</a>
            </li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>คู่มือการใช้ทรัพย์สินทางราชการ</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ช่องทางการร้องเรียนของโรงพยาบาลอากาศอำนวย</a>
            </li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ช่องทางการร้องเรียน</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>คู่มือการปฏิบัติงานการจัดการข้อร้องเรียนทั่วไปและการทุจริตประพฤตมิชอบ</a>
            </li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>โครงสร้างมาตรฐานข้อมูล 43 แฟ้ม ปี61</a>
            </li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ขั้นตอนการให้บริการ</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseThree">
            ข้อบังคับฯจรรยาบรรณกระทรวงสาธารณสุข
          </button>
        </h2>
        <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
          <ul class="list-unstyled ms-5">
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>ข้อบังคับว่าด้วยจรรยาข้าราชการ</a></li>
            <li><a href="#" class="menulink"><span class="material-symbols-outlined me-2">label_important</span>จรรยาบรรณกระทรวงสาธารณสุข</a></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- END ACCORDION -->

    <!-- รูปผอ. -->
    <div class="col-md-6 ">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4  h-md-250 position-relative shadow p-3 mb-5 bg-body">
        <div class="col p-4 d-flex flex-column position-static ">
          <strong class="d-inline-block mb-2 text-success">_____________________________________________________________</strong>
          <h3 class="mb-2 mt-1">ผู้อำนวยการโรงพยาบาลอากาศอำนวย</h3>
          <div class="mb-1 text-muted">____________________________________________________</div>
          <p class="mb-auto mt-2 ">แพทย์หญิง จิรัฐติกาล สุตวณิชย์</p>
          <a href="#" class="stretched-link">ประวัติผู้อำนวยการ</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="IMG/ผู้อำนวยการโรงพยาบาลอากาศอำนวย/01.jfif" alt="" width="150" height="200" class="pt-2 pe-2">
        </div>
      </div>
    </div>
    <!-- END รูปผอ. -->
  </div>






  <footer class="bd-footer py-5 mt-5 bg-success text-light mb ">
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-4 border border-light border-2 rounded">
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">

            <span class="fs-6 text-light">386 หมู่ 3 ถ.วันเฉลิม ต.อากาศ อ.อากาศอำนวย จ.สกลนคร 47170</span>
          </a>
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">

            <span class="fs-6 text-light">042-799000</span>
          </a>
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none" href="/" aria-label="Bootstrap">

            <span class="fs-8 text-light">h-akatumnauy@www.skko.moph.go.th</span>
          </a>

        </div>
        <div class="col-6 col-lg-2 offset-lg-1 border border-light border-2 rounded ps-2 pt-2 me-2 ">
          <h5>Links</h5>
          <ul class="list-unstyled">
            <li class=" menu-footer"><a href="" class="text-decoration-none text-light">หน้าหลัก</a></li>
            <li class=" menu-footer"><a href="" class="text-decoration-none text-light">เกี่ยวกับองค์กร</a></li>
            <li class=" menu-footer"><a href="" class="text-decoration-none text-light">ข่าวสาร</a></li>
            <li class=" menu-footer"><a href="" class="text-decoration-none text-light">ผลการดำเนินงาน_ITA</a></li>
            <li class=" menu-footer"><a href="" class="text-decoration-none text-light">Contact</a></li>
            <li class=" menu-footer"><a href="" class="text-decoration-none text-light">ผลงานวิชาการ</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 border border-light border-2 rounded ps-2 pt-2 me-2">
          <h5>Guides</h5>
          <ul class="list-unstyled">
            <li class=" menu-footer"><a href="/docs/5.0/getting-started/" class="text-decoration-none text-light">Getting started</a></li>
            <li class=" menu-footer"><a href="/docs/5.0/examples/starter-template/" class="text-decoration-none text-light">Starter template</a></li>
            <li class=" menu-footer"><a href="/docs/5.0/getting-started/webpack/" class="text-decoration-none text-light">Webpack</a></li>
            <li class=" menu-footer"><a href="/docs/5.0/getting-started/parcel/" class="text-decoration-none text-light">Parcel</a></li>
          </ul>
        </div>
        <div class="col-6 col-lg-2 border border-light border-2 rounded ps-2 pt-2">
          <h5>Projects</h5>
          <ul class="list-unstyled">
            <li class=" menu-footer"><a href="https://github.com/twbs/bootstrap" class="text-decoration-none text-light">Bootstrap 5</a></li>
            <li class=" menu-footer"><a href="https://github.com/twbs/bootstrap/tree/v4-dev" class="text-decoration-none text-light">Bootstrap 4</a></li>
            <li class=" menu-footer"><a href="https://github.com/twbs/icons" class="text-decoration-none text-light">Icons</a></li>
            <li class=" menu-footer"><a href="https://github.com/twbs/rfs" class="text-decoration-none text-light">RFS</a></li>
            <li class=" menu-footer"><a href="https://github.com/twbs/bootstrap-npm-starter" class="text-decoration-none text-light">npm starter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- JS Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- END JS Bootstrap 5 -->

  <!-- JS INDEX.JS -->
  <script src="JS/index.js"></script>
  <!-- END JS INDEX.JS -->

  <h1>test</h1>

  <!-- #region Jssor Slider Begin -->
  <!-- Generator: Jssor Slider Composer -->
  <!-- Source: https://www.jssor.com/demos/image-gallery.slider/=edit -->
  <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
  <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {

      var jssor_1_SlideshowTransitions = [{
          $Duration: 800,
          x: 0.3,
          $During: {
            $Left: [0.3, 0.7]
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: -0.3,
          $SlideOut: true,
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: -0.3,
          $During: {
            $Left: [0.3, 0.7]
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: 0.3,
          $SlideOut: true,
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: 0.3,
          $During: {
            $Top: [0.3, 0.7]
          },
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: -0.3,
          $SlideOut: true,
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: -0.3,
          $During: {
            $Top: [0.3, 0.7]
          },
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: 0.3,
          $SlideOut: true,
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: 0.3,
          $Cols: 2,
          $During: {
            $Left: [0.3, 0.7]
          },
          $ChessMode: {
            $Column: 3
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: 0.3,
          $Cols: 2,
          $SlideOut: true,
          $ChessMode: {
            $Column: 3
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: 0.3,
          $Rows: 2,
          $During: {
            $Top: [0.3, 0.7]
          },
          $ChessMode: {
            $Row: 12
          },
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: 0.3,
          $Rows: 2,
          $SlideOut: true,
          $ChessMode: {
            $Row: 12
          },
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: 0.3,
          $Cols: 2,
          $During: {
            $Top: [0.3, 0.7]
          },
          $ChessMode: {
            $Column: 12
          },
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          y: -0.3,
          $Cols: 2,
          $SlideOut: true,
          $ChessMode: {
            $Column: 12
          },
          $Easing: {
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: 0.3,
          $Rows: 2,
          $During: {
            $Left: [0.3, 0.7]
          },
          $ChessMode: {
            $Row: 3
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: -0.3,
          $Rows: 2,
          $SlideOut: true,
          $ChessMode: {
            $Row: 3
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: 0.3,
          y: 0.3,
          $Cols: 2,
          $Rows: 2,
          $During: {
            $Left: [0.3, 0.7],
            $Top: [0.3, 0.7]
          },
          $ChessMode: {
            $Column: 3,
            $Row: 12
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          x: 0.3,
          y: 0.3,
          $Cols: 2,
          $Rows: 2,
          $During: {
            $Left: [0.3, 0.7],
            $Top: [0.3, 0.7]
          },
          $SlideOut: true,
          $ChessMode: {
            $Column: 3,
            $Row: 12
          },
          $Easing: {
            $Left: $Jease$.$InCubic,
            $Top: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          $Delay: 20,
          $Clip: 3,
          $Assembly: 260,
          $Easing: {
            $Clip: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          $Delay: 20,
          $Clip: 3,
          $SlideOut: true,
          $Assembly: 260,
          $Easing: {
            $Clip: $Jease$.$OutCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          $Delay: 20,
          $Clip: 12,
          $Assembly: 260,
          $Easing: {
            $Clip: $Jease$.$InCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        },
        {
          $Duration: 800,
          $Delay: 20,
          $Clip: 12,
          $SlideOut: true,
          $Assembly: 260,
          $Easing: {
            $Clip: $Jease$.$OutCubic,
            $Opacity: $Jease$.$Linear
          },
          $Opacity: 2
        }
      ];

      var jssor_1_options = {
        $AutoPlay: 1,
        $SlideshowOptions: {
          $Class: $JssorSlideshowRunner$,
          $Transitions: jssor_1_SlideshowTransitions,
          $TransitionsOrder: 1
        },
        $ArrowNavigatorOptions: {
          $Class: $JssorArrowNavigator$
        },
        $ThumbnailNavigatorOptions: {
          $Class: $JssorThumbnailNavigator$,
          $SpacingX: 5,
          $SpacingY: 5
        }
      };

      var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

      /*#region responsive code begin*/

      var MAX_WIDTH = 980;

      function ScaleSlider() {
        var containerElement = jssor_1_slider.$Elmt.parentNode;
        var containerWidth = containerElement.clientWidth;

        if (containerWidth) {

          var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

          jssor_1_slider.$ScaleWidth(expectedWidth);
        } else {
          window.setTimeout(ScaleSlider, 30);
        }
      }

      ScaleSlider();

      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
      /*#endregion responsive code end*/
    });
  </script>
  <style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
      animation-name: jssorl-009-spin;
      animation-duration: 1.6s;
      animation-iteration-count: infinite;
      animation-timing-function: linear;
    }

    @keyframes jssorl-009-spin {
      from {
        transform: rotate(0deg);
      }

      to {
        transform: rotate(360deg);
      }
    }

    /*jssor slider arrow skin 106 css*/
    .jssora106 {
      display: block;
      position: absolute;
      cursor: pointer;
    }

    .jssora106 .c {
      fill: #fff;
      opacity: .3;
    }

    .jssora106 .a {
      fill: none;
      stroke: #000;
      stroke-width: 350;
      stroke-miterlimit: 10;
    }

    .jssora106:hover .c {
      opacity: .5;
    }

    .jssora106:hover .a {
      opacity: .8;
    }

    .jssora106.jssora106dn .c {
      opacity: .2;
    }

    .jssora106.jssora106dn .a {
      opacity: 1;
    }

    .jssora106.jssora106ds {
      opacity: .3;
      pointer-events: none;
    }

    /*jssor slider thumbnail skin 101 css*/
    .jssort101 .p {
      position: absolute;
      top: 0;
      left: 0;
      box-sizing: border-box;
      background: #000;
    }

    .jssort101 .p .cv {
      position: relative;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: 2px solid #000;
      box-sizing: border-box;
      z-index: 1;
    }

    .jssort101 .a {
      fill: none;
      stroke: #fff;
      stroke-width: 400;
      stroke-miterlimit: 10;
      visibility: hidden;
    }

    .jssort101 .p:hover .cv,
    .jssort101 .p.pdn .cv {
      border: none;
      border-color: transparent;
    }

    .jssort101 .p:hover {
      padding: 2px;
    }

    .jssort101 .p:hover .cv {
      background-color: rgba(0, 0, 0, 6);
      opacity: .35;
    }

    .jssort101 .p:hover.pdn {
      padding: 0;
    }

    .jssort101 .p:hover.pdn .cv {
      border: 2px solid #fff;
      background: none;
      opacity: .35;
    }

    .jssort101 .pav .cv {
      border-color: #fff;
      opacity: .35;
    }

    .jssort101 .pav .a,
    .jssort101 .p:hover .a {
      visibility: visible;
    }

    .jssort101 .t {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      opacity: .6;
    }

    .jssort101 .pav .t,
    .jssort101 .p:hover .t {
      opacity: 1;
    }
  </style>



</body>

</html>