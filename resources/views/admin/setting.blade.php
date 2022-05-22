@extends('layouts.adminbase')

@section('title','Admin Panel')

<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>



@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h2>Settings</h2>
                    <form class="forms-sample" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Setting Elements </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="">
                            <a class="dropdown-item" href="#fax">Smtp</a>
                            <a class="dropdown-item" href="#smtppassword">Social Media</a>
                            <a class="dropdown-item" href="#twitter">About Us And Others</a>
                            <a class="dropdown-item" href="#icon">İcon And Status</a>
                        </div>
                        <div class="card-body">
                            <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" style="color: #babcb1" id="title" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" style="color: #babcb1" id="keywords" class="form-control" name="keywords" value="{{$data->keywords}}">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <input type="text" style="color: #babcb1" id="description" class="form-control" name="description" value="{{$data->description}}">
                            </div>
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" style="color: #babcb1" id="company" class="form-control" name="company" value="{{$data->company}}">
                            </div>
                            <div class="form-group">
                                <label>Adress</label>
                                <input type="text" style="color: #babcb1" id="adress" class="form-control" name="adress" value="{{$data->adress}}">
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" style="color: #babcb1" id="phone" class="form-control" name="phone" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" style="color: #babcb1" id="fax" class="form-control" name="fax" value="{{$data->fax}}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" style="color: #babcb1" id="email" class="form-control" name="email" value="{{$data->email}}">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label>Smtp Server</label>
                                <input type="text" style="color: #babcb1" id="smtps" class="form-control" name="smtps" value="{{$data->smtpserver}}">
                            </div>
                            <div class="form-group">
                                <label>Smtp Email</label>
                                <input type="text" style="color: #babcb1" id="smtpemail" class="form-control" name="smtpemail" value="{{$data->smtpemail}}">
                            </div>
                            <div class="form-group">
                                <label>Smtp Password</label>
                                <input type="text" style="color: #babcb1" id="smtppassword" class="form-control" name="smtppassword" value="{{$data->smtppassword}}">
                            </div>
                            <div class="form-group">
                                <label>Smtp Port</label>
                                <input type="number" style="color: #babcb1" id="smtpport" class="form-control" name="smtpport" value="{{$data->smtpport}}">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label>Facebook</label>
                                <input type="text" style="color: #babcb1" id="facebook" class="form-control" name="facebook" value="{{$data->facebook}}">
                            </div>
                            <div class="form-group">
                                <label>Instagram</label>
                                <input type="text" style="color: #babcb1" id="instagram" class="form-control" name="instagram" value="{{$data->instagram}}">
                            </div>
                            <div class="form-group">
                                <label>Twitter</label>
                                <input type="text" style="color: #babcb1" id="twitter" class="form-control" name="twitter" value="{{$data->twitter}}">
                            </div>
                            <div class="form-group">
                                <label>Youtube</label>
                                <input type="text" style="color: #babcb1" id="youtube" class="form-control" name="youtube" value="{{$data->youtube}}">
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label>About Us</label>
                                <textarea id="aboutus" name="aboutus" class="form-control" >{{$data->aboutus}}

                                </textarea>
                                <script>
                                    CKEDITOR.replace( 'aboutus' );
                                </script>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label>Contact</label>
                                <textarea id="contact" name="contact" class="form-control" >{{$data->contact}}

                                </textarea>
                                <script>
                                    CKEDITOR.replace( 'contact' );
                                </script>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label>Referances</label>
                                <textarea id="references" name="references" class="form-control" >{{$data->references}}

                                </textarea>
                                <script>
                                    CKEDITOR.replace( 'references' );
                                </script>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="form-group">
                                <label>Icon</label>
                                <input type="file" id="icon" name="icon" class="file-upload-default">
                                <div class="input-group col-xs-12">
                                    <span class="input-group-append">
                            <input type="file" name="icon">
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
        </div>
@endsection
