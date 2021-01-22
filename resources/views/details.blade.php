@extends('layouts.layout')

@section('content')

    <div class="card card-border-main card-main">
        <div class="card card-border">
            <div class="card-body card-border card-input-first-row">
                <div class="card card-group card-border">
                    <div class="card card-body card-border picture-project">

                        <div class="owl-carousel">
                            @foreach($response['fields']['image'] as $records)
                                <div><img src="{{ $records['url'] }}" ></div>
                            @endforeach
                        </div>

                    </div>
                    <div class="card card-body card-border card-input-center">
                        <h1 class="card-text" class="project-name" style="text-align: center">{{ $response['fields']['projectName'] }}</h1>
                        <p class="card-text" class="description-project" style="margin-top:5px"></p>
                        <p class="card-text" class="description-project"></p>
                        <p class="card-text" style="padding-bottom: -1px"></p>

                        <p class="card-text" class="description-project" style="margin-top: 4px">Uitgevoerd door:</p>
                        <p class="card-text" class="description-project">- {{ $response['0']['fields']['projectMembers'] }} </p>
                    </div>
                    <div class="card card-body card-border card-input-center">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>

                    <a href="{{ url()->previous() }}"><button type="button" class="close-btn"><img class="close-btn-size"
                                                                       src="/img/close.png"></button></a>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <div class="card card-group card-input-description-long">
                <div class="card card-body card-input-center">
                    <p class="card-text"></p>
                </div>
            </div>
        </div>

{{--   TODO: uitzoeken wat het moet zijn en waar naartoe--}}


        <div class="card-body card-border">
            <div class="card card-group card-border card-position-bottom-row">
                <div class="card card-body card-border card-input-center">

{{--                    //TODO: knop naar popup naar: wat is de opdracht en wat werd er verwacht--}}
                    <a href="#" class="btn btn-primary btn-opties">General information</a>
                </div>
                <div class="card card-body card-border card-input-center">

{{--                    //TODO: mail van hz -> ict@hz.nl (miss naar contact pagina)--}}
                    <a href="#" class="btn btn-primary btn-opties">More information about ict</a>
                </div>
                <div class="card card-body card-border card-input-center">
                    <a class="btn btn-primary btn-opties" href="https://hz.nl/opleidingen/hbo-ict" >More information</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        jQuery(document).ready(function () {
            $('.owl-carousel').owlCarousel({

                number: 3,
                mouseDrag: false,
                margin: 25,
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


