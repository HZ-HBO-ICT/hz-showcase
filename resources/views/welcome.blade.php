@extends('layouts.layout')

@section('content')

    {{--  DONE: Mobile integration --}}
    {{--  DONE: Alles dynamisch ophalen --}}
    {{--  DONE: Card template in grote lijnen --}}
    {{--  DONE: Cards clickable maken  --}}
    {{--  DONE: Mobiele integratie van de carousel  --}}
    {{--  TODO: Routing naar de details (show-functie is opgezet in RequestController, helaas nog niet werkend --}}
    {{--  TODO: Design van de kaarten optimaliseren --}}



    <div>
        <h2 class="header">Populaire projecten</h2>
    </div>
    <hr>

    <div class="card card-invisible" style="margin-left: 2%; margin-right: 2%;">
        <div class="owl-carousel owl-theme">
            @foreach($response as $records)
                <a href="/details/{{ $records['id'] }}">
                <div class="card mb-3" style="border-radius: 5px; padding-left: 5px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <div>
                                <img class="logo-image-padding" style="width: 22vh; height: auto;"
                                     src="{{ $records['fields']['projectLogo']['0']['url'] }}">
                            </div>
                            <p class="text-muted" style="width: 22vh; padding-top: 10px;">
                                - {{ $records['fields']['year'] }}</p>
                            <p class="text-muted" style="font-size: 12px; width: 22vh;">
                                - {{ $records['fields']['client'] }}</p>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"
                                    style="font-weight: bold">{{ $records['fields']['projectName'] }}</h5>
                                <p class="text-muted"
                                   style="font-size: 12px">{{ $records['fields']['projectMembers'] }}</p>
                                <p class="card-text"
                                   style="font-size: 15px">{{ $records['fields']['shortDescription'] }}.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>



    <div>
        <h2 class="header">Nieuwe projecten</h2>
    </div>
    <hr>

    {{--  TODO: Add the second carousel  --}}





    <script>
        jQuery(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                number: 3,
                mouseDrag: false,
                margin: 25,
                dots: true,
                nav: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                }
            });
        });
    </script>

@endsection
