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
@section('title','Payment Information')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




@section('content')


    <section id="about" class="has-img-bg" >
        <div class="container">
            <div class="card bg-light">
                @include('home.messages')
                <div class="card-body px-4 pb-4 text-center" style="color: #0a0a0a">
                    <form id="form_order" name="form_order" action="{{route("shopcart.storeorder")}}" class="clearfix" method="post" >
                        @csrf
                        <h1><b> Table Number </b></h1>
                        <div class="form-group">
                            <input type="number" class="form-control" id="table_id" name="table_id" placeholder="Table Number" required>
                        </div>
                </div>
            </div>
            <div class="card bg-light" style="margin-top: 20px" id="contactf">
                <div class="card-body px-4 pb-4 text-center" style="color: #0a0a0a">

                        <h1><b> Payment Form </b></h1>
                        <div class="form-group">
                            <h2>Amount : ${{$total}}</h2>
                            <input type="hidden" class="form-control" name="total" value="{{$total}}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="holder" placeholder="Card Holder">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="number" placeholder="Card Number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="code" placeholder="Security Code">
                        </div>
                        <div class="form-group">
                            <textarea class="input-group-append form-control" type="text" name="message" placeholder="Your Note"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Order Submit</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Menu Section -->

    <!-- Prefooter Section  -->
    <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
                <div class="col-md-3 text-md-left mb-3 mb-md-0">
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

    </script>
@endsection

