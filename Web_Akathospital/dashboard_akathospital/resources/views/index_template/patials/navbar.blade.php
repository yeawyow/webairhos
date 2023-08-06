<!-- To TOP Start -->
<button onclick="topFunction()" class="btn btn-success" id="myBtn" title="Go to top"><i class="fa-solid fa-chevron-up fa-beat-fade" style="color: #ffffff;"></i></button>
<!-- To TOP End -->



<header class="p-3 bg-success text-white sticky-top" data-aos="fade-up" data-aos-duration="1500" style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5);">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    <a href="{{ url('/') }}" class="nav-link px-2 text-white" style="font-size: 1.5rem;" type="button">
                        หน้าหลัก
                    </a>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link px-2 text-white " style="font-size: 1.5rem;" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            เกี่ยวกับองค์
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">ประวัติองค์กร</a></li>
                            <li><a class="dropdown-item" href="#">วิสัยทัศน์ พันธกิจ</a></li>
                            <li><a class="dropdown-item" href="#">คณะกรรมการบริหาร</a></li>
                            <li><a class="dropdown-item" href="#">แผนยุทธศาสตร์</a></li>
                            <li><a class="dropdown-item" href="#">กรอบโครงสร้างองค์กร</a></li>
                            <li><a class="dropdown-item" href="#">วิสัยทัศน์ พันธกิจ ค่านิยม MOPH</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link px-2 text-white " style="font-size: 1.5rem;" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            ข่าวสาร
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">ข่าวประชาสัมพันธ์</a></li>
                            <li><a class="dropdown-item" href="#">ข่าวจัดซื้อจัดจ้าง</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link px-2 text-white " style="font-size: 1.5rem;" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            ผลการดำเนินงาน ITA
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item" href="#">ปีงบประมาณ 2565</a></li>
                            <li><a class="dropdown-item" href="#">ปีงบประมาณ 2566</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="#footer" class="nav-link px-2 text-white " style="font-size: 1.5rem;" type="button" >
                            ติดต่อเรา
                        </a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link px-2 text-white " style="font-size: 1.5rem;" type="button" id="dropdownMenuButton" data-mdb-toggle="dropdown" aria-expanded="false">
                            ผลงานวิชาการ
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li><a class="dropdown-item text-success" href="#">ผลงานวิชาการ 2565</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2" data-bs-toggle="modal" data-bs-target="#manageWebPage">Manage Web Page</button>
            </div>
        </div>
    </div>


</header>