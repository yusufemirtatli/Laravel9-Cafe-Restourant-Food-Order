@extends('layouts.main')

@section('title','Restorant Project')



@section('content')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <section id="team">
        <div class="container">
            <h3 class="section-title mb-5 text-center"></h3>
            <div class="row">
                @foreach($productlist1 as $rs)
                <div class="col-md-6 mb-4">
                    <a href="javascrip:void(0)" class="custom-list">
                        <div class="img-holder">
                            <img src="{{Storage::url($rs->image)}}">
                        </div>
                        <div class="info">
                            <div class="head clearfix">
                                <h5 class="title float-left">Aperiam incidunt dicta</h5>
                                <p class="float-right text-primary">$25</p>
                            </div>
                            <div class="body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing Eos, earum dicta est veniam beatae libero!</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
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
