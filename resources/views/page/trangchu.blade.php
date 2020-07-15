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
            <img src="Image/{{$slide[0]->image}}" alt="" >
        </div>
        @for($i = 1; $i<count($slide); $i++)
        <div class="item">
            <img src="Image/{{$slide[$i]->image}}" alt="" >
        </div>
        @endfor
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
    <!-- left -->
    <div class="row">
        <form action="{{route ('search') }}"class="col-sm-4" method="post">
            @csrf
            <h1>Bá»˜ Lá»ŒC</h1>
            <br>
            <ul class="list-group">
                <li class="list-group-item">KIá»‚U DÃNG
                    <hr />
                    @foreach($product_types as $item)
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="type" value="{{$item->id}}" > {{$item->name}}
                          </label>
                    </div>
                    @endforeach
                </li>
                <li class="list-group-item">MÃ€U Sáº®C
                    <hr />
                    @foreach($colors as $item)
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="color" value="{{$item->name}}" >{{ $item->name}}
                      </label>
                    </div>
                    @endforeach
                   
                </li>
                <li class="list-group-item">GIÃ
                    <hr />
                    <div class="form-check">
                        <label class="form-check-label" for="radio1">
                        <input type="radio" class="form-check-input" id="radio1" name="price" value="500" > DÆ°á»›i 500.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio2" name="price" value="1000"> Tá»« 500.000 Ä‘áº¿n 1.000.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio3" name="price" value="2000"> Tá»« 1.000.000 Ä‘áº¿n 2.000.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio4" name="price" value="5000"> Tá»« 2.000.000 Ä‘áº¿n 5.000.000 VND
                      </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="radio2">
                        <input type="radio" class="form-check-input" id="radio5" name="price" value="6000"> TrÃªn 5.000.000 VND
                      </label>
                    </div>
                </li>
                <li class="list-group-item"><button class="btn btn-primary">Lá»c</button></li>
            </ul>
        
</form>
<!-- right -->
        <div class="col-sm-8">
            <h1>
                Sáº¢N PHáº¨M Má»šI
                <hr/>
            </h1>
            <div class="row">
            @foreach ($new_products as $item)
                <div class="col-sm-4">
                    <div class="hovereffect">
                        <img class="img-responsive" src="Image/Product/{{$item->image}}" alt="">
                        <div class="overlay">
                            <h2>{{$item->name}}</h2>
                            <a class="info" href="#">Chi tiáº¿t</a>
                            <a class="info" href="#">Äáº·t thuÃª</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
            </div>
            <h1>
                Sáº¢N PHáº¨M Ná»”I Báº¬T
                <hr/>
            </h1>
            <div class="row">

                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="row">
                            @for($i = 0; $i<3; $i++)
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="Image/Product/{{$products[$i]->image}}" alt="">
                                        <div class="overlay">
                                            <h2>{{$products[$i]->name}}{{$products[$i]->id}}</h2>
                                            <a class="info" href="#">Chi tiáº¿t</a>
                                            <a class="info" href="#">Äáº·t thuÃª</a>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                            <?php 
                            $run1=$i;
                            ?>
                            </div>
                        </div>
                        
                        @while ($run1<=count($products)-3)
                        <?php 
                        $run2=$run1+3;
                        ?>
                        <div class="item">
                            <div class="row">
                            @for($i = $run1; $i<$run2; $i++)
                                <div class="col-sm-4">
                                    <div class="hovereffect">
                                        <img class="img-responsive" src="Image/Product/{{$products[$i]->image}}" alt="">
                                        <div class="overlay">
                                            <h2>{{$products[$i]->name}}{{$products[$i]->id}}</h2>
                                            <a class="info" href="#">Chi tiáº¿t</a>
                                            <a class="info" href="#">Äáº·t thuÃª</a>
                                        </div>
                                    </div>
                                </div>
                                
                            @endfor
                            <?php 
                            $run1=$i;
                            ?>
                            </div>
                        </div>
                        @endwhile
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
