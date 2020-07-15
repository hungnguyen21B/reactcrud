@extends('master')
@section('content')
<div class="welcome">
<marquee><img src="public/Image/welcome.gif" alt=""></marquee>
</div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="public/Image/Slideshow/slide1.jpg" alt="">
        </div>

        <div class="item">
            <img src="public/Image/Slideshow/slide2.jpg" alt="">
        </div>

        <div class="item">
            <img src="public/Image/Slideshow/slide3.jpg" alt="">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    <div class="box-content">
        <div class="row">
            <div class="col-sm-4">
                <div class="round">
                    <a class="button" href="{{ route('Pro_management') }}">SẢN PHẨM</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="round">
                    <a class="button" href="{{ route('Cus_management') }}">KHACH HÀNG</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="round">
                    <a class="button" href="#">Haha</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="welcome">

    </div>
  @endsection
