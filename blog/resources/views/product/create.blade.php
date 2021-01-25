@extends("master")
@section('css')
<link href="{{asset('css/themsanpham.css')}}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-overview">
        <div class="overviewcard">
            <div class="overviewcard__icon"><a href="hoadon.php"><img src="{{asset('img/logo-hoadon.png')}}" alt=""><b>TẠO HÓA ĐƠN</b></a></div>
        </div>
    </div>

    <div class="main-cards">
        <div class="card">
            <div class="container">
                <h1 style="text-align: center;font-family: 'Times New Roman', Times, serif;">THÊM SẢN PHẨM</h1>
                <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <h5 style="margin-top: 50px;">Hình ảnh :</h5>
                        <input  name="filename" type="file" id="filename" />
                    </div>
                    <div class="form-group">
                        <h5 style="margin-top: 50px;">Tên sản phẩm : </h5>
                        <input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm ...." id="usr">
                    </div>
                    <div class="form-group">
                        <h5 style="margin-top: 50px;">Giá sản phẩm :</h5>
                        <input type="text" class="form-control" name="price" placeholder="Nhập giá của sản phẩm" id="pwd">
                    </div>
                    <input type="Submit" style="margin-top: 50px;" value="Sửa sản phẩm">
                    {{csrf_field()}}
                </form>
            </div>
        </div>
    </div>
</main>

@endsection