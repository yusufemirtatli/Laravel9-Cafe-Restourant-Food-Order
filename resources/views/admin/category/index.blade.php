@extends('layouts.adminbase')

@section('title','category List')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <a href="/admin/category/create" class="btn btn-primary btn-rounded btn-fw" style="margin: 10px">Add Category</a>


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
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Show</th>
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
                                    <td><a href="category/edit/{{$rs->id}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                    <td><a href="category/destroy/{{$rs->id}}" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                                    <td><a href="category/show/{{$rs->id}}" class="btn btn-dribbble btn-rounded btn-fw">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>

@endsection
