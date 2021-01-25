@extends("master")
@section('css')
<link href="{{asset('css/sanpham.css')}}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-overview">
        <div class="overviewcard">
            <div class="overviewcard__icon"><a href="hoadon.php"><img src="img/logo-hoadon.png" alt=""><b>TẠO HÓA ĐƠN</b></a></div>
        </div>
    </div>

    <div class="main-cards">
        <div class="card">
            <div class="container">
                <h1 style="text-align: center;font-family: 'Times New Roman', Times, serif;">SỬA SẢN PHẨM</h1>
                <form action="{{route('product.update',$id)}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <h5 style="margin-top: 50px;">Hình ảnh :</h5>
                        <input class="choose_file" name="filename" type="file" />
                    </div>
                    <div class="form-group">
                        <h5 style="margin-top: 50px;">Tên sản phẩm : </h5>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm ...." id="usr">
                    </div>
                    <div class="form-group">
                        <h5 style="margin-top: 50px;">Giá sản phẩm :</h5>
                        <input type="text" class="form-control" name="price" placeholder="Nhập giá của sản phẩm" id="pwd">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</main>
@endsection