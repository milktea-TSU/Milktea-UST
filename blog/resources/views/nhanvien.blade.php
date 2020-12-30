<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý bán hàng</title>
  <link rel="stylesheet" href="css/all.css">
</head>

<body>
  <div class="sidebar-container">
    <div class="sidebar-logo">
      <a href="index.html">MILKTEA TSU</a>
    </div>
    <ul class="sidebar-navigation">
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

    <div class="container-fluid">
      <div class="jumbotron">
        <h1 style="text-align: center">DANH SÁCH NHÂN VIÊN CỦA MILKTEA UST</h1>
        <form action="">
            <input type="text" placeholder="Search..">
            <input type="button" value="Search">
        </form>
        <input type="button" value="ADD" style="margin-left: 91%; width: 60px;margin-top: 20px;">
        <table border="1px" style="width: 90%;margin-top: 20px;" align="center">
          <tr>
            <th style="text-align: center;">STT</th>
            <th style="text-align: center;">Tên Nhân Viên</th>
            <th style="text-align: center;">Địa chỉ</th>
            <th style="text-align: center;">Điện Thoại</th>
            <th style="text-align: center;">Username</th>
            <th style="text-align: center;">Password</th>
            <th style="text-align: center;">Full Time</th>
            <th style="text-align: center;">Part Time</th>
            <th>Sửa</th>
            <th>Xóa</th>
          </tr>
          <tr>
            <td style="text-align: center;">1</td>
            <td style="text-align: center;">Nguyễn Minh Sơn</td>
            <td style="text-align: center;">Nha Trang, Khánh Hòa</td>
            <td style="text-align: center;">0123456789</td>
            <td style="text-align: center;">admin</td>
            <td style="text-align: center;">0123456789</td>
            <td style="text-align: center;"><input type="checkbox" name="" id=""></td>
            <td style="text-align: center;"><input type="checkbox" name="" id=""></td>
            <td><input type="button" value="Sửa" style="width:100%"></td>
            <td><input type="button" value="Xóa" style="width:100%"></td>
          </tr>
        </table>
      </div>

    </div>
  </div>
</body>

</html>