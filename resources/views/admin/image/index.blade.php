@extends('layouts.adminwindow')

@section('title','Product Image Gallery List')
<div class="main-panel">
 <div class="content-wrapper">
     <h2>{{$product->title}}</h2>
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputUsername1">Title</label>
                        <input type="text" style="color: #babcb1" class="form-control" name="title" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                                        <span class="input-group-append">
                                <input type="file" name="image">
                              </span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-dark">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@section('content')
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Product Image List</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Product ID</th>
                                <th>Image</th>
                                <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $rs)
                                <tr>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->id}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 50px;width: 50px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
@endsection
