<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quản lý bán hàng</title>
  <link href="{{ asset('css/all.css') }}" rel="stylesheet">

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
        <h1 style="text-align: center">DANH SÁCH SẢN PHẨM CỦA MILKTEA UST</h1>
        <form action="">
          <input type="text" placeholder="Search..">
          <input type="button" value="Search">
        </form>
        <a href="{{route('addproduct')}}">
          <input type="button" value="ADD" style="margin-left: 91%; width: 60px;margin-top: 20px;">
        </a>

        <table border="1px" align="center" style="width:80%;margin-top: 20px;">
          <tr>
            <th style="width: 60px;">STT</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá Bán</th>
            <th style="width: 70px;">Sửa</th>
            <th style="width: 70px;">Xóa</th>
          </tr>
          @foreach($products as $product)
          <tr>
            <td style="width: 60px; text-align: center;">{{$product->id}}</td>
            <td style="text-align: center;">{{$product->name}}</td>
            <td style="text-align: center;">{{$product->gia}}</td>
            <td><a href="{{route('editproduct',$product->id)}}"><input type="button" value="Sửa" style="width:100%"></a></td>
            <td><a href="{{route('postdeleteproduct',$product->id)}}"><input type="button" value="Xóa" style="width:100%"></a></td>
          </tr>
          @endforeach
         
        </table>
      </div>
    </div>
  </div>

</body>

</html>