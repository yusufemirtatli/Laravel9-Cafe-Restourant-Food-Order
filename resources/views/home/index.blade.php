@extends('layouts.main')

@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('author',$setting->author)
@section('icon',Storage::url($setting->icon))




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
    <section class="has-img-bg">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Food</h6>
            <h3 class="section-title mb-6 text-center">Main Menu</h3>
            <div class="card bg-light">
                <div class="card-body px-4 pb-4 text-center">
                    <div class="row text-left">
                        @foreach($productlist1 as $rs)
                            <div class="col-md-6 my-4">
                                <a href="#" class="pb-3 mx-3 d-block text-dark text-decoration-none border border-left-0 border-top-0 border-right-0">
                                    <div class="d-flex">
                                        <div class="flex-grow-1">
                                            {{$rs->title}}
                                            <p class="mt-1 mb-0">{{$rs->detail}}</p>
                                        </div>
                                        <h6 class="float-right text-primary">${{$rs->price}}</h6>
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
                        <a href="javascrip:void(0)" class="custom-list">
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
                    <h1><b> About Us </b></h1>

                    {!! $setting->aboutus !!}
                    <h1><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; References </b></h1>
                    {!! $setting->references !!}
                    <h1><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contact </b></h1>
                    {!! $setting->contact !!}
                </div>
            </div>
            <div class="card bg-light" style="margin-top: 20px">
                <div class="card-body px-4 pb-4 text-center" style="color: #0a0a0a">
                    <form>
                        <h1><b> Contact Form </b></h1>
                        <div class="form-group">
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Your E-mail">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Send Form</button>
                        <small class="form-text text-muted mt-3">We don't span customers. Check our <a href="#">Privacy Policy</a></small>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- End of Menu Section -->

    <!-- Team Section -->
    <section id="team">
        <div class="container">
            <h6 class="section-subtitle text-center">Great Team</h6>
            <h3 class="section-title mb-5 text-center">Talented Chefs</h3>
            <div class="row">
                <div class="col-md-4 my-3">
                    <div class="team-wrapper text-center">
                        <img src="assets/imgs/chef-1.jpg" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        <h5 class="my-3">Brian Scott</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente suscipit, odio nulla reiciendis!</p>
                        <h6 class="socials mt-3">
                            <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="team-wrapper text-center">
                        <img src="assets/imgs/chef-2.jpg" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        <h5 class="my-3">Edward Harris</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente suscipit, odio nulla reiciendis!</p>
                        <h6 class="socials mt-3">
                            <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
                        </h6>
                    </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="team-wrapper text-center">
                        <img src="assets/imgs/chef-3.jpg" class="circle-120 rounded-circle mb-3 shadow" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                        <h5 class="my-3">Richard Reb</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente suscipit, odio nulla reiciendis!</p>
                        <h6 class="socials mt-3">
                            <a href="javascript:void(0)" class="px-2"><i class="ti-facebook"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-twitter"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-instagram"></i></a>
                            <a href="javascript:void(0)" class="px-2"><i class="ti-google"></i></a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Team Section -->

    <!-- Testmonial Section -->
    <section id="testmonial" class="pattern-style-3">
        <div class="container">
            <h6 class="section-subtitle text-center">Best Clients</h6>
            <h3 class="section-title mb-5 text-center">Testmonials</h3>

            <div class="row">
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">John Doe</h6>
                                    <small class="text-muted mb-0">Business Analyst</small>
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-1.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Maria Garcia</h6>
                                    <small class="text-muted mb-0">Insurance Agent</small>
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-3 my-md-0">
                    <div class="card">
                        <div class="card-body">
                            <div class="media align-items-center mb-3">
                                <img class="mr-3" src="assets/imgs/avatar-2.jpg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, Pigga Landing page">
                                <div class="media-body">
                                    <h6 class="mt-1 mb-0">Mason Miller</h6>
                                    <small class="text-muted mb-0">Residential Appraiser</small>
                                </div>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus enim modi, id dicta reiciendis itaque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Testmonial Section -->



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

@endsection

