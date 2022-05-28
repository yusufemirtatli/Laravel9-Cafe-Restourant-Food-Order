@extends('layouts.adminbase')

@section('title','Show FAQ')

@section('content')
    <div class="main-panel" >
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title">Datas</h4>
                        <div class="table-responsive" style="">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 100px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px ; color: #ff3126">Question</th>
                                    <td style="color: #ff3126">{{$data->questions}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px; color: #24ff00">Answer</th>
                                    <td style="color: #24ff00">{!!$data->answer!!}</td>
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

