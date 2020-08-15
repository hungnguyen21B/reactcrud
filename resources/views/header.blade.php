<header>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <img src="Image/logo1.png" alt="" style="height: 80px;" />
            </div>
            <ul class="nav navbar-nav">
                <li><a href="{{ route('trangchu') }}">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Váy cưới đẹp</a></li>
                <li><a href="#">BST Váy cưới</a></li>
                <li><a href="#">Tin tức</a></li>
                <li><a href="#">Liên hệ</a></li>
            </ul>
            <form class="navbar-form navbar-left" action="{{route ('search') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-default">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                @if(!Session::has('login')||!Session::get('login'))
                <li><span class="glyphicon glyphicon-user"></span><a href="{{route('signup')}}"><button style="border: none; font-size: 16px;">Đăng kí</button></a>
                </li>
                <li><span class="glyphicon glyphicon-log-in"></span><a href="{{route('signin')}}"> <button style="border: none; font-size: 16px;">Đăng nhập</button></a>
                </li>
                @else
                <li> 
                <i class="fa fa-shopping-cart" aria-hidden="true"></i></span><a href="{{route('getCart')}}"><button style="border: none; font-size: 16px;">Cart</button></a>
                </li>
                <li><span class="glyphicon glyphicon-log-in"></span><a href="{{route('logout')}}"> <button style="border: none; font-size: 16px;">Logout</button></a>
                </li>
                @endif
            </ul>
        </div>
    </nav>
</header>