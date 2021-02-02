@extends('layouts.layout')

@section('content')

    {{--  DONE: Mobile integration --}}
    {{--  DONE: Alles dynamisch ophalen --}}
    {{--  DONE: Card template in grote lijnen --}}
    {{--  DONE: Cards clickable maken  --}}
    {{--  DONE: Mobiele integratie van de carousel  --}}
    {{--  DONE: Styling omzetten naar ID's in een aparte scss  --}}
    {{--  DONE: Routing naar de details (show-functie is opgezet in RequestController --}}

    {{--  TODO: Optimize the cards / make the page friendly for other screens --}}
    {{--  TODO: Tablet integration? --}}
    {{--  TODO: Give tags randomly selected colors (maybe from an array?) --}}


    <div>
        <h2 class="header">Populair projects</h2>
    </div>
    <hr>

    <div class="card card-invisible" style="margin-left: 2%; margin-right: 2%;">
        <div class="owl-carousel owl-theme">
            @foreach($response as $records)     {{-- this makes sure every cards gets loaded dynamically --}}
                <div class="card mb-3" style="border-radius: 5px; padding-left: 5px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div>
                                <img class="logo-image-padding" id="img"
                                     src="{{ $records['fields']['projectLogo']['0']['url'] }}">
                            </div>
                            <p class="text-muted" id="year">
                                - {{ $records['fields']['year'] }}</p>
                            <p class="text-muted client" id="client">
                                - {{ $records['fields']['client'] }}</p>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <a href="/details/{{ $records['id'] }}">
                                    <h5 class="card-title" id="projectname"
                                    >{{ $records['fields']['projectName'] }}</h5></a>
                                <p class="text-muted" id="projectmembers"
                                >{{ $records['fields']['projectMembers'] }}</p>
                                <p class="card-text" id="shortdescription"
                                >{{ $records['fields']['shortDescription'] }}.</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



    <div>
        <h2 class="header">New projects</h2>
    </div>
    <hr>

    {{--  TODO: Add the second carousel  --}}


    <script> {{-- OwlCarousel - This makes sure you can scroll through the cards --}}
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
                    600: {
                        items: 3
                    },
                }
            })
        });

    </script>

@endsection
