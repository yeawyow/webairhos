@extends('index_template.mainIndex')

@section('content')

    {{-- Slider & Boss Start --}}
    <div class="container-fluid mt-5 mb-1 pt-5 pb-5"
        style="background-color: #E1DDDB; border-top: 30px solid #0C4A60; border-bottom: 30px solid #0C4A60;">
        <div class="row">
            <div class="col-8" data-aos="fade-up" data-aos-duration="1500">
                @include('index_template.patials.sliderJssor')
            </div>
            <div class="col-4">
                <div class="mt-3 mb-3 me-4 p-1 text-success d-flex align-content-center justify-content-center"
                    style="border-left: 5px solid #0C4A60; border-right: 5px solid #0C4A60; ">
                    <h2 style="font-weight:700; color: #0C4A60;" data-aos="fade-up" data-aos-duration="1500">
                        ผู้อำนวยการโรงพยาบาล</h2>
                </div>
                <div class="card border-0 me-lg-4 mb-lg-0 mb-4 d-flex align-items-center justify-content-center mt-5"
                    style="position: relative; left:6.5rem; width: 300px; height: 500px;" data-aos="fade-up" data-aos-duration="1500">
                    <div class="backgroundEffect"></div>
                    <div class="pic mt-5" style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5);"> <img class=""
                            src="{{ url('akathospital/IMG/ผู้อำนวยการโรงพยาบาลอากาศอำนวย/01.jpg') }}" alt=""
                            style="font-size: cover;">
                    </div>
                    <div class="content">
                        <p class="h-1 mt-5" style="font-weight: 700;">แพทย์หญิงจิรัฐติกาล สุตวณิชย์</p>
                        {{-- <p class="text-muted mt-3">โรงพยาบาลอากาศอำนวย ขอขอบคุณพระคุณอาจารย์อนุชา วินิจสุมานนท์ แพทย์เวชศาสตร์ฟื้นฟู รพศ.สกลนคร และทีมเยี่ยมเสริมพลังทุกท่าน</p> --}}
                        <div class="d-flex align-items-center justify-content-center mt-4 pb-3 mb-3">
                            <a href="{{ url('indexShowIMG') }}" class="btn btn-primary">Read More<span
                                    class="fas fa-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Slider & Boss End --}}

    {{-- Navbar menu Start --}}
    <div class="container mt-1 mb-1">
        <div class="button-menu-bar">
            @include('index_template.patials.navbar')
        </div>
    </div>
    {{-- Navbar menu End --}}

    {{-- Employment Start --}}
    <div class="container-fluid"
        style="background-color: #E1DDDB; border-top: 30px solid #0C4A60; border-bottom: 30px solid #0C4A60;">
        <div class="row pt-5 pb-5 ps-5 pe-5">
            <div class="col-4">
                @include('index_template.patials.menuBar')
            </div>
            <div class="col-8">
                <h1 class="mb-5 d-flex align-items-center justify-content-center  rounded-3"
                    style="background-color: #0C4A60; color: #F9F7F0; box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5);"
                    data-aos="fade-up" data-aos-duration="1500">กิจกรรม</h1>
                <div class="d-lg-flex align-items-center justify-content-center" data-aos="fade-up"
                    data-aos-duration="1500">
                    <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class=""
                                src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/โครงการแลกเปลี่ยนการดำเนินIMCเครือข่ายจังหวัดสกลนครปี2566.jpg') }}"
                                alt="" style="font-size: cover;">
                            <div class="date"> <span class="day">18</span> <span class="month">July</span> <span
                                    class="year">2022</span> </div>
                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">โครงการแลกเปลี่ยนการดำเนิน IMC เครือข่ายจังหวัดสกลนครปี 2566</p>
                            {{-- <p class="text-muted mt-3">โรงพยาบาลอากาศอำนวย ขอขอบคุณพระคุณอาจารย์อนุชา วินิจสุมานนท์ แพทย์เวชศาสตร์ฟื้นฟู รพศ.สกลนคร และทีมเยี่ยมเสริมพลังทุกท่าน</p> --}}
                            <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                                <a href="{{ url('shows') }}" class="btn btn-primary">Read More<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class=""
                                src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับการประเมินGreen&CleanChallengeประจำปี2566.jpg') }}"
                                alt="">
                            <div class="date"> <span class="day">10</span> <span class="month">July</span> <span
                                    class="year">2022</span> </div>
                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">รับการประเมิน Green&Clean Challenge ประจำปี 2566</p>
                            {{-- <p class="text-muted mt-3">รับการประเมิน Gree&Clean Challenge ประจำปี 2566 โดยศูนย์อนามัยที่ 8 อุดรธานี ณ ห้องประชุมเล็ก โรงพยาบาลอากาศอำนวย</p> --}}
                            <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                                <a href="{{ url('shows') }}" class="btn btn-primary">Read More<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="card border-0 mb-lg-0 mb-4">
                        <div class="backgroundEffect"></div>
                        <div class="pic"> <img class=""
                                src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับเยี่ยมเสริมพลังและTrainingonthejobในงานอนามัยแม่และเด็ก.jpg') }}"
                                alt="">
                            <div class="date"> <span class="day">10</span> <span class="month">July</span> <span
                                    class="year">2022</span> </div>
                        </div>
                        <div class="content">
                            <p class="h-1 mt-4">รับเยี่ยมเสริมพลังและ Training on the job ในงานอนามัยแม่และเด็ก</p>
                            {{-- <p class="text-muted mt-3">แพทย์หญิงจิรัฐติกาล สุตวณิชย์ พร้อมด้วยเจ้าหน้าที่งานอนามัยแม่และเด็ก รับเยี่ยมเสริมพลังและ Training on the job </p> --}}
                            <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                                <a href="{{ url('shows') }}" class="btn btn-primary">Read More<span
                                        class="fas fa-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="mt-5 mb-5 d-flex align-items-center justify-content-center  rounded-3" style="background-color: #0C4A60; color: #F9F7F0; box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5);"></h1>
            </div>
        </div>
    </div>
    {{-- Employment End --}}

@endsection
