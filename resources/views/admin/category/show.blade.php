@extends('layouts.adminbase')

@section('title','Edit Category')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Show {{$data->title}} Data</h1>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Datas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 40px"> Id </th>
                                    <th style="width: 40px"> Title </th>
                                    <th style="width: 40px"> Keywords </th>
                                    <th style="width: 40px"> Description </th>
                                    <th style="width: 40px"> Images </th>
                                    <th style="width: 40px"> Status </th>
                                    <th style="width: 40px"> Created Date </th>
                                    <th style="width: 40px"> Updated Date </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td> {{$data->id}} </td>
                                    <td> {{$data->title}} </td>
                                    <td> {{$data->keywords}} </td>
                                    <td> {{$data->description}} </td>
                                    <td> {{$data->images}} </td>
                                    <td> {{$data->status}} </td>
                                    <td> {{$data->created_at}} </td>
                                    <td> {{$data->updated_at}} </td>
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

