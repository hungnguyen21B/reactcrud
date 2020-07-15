{{-- @extends('master')
@section('content')
<div class="welcome">
<marquee><img src="public/Image/welcome.gif" alt="" height="60"></marquee>
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
  @endsection --}}

  <!DOCTYPE html>
  <html lang="en">

  <head>
      <title>Wedding Dress Shop</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src='Chart.min.js'></script>
      <style>
          /* Remove the navbar's default margin-bottom and rounded borders */

          .navbar {
              margin-bottom: 0;
              border-radius: 0;
          }
          /* Set height of the grid so .sidenav can be 100% (adjust as needed) */

          .row.content {
              height: 450px
          }
          /* Set gray background color and 100% height */

          .sidenav {
              padding-top: 20px;
              background-color: #f1f1f1;
              height: 100%;
          }
          /* Set black background color, white text and some padding */

          footer {
              background-color: #555;
              color: white;
              padding: 15px;
          }
          /* On small screens, set height to 'auto' for sidenav and grid */

          @media screen and (max-width: 767px) {
              .sidenav {
                  height: auto;
                  padding: 15px;
              }
              .row.content {
                  height: auto;
              }
          }

          .tablinks {
              border: none;
              text-align: left;
          }
          /* =========== */

          * {
              box-sizing: border-box
          }

          body {
              font-family: "Lato", sans-serif;
          }
          /* Style the tab */

          .tab {
              float: left;
              background-color: #555;
              width: 100%;
              height: auto;
          }
          /* Style the buttons inside the tab */

          .tab button {
              display: block;
              background-color: inherit;
              color: white;
              padding: 22px 16px;
              width: 100%;
              border: none;
              outline: none;
              text-align: left;
              cursor: pointer;
              transition: 0.3s;
              font-size: 17px;
          }
          /* Change background color of buttons on hover */

          .tab button:hover {
              background-color: grey;
          }
          /* Create an active/current "tab button" class */

          .tab button.active {
              background-color: dimgrey;
          }
          /* Style the tab content */

          .tabcontent {
              float: left;
              padding: 0px 12px;
              border: 1px solid #ccc;
              width: 99%;
              border-left: none;
              height: auto;
          }

          .col-sm-2 {
              background-color: #555;
              color: #ccc;
              height:100%;
          }

          .input-group>input {
              background-color: #555;
              color: #ccc;
          }

          .input-group>button {
              background-color: #555;
              color: #ccc;
          }
          .tabcontent>table{
            border-color: darkred;
            text-align: center;

        }
        .tabcontent>h1{
            position: relative;
            margin: auto;
            text-align: center;
            color:darkred;
            font-family: cursive;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .tabcontent>table>thead{
            background-color:#555;
            color:whitesmoke;
            position: relative;
            margin: auto;
            text-align: center;
        }
      </style>
  </head>

  <body>

      <nav class="navbar navbar-inverse">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
                  <a class="navbar-brand" href="#">HUNG HOA MAI</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Admin</a></li>
                      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                  </ul>
              </div>
          </div>
      </nav>

      <div class="container-fluid text-center">
          <div class="row content">
              <div class="col-sm-2 sidenav">
                  <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                          <i class="glyphicon glyphicon-search"></i>
                        </button>
                      </div>
                  </div>
                  <div class="tab">
                      <button class="tablinks" onclick="openCity(event, 'Product')" id="defaultOpen">Product</button>
                      <button class="tablinks" onclick="openCity(event, 'Order')">Order</button>
                      <button class="tablinks" onclick="openCity(event, 'hahah')">Hahahah</button>
                  </div>

              </div>
              <div class="col-sm-10 text-left">
                <div id="Product" class="tabcontent" >
                    <h1>Product Management</h1>
                    <table class="table table-bordered table table-hover">
                      <thead>
                        <tr>
                          <th>Tên sản phẩm</th>
                          <th>Hình ảnh</th>
                          <th>Mô tả</th>
                          <th>Giá</th>
                          <th>Màu sắc</th>
                          <th>Kiểu dáng</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($product as $product)
                        <tr>
                          <td>{!! $product["name"] !!}</td>
                          <td>{!! $product["image"] !!}</td>
                          <td>{!! $product["description"] !!}</td>
                          <td>{!! $product["unit_price"] !!}</td>
                          <td>{!! $product["id_color"] !!}</td>
                          <td>{!! $product["id_type"] !!}</td>
                          <td><a href="{!! url('edit',$product["id"]) !!}"><i class='fas'>&#xf044;</i></a></td>
                          <td><a href="{!! url('delete',$product["id"]) !!}"><i style='color:red' class='fas'>&#xf2ed;</i></a></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <button type="button" class="btn btn-success"><a href="{!! url('insert') !!}"><i class='fas'>&#xf15c;</i> Add product</a></button>
                </div>

                  <div id="Order" class="tabcontent">
                    <h1>Customer Management</h1>
                    <table class="table table-bordered table table-hover">
                      <thead>
                        <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>John</td>
                          <td>Doe</td>
                          <td>john@example.com</td>
                        </tr>
                        <tr>
                          <td>Mary</td>
                          <td>Moe</td>
                          <td>mary@example.com</td>
                        </tr>
                        <tr>
                          <td>July</td>
                          <td>Dooley</td>
                          <td>july@example.com</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>

                  <div id="hahah" class="tabcontent">
                        <canvas id="myChart"></canvas>
                  </div>
              </div>

          </div>
      </div>
      <script>
        let myChart = document.getElementById('myChart').getContext('2d');
        // Global Options
        Chart.defaults.global.defaultFontFamily = 'Lato';
        Chart.defaults.global.defaultFontSize = 18;
        Chart.defaults.global.defaultFontColor = '#777';
    
        let massPopChart = new Chart(myChart, {
          type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
          data:{
            labels:['Boston', 'Worcester', 'Springfield', 'Lowell', 'Cambridge', 'New Bedford'],
            datasets:[{
              label:'Population',
              data:[
                617594,
                181045,
                153060,
                106519,
                105162,
                95072
              ],
              //backgroundColor:'green',
              backgroundColor:[
                'rgba(255, 99, 132, 0.6)',
                'rgba(54, 162, 235, 0.6)',
                'rgba(255, 206, 86, 0.6)',
                'rgba(75, 192, 192, 0.6)',
                'rgba(153, 102, 255, 0.6)',
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)'
              ],
              borderWidth:1,
              borderColor:'#777',
              hoverBorderWidth:3,
              hoverBorderColor:'#000'
            }]
          },
          options:{
            title:{
              display:true,
              text:'Largest Cities In Massachusetts',
              fontSize:25
            },
            legend:{
              display:true,
              position:'right',
              labels:{
                fontColor:'#000'
              }
            },
            layout:{
              padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
              }
            },
            tooltips:{
              enabled:true
            }
          }
        });
      </script>
      <script>
          function openCity(evt, cityName) {
              var i, tabcontent, tablinks;
              tabcontent = document.getElementsByClassName("tabcontent");
              for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
              }
              tablinks = document.getElementsByClassName("tablinks");
              for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
              }
              document.getElementById(cityName).style.display = "block";
              evt.currentTarget.className += " active";
          }

          // Get the element with id="defaultOpen" and click on it
          document.getElementById("defaultOpen").click();
      </script>
      <footer class="container-fluid text-center">
          <marquee>
              <p>Wedding Dress Shop</p>
          </marquee>
      </footer>

  </body>

  </html>
