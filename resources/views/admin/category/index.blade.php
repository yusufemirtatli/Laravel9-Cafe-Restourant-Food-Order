@extends('layouts.adminbase')

@section('title','category List')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Category List</h1>

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Id</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>{{$rs->image}}</td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="admin/category/edit{{$rs->id}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                    <td><a href="admin/category/delete{{$rs->id}}" class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>

@endsection
