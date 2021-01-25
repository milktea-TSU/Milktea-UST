@extends("master")
@section('css')
<link href="{{ asset('css/lichsu.css') }}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-header">
        <div class="main-header__heading">
            <marquee class="welcome-text-heading"> <b>CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI UST MILKTEA</b> </marquee>
            <marquee class="welcome-text-comment"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mọi chi tiết xin liên hệ hotline: 0987654321 - 0975312468</b> </marquee>
        </div>
    </div>

    <main class="main">

        <div class="main-overview">
            <div class="overviewcard">
                <div class="overviewcard__icon"><a href="{{route('order.index')}}"><img src="img/logo-hoadon.png" alt=""><b>TẠO HÓA ĐƠN</b></a></div>
            </div>
            <div class="overviewcard">
                <div class="overviewcard__icon"><a href="{{route('product.index')}}"><img src="img/logo-milktea.png" alt=""><b>SẢN PHẨM</b></a></div>
            </div>
            <div class="overviewcard">
                <div class="overviewcard__icon"><a href="{{route('nhaplieu')}}"><img src="img/logo-nhap.png" alt=""><b>NHẬP NGUYÊN LIỆU</b></a></div>
            </div>
            <div class="overviewcard">
                <div class="overviewcard__icon"><a href="{{route('history')}}"><img src="img/logo-doanhthu.png" alt=""><b>LỊCH SỬ GIAO DỊCH</b></a></div>
            </div>
        </div>

        <div class="main-cards">
            <div class="card">
                <div class="search-hoa-don" style="display: flex;">
                    <input type="text" name="" class="form-control" style=" height: 35px;" id="">
                    <button type="submit" class="btn btn-secondary" style=" height: 35px;width:200px;margin-left:20px">Tìm Kiếm</button>
                </div>
                <div class="loc-hoa-don">
                    <select name="" id="" class="form-select border-1 bg-light" style="margin-bottom:10px;margin-top: 10px;" aria-label="Default select example">
                        <option value selected="select">Lọc hóa đơn</option>
                        <option value="">Lọc theo thời gian gần nhất</option>
                        <option value="">Lọc theo giá từ nhỏ đến lớn</option>
                        <option value="">Lọc theo giá từ nhỏ đến lớn</option>
                    </select>
                </div>
                <table class="table table-hoa-don">
                    <thead>
                        <tr>
                            <th scope="col">stt</th>
                            <th scope="col">Thời gian giao dịch</th>
                            <th scope="col">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i = 1;
                        @endphp
                        @foreach($orders as $order)

                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$order['ngayban']}}</td>
                            <td>{{$order['tong']}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        $('.btn-add').click(function() {
            $.ajax({
                url: route('order.getStore'),
                success: function(result) {
                    alert(1);
                }
            });
        })
    </script>
    @endsection