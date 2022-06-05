@extends('layouts.adminwindow')

@section('title','User Detail')

@section('content')
    <div class="main-panel" >
        <div class="content-wrapper">
            <h1>User Data</h1>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body ">
                        <h4 class="card-title">Datas</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <th style="width: 100px">Id</th>
                                    <td>{{$data->id}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Name</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Email</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Roles</th>
                                    <td>
                                        @foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" class="btn-sm btn-danger btn-rounded">X</a>
                                        @endforeach</td>
                                </tr>

                                <tr>
                                    <th style="width: 100px">Created Date</th>
                                    <td>{{$data->created_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Updated Date</th>
                                    <td>{{$data->updated_at}}</td>
                                </tr>
                                <tr>
                                    <th style="width: 100px">Add Role</th>
                                    <td>
                                        <form class="forms-sample" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post" >
                                            @csrf
                                            <select name="role_id">
                                                @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->name}}</option>
                                                @endforeach

                                            </select>
                                            <div class="card-footer">
                                                <button type="submit" class="btn btn-primary">Add Role</button>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

