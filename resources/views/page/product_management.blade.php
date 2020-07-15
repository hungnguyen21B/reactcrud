@extends('master')
@section('content')
<div class="welcome">
    <marquee><img src="public/Image/welcome.gif" alt="" height="60"></marquee>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <a class="button" href="{{ route('trangchuAdmin') }}"><<--Back</a>
            <div class="list-group">
                <a href="#" class="list-group-item">Them san pham</a>
                <a href="#" class="list-group-item">Sua san pham</a>
                <a href="#" class="list-group-item">Xoa san pham</a>
              </div>
        </div>
        <div class="col-sm-8">
    <h1>Product Management</h1>
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
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
          <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
          </tr>
      </tbody>
    </table>
        </div>
</div>
@endsection
