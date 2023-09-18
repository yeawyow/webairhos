{{-- Login Dashboard Start --}}

{{-- Login Dashboard End --}}
<div class="modal fade " id="maphospital" tabindex="-1" aria-labelledby="exampleModalLabel" data-bs-backdrop="static"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered d-flex align-items-center justify-content-center">
        <div class="modal-content" style="width: 800px; height: 550px;">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Map Hospital</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="model-body">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="770" height="510" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Akathospital&t=&z=19&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                            href="https://2yu.co">2yu</a><br>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                height: 510px;
                                width: 770px;
                            }
                        </style><a href="https://embedgooglemap.2yu.co">html embed google map</a>
                        <style>
                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                height: 510px;
                                width: 770px;
                            }
                        </style>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- dropdown menu header navbar --}}
<div class="offcanvas offcanvas-start" tabindex="-1" data-bs-scroll="true" data-bs-backdrop="false"
    id="offcanvasExample1" aria-labelledby="offcanvasExampleLabel1">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel1">เกี่ยวกับองค์กร</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="d-column">
            <li><a class="col" href="#">ประวัติองค์กร</a></li>
            <li><a class="col" href="#">วิสัยทัศน์ พันธกิจ</a></li>
            <li><a class="col" href="#">คณะกรรมการบริหาร</a></li>
            <li><a class="col" href="#">แผนยุทธศาสตร์</a></li>
            <li><a class="col" href="#">กรอบโครงสร้างองค์กร</a></li>
            <li><a class="col" href="#">วิสัยทัศน์ พันธกิจ ค่านิยม MOPH</a></li>
        </ul>
    </div>
</div>
<div class="offcanvas offcanvas-start" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div>
        Some text as placeholder. In real life you can have the elements you have chosen. Like, text, images, lists, etc.
      </div>
      <div class="dropdown mt-3">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
          Dropdown button
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
    </div>
  </div>
<div class="offcanvas offcanvas-start" tabindex="1" data-bs-scroll="true" data-bs-backdrop="false"
    id="offcanvasScrolling2" aria-labelledby="offcanvasScrollingLabel2">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasScrollingLabel2">ข่าวสาร</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="d-column">
            <li><a class="col" href="#">ข่าวประชาสัมพันธ์</a></li>
            <li><a class="col" href="#">ข่าวจัดซื้อจัดจ้าง</a></li>
        </ul>
    </div>
</div>