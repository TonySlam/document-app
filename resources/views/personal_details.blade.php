@extends('layouts.master')

@section('content')
    <div class="main-content-container container-fluid px-4">
        <div class="col-md-12">
            @include('layouts.alert.response')
        </div>
        <!-- Page Header -->
        <div class="page-header row no-gutters py-4">
            <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
                <span class="text-uppercase page-subtitle">Overview</span>
                <h3 class="page-title">User Profile</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-small mb-4 pt-3">
                    <div class="card-header border-bottom text-center">
                        <div class="mb-3 mx-auto">
                            <img class="rounded-circle" src="/images/avatars/0.jpg" alt="User Avatar" width="110"> </div>
                        <h4 class="mb-0">{{$user->name}}</h4>
                        <span class="text-muted d-block mb-2">{{$user->email}}</span><br>

                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item px-4">

                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Personal Details</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                   <ul>
                                       @if($personal_detail != Null)
                                       <li>Title: {{$personal_detail->title}}</li>
                                       <li>Gender: {{$personal_detail->gender}}</li>
                                       <li>Phone: {{$personal_detail->phone}}</li>
                                       <li>Country: {{$personal_detail->country}}</li>
                                       <li>City:    {{$personal_detail->city}}</li>
                                       <li>Suburb: {{$personal_detail->suburb}}</li>
                                       <li>Address: {{$personal_detail->address}}</li>
                                       <li>Postal Code: {{$personal_detail->postal_code}}</li>
                                           @else
                                           <i>No data</i>
@endif

                                   </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Interest</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <ul>


                                            @foreach($interests as $interest)
                                            @if($interest != Null)
                                                <li>Interest Category: {{$interest->category}} <a href="{{route('docs',$interest->id)}}" class="btn btn-sm btn-success">File Manipulation</a></li><br>
                                            @else
                                                <li>No Data</li>
                                                @endif
                                            @endforeach


                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- End Default Light Table -->

    </div>
@endsection

