<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Pigga landing page.">
    <meta name="author" content="Devcrud">
    <title>@yield("title")</title>
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
