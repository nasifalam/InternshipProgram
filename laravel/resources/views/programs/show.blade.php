@extends('layouts.layout')
    <head>
        <!-- Styles -->
        <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    </head>
@section('content')

<div class="flex-center position-ref full-height">
    <div>
        <div class="main">
            <div class="show_title">{{$program['program_Title']}}</div>

            <div class="show_topInfo">
                <div>{{$program['buildingU_Program_Type']}}
                    ⧫
                    {{$program['program_End_Date']}} to
                    {{$program['program_Area']}}
                    {{$program['program_Skills']}}
                    {{$program['program_Country']}}
                    {{$program['program_City']}}
                    {{$program['program_Address']}}
                    {{$program['program_Hosting_Organization']}}
                    {{$program['program_Enrollement_Space']}}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="grey-bg container-fluid">
    <section id="minimal-statistics">
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                   <h3>Program Type: {{$program['buildingU_Program_Type']}}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                   <h3>Start Date:  {{$program['program_Start_Date']}}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="align-self-center">
                                    <h3>End Date: {{$program['program_End_Date']}}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="media d-flex">
                            <div class="align-self-center">
                                <h3>Enrollment: {{$program['program_Enrollement_Space']}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                   <h3>Country: {{$program['program_Country']}}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3>City: {{$program['program_City']}}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3>Address:  {{$program['program_Address']}}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="media d-flex">
                                <div class="media-body text-left">
                                    <h3>Hosting Organiztion: {{$program['program_Hosting_Organization']}}</h3>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</div>
@endsection
