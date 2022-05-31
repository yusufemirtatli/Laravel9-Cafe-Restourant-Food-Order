@extends('layouts.adminbase')

@section('title','Comment List')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">


                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Comment</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="text-center">User Id</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Product</th>
                                    <th class="text-center">Subject</th>
                                    <th class="text-center">Review</th>
                                    <th class="text-center">Rate</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Delete</th>
                                    <th class="text-center">Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                <tr>
                                    <td class="text-center">{{$rs->user->id}}</td>
                                    <td class="text-center">{{$rs->user->name}}</td>
                                    <td class="text-center">{{$rs->product->title}}</td>
                                    <td class="text-center">{{$rs->subject}}</td>
                                    <td class="text-center">{{$rs->review}}</td>
                                    <td class="text-center">{{$rs->rate}}</td>
                                    <td class="text-center">{{$rs->status}}</td>
                                    <td class="text-center"><a href="comment/destroy/{{$rs->id}}" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                                    <td class="text-center"><a href="{{route('admin.comment.show',['id'=>$rs->id])}}" class="btn btn-rounded btn-inverse-info text-center"
                                                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')">Show
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>

@endsection
