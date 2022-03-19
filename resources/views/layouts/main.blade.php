<!DOCTYPE html>
<html>
<head>
    <title>Layout Tittle - @yield('title')</title>
</head>
<body>
@section('Header')
    This is Header
@show

<div class="container">
    @yield('content')
</div>

@section('Footer')
    This is Footer
@show

</body>
</html>
