@extends('layouts.adminbase')

@section('title','Show Product')

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
                                <thead>
                                <tr>
                                    <th style="width: 40px"> Id </th>
                                    <th style="width: 40px"> Category </th>
                                    <th style="width: 40px"> Title </th>
                                    <th style="width: 40px"> Keywords </th>
                                    <th style="width: 40px"> Description </th>
                                    <th style="width: 40px"> Detail </th>
                                    <th style="width: 40px"> Price </th>
                                    <th style="width: 40px"> Contents </th>
                                    <th style="width: 40px"> Origin </th>
                                    <th style="width: 40px"> Images </th>
                                    <th style="width: 40px"> Status </th>
                                    <th style="width: 40px"> Created Date </th>
                                    <th style="width: 40px"> Updated Date </th>
                                </tr>
                                </thead>
                                <tbody >
                                <tr>
                                    <td> {{$data->id}} </td>
                                    <td> {{$data->category_id}} </td>
                                    <td> {{$data->title}} </td>
                                    <td> {{$data->keywords}} </td>
                                    <td> {{$data->description}} </td>
                                    <td> {{$data->detail}} </td>
                                    <td> {{$data->price}} </td>
                                    <td> {{$data->contents}} </td>
                                    <td> {{$data->origin}} </td>
                                    <td>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 50px;width: 50px">
                                        @endif
                                    </td>
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

