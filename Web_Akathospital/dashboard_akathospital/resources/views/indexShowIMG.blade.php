@extends('index_template.mainShow')

@section('content')
    <h1 class="mb-5 d-flex align-items-center justify-content-center bg-success text-light rounded-3" style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5);" data-aos="fade-up" data-aos-duration="1500">รวมกิจกรรม</h1>
    <div class="d-lg-flex" data-aos="fade-up" data-aos-duration="1500">
        <div class="row row-cols-3">
            <div class="col mb-5">
                <div class="card border-0 me-lg-4 mb-lg-0 ">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class=""
                            src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/โครงการแลกเปลี่ยนการดำเนินIMCเครือข่ายจังหวัดสกลนครปี2566.jpg') }}"
                            alt="" style="font-size: cover;">
                        <div class="date"> <span class="day">18</span> <span class="month">July</span> <span
                                class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">โครงการแลกเปลี่ยนการดำเนิน IMC เครือข่ายจังหวัดสกลนครปี 2566</p>
                        {{-- <p class="text-muted mt-3">โรงพยาบาลอากาศอำนวย ขอขอบคุณพระคุณอาจารย์อนุชา วินิจสุมานนท์ แพทย์เวชศาสตร์ฟื้นฟู
                            รพศ.สกลนคร และทีมเยี่ยมเสริมพลังทุกท่าน</p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-3 ">
                            <div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5 ">
                <div class="card border-0 me-lg-4 mb-lg-0 ">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class=""
                            src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับการประเมินGreen&CleanChallengeประจำปี2566.jpg') }}"
                            alt="">
                        <div class="date"> <span class="day">10</span> <span class="month">July</span> <span
                                class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">รับการประเมิน Green&Clean Challenge ประจำปี 2566</p>
                        {{-- <p class="text-muted mt-3">รับการประเมิน Gree&Clean Challenge ประจำปี 2566 โดยศูนย์อนามัยที่ 8 อุดรธานี ณ
                            ห้องประชุมเล็ก โรงพยาบาลอากาศอำนวย</p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-3 ">
                            <div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card border-0 mb-lg-0 ">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class=""
                            src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับเยี่ยมเสริมพลังและTrainingonthejobในงานอนามัยแม่และเด็ก.jpg') }}"
                            alt="">
                        <div class="date"> <span class="day">10</span> <span class="month">July</span> <span
                                class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">รับเยี่ยมเสริมพลังและ Training on the job ในงานอนามัยแม่และเด็ก</p>
                        {{-- <p class="text-muted mt-3">แพทย์หญิงจิรัฐติกาล สุตวณิชย์ พร้อมด้วยเจ้าหน้าที่งานอนามัยแม่และเด็ก
                            รับเยี่ยมเสริมพลังและ Training on the job </p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-3 ">
                            <div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card border-0 me-lg-4 mb-lg-0 ">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class=""
                            src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/โครงการแลกเปลี่ยนการดำเนินIMCเครือข่ายจังหวัดสกลนครปี2566.jpg') }}"
                            alt="" style="font-size: cover;">
                        <div class="date"> <span class="day">18</span> <span class="month">July</span> <span
                                class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">โครงการแลกเปลี่ยนการดำเนิน IMC เครือข่ายจังหวัดสกลนครปี 2566</p>
                        {{-- <p class="text-muted mt-3">โรงพยาบาลอากาศอำนวย ขอขอบคุณพระคุณอาจารย์อนุชา วินิจสุมานนท์ แพทย์เวชศาสตร์ฟื้นฟู
                            รพศ.สกลนคร และทีมเยี่ยมเสริมพลังทุกท่าน</p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-3 ">
                            <div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card border-0 me-lg-4 mb-lg-0 ">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class=""
                            src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับการประเมินGreen&CleanChallengeประจำปี2566.jpg') }}"
                            alt="">
                        <div class="date"> <span class="day">10</span> <span class="month">July</span> <span
                                class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">รับการประเมิน Green&Clean Challenge ประจำปี 2566</p>
                        {{-- <p class="text-muted mt-3">รับการประเมิน Gree&Clean Challenge ประจำปี 2566 โดยศูนย์อนามัยที่ 8 อุดรธานี ณ
                            ห้องประชุมเล็ก โรงพยาบาลอากาศอำนวย</p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-3 ">
                            <div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card border-0 mb-lg-0 ">
                    <div class="backgroundEffect"></div>
                    <div class="pic"> <img class=""
                            src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับเยี่ยมเสริมพลังและTrainingonthejobในงานอนามัยแม่และเด็ก.jpg') }}"
                            alt="">
                        <div class="date"> <span class="day">10</span> <span class="month">July</span> <span
                                class="year">2022</span> </div>
                    </div>
                    <div class="content">
                        <p class="h-1 mt-4">รับเยี่ยมเสริมพลังและ Training on the job ในงานอนามัยแม่และเด็ก</p>
                        {{-- <p class="text-muted mt-3">แพทย์หญิงจิรัฐติกาล สุตวณิชย์ พร้อมด้วยเจ้าหน้าที่งานอนามัยแม่และเด็ก
                            รับเยี่ยมเสริมพลังและ Training on the job </p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-3 ">
                            <div class="btn btn-primary">Read More<span class="fas fa-arrow-right"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
@endsection
