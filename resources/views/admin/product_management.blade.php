@extends('master')
@section('content')
<div class="welcome">
    <marquee><img src="public/Image/welcome.gif" alt="" height="60"></marquee>
</div>
<div class="container">
    <div class="row">
            <a class="button" href="{{ route('trangchuAdmin') }}"><<--Back</a>
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
          <th></th>
          <th></th>
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
          <td><button type="button" class="btn btn-warning"><a href="{!! url('edit',$product["id"]) !!}">Edit</a></button></td>
          <td><button type="button" class="btn btn-danger"><a href="{!! url('delete',$product["id"]) !!}">Delete</a></button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <button type="button" class="btn btn-success"><a href="{!! url('insert') !!}">Add product</a></button>
</div>
<!--===================================================FORM ADD PRODUCT================================================-->

{{-- <div class="modal fade" id="modalAddProductForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{!! url('insert') !!}" method="post">
            @csrf
            <div>
                @include('error')
            </div>
        <div class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">THÊM SẢN PHẨM</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
            </div>
            <div class="modal-body mx-3">

                <div class="form-group row">
                    <label for="inputName" class="col-sm-3 col-form-label">Tên sản phẩm</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="tensanpham" id="inputName" placeholder="Tên sản phẩm">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputDescription" class="col-sm-3 col-form-label">Mô tả</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="mota" id="inputDescription" placeholder="Mô tả">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrice" class="col-sm-3 col-form-label">Giá</label>
                    <div class="col-sm-9">
                      <input type="number" class="form-control" name="gia" id="inputPrice" placeholder="Giá">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputColor" class="col-sm-3 col-form-label">Màu sắc</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="mausac" id="colors">
                            <option value="1">Be Nhạt</option>
                            <option value="2">Đỏ</option>
                            <option value="3">Hồng Pastel</option>
                            <option value="4">Trắng</option>
                            <option value="5">Xám</option>
                            <option value="6">Xanh</option>
                          </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputType" class="col-sm-3 col-form-label">Kiểu dáng</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="loai" id="types">
                            <option value="1">Chữ A (A-Line)</option>
                            <option value="2">Dáng Phồng (Ball Grown)</option>
                            <option value="3">Đuôi Cá (Mermaid)</option>
                            <option value="4">Hạ Eo (Drop Waist)</option>
                            <option value="5">Ôm Suôn (Column)</option>
                          </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputImage" class="col-sm-3 col-form-label">Hình ảnh</label>
                    <div class="col-sm-9">
                        <input type="file" class="form-control-file" name="hinhanh" id="exampleFormControlFile1">
                    </div>
                  </div>
            </div>


            <div class="modal-footer d-flex justify-content-center">
                <button>OK</button>
            </div>
        </div>
        </form>

    </div>
</div> --}}

@endsection
