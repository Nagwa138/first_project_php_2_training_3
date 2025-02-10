@extends('layout.main')

@section('title')


    List


@endsection

@section('content')
    <div class="section trending">
        <div class="container">
            <div class="row">
    @foreach($courses as $course)

        <div class="col-lg-3 col-md-6">
            <div class="item">
                <div class="thumb">
                    <a href="product-details.html"><img src="assets/images/trending-01.jpg" alt=""></a>
                    <span class="price"><em>$28</em>$20</span>
                </div>
                <div class="down-content">
              <span class="category">
                {{$course->name}}
              </span>
                    <h4>{{$course->duration}}</h4> min
                    <a href="product-details.html"><i class="fa fa-shopping-bag"></i></a>
                </div>
            </div>
        </div>

    @endforeach

            </div>
        </div>
    </div>
@endsection
