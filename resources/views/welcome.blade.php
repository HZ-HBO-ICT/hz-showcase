@extends('layouts.layout')

@section('content')

    <div>
        <h2 class="header">Populaire projecten</h2>
    </div>
    <hr>

    <div class="row">


        <!-- First card -->
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="card logo-position">
                            <div>
                                <img class="logo" src={{ $response['0']['fields']['projectLogo']['0']['url']  }}>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <a></a>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">{{ $response['0']['fields']['projectName'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <div>
        <h2 class="header">Nieuwe projecten</h2>
    </div>
    <hr>


@endsection
