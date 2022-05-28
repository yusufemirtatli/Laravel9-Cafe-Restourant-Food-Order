@extends('layouts.adminbase')

@section('title','Edit FAQ')
@section('head')
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>

@endsection
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <h1>Show FAQ {{$data->questions}}</h1>
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit FAQ Form</h4>
                        <p class="card-description"> FAQ Form Details </p>
                        <form class="forms-sample" action="/admin/faq/update/{{$data->id}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputUsername1">Question</label>
                                <input type="text" style="color: #babcb1" class="form-control" name="questions" value="{{$data->questions}}">
                            </div>
                            <div class="form-group" >
                                <label for="exampleInputUsername1">Answer</label>
                                <textarea style="color: #babcb1" class="form-control" name="answer" id="answer">{{$data->answer}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'answer' );
                                </script>
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

