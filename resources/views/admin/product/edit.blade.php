@extends('layouts.adminbase')

@section('title','Edit Product')
@section('head')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Show Product {{$data->title}}</h1>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Product Form</h4>
                        <p class="card-description"> Product Form Details </p>
                        <form class="forms-sample" action="/admin/product/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="form-control" name="category_id" style="color: #6a7293">
                                    @foreach($datalist as $rs)
                                        <option style="color: #babcb1" value="{{$rs->id}}"@if($rs->id==$data->category_id) selected="selected" @endif>
                                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Title</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Keywords</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Description</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group" >
                                <label for="exampleInputUsername1">Detail</label>
                                <textarea style="color: #babcb1" class="form-control" name="detail" id="detail">{{$data->detail}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'detail' );
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Price</label>
                                <input type="number" style="color: #babcb1" class="form-control" name="price" value="{{$data->price}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Contents</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="contents" placeholder="Contents" value="{{$data->contents}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Origin</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="origin" placeholder="Origin" value="{{$data->origin}}">
                            </div>
                            <div class="form-group">
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" name="image" class="form-control file-upload-info" placeholder="Upload Image">
                                    <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Status</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="status" >
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

