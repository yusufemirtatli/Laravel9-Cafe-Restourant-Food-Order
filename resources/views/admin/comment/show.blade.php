@extends('layouts.adminwindow')

@section('title','Show Message')

@section('content')
    <div class="main-panel" >
        <div class="content-wrapper">
            <h1>Show {{$data->title}} Data</h1>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title">Datas</h4>
                        <div class="table-responsive" style="">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 100px">User Id</th>
                                    <td>{{$data->user->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Name</th>
                                    <td>{{$data->user->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Product Name</th>
                                    <td>{{$data->product_id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Subject</th>
                                    <td>{{$data->subject}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Review</th>
                                    <td>{{$data->review}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Rate</th>
                                    <td>{{$data->rate}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Status</th>
                                    <td>{{$data->status}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
@endsection

