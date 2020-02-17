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
                <h3 class="page-title">File Manipulation</h3>
            </div>
        </div>
        <!-- End Page Header -->
        <!-- Default Light Table -->

        <div class="row">
            <div class="col-lg-8">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Interest</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col">
                                    <ul>


                                        @foreach($documents as $document)
                                            <li>Document Name:{{$document->document_name}} <a href="">{{$document->file}}</a>  </li><br>
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

