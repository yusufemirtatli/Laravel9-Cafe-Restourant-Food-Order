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
                                <tbody>
                                <tr>
                                    <th style="width: 100px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Category</th>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Title</th>
                                    <td>{{$data->title}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Description</th>
                                    <td>{{$data->description}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Detail</th>
                                    <td>{{$data->detail}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Price</th>
                                    <td>{{$data->price}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Contents</th>
                                    <td>{{$data->contents}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Origin</th>
                                    <td>{{$data->origin}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Images</th>
                                    <td> @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" style="height: 50px;width: 50px">
                                        @endif</td>
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

