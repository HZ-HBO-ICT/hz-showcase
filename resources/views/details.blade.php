@extends('layouts.layout')

@if ($agent->isDesktop())
@section('content')
    <script language="javascript" type="text/javascript">
        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>
    <div class="card card-border-main card-main" style="margin-bottom: 7vh">
        <div class="card card-border">
            <div class="card-body card-border card-input-first-row">
                <div class="card card-group card-border">
                    <div class="card card-body card-border">
                        <div class="owl-carousel owl-theme" style="margin-bottom: -50px">
                            @foreach($response['fields']['image'] as $records)
                                <div class="inner">
                                    <img style="height: 10vw; width: auto;" class="picture-project-carousel" src="{{ $records['url'] }}" >
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="card card-body card-border card-input-center">
                        <h1 class="card-text" class="project-name" style="text-align: center">{{ $response['fields']['projectName'] }}</h1>
                        <p class="card-text" class="description-project" style="margin-top:5px">Schoolyear:
                        @foreach($response['fields']['schoolYear'] as $records)
                                <span class="schoolYearTag">{{ $records }}</span>
                            @endforeach
                        </p>

                        <p class="card-text" class="description-project">Client: {{ $response['fields']['client'] }}</p>
                        <p class="card-text" style="padding-bottom: -1px">Year: {{ $response['fields']['year'] }}</p>

                        <p class="card-text" class="description-project" style="margin-top: 4px">Written by:</p>
                        <p class="card-text" class="description-project">- {{ $response['fields']['projectMembers'] }} </p>
                    </div>

                    <div class="card card-body card-border card-input-center">
                        <h3 class="card-text" >Labels</h3>
                        <p class="card-text" class="description-project" style="margin-top:5px">First labels:
                            @foreach($response['fields']['primaryLabel'] as $records)
                                <span class="label-one">{{ $records }}</span>
                            @endforeach
                        </p>

                        <p class="card-text" class="description-project" style="margin-top:5px">Secondary labels:
                            @foreach($response['fields']['secondaryLabel'] as $records)
                                <span class="label-two">{{ $records }}</span>
                            @endforeach
                        </p>
                    </div>

                    <a href="{{ url()->previous() }}"><button type="button" class="close-btn"><img class="close-btn-size"
                                                                       src="/img/close.png"></button></a>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <div class="card card-group">
                <div class="card card-body card-input-center card-input-description-long">
                    <p class="card-text ">{{ $response['fields']['longDescription'] }}</p>
                </div>
            </div>
        </div>

        <div class="card-body card-border">
            <div class="card card-group card-border card-position-bottom-row">
                <div class="card card-body card-border card-input-center">

                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn-popup" onclick="togglePopup()">&times;
                                </div>
                                <h1>The Assignment</h1>
                                <p>{{ $response['fields']['projectAssignment'] }}</p>
                            </div>
                        </div>

                    <a href="#"class="btn btn-primary btn-opties button-popup" style="margin-left: 35vw; margin-top: 1.5vh; margin-bottom: -2vh"onclick="togglePopup()">Project Assigment</a>

                </div>
                <div class="card card-body card-border card-input-center">

                        <a  class="btn btn-primary btn-opties" href="{{ $response['fields']['projectURL'] }}">Project </a>
                </div>


                <div class="card card-body card-border card-input-center">
                    <a class="btn btn-primary btn-opties" href="https://hz.nl/opleidingen/hbo-ict">ICT program</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function () {
            $('.owl-carousel').owlCarousel({

                number: 3,
                mouseDrag: true,
                // margin: 25,
                dots: false,
                navText: ["<img class='arrow' src='/img/left-arrow.png' ></i>", "<img class='arrow' src='/img/right-arrow.png'>"],
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    // 600: {
                    //     items: 3
                    // },
                }
            })
        });
    </script>
@endsection
@endif


<!-- Mobile page -->

