<!DOCTYPE html>
<html lang="en">
<head>


    <title>@yield("title")</title>
    <meta name="description" content="@yield("description")">
    <meta name="keywords" content="@yield("keywords")">
    <meta name="author" content="@yield("author")">
    <link rel="icon" type="image/x-icon" href="@yield("icon")">


    <!-- font icons -->
    <link rel="stylesheet" href="/assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Pigga main styles -->
    <link rel="stylesheet" href="/assets/css/pigga.css">
<!--  <link rel="stylesheet" href="assets/css/style.css"> -->
<!--    <link rel="stylesheet" href="assets/css/style.min.css"> -->
    <link rel="stylesheet" href="/assets/js/main.js">
    @yield("head")

</head>

<body>
@include("home.header")


@yield("content")


@include("home.footer")
</body>
</html>
