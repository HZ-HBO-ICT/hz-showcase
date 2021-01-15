@extends('layouts.layout')

@section('content')

    <div>
        <h2 class="header">Populaire projecten</h2>
    </div>
    <hr>

    <div class="owl-carousel owl-theme">
        @foreach($response as $records)
        <div style="margin-left: 9%" class="item">
            <div class="card" style="width: 33rem;">
                <img style="width: 40%;" src="{{ $records['fields']['projectLogo']['0']['url'] }}">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
        </div>

    <script>
        jQuery(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                number: 3,
                mouseDrag: false,
                dots: true,
                nav: false,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                }
            });
        });
    </script>

    <div>
        <h2 class="header">Nieuwe projecten</h2>
    </div>
    <hr>


@endsection
