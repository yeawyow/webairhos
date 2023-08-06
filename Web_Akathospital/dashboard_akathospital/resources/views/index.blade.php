@extends('index_template.mainIndex')

@section('content')
<div class="container mt-4 mb-4">
    <div class="row ">
        <div class="col-8 mb-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="container me-5 pe-5">
                <p class="d-flex align-items-center justify-content-center ms-5 text-success" style="font-size: 3rem; font-weight: 700;">ประกาศ</p>
                <div id="jssor_1" class="mb-5 bg-body rounded " style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5); position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:680px;overflow:hidden;visibility:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin " style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                    </div>
                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:580px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/03.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/03.jpg') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/43.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/43.jpg') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/6511.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/6511.jpg') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/6512.png') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/6512.png') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/6513.png') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/6513.png') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/6514.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/6514.jpg') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/66.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/66.jpg') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/77.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/77.jpg') }}" />
                        </div>
                        <div>
                            <img data-u="image" src="{{ url('akathospital/IMG/side_show/nogift3.jpg') }}" />
                            <img data-u="thumb" src="{{ url('akathospital/IMG/side_show/nogift3.jpg') }}" />
                        </div>
                    </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">web
                        animation</a>
                    <!-- Thumbnail Navigator -->
                    <div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:100px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
                        <div data-u="slides">
                            <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                <div data-u="thumbnailtemplate" class="t"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:262px;left:30px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 ">
                            </polyline>
                            <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000">
                            </line>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:262px;right:30px;" data-scale="0.75">
                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                            <polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 ">
                            </polyline>
                            <line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000">
                            </line>
                        </svg>
                    </div>
                </div>
                <!-- #endregion Jssor Slider End -->
            </div>
        </div>
        <div class="col-4">
            <div class="container ">
                <div class="mt-3 mb-4 text-success d-flex align-items-center justify-content-center">
                    <h2 style="font-weight:700;" data-aos="fade-up" data-aos-duration="1500">ผู้อำนวยการโรงพยาบาล</h2>
                </div>
                <div style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5); width:300px; height: 450px;" class="rounded-3 pt-4 ms-5" data-aos="fade-up" data-aos-duration="1500">
                    <img class="mx-auto d-block" style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5);" src="http://akathospital.com/assets/images/directors/boss.jpg" alt="">
                    <p class="text-center mt-2" style="font-size: 1.2rem;">แพทย์หญิงจิรัฐติกาล สุตวณิชย์</p>
                    <p class="text-center" style="font-size: 1rem; "></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-4">
            @include('index_template.patials.menuBar')
        </div>
        <div class="col-8">
            <div class="d-lg-flex" data-aos="fade-up" data-aos-duration="1500">
                <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class="" src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/โครงการแลกเปลี่ยนการดำเนินIMCเครือข่ายจังหวัดสกลนครปี2566.jpg') }}" alt="" style="font-size: cover;">
                        <div class="date"> <span class="day">18</span> <span class="month">July</span> <span class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">โครงการแลกเปลี่ยนการดำเนิน IMC เครือข่ายจังหวัดสกลนครปี 2566</p>
                        <p class="text-muted mt-3">โรงพยาบาลอากาศอำนวย ขอขอบคุณพระคุณอาจารย์อนุชา วินิจสุมานนท์ แพทย์เวชศาสตร์ฟื้นฟู รพศ.สกลนคร และทีมเยี่ยมเสริมพลังทุกท่าน</p>
                        <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                            <a href="{{ url("indexShowIMG") }}" class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class="" src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับการประเมินGreen&CleanChallengeประจำปี2566.jpg') }}" alt="">
                        <div class="date"> <span class="day">10</span> <span class="month">July</span> <span class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">รับการประเมิน Green&Clean Challenge ประจำปี 2566</p>
                        <p class="text-muted mt-3">รับการประเมิน Gree&Clean Challenge ประจำปี 2566 โดยศูนย์อนามัยที่ 8 อุดรธานี ณ ห้องประชุมเล็ก โรงพยาบาลอากาศอำนวย</p>
                        <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                            <a href="{{ url("indexShowIMG") }}" class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="card border-0 mb-lg-0 mb-4">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class="" src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับเยี่ยมเสริมพลังและTrainingonthejobในงานอนามัยแม่และเด็ก.jpg') }}" alt="">
                        <div class="date"> <span class="day">10</span> <span class="month">July</span> <span class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">รับเยี่ยมเสริมพลังและ Training on the job ในงานอนามัยแม่และเด็ก</p>
                        <p class="text-muted mt-3">แพทย์หญิงจิรัฐติกาล สุตวณิชย์ พร้อมด้วยเจ้าหน้าที่งานอนามัยแม่และเด็ก รับเยี่ยมเสริมพลังและ Training on the job </p>
                        <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                            <a href="{{ url("indexShowIMG") }}" class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection