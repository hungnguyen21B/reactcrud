@extends('master')
@section('content')
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
            <img src="public/Image/Slideshow/slide1.jpg" alt="" height="200">
        </div>

        <div class="item">
            <img src="public/Image/Slideshow/slide2.jpg" alt="" height="200">
        </div>

        <div class="item">
            <img src="public/Image/Slideshow/slide3.jpg" alt="" height="200">
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
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <h1>BỘ LỌC</h1>
            <ul class="list-group">
                <li class="list-group-item">KIỂU DÁNG
                    <hr />
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked> Chữ A (A-Line)
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2"> Dáng Phồng (Ball Grown)
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio3" name="optradio" value="option3"> Đuôi Cá (Mermaid)
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio4" name="optradio" value="option4"> Hạ Eo (Drop Waist)
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio5" name="optradio" value="option5"> Ôm Suôn (Column)
                          </label>
                    </div>

                </li>
                <li class="list-group-item">MÀU SẮC
                    <hr />
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio1" value="option1" checked> Be Nhạt
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio1" value="option2"> Đỏ
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio3" name="optradio1" value="option3"> Hồng Pastel
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio4" name="optradio1" value="option4"> Trắng
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio5" name="optradio1" value="option5"> Xám
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio5" name="optradio1" value="option5"> Xanh
                      </label>
                    </div>
                </li>
                <li class="list-group-item">GIÁ
                    <hr />
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio2" value="option1" checked> Dưới 500.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio2" value="option2"> Từ 500.000 đến 1.000.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio3" name="optradio2" value="option3"> Từ 1.000.000 đến 2.000.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio4" name="optradio2" value="option4"> Từ 2.000.000 đến 5.000.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio5" name="optradio2" value="option5"> Trên 5.000.000 VND
                      </label>
                    </div>
                </li>
                <li class="list-group-item"><button class="btn btn-primary">Lọc</button></li>
            </ul>
        </div>
        <div class="col-sm-8">
            <h1>
                SẢN PHẨM MỚI
                <hr/>
            </h1>
            <div class="row">
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                        <div class="overlay">
                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                            <a class="info" href="#">Chi tiết</a>
                            <a class="info" href="#">Đặt thuê</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="public/Image/Product/3.jpg" alt="">
                        <div class="overlay">
                            <h2>Váy Lễ Công Chúa Lấp Lánh</h2>
                            <a class="info" href="#">Chi tiết</a>
                            <a class="info" href="#">Đặt thuê</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                        <div class="overlay">
                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                            <a class="info" href="#">Chi tiết</a>
                            <a class="info" href="#">Đặt thuê</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="public/Image/Product/3.jpg" alt="">
                        <div class="overlay">
                            <h2>Váy Lễ Công Chúa Lấp Lánh</h2>
                            <a class="info" href="#">Chi tiết</a>
                            <a class="info" href="#">Đặt thuê</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                        <div class="overlay">
                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                            <a class="info" href="#">Chi tiết</a>
                            <a class="info" href="#">Đặt thuê</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="public/Image/Product/3.jpg" alt="">
                        <div class="overlay">
                            <h2>Váy Lễ Công Chúa Lấp Lánh</h2>
                            <a class="info" href="#">Chi tiết</a>
                            <a class="info" href="#">Đặt thuê</a>
                        </div>
                    </div>
                </div>
            </div>
            <h1>
                SẢN PHẨM NỔI BẬT
                <hr/>
            </h1>
            <div class="row">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/3.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Công Chúa Lấp Lánh</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/3.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Công Chúa Lấp Lánh</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/3.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Công Chúa Lấp Lánh</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="public/Image/Product/1.jpg" alt="">
                                        <div class="overlay">
                                            <h2>Váy Lễ Tay Dài Sang Trọng</h2>
                                            <a class="info" href="#">Chi tiết</a>
                                            <a class="info" href="#">Đặt thuê</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
