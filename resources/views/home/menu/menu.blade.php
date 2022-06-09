@extends('layouts.main')

@section('title','Restorant Project')



@section('content')

    <section id="team">
        <div class="container">
            <h3 class="section-title mb-5 text-center">Menü</h3>
            <div class="row">

                @foreach($data as $rs)

                <div class="col-md-4 my-3">
                    @if(count($rs->children))
                        <a href="/menu/submenu/{{$rs->id}}">

                    @else
                        <a href="/menu/{{$rs->id}}">
                    @endif

                    <div class="team-wrapper text-center">
                        <img src="{{Storage::url($rs->image)}}" class="circle-120 rounded-circle mb-3 shadow">
                        <h5 class="my-3">{{$rs->title}}</h5>
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
