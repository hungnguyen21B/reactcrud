@extends('master')
@section('content')
<script src="https://use.fontawesome.com/c560c025cf.js"></script>
<br>
<br>
<div class="container">
    <div class="card shopping-cart">
        <div class="card-header bg-dark text-light">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            Shipping cart
            <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
            <div class="clearfix"></div>
        </div>
        <div class="card-body">
            <!-- PRODUCT -->
        
            @foreach($products as $product)
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2 text-center">
                    <img class="img-responsive" src='{{asset("Image/Product/".$product->image)}}' alt="prewiew" style='width:120px; height:80px' width="120" height="80">
                </div>
                <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                    <h4 class="product-name"><strong>{{$product->name}}</strong></h4>
                    <h4>
                        <small>{{$product->description}}</small>
                    </h4>
                </div>
                <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                    <div>
                        <select name="cars" id="cars" class="btn btn-mini">
                        @foreach($sizes as $sizess)
                            @if( $sizess[0]->id_pro==$product->id)
                                @foreach($sizess as $size)
                                <option value="{{$size->id_size}}">{{$size->name}}</option>
                                @endforeach
                            @endif
                        @endforeach                    
                        </select>
                    </div>
                    <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                        <h6><strong>{{$product->promotion_price==0?number_format($product->unit_price):number_format($product->promotion_price)}}(vnd) <span class="text-muted">x</span></strong></h6>
                    </div>
                    <div class="col-4 col-sm-4 col-md-4">
                        <div class="quantity">
                            <!-- <input type="text" id="price{{$product->id}}" value="{{$product->promotion_price==0?($product->unit_price):($product->promotion_price)}}" hidden>
                            <input type="button" value="+" class="plus" id="plus" onclick="addQty({{$product->id}})">
                            <input type="number" style="-webkit-appearance: none;
                                                        " step="1" max="99" min="1" 
                                                        value="{{$product->quantity}}" title="Qty" id="{{$product->id}}" class="qty" size="4">
                            <input type="button" value="-" class="minus" id="minuss" onclick="minusQty({{$product->id}})"> -->
                        
                            <a href="{{route('addQuantity',$product->id)}}"><input type="button" value="+" class="plus" id="plus"></a>
                            <input type="number" style="-webkit-appearance: none;
                                                        " step="1" max="99" min="1" 
                                                        value="{{$product->quantity}}" title="Qty" id="{{$product->id}}" class="qty" size="4">
                           <a href="{{route('minusQuantity',$product->id)}}"><input type="button" value="-" class="minus" id="minuss" ></a>
                        </div>
                    </div>
                    <div class="col-2 col-sm-2 col-md-2 text-right">
                        <button type="button" class="btn btn-outline-danger btn-xs">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
            <hr>
            @endforeach
            <!-- END PRODUCT -->
            <!-- PRODUCT -->
            <!-- checkout -->
            <div class="row">
            <form action="{{route('checkout')}}" method="post" id="checkout-form" style="display:none">
            @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" placeholder="Name...">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" class="form-control" id="exampleInputPassword1"name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="add">Address</label>
                    <input type="text" class="form-control" id="add" name="address" placeholder="Address...">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="male" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Male
                    </label>
                    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="female">
                    <label class="form-check-label" for="exampleRadios2">
                        Female
                    </label>
                </div>
                
                <div class="form-group">
                    <label for="note">Notes</label>
                    <textarea name="note" id="note" cols="120" rows="10"></textarea>
                </div>
                <div class="form-check">
                <input class="form-check-input" type="radio" name="payment" id="exampleRadios1" value="ADD" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        After recived products
                    </label>
                    <input class="form-check-input" type="radio" name="payment" id="exampleRadios2" value="COD">
                    <label class="form-check-label" for="exampleRadios2">
                        Credit Card
                    </label>
                </div>
                <input type="text" value="{{ number_format($totalPrice)}}" hidden name="totalPrice"> 
                <button type="submit" class="btn btn-primary">Checkout</button>
                </form>
            </div>
            <div class="pull-right">
                <a href="{{route('trangchu')}}" class="btn btn-outline-secondary pull-right">
                    Update shopping cart
                </a>
            </div>
        </div>
        <div class="card-footer">
            <div id="demo" class="collapse">
                   
            </div>
            <div class="pull-right" style="margin: 10px">
                <button type="button" class="btn btn-success pull-right" id="checkout-btn" onclick="showCheckout()">Checkout</button>
                <div class="pull-right" style="margin: 5px">
                <!-- <input type="text" value="{{$totalPrice}}"id="totalPrice" hidden> -->
                    Total price: <b><span id="displayTotalPrice">{{ number_format($totalPrice)}}</span>(vnd)</b>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<script src="{{asset('/javaScript/cart.js')}}"></script>
@endsection