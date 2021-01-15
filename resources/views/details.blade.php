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
                        <p class="card-text" class="description-project" style="margin-top:5px"><span class="font-weight-bold">Schoolyear: </span>@foreach($response['0']['fields']['schoolYear'] as $tag)
                             <span class="schoolYearTag">{{$tag}}</span>
                            @endforeach
                        </p>
                        <p class="card-text" class="description-project"><span class="font-weight-bold">Client: </span>{{ $response['0']['fields']['client'] }}</p>
                        <p class="card-text" style="padding-bottom: -1px"><span class="font-weight-bold">Year: </span>{{ $response['0']['fields']['year'] }}</p>

                        <p class="card-text" class="description-project" style="margin-top: 4px"><span class="font-weight-bold">Written by: </span></p>
                        <p class="card-text" class="description-project">- {{ $response['0']['fields']['projectMembers'] }} </p>
                    </div>
                    <div class="card card-body card-border card-input-center">
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    </div>

                    <button type="button" class="close-btn"><img class="close-btn-size"
                                                                       src="img/close.png"></button>
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
        <div class="card-body card-border">
            <div class="card card-group card-border card-position-bottom-row">
                <div class="card card-body card-border card-input-center">

                    //TODO: knop naar popup naar: wat is de opdracht en wat werd er verwacht
                    <a href="#" class="btn btn-primary btn-opties">General information</a>
                </div>
                <div class="card card-body card-border card-input-center">

                    //TODO: mail van hz -> ict@hz.nl (miss naar contact pagina)
                    <a href="#" class="btn btn-primary btn-opties">Contact</a>
                </div>
                <div class="card card-body card-border card-input-center">
                    <a class="btn btn-primary btn-opties" href="https://hz.nl/opleidingen/hbo-ict" >More information</a>
                </div>
            </div>
        </div>
    </div>


@endsection


