<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="theme.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
.hovereffect {
    width: 100%;
    height: 100%;
    float: left;
    overflow: hidden;
    position: relative;
    text-align: center;
    cursor: default;
    }

.hovereffect .overlay {
    width: 100%;
    height: 100%;
    position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.6);
    opacity: 0;
    filter: alpha(opacity=0);
    -webkit-transform: translate(460px, -100px) rotate(180deg);
    -ms-transform: translate(460px, -100px) rotate(180deg);
    transform: translate(460px, -100px) rotate(180deg);
    -webkit-transition: all 0.2s 0.4s ease-in-out;
    transition: all 0.2s 0.4s ease-in-out;
}

.hovereffect img {
    width: 400px;
    height: 400px;
}

.hovereffect h2 {
    text-transform: uppercase;
    color: #fff;
    text-align: center;
    position: relative;
    font-size: 17px;
    padding: 10px;
    background: rgba(0, 0, 0, 0.6);
}

.hovereffect a.info {
    display: inline-block;
    text-decoration: none;
    padding: 7px 14px;
    text-transform: uppercase;
    color: #fff;
    border: 1px solid #fff;
    margin: 50px 0 0 0;
    background-color: transparent;
    -webkit-transform: translateY(-200px);
    -ms-transform: translateY(-200px);
    transform: translateY(-200px);
    -webkit-transition: all 0.2s ease-in-out;
    transition: all 0.2s ease-in-out;
}

.hovereffect a.info:hover {
    box-shadow: 0 0 5px #fff;
}

.hovereffect:hover .overlay {
    opacity: 1;
    filter: alpha(opacity=100);
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
    -webkit-transform: translate(0px, 0px);
    -ms-transform: translate(0px, 0px);
    transform: translate(0px, 0px);
}

.hovereffect:hover h2 {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.5s;
    transition-delay: 0.5s;
}

.hovereffect:hover a.info {
    -webkit-transform: translateY(0px);
    -ms-transform: translateY(0px);
    transform: translateY(0px);
    -webkit-transition-delay: 0.3s;
    transition-delay: 0.3s;
}

* {
    box-sizing: border-box;
}

.zoom {
    transition: transform .2s;
    width: 400px;
    height: 400px;
    margin: 0 auto;
}

.zoom:hover {
    -ms-transform: scale(1.5);
    /* IE 9 */
    -webkit-transform: scale(1.5);
    /* Safari 3-8 */
    transform: scale(1.5);
}

.input {
    width: 20px;
}

    </style>
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <!-- Control the column width, and how they should appear on different devices -->
            <div class="row">
                <div class="col-sm-6">
                    <div class="d-flex p-3 text-white">
                        <div class="hovereffect">
                            <div class="zoom">
                                <img class="img-responsive" src="{{asset('Image/Product/'.$product->image)}}"/>
                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h1>{!! $product->name !!}</h1>
                    <h5>Price: {!! $product->unit_price!!}</h5>
                    <label><h5>Number of days hired</h5> </label>
                    <select>
                    <option>2 days</option>
                    <option>4 day</option>
                    <option>6 days</option>
                  </select>
                    <h5>
                        Description:
                    </h5>
                    <p>
                    {!! $product->description !!} 
                    </p>
                    <div class="number-input md-number-input">
                        <button><i class="fa fa-minus"></i></button>
                        <input class="quantity" min="0" name="quantity" value="1" type="number">
                        <button><i class="fa fa-plus"></i></button>
                        <a class="info" href="{{route('addCart',$product->id)}}"><button><i class="fa fa-shopping-cart"></i>Add to cart</button></a>
                    </div>
                </div>
            </div>
        </div>

        </br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12" style="background-color:pink;">
                    <h1>Sản Phẩm Có Liên Quan</h1>
                </div>
            </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                    @for($i = 0; $i<3;$i++)
                                    <div class="col-sm-4">
                                        <div class="hovereffect">
                                            <img src="{{asset('Image/Product/'.$allPros[$i]->image)}}" class="d-block w-100" alt="...">
                                            <div class="overlay">
                                                <h2>{!!$allPros[$i]->name!!}</h2>
                                                <a class="info" href="#">Chi tiết</a>
                                                @if(Session::has('login')&&Session::get('login')!=false)
                                                <a class="info" href="{{route('addCart',$allPros[$i]->id)}}">Add Cart ok</a>
                                                @else
                                                <a class="info" onclick="haveNotLogin()">Add Cart</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                     @endfor
                                     <?php
                                      $run1 = $i;
                                     ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @while ($run1<=count($allPros)-3) 
                <?php
                $run2 = $run1 + 3;
                ?> 
                <div class="carousel-item">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm">
                                <div class="row">
                                    @for($i = $run1; $i<$run2; $i++) 
                                    <div class="col-sm-4">
                                        <div class="hovereffect">
                                            <img src="{{asset('Image/Product/'.$allPros[$i]->image)}}" class="d-block w-100" alt="...">
                                            <div class="overlay">
                                                <h2>{{$allPros[$i]->name}}</h2>
                                                <a class="info" href="#">Chi tiết</a>
                                                @if(Session::has('login')&&Session::get('login')!=false)
                                                <a class="info" href="{{route('addCart',$allPros[$i]->id)}}">Add Cart ok</>
                                                @else
                                                <a class="info" onclick="haveNotLogin()">Add Cart</a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endwhile
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
</div>     
</div>
</body>
</html>
