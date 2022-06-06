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
@section('title','User Profile')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

@section('content')
    <!-- End Of Page Header -->
    <!-- End OF About Section -->
    <!-- Service Section -->
    <section id="service" class="pattern-style-4 has-overlay">
        <div class="container raise-2">
            <h3 class="section-title mb-6 pb-3 text-center">My Reviews</h3>
            <div class="row">
                    <h1 class="section-title mb-5 text-center">Reviews</h1>
                    <div class="card card-body container">
                        <div class="row">
                            @foreach($comments as $rs)
                                <div class="col-md-4 my-3 my-md-0">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="media align-items-center mb-3">

                                                <div class="media-body">
                                                    <h6 class="mt-1 mb-0">{{$rs->user->name}}</h6>
                                                    <small class="text-muted mb-0">{{$rs->product->title}}</small>
                                                </div>
                                                <div class="media rate">
                                                    <h5>★</h5>
                                                    <i>{{$rs->rate}}</i>
                                                </div>
                                            </div>
                                            <p class="mb-0">{{$rs->review}}</p>
                                        </div>
                                        <div class="text-center">
                                            <a href="/destroyreview/{{$rs->id}}" class="btn btn-sm btn-danger btn-rounded btn-fw" style="margin-top: 5px;margin-bottom: 5px">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <!-- End of Featured Food Section -->


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

