@extends('layouts.main')
<style>
    .accordion {
        background-color: #eee;
        color: #444;
        cursor: pointer;
        padding: 18px;
        width: 100%;
        border: none;
        text-align: left;
        outline: none;
        font-size: 15px;
        transition: 0.4s;
    }

    .active, .accordion:hover {
        background-color: #ccc;
    }

    .panel {
        padding: 0 18px;
        display: none;
        background-color: white;
        overflow: hidden;
    }
    *{
        margin: 0;
        padding: 0;
    }
    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }

</style>
@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('author',$setting->author)
@section('icon',Storage::url($setting->icon))
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




@section('content')
    <!-- Page Header -->
    <header class="header">
        <div class="overlay" >
            <img src="assets/imgs/logo.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="logo">
            <h1 class="subtitle">Welcome To Our Restaurant</h1>
            <h1 class="title">Really Fresh &amp; Tasty</h1>
        </div>
    </header>
    <!-- End Of Page Header -->
    <!-- About Section -->
    <section class="has-img-bg" id="menu">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Food</h6>
            <h3 class="section-title mb-6 text-center">Main Menu</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">
                    <div class="row text-left">
                        @foreach($productlist1 as $rs)
                            <div class="col-md-6 mb-4">
                                <a class="custom-list" href="/productdetail/{{$rs->id}}">
                                    <div class="img-holder">
                                        <img src="{{Storage::url($rs->image)}}">
                                    </div>
                                    <div class="info">
                                        <div class="head clearfix">
                                            <h5 class="title float-left" style="color: #0a0a0a">{{$rs->title}}</h5>
                                            <p class="float-right text-primary">${{$rs->price}}</p>
                                        </div>
                                        <div class="body">

                                            <p style="color: #4a4848">{{$rs->description}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <a href="/menu" class="btn btn-primary mt-4">Full Menu</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End OF About Section -->
    <!-- Service Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h3 class="section-title mb-6 pb-3 text-center">Special Dishes</h3>
            <div class="row">
                @foreach($productlist1 as $rs)
                    <div class="col-md-6 mb-4">
                        <a href="/productdetail/{{$rs->id}}" class="custom-list">
                            <div class="img-holder">
                                <img src="{{Storage::url($rs->image)}}" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                            </div>
                            <div class="info">
                                <div class="head clearfix">
                                    <h5 class="title float-left">{{$rs->title}}</h5>
                                    <p class="float-right text-primary">${{$rs->price}}</p>
                                </div>
                                <div class="body">
                                    <p>{{$rs->description}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End of Featured Food Section -->
    <!-- Menu Section -->
    <section id="about" class="has-img-bg" >
        <div class="container">
            <div class="card bg-light">
                <div class="card-body px-4 pb-4" style="color: #0a0a0a">
                    <h1 class="text-center"><b>About Us </b></h1>
                    {!! $setting->aboutus !!}
                    <h1 class="text-center"><b> References </b></h1>
                    {!! $setting->references !!}
                    <h1 class="text-center"><b>Contact </b></h1>
                    {!! $setting->contact !!}
                </div>
            </div>
            <div class="card bg-light" style="margin-top: 20px" id="contactf">
                <div class="card-body px-4 pb-4 text-center" style="color: #0a0a0a">
                    @include('home.messages')
                    <form id="form" name="form" action="{{route("storemessage")}}" class="clearfix" method="post">
                        @csrf
                        <h1><b> Contact Form </b></h1>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your E-mail">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="input-group-append form-control" type="text" name="message" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Form</button>
                        <small class="form-text text-muted mt-3">We don't span customers. Check our <a href="#">Privacy Policy</a></small>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Menu Section -->
    <section id="faq" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h1 class="section-title mb-6 pb-3 text-center">FAQ</h1>
            <div class="row">
                @foreach($datalist as $rs)

                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card bg-dark" style="margin-top: 45px">
                            <div class="card-body">
                                <button class="accordion bg-dark " style="color: #cbc9c9"><h5>{{$rs->questions}}</h5></button>
                                <div class="panel bg-dark">
                                    <p style="color:#FFFFFF">{!! $rs->answer !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Prefooter Section  -->
    <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
                <div class="col-md-3 text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/navbar-brand.svg" width="100" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page" class="mb-0">
                </div>
                <div class="col-md-9 text-md-right">
                    <a href="#" class="px-3"><small class="font-weight-bold">Our Company</small></a>
                    <a href="#" class="px-3"><small class="font-weight-bold">Help Center</small></a>
                    <a href="components.html" class="pl-3"><small class="font-weight-bold">Components</small></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End of PreFooter Section -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
@endsection

