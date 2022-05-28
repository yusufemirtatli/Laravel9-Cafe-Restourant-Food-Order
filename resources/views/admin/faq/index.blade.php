@extends('layouts.adminbase')

@section('title','Faq List')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <a href="{{route('admin.faq.create')}}" class="btn btn-primary btn-rounded btn-fw" style="margin: 10px">Add Question</a>


                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Faq List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Questions</th>
                                    <th class="text-center">Answer</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                    <th class="text-center">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                <tr>
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td class="text-center">{{$rs->questions}}</td>
                                    <td class="text-center">{!! $rs->answer !!}</td>
                                    <td class="text-center">{{$rs->status}}</td>
                                    <td class="text-center"><a href="faq/edit/{{$rs->id}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                    <td class="text-center"><a href="faq/destroy/{{$rs->id}}" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                                    <td class="text-center"><a href="faq/show/{{$rs->id}}" class="btn btn-dribbble btn-rounded btn-fw">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>

@endsection
