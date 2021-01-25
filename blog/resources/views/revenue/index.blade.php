@extends("master")
@section('css')
<link href="{{ asset('css/style.css') }}" rel="stylesheet">
@endsection
@section('content')
<main class="main">
    <div class="main-header">
        <div class="main-header__heading">
            <marquee class="welcome-text-heading"> <b>CHÀO MỪNG QUÝ KHÁCH ĐẾN VỚI UST MILKTEA</b> </marquee>
            <marquee class="welcome-text-comment"> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mọi chi tiết xin liên hệ hotline: 0987654321 - 0975312468</b> </marquee>
        </div>
    </div>

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
            <div style="color: blue;"><strong>BIỂU ĐỒ</strong></div>
            <div id="chartContainer" style="height: 300px; width: 100%;">
            </div>
        </div>
        <div class="card">
            <div class="grid-item item1">
                <div class="card-trangthai">
                    <div><img src="./img/doanhthu-icons.png" alt="" style="height: 40px;width: 40px;"></div>
                    <div style="margin-left: 20px;">
                        <div style="color:blue;">doanh thu {{$sum}}vnd</div>
                        <div style="color:silver;">tháng này</div>
                    </div>
                </div>
            </div>
            <div class="grid-item item3">
                <div class="card-trangthai">
                    <div><img src="./img/dangxuly-icons.png" alt="" style="height: 40px;width: 40px;"></div>
                    <div style="margin-left: 20px;">
                        <div style="color:blue;">10 sản phẩm</div>
                        <div style="color:silver;">đang chờ xử lý</div>
                    </div>
                </div>
            </div>
            <div class="grid-item item4">
                <div class="card-trangthai">
                    <div><img src="./img/dangtamngung-icons.png" alt="" style="height: 40px;width: 40px;"></div>
                    <div style="margin-left: 20px;">
                        <div style="color:blue;">10 sản phẩm</div>
                        <div style="color:silver;">đang tạm ngưng</div>
                    </div>
                </div>
            </div>
            <div class="grid-item item3">
                <div class="card-trangthai">
                    <div><img src="./img/saphethang-icons.png" alt="" style="height: 40px;width: 40px;"></div>
                    <div style="margin-left: 20px;">
                        <div style="color:blue;">10 sản phẩm</div>
                        <div style="color:silver;">sắp hết hàng</div>
                    </div>
                </div>
            </div>
            <div class="grid-item item4">
                <div class="card-trangthai">
                    <div><img src="./img/hethang-icons.png" alt="" style="height: 40px;width: 40px;"></div>
                    <div style="margin-left: 20px;">
                        <div style="color:blue;">10 sản phẩm</div>
                        <div style="color:silver;">hết hàng</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection