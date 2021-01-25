@extends("master")
@section('css')
<link href="{{ asset('css/sanpham.css') }}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-overview">
        <div class="overviewcard">
            <div class="overviewcard__icon"><a href="{{route('order.index')}}"><img src="img/logo-hoadon.png" alt=""><b>TẠO HÓA ĐƠN</b></a></div>
        </div>
    </div>

    <div class="main-cards">
        <div class="card" style="display: block !important;">
            <div class="san-pham">
                <span style="font-size: 50px; font-family: 'Times New Roman', Times, serif;">Sản phẩm <a style="text-decoration: none;color: white;" href="{{route('product.create')}}"><input name="" id="" class="btn btn-primary" type="button" value="Thêm sản phẩm"></a> </span>
            </div>
            <div class="loc-san-pham">
                <select name="" id="" class="form-select border-1 bg-light" style="margin-bottom:10px;margin-top: 10px;" aria-label="Default select example">
                    <option value selected="select">Lọc sản phẩm</option>
                    <option value="">Lọc theo tên</option>
                    <option value="">Lọc theo giá từ nhỏ đến lớn</option>
                    <option value="">Lọc theo giá từ nhỏ đến lớn</option>
                </select>
            </div>
            <table class="table table-san-pham">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Hình sản phẩm</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá sản phẩm</th>
                        <th scope="col">Sửa thông tin</th>
                        <th scope="col">Xóa sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i = 1;
                    @endphp
                    @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td><img src="{{Storage::url($product->image)}}" style="width: 40px;height: 40px;" alt=""></td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td><a href="{{route('product.edit',$product->id)}}">Thay đổi thông tin</a></td>
                        <td><a href="{{route('product.delete',$product->id)}}">Xóa sản phẩm</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection