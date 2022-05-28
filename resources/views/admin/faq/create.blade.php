@extends('layouts.adminbase')

@section('title','FAQ Created')
@section('head')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Add Category</h1>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">FAQ Form</h4>
                        <p class="card-description"> FAQ Form Details </p>
                        <form class="forms-sample" action="/admin/faq/store" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Questions</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="questions" placeholder="Questions">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Answer</label>
                                <textarea style="color: #000000" class="form-control" name="answer" id="Answer"></textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
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
