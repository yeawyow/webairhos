@extends('index_template.mainShow')

@section('content')
    <div class="container-fluid" id="activities-content">
        <div class="row pt-5 pb-5 ps-5 pe-5">
                <div class="col-4">
                    @include('index_template.patials.menuBar2')
                </div>
                <div class="col-8">
                    <div class="container ">
                        <div id="jssor_1" class="mb-5 bg-body rounded "
                            style="box-shadow: 0 0 5px 2px rgba(0, 0, 0, 0.5); position:relative;margin:0 auto;top:0px;left:0px;width:1180px;height:780px;overflow:hidden;visibility:hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin "
                                style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                                    src="img/spin.svg" />
                            </div>
                            <div data-u="slides"
                                style="cursor:default;position:relative;top:0px;left:0px;width:1180px;height:680px;overflow:hidden;">
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
                            <div data-u="thumbnavigator" class="jssort101"
                                style="position:absolute;left:0px;bottom:0px;width:1180px;height:100px;background-color:#000;"
                                data-autocenter="1" data-scale-bottom="0.75">
                                <div data-u="slides">
                                    <div data-u="prototype" class="p" style="width:190px;height:90px;">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:262px;left:30px;"
                                data-scale="0.75">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
                                    <polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 ">
                                    </polyline>
                                    <line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000">
                                    </line>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:262px;right:30px;"
                                data-scale="0.75">
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
            </div>
        </div>
@endsection
