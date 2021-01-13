@extends('layouts.layout')

@section('content')

    <div class="card card-border-main card-main">
        <div class="card card-border">
            <div class="card-body card-border card-input-first-row">
                <div class="card card-group card-border">
                    <div class="card card-body card-border picture-project">
                        <img src={{ $response['0']['fields']['projectLogo']['0']['url']  }} class="pictures" >
                    </div>
                    <div class="card card-body card-border card-input-center">
                        <h1 class="card-text" class="project-name" style="text-align: center">{{ $response['0']['fields']['projectName'] }}</h1>
                        <p class="card-text" class="description-project" style="margin-top:5px">- {{ $response['0']['fields']['schoolYear']['0'] }} , {{ $response['0']['fields']['schoolYear']['1'] }}
                        </p>
                        <p class="card-text" class="description-project">- {{ $response['0']['fields']['client'] }}</p>
                        <p class="card-text" style="padding-bottom: -1px">- {{ $response['0']['fields']['year'] }}</p>

                        <p class="card-text" class="description-project" style="margin-top: 4px">Uitgevoerd door:</p>
                        <p class="card-text" class="description-project">- {{ $response['0']['fields']['projectMembers'] }} </p>
                    </div>
                    <div class="card card-body card-border card-input-center">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>
                    <a href="/"><button type="button" class="close-btn"><img class="close-btn-size" src="img/close.png"></button></a>
                </div>
            </div>
        </div>
        <div class="card-body ">
            <div class="card card-group card-input-description-long">
                <div class="card card-body card-input-center">
                    <p class="card-text">{{ $response['0']['fields']['description'] }}</p>
                </div>
            </div>
        </div>

{{--        //TO DO: uitzoeken wat het moet zijn en waar naartoe--}}
        <div class="card-body card-border">
            <div class="card card-group card-border card-position-bottom-row">
                <div class="card card-body card-border card-input-center">
                    <a href="#" class="btn btn-primary btn-opties">Algemene informatie</a>
                </div>
                <div class="card card-body card-border card-input-center">
                    <a href="#" class="btn btn-primary btn-opties">Naar project</a>
                </div>
                <div class="card card-body card-border card-input-center">
                    <a href="#" class="btn btn-primary btn-opties">Contact</a>
                </div>
            </div>
        </div>
    </div>


@endsection


