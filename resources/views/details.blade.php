@extends('layouts.layout')

@section('content')
    <script language="javascript" type="text/javascript">
        let linkje ="{{ $response['fields']['projectURL'] }}";
        console.log(linkje);

        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }
    </script>
    <div class="card card-border-main card-main">
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

                        <p class="card-text" class="description-project" style="margin-top: 4px">Uitgevoerd door:</p>
                        <p class="card-text" class="description-project">- {{ $response['fields']['projectMembers'] }} </p>
                    </div>

                    <div class="card card-body card-border card-input-center">
                        <p class="card-text" class="description-project" style="margin-top:5px">First labels:
                            @foreach($response['fields']['primaryLabel'] as $records)
                                <span class="schoolYearTag">{{ $records }}</span>
                            @endforeach
                        </p>

                        <p class="card-text" class="description-project" style="margin-top:5px">Secondairy lables:
                            @foreach($response['fields']['secondaryLabel'] as $records)
                                <span class="schoolYearTag">{{ $records }}</span>
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
                    <p class="card-text ">{{ $response['fields']['description'] }}</p>
                </div>
            </div>
        </div>

{{--   TODO: uitzoeken wat het moet zijn en waar naartoe--}}


        <div class="card-body card-border">
            <div class="card card-group card-border card-position-bottom-row">
                <div class="card card-body card-border card-input-center">

{{--                    //TODO: knop naar popup naar: wat is de opdracht en wat werd er verwacht--}}
{{--                    <a href="#" class="btn btn-primary btn-opties ">Project assigment</a>--}}
                        <div class="popup" id="popup-1">
                            <div class="overlay"></div>
                            <div class="content">
                                <div class="close-btn-popup" onclick="togglePopup()">&times;
                                </div>
                                <h1>The Assignment</h1>
                                <p>{{ $response['fields']['projectAssignment'] }}</p>
                            </div>
                        </div>

                    <a href="#"class="btn btn-primary btn-opties button-popup" onclick="togglePopup()">Project Assigment</a>

                </div>
                <div class="card card-body card-border card-input-center">

{{--                    //TODO: more info of project: linkje bv git--}}
                        <a  href="#" class="btn btn-primary btn-opties" href="2.html" onclick="location.href=linkje;return false;">Project </a>
{{--                        <a  href="#" class="btn btn-primary btn-opties" href="{{url('',$respons['fields']['projectURL'])}}">Project </a>--}}
                </div>

{{--                    //TODO: mail van hz -> ict@hz.nl (miss naar contact pagina)--}}

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


