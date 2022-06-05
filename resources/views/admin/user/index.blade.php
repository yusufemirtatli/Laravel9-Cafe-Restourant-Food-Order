@extends('layouts.adminbase')

@section('title','User List')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">


            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">User List</h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">Show</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                @foreach($data as $rs)
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td class="text-center">{{$rs->name}}</td>
                                    <td class="text-center">{{$rs->email}}</td>
                                    <td class="text-center">
                                        @foreach($rs->roles as $role)
                                            {{$role->name}}
                                        @endforeach
                                    </td>
                                    <td class="text-center">{{$rs->status}}</td>
                                    <td class="text-center"><a href="user/destroy/{{$rs->id}}" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                                    <td class="text-center"><a href="{{route('admin.user.show',['id'=>$rs->id])}}" class="btn btn-rounded btn-inverse-info text-center"
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
