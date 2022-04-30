@extends('layouts.adminbase')

@section('title','Product List')



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <a href="/admin/product/create" class="btn btn-primary btn-rounded btn-fw" style="margin: 10px">Add Product</a>


                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Product List</h4>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Id</th>
                                    <th>Keywords</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Edit</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Show</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->title}}</td>
                                    <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 50px;width: 50px">
                                        @endif
                                    </td>
                                    <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}" class="btn btn-rounded btn-inverse-info"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100 height=700')">
                                        &nbsp;<img src="{{asset('assets')}}/admin/images/gallery.jpg" style="height: 50px;width: 50px"></a>
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td><a href="product/edit/{{$rs->id}}" class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                    <td><a href="product/destroy/{{$rs->id}}" class="btn btn-danger btn-rounded btn-fw" onclick="return confirm('Deleting!! Are you sure ?')">Delete</a></td>
                                    <td><a href="product/show/{{$rs->id}}" class="btn btn-dribbble btn-rounded btn-fw">Show</a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
        </div>

@endsection
