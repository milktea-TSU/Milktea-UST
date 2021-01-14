<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý bán hàng</title>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
  <div class="sidebar-container">
    <div class="sidebar-logo">
      <a href="index.html" style="text-decoration: none;color:white;">MILKTEA TSU</a>
    </div>
   
      <ul class="sidebar-navigation">
        @if($user->role_id == 1)
          <li class="header">QUẢN LÝ</li>
          <li>
            <a href="sanpham.html">
              <i class="fa fa-home" aria-hidden="true"></i>SẢN PHẨM
            </a>
          </li>
          <li>
            <a href="nhanvien.html">
              <i class="fa fa-tachometer" aria-hidden="true"></i>NHÂN VIÊN
            </a>
          </li>
        @endif
      <li class="header">HỆ THỐNG</li>
      <li>
        <a href="lichsuhoado.html">
          <i class="fa fa-users" aria-hidden="true"></i>HÓA ĐƠN
        </a>
      </li>
      <li>
        <a href="doanhthu.html">
          <i class="fa fa-cog" aria-hidden="true"></i>DOANH THU
        </a>
      </li>
    </ul>
  </div>

  <div class="content-container">
    <div class="container-fluid"></div>
        <div class="row" style="margin:100px 100px;color:black">
          <div class="col-sm-4" style="border: 1px solid black;margin-right: 100px;text-align: center; padding: 20px;">
            <div class="card">
              <img class="card-img-top" src="img/user-img.png" style="width:50px;height:50px;" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">NHÂN VIÊN</h4>
                <p class="card-text">Danh sách nhân viên</p>
                <a href="{{route('nhanvien')}}" class="btn btn-primary">XEM</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4" style="border: 1px solid black;margin-right: 100px;text-align: center; padding: 20px;">
            <div class="card">
              <img class="card-img-top" src="img/product-img.png" style="width:50px;height:50px;" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">SẢN PHẨM</h4>
                <p class="card-text">Danh sách sản phẩm</p>
                <a href="{{route('sanpham')}}" class="btn btn-primary">XEM</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="text-align: center;margin:100px 100px 100px 100px; color: black;">
          <div class="col-sm-4" style="border: 1px solid black;margin-right: 100px;text-align: center;padding: 20px;">
            <div class="card">
              <img class="card-img-top" src="img/history-img.png" style="width:50px;height:50px;" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">LỊCH SỬ GIAO DỊCH</h4>
                <p class="card-text">Hóa đơn giao dịch</p>
                <a href="{{route('hoadon')}}" class="btn btn-primary">XEM</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4" style="border: 1px solid black;margin-right: 100px;text-align: center;padding: 20px;">
            <div class="card">
              <img class="card-img-top" src="img/doanhthu-img.png" style="width:50px;height:50px;" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">DOANH THU</h4>
                <p class="card-text">Doanh thu bán ra</p>
                <a href="{{route('lichsu')}}" class="btn btn-primary">XEM</a>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</body>

</html>