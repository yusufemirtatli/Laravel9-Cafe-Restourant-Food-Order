@if($message = Session::get('success'))
    <div class="alert-success mdi-alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message = Session::get('error'))
    <div class="alert-danger mdi-alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message = Session::get('warning'))
    <div class="alert-warning mdi-alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($message = Session::get('info'))
    <div class="alert-info mdi-alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if($errors->any())
    <div class="alert-light mdi-alert-box">
        <button type="button" class="close" data-dismiss="alert">x</button>
        Check the following errors
    </div>
@endif
