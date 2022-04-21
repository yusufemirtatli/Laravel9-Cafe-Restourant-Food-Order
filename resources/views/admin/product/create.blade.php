@extends('layouts.adminbase')

@section('title','Products Created')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Add Category</h1>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Product Form</h4>
                        <p class="card-description"> Product Form Details </p>
                        <form class="forms-sample" action="/admin/product/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="form-control" name="category_id" style="color: #6a7293">
                                    @foreach($data as $rs)
                                        <option style="color: #babcb1" value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Title</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="title" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Keywords</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="keywords" placeholder="Keywords">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Description</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="description" placeholder="Description">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Detail</label>
                                <textarea style="color: #babcb1" class="form-control" name="detail">

                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Price</label>
                                <input type="number" style="color: #babcb1" class="form-control" name="price" value="0">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Contents</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="contents" placeholder="Contents">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Origin</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="origin" placeholder="Origin">
                            </div>
                            <div class="form-group">
                                <label>File upload</label>
                                <input type="file" name="image" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <span class="input-group-append">
                            <input type="file" name="image">
                          </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Status</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="status" style="color: #6a7293" >
                                    <option style="color: #babcb1">True</option>
                                    <option style="color: #babcb1">False</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-dark">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
