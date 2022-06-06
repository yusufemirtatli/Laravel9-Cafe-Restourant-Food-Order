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
@section('title',$data->title)



@section('content')
    <section id="productdetail">
        <div class="container">
            <h3 class="section-title mb-5 text-center">{{$data->title}}</h3>
            <div class="row">
                <div class="align-items-md-center mb-xl-4 col md-4 my-3">
                    <img src="{{Storage::url($data->image)}}">
                </div>
                <div class="title col md-4 my-3">
@include('home.messages')
                    <h3>Price: ${{$data->price}}</h3>
                    @php
                        $average = $data->comment->average('rate')
                    @endphp
                    <div>
                        <div class="rate text-center">

                            <i>{{$average}}★</i>

                        </div>
                        <a href="#review">{{$data->comment->count('id')}} Review(s) </a>
                    </div>
                    <br>
                    <b style="font-size: 25px">Contents:</b> {{$data->contents}}
                    <br>
                    <b style="font-size: 25px">Origin:</b> {{$data->origin}}

                    <div style="margin-top: 20px">

                        {!!$data->detail!!}

                    </div>

                </div>
            </div>
            <form action="{{route('shopcart.store')}}" method="post">
                @csrf
                <div class="text-center">
                    <div class="input-sm">
                        <span class="text-uppercase">QTY:</span>
                        <input class="input-sm text-center" name="quantity" type="number" value="1" min="1">
                        <input class="input-sm text-center" name="id" type="hidden" value="{{$data->id}}">
                    </div>
                    <button type="submit" class="btn btn-primary" style="margin-top: 20px">Add to shopcard</button>
                </div>
            </form>

        </div>
    </section>

    <section id="review" class="pattern-style-3">
        <h1 class="section-title mb-5 text-center">Reviews</h1>
        <div class="card card-body container">

            <div class="row">
                @foreach($reviews as $rs)
                    <div class="col-md-4 my-3 my-md-0">
                        <div class="card">
                            <div class="card-body">
                                <div class="media align-items-center mb-3">

                                    <div class="media-body">
                                        <h6 class="mt-1 mb-0">{{$rs->user->name}}</h6>
                                        <small class="text-muted mb-0">{{$rs->subject}}</small>
                                    </div>
                                    <div class="media rate">
                                        <h5>★</h5>
                                        <i>{{$rs->rate}}</i>
                                    </div>
                                </div>
                                <p class="mb-0">{{$rs->review}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="section-devider my-6 transparent"></div>

        <div class="container">
            <div class="card">
                @include('home.messages')
                <div class="card-body px-4 pb-4 text-center">
                    <h1><b>Write Your Review</b></h1>
                    <form class="form-sample" id="review" action="{{route('storecomment')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="product_id" type="hidden" value="{{$data->id}}">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <textarea class="input form-control" placeholder="review" name="review" aria-placeholder="Your Comment"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="input-group" href="#review">
                                <strong style="margin-top: 10px" class="text-uppercase ">Your Rating :   </strong>
                                <div class="rate text-center">
                                    <input type="radio" id="star5" name="rate" value="5" /><label for="star5" ></label>
                                    <input type="radio" id="star4" name="rate" value="4" /><label for="star4"></label>
                                    <input type="radio" id="star3" name="rate" value="3" /><label for="star3"></label>
                                    <input type="radio" id="star2" name="rate" value="2" /><label for="star2"></label>
                                    <input type="radio" id="star1" name="rate" value="1" /><label for="star1"></label>
                                </div>
                            </div>
                        </div>
                        @auth
                            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                        @else
                            <a href="/login" class="btn btn-primary">Please Login</a>
                        @endauth
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Prefooter Section  -->
    <div class="py-4 border border-lighter border-bottom-0 border-left-0 border-right-0 bg-dark">
        <div class="container">
            <div class="row justify-content-between align-items-center text-center">
            </div>
        </div>
    </div>
    <!-- End of PreFooter Section -->
@endsection
