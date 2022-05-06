@extends('layouts.main')

@section('title','Restorant Project')



@section('content')
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <section id="team">
        <div class="container">
            <h3 class="section-title mb-5 text-center">Sıcak İçecekler</h3>
            <div class="row">

                <div class="container raise-2">
                    <div class="row">
                        @foreach($productlist1 as $rs)
                            @if($rs->category_id == 5)
                            <div class="col-md-6 mb-4">
                                <a href="javascrip:void(0)" class="custom-list">
                                    <div class="img-holder">
                                        <img src="{{Storage::url($rs->image)}}">
                                    </div>
                                    <div class="info">
                                        <div class="head clearfix">
                                            <h5 class="title float-left">{{$rs->title}}</h5>
                                            <p class="float-right text-primary">${{$rs->price}}</p>
                                        </div>
                                        <div class="body">
                                            <span class="menu-icon">

                                               <img src="/assets/imgs/add.png" class="icon float-right" width="25" height="25">
                                            </span>
                                            <p>{{$rs->description}}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif
                        @endforeach
                    </div>
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
