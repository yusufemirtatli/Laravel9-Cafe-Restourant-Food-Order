@extends('layouts.adminbase')

@section('title','Category Created')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Add Category</h1>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category Form</h4>
                        <p class="card-description"> Category Form Details </p>
                        <form class="forms-sample" action="/admin/category/store" method="get">
                            @csrf
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
                                <label>File upload</label>
                                <input type="file" name="img[]" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" name="image" placeholder="Upload Image">
                                    <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Status</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="status" >
                                    <option>True</option>
                                    <option>False</option>
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
