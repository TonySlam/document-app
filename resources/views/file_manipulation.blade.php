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
            <div class="col-lg-12">
                <div class="card card-small mb-4">
                    <div class="card-header border-bottom">
                        <h6 class="m-0">File Manipulation</h6>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card card-small mb-4">
                                        <div class="card-header border-bottom">
                                            <h6 class="m-0">Documents</h6>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item p-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <ul>

                                            @foreach($docs as $doc)
                                                <li><a href="{{$doc->file}}">{{$doc->document_name}} </a> </li>
                                                @endforeach

                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card card-small mb-4">
                                        <div class="card-header border-bottom">
                                            <h6 class="m-0">Interest</h6>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item p-3">
                                                <div class="row">
                                                    <div class="col">
                                                        <form action="{{route('upload-doc')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="form-group">
                                                                <select class="form-control" name="interest">
                                                                    <option value="">--select Interest--</option>
                                                                    @foreach($all_interest as $value)
                                                                        <option value="{{$value->id}}">{{$value->category}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="file" name="file">
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-success">Upload</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End Default Light Table -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Default Light Table -->

    </div>
@endsection

