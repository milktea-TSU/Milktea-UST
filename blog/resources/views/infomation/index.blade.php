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
                <h1>Tên đề tài : Xây dựng website quản lí bán trà sữa</h1>
                <h2>Mô tả bài toán:</h2>
                Các chức năng đã được xây dựng: quản lý sản phẩm, đơn hàng, nhập hàng, báo cáo doanh thu – lợi nhuận, báo cáo hàng tồn kho, quản lý – phân quyền thành viên
                Thành phần bao gồm font-end sử dụng html/css, back-end sử dụng php và database sử dụng mysql
                Phần mềm sử dụng : Xampp và Visual studio code.
                <h2>Mô tả chi tiết bài toán:</h2>
                Font end gồm các thành phần: Menu ( gồm : Tổng quan, đơn hàng, sản phẩm, khách hàng, nhập kho, tồn kho, doanh số và lợi nhuận), Trang chủ gồm hoạt động bán trong ngày trong tuần và trong tháng.
                Back-end gồm thêm xóa sửa sản phẩm, đơn hàng, khách hàng, ..
                Database gồm dữ liệu của đơn hàng, sản phẩm, khách hàng, doanh thu, tồn kho, ...
                <h2>Thành viên trong nhóm và công việc của từng thành viên trong nhóm:</h2>
                Trần Ngọc Úy (NT) công việc làm Back-end <br>
                Nguyễn Minh Sơn công việc làm database <br>
                Vũ Ngọc Thạch công việc làm Font-end <br>
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