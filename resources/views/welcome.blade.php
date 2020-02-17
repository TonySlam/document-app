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

                        <h3 class="page-title"><a href="{{route('interest_documents')}}" class="btn btn-success">Generate Interest for User</a> </h3>


                </div>
            </div>
            <!-- End Page Header -->
            <!-- Default Light Table -->
            <div class="row">
                <div class="col">
                    <div class="card card-small mb-4">
                        <div class="card-header border-bottom">
                            <h6 class="m-0">Active Users</h6>
                        </div>
                        <div class="card-body p-0 pb-3 text-center">
                            <table class="table mb-0">
                                <thead class="bg-light">
                                <tr>
                                    <th scope="col" class="border-0">#</th>
                                    <th scope="col" class="border-0">First Name</th>

                                    <th scope="col" class="border-0">Email</th>
                                    <th scope="col" class="border-0">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    @if($user != null)
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td><a href="{{route('User_personal_detail',['id'=>$user->id])}}" class="btn btn-success">View</a> </td>
                                </tr>
                                @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Default Light Table -->

        </div>
    @endsection

