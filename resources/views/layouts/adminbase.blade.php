<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield("title")</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End Plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/admin/images/favicon.png" />
    @yield("head")
</head>
<body>
@section('sidebar')
    @include("admin.sidebar")
@show

@include("admin.header")



@yield("content")


@include("admin.footer")

</body>

</html>