@if ($agent->isMobile())
@section('content')
    <script language="javascript" type="text/javascript">
        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>
    <div class="card card-border-main card-main" style="margin-bottom: 10vh; margin-top: 2vh;">
        <div class="card card-border">
            <div class="card-body card-border card-input-first-row">
                <div class="card card-group card-border">
                    <div class="card card-body card-border">
                        <div class="owl-carousel owl-theme" style="margin-bottom: -50px">
                            @foreach($response['fields']['image'] as $records)
                                <div class="inner">
                                    <img style="height: 30vw; width: auto;" class="picture-project-carousel" src="{{ $records['url'] }}" >
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div class="card card-body card-border ">
                        <h1 class="card-text" class="project-name" style="text-align: center">{{ $response['fields']['projectName'] }}</h1>
                        <p class="card-text" class="description-project" style="margin-top:5px">Schoolyear:
                            @foreach($response['fields']['schoolYear'] as $records)
                                <span class="schoolYearTag">{{ $records }}</span>
                            @endforeach
                        </p>

                        <p class="card-text" class="description-project">Client: {{ $response['fields']['client'] }}</p>
                        <p class="card-text" style="padding-bottom: -1px">Year: {{ $response['fields']['year'] }}</p>

                        <p class="card-text" class="description-project" style="margin-top: 4px">Written by:</p>
                        <p class="card-text" class="description-project">- {{ $response['fields']['projectMembers'] }} </p>
                    </div>

                    <div class="card card-body card-border ">
                        <h3 class="card-text" >Labels</h3>
                        <p class="card-text" class="description-project" style="margin-top:5px">First labels:
                            @foreach($response['fields']['primaryLabel'] as $records)
                                <span class="label-one">{{ $records }}</span>
                            @endforeach
                        </p>

                        <p class="card-text" class="description-project" style="margin-top:5px">Secondary labels:
                            @foreach($response['fields']['secondaryLabel'] as $records)
                                <span class="label-two">{{ $records }}</span>
                            @endforeach
                        </p>
                    </div>

                    <a href="{{ url()->previous() }}"><button type="button" class="close-btn" style="margin-top: -89vh; margin-left: 3vw; position: absolute"><img class="close-btn-size" src="/img/close.png"> </button> </a>
            </div>
        </div>
        <div class="card-body">
            <div class="card card-group" >
                <div class="card card-body card-input-description-long" style="margin-bottom:-10px">
                    <p class="card-text ">{{ $response['fields']['longDescription'] }}</p>
                </div>
            </div>
        </div>

        <div class="card-body card-border" style="margin-bottom: -10vh">
            <div class="card card-group card-border">
                <div class="card card-body card-border button-option">

                    <div class="popup" id="popup-1">
                        <div class="overlay" ></div>
                        <div class="content" style="width: 95vw; margin-left: -4vw; height: fit-content; ">
                            <div class="close-btn-popup" onclick="togglePopup()">&times;
                            </div>
                            <h1>The Assignment</h1>
                            <p>{{ $response['fields']['projectAssignment'] }}</p>
                        </div>
                    </div>

                    <a href="#"class="btn btn-primary" style="width:70vw;transform:translate(-50%,-50%); margin-left: 35vw; margin-top: 1.5vh; margin-bottom: -2vh" onclick="togglePopup()">Project Assigment</a>

                </div>
                <div class="card card-body card-border button-option">

                    <a  class="btn btn-primary " href="{{ $response['fields']['projectURL'] }}">Project </a>
                </div>

                <div class="card card-body card-border button-option">
                    <a class="btn btn-primary card-border" href="https://hz.nl/opleidingen/hbo-ict">ICT program</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function () {
            $('.owl-carousel').owlCarousel({

                number: 3,
                mouseDrag: true,
                // margin: 25,
                dots: false,
                navText: ["<img class='arrow' src='/img/left-arrow.png' ></i>", "<img class='arrow' src='/img/right-arrow.png'>"],
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    // 600: {
                    //     items: 3
                    // },
                }
            })
        });
    </script>
@endsection
@endif




