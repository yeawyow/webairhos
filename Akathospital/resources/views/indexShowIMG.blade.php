@extends('index_template.mainShow')

@section('content')
    <div class="container-fluid mt-5 mb-5" style="height: 400px; margin-bottom: 20rem;">
        <div class="row" style="height: 500px;">
            <div class="col-4" style="width: 100px;">
                <div class="custom-sidebar w3-bar-block w3-black w3-card" style="width:100px">
                    <h5 class="w3-bar-item">Menu</h5>
                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Fade')">Fade</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Left')">Left</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Right')">Right</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Top')">Top</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Bottom')">Bottom</button>
                    <button class="w3-bar-item w3-button tablink" onclick="openLink(event, 'Zoom')">Zoom</button>
                </div>
            </div>

            <div class="col-8 mt-5 mb-5">
                <div style="margin-left: 10px">
                    <div id="Left" class="w3-container city w3-animate-left" style="display:none">
                        <h1 class="mb-5 d-flex align-items-center justify-content-center  rounded-3"
                            style="background-color: #0C4A60; color: #F9F7F0; box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5); "
                            data-aos="fade-up" data-aos-duration="1500">กิจกรรม</h1>
                        <div class="d-lg-flex align-items-center justify-content-center" data-aos="fade-up"
                            data-aos-duration="1500">
                            <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                                <div class="backgroundEffect"></div>
                                <div class="pic"> <img class=""
                                        src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/โครงการแลกเปลี่ยนการดำเนินIMCเครือข่ายจังหวัดสกลนครปี2566.jpg') }}"
                                        alt="" style="font-size: cover;">
                                    <div class="date"> <span class="day">18</span> <span class="month">July</span>
                                        <span class="year">2022</span> </div>
                                </div>
                                <div class="content">
                                    <p class="h-1 mt-4">โครงการแลกเปลี่ยนการดำเนิน IMC เครือข่ายจังหวัดสกลนครปี 2566</p>
                                    {{-- <p class="text-muted mt-3">โรงพยาบาลอากาศอำนวย ขอขอบคุณพระคุณอาจารย์อนุชา วินิจสุมานนท์ แพทย์เวชศาสตร์ฟื้นฟู รพศ.สกลนคร และทีมเยี่ยมเสริมพลังทุกท่าน</p> --}}
                                    <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                                        <a href="{{ url('indexShowIMG') }}" class="btn btn-primary">Read More<span
                                                class="fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 me-lg-4 mb-lg-0 mb-4">
                                <div class="backgroundEffect"></div>
                                <div class="pic"> <img class=""
                                        src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับการประเมินGreen&CleanChallengeประจำปี2566.jpg') }}"
                                        alt="">
                                    <div class="date"> <span class="day">10</span> <span class="month">July</span>
                                        <span class="year">2022</span> </div>
                                </div>
                                <div class="content">
                                    <p class="h-1 mt-4">รับการประเมิน Green&Clean Challenge ประจำปี 2566</p>
                                    {{-- <p class="text-muted mt-3">รับการประเมิน Gree&Clean Challenge ประจำปี 2566 โดยศูนย์อนามัยที่ 8 อุดรธานี ณ ห้องประชุมเล็ก โรงพยาบาลอากาศอำนวย</p> --}}
                                    <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                                        <a href="{{ url('indexShowIMG') }}" class="btn btn-primary">Read More<span
                                                class="fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card border-0 mb-lg-0 mb-4">
                                <div class="backgroundEffect"></div>
                                <div class="pic"> <img class=""
                                        src="{{ url('akathospital/IMG/ภาพข่าวกิจกรรม/รับเยี่ยมเสริมพลังและTrainingonthejobในงานอนามัยแม่และเด็ก.jpg') }}"
                                        alt="">
                                    <div class="date"> <span class="day">10</span> <span class="month">July</span>
                                        <span class="year">2022</span> </div>
                                </div>
                                <div class="content">
                                    <p class="h-1 mt-4">รับเยี่ยมเสริมพลังและ Training on the job ในงานอนามัยแม่และเด็ก</p>
                                    {{-- <p class="text-muted mt-3">แพทย์หญิงจิรัฐติกาล สุตวณิชย์ พร้อมด้วยเจ้าหน้าที่งานอนามัยแม่และเด็ก รับเยี่ยมเสริมพลังและ Training on the job </p> --}}
                                    <div class="d-flex align-items-center justify-content-center mt-3 pb-3">
                                        <a href="{{ url('indexShowIMG') }}" class="btn btn-primary">Read More<span
                                                class="fas fa-arrow-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <script>
            function openLink(evt, animName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("city");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
                }
                document.getElementById(animName).style.display = "block";
                evt.currentTarget.className += " w3-red";
            }
        </script>
    </div>
@endsection
